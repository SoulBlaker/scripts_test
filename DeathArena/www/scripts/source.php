<?php
/*====================================================================
 * [Autor]: Romulo de Sousa Mangueira (SoulBlaker)
 * [Versão/Revisão]: 1.0
 *====================================================================
 */ @header('Content-type: text/html; charset=ISO-8859-1', true);
 
class DeathArena {

	// [Configurações]: Configuração do Banco de Dados.
	private $mysqlDB = array( 'base' => 'ragnarok', 'user' => 'ragnarok', 'pass' => 'ragnarok', 'host' => 'localhost', 'ranking' => 'da_ranking', 'guild_db' => 'guild', 'party_db' => 'party', 'char_db' => 'char' );
	
	public $max_row = 10;
	
	public $Ranking = array();
	
	public function __construct()
	{
		if( !($mySQL_link = mysql_connect($this->mysqlDB['host'], $this->mysqlDB['user'], $this->mysqlDB['pass'])) )
			echo "Houve algum erro ao se conectar o banco de dados, reporte aos desenvolvedores do website.";
		else if( !($mySQL_db_select = mysql_select_db($this->mysqlDB['base'], $mySQL_link)) )
			echo "Houve algum erro ao selecionar o banco de dados, reporte aos desenvolvedores do website.";
		else return true;
		
		return false;
	}
	
	public function Consult( $type, $min_limit, $order )
	{
		$consult_db = mysql_query("SELECT `object_id`, `object_name`, `wins`, `loss`, `ration` FROM `" . $this->mysqlDB['ranking'] . "` WHERE `type`='" . $type . "' ORDER BY `" . $order ."` DESC LIMIT " . $min_limit . ", " . $this->max_row . "");
		
		$this->Ranking['total_rows'] = (!@mysql_error()?mysql_num_rows($consult_db):0);
		$this->Ranking['type'] = $type;
		for( $i=0; $this->Ranking && $i < mysql_num_rows($consult_db); $i++ )
		{
			$this->Ranking['object_id'][] = mysql_result($consult_db, $i, 'object_id');
			$this->Ranking['object_name'][] = mysql_result($consult_db, $i, 'object_name');
			$this->Ranking['wins'][] = mysql_result($consult_db, $i, 'wins');
			$this->Ranking['loss'][] = mysql_result($consult_db, $i, 'loss');
			$this->Ranking['ration'][] = mysql_result($consult_db, $i, 'ration');
		}
		return;
	}
	
	public function	CountPage()
	{
		$consult_db = mysql_query("SELECT `auto_id` FROM `" . $this->mysqlDB['ranking'] . "` WHERE `type`='" . $this->Ranking['type'] . "'");
		return (@mysql_error()||!mysql_num_rows($consult_db)?0:ceil(mysql_num_rows($consult_db)/$this->max_row));
	}
	
	public function GetCharInfo( $char_id, $type )
	{
		$consult_db = mysql_query("SELECT `guild_id`, `party_id` FROM `" . $this->mysqlDB['char_db'] . "` WHERE `char_id`='" . $char_id . "'");
		return (@mysql_error()||!mysql_num_rows($consult_db)?"N/a":($type==1?$this->PartyName(mysql_result($consult_db, 0, 'party_id')):$this->GuildName(mysql_result($consult_db, 0, 'guild_id'))));
	}
	
	public function GuildName( $guild_id )
	{
		$consult_db = mysql_query("SELECT `name` FROM `" . $this->mysqlDB['guild_db'] . "` WHERE `guild_id`='" . $guild_id . "'");
		return (@mysql_error()||!mysql_num_rows($consult_db)?"N/a":mysql_result($consult_db, 0, 'name'));
	}
	
	public function PartyName( $party_id)
	{
		$consult_db = mysql_query("SELECT `name` FROM `" . $this->mysqlDB['party_db'] . "` WHERE `party_id`='" . $party_id . "'");
		return (@mysql_error()||!mysql_num_rows($consult_db)?"N/a":mysql_result($consult_db, 0, 'name'));
	}
}
?>