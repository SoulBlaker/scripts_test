<?php
/*====================================================================
 * [Autor]: Romulo de Sousa Mangueira (SoulBlaker)
 * [Versão/Revisão]: 1.0
 *====================================================================
 */ @header('Content-type: text/html; charset=ISO-8859-1', true);
 
class DeathArena {

	// [Configurações]: Configuração do Banco de Dados.
	private $mysqlDB = array( 'base' => 'ragnarok', 'user' => 'ragnarok', 'pass' => 'ragnarok', 'host' => 'localhost', 'ranking' => 'da_ranking' );
	
	public $Config = array('max_row' => '10');
	
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
	
	public function ConsultCompact( $type, $min_limit, $order )
	{
		$consult_db = mysql_query("SELECT `object_name`, `wins`, `loss`, `ration` FROM `" . $this->mysqlDB['ranking'] . "` WHERE `type`='" . $type . "' ORDER BY `" . $order ."` DESC LIMIT " . $min_limit . ", " . $this->Config['max_row'] . "");
		
		$this->Ranking['total_rows'] = (!@mysql_error()?mysql_num_rows($consult_db):0);
		$this->Ranking['type'] = $type;
		
		echo "Teste ".mysql_num_rows($consult_db);
		for( $i=0; $this->Ranking && $i < mysql_num_rows($consult_db); $i++ )
		{
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
		return (@mysql_error()||!mysql_num_rows($consult_db)?0:ceil(mysql_num_rows($consult_db)/$this->Config['max_row']));
	}
}
?>