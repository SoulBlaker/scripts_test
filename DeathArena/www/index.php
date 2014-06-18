<!DOCTYPE html>
<html>
	<head>
		<title>Death Arena 1.0</title>
		<link rel="stylesheet" type="text/css" href="css/da_full.css" />
		<script type="text/javascript" src="scripts/functions.js"></script>
	</head>
	<body>
	<?php
		require('scripts/source.php');
		@$DeathArena = new DeathArena();
	
		$pg = (isset($_GET['page'])?$_GET['page']:0);
		$min_row = $pg*($DeathArena->max_row);
		$type = (isset($_GET['type'])?$_GET['type']:0);
		$filter = (isset($_GET['filter'])?$_GET['filter']:0);
		$DeathArena->Consult($type, $min_row, ($filter==1?'loss':($filter==2?'ration':'wins')));
	?>
		<div id="layout">
			<div id="logo"><img src="images/logo.png"/></div>
			<div id="contents">
				<div id="menu">
					<span><a href="?type=0">Rank de Jogadores</a></span> <span><a href="?type=1">Rank de Clãns</a></span><span><a href="?type=2">Rank de Grupos</a></span>
				</div>
				<?php
					if( $DeathArena->Ranking['total_rows'] ):
				?>
				<div id="filter-bar">
					<input type="hidden" id="page" name="page" value="<?=$pg?>" />
					<input type="hidden" id="filter" name="filter" value="<?=$filter?>" />
					<input type="hidden" id="type" name="type" value="<?=$type?>" />
					
					<select onChange="ChangeFilter(this.value);">
						<option value="0" <?php echo ($filter==0?"selected":""); ?>>Vitórias</option>
						<option value="1" <?php echo ($filter==1?"selected":""); ?>>Derrotas</option>
						<option value="2" <?php echo ($filter==2?"selected":""); ?>>Proporcional</option>
					</select>
				</div>
				<?php		
					endif;
					if( !$DeathArena->Ranking['total_rows'] ):
				?>
					<div id="no-result">Sem Resultados</div>
				<?php
					else:
				?>
		
				<div id="rank">
					<table>
						<tr id="title">
							<td width="8%">&nbsp;</td>
							<td width="30%"><?=($type==1?"Clã":($type==2?"Grupo":"Jogador"))?></td>
							<td width="10%">Vitórias</td>
							<td width="10%">Derrotas</td>
				<?php
					if( $type == 0 ):
				?>
							<td width="20%">Clã</td>
							<td width="20%">Grupo</td>
				<?php
					endif;
				?>
							<td width="10%">Proporcional</td>
						</tr>
						
						<?php
							for( $i=0, $line=0; $i < count($DeathArena->Ranking['object_name']); $i++ )
							{
								$position = ($i+$min_row)+1;
						?>
								<tr id="line-<?=$line?>">
									<td><?=($position<=3?'<img src="images/medal_0' . $position . '.png" />':$position)?></td>
									<td><span title="<?=$DeathArena->Ranking['object_name'][$i]?>"><?=$DeathArena->Ranking['object_name'][$i]?></span></td>
									<td><?=$DeathArena->Ranking['wins'][$i]?></td>
									<td><?=$DeathArena->Ranking['loss'][$i]?></td>
						<?php
							if( $type == 0 ):
						?>
									<td><?=$DeathArena->GetCharInfo($DeathArena->Ranking['object_id'][$i], 0)?></td>
									<td><?=$DeathArena->GetCharInfo($DeathArena->Ranking['object_id'][$i], 1)?></td>
						<?php
							endif;
						?>
									<td><?=$DeathArena->Ranking['ration'][$i]?></td>
								</tr>
					<?php
						$line = ($line?0:1);
							}
					?>
					</table>
				</div>
				<?php endif; ?>
				<div id="page-bar">
				<?php
					$pg2 = ($DeathArena->CountPage()-1);

					if( $pg2 > 0 ):
				?>
				<select onChange="javascript:ChangePage(this.value);">
				<?php
					for( $i=0; $i < ($pg2+1); $i++ )
					{
				?>
						<option value="<?=$i?>" <?=($pg==$i?"selected":"")?>>Página <?=($i+1)?></option>
				<?php
					}
				?>
					</select>
				<?php
					endif;
				?>
				</div>
				
				<div id="footer">Desenvolvido por <a href="http://github.com/SoulBlaker/">SoulBlaker</a><br/>Versão: 1.0</div>
			</div>
		</div>
	</body>
</html>