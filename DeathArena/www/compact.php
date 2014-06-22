<!DOCTYPE html>
<html>
	<head>
		<title>Death Arena 1.0</title>
		<link rel="stylesheet" type="text/css" href="css/da_compact.css" />
		<script src="scripts/jquery.js" type="text/javascript"></script>
		<script src="scripts/easyTooltip.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("a").easyTooltip();
				$("span").easyTooltip();
	    });
		</script>
	</head>
	<body>
	<?php
		require('scripts/source.php');
		@$DeathArena = new DeathArena();
	
		$pg = (isset($_GET['page'])?$_GET['page']:0);
		$min_row = $pg*($DeathArena->max_row);
		$type = (isset($_GET['type'])?$_GET['type']:0);
		$DeathArena->Consult($type, $min_row, 'wins');
	?>
		<div id="layout">
			<div id="logo">
				<div id="filter-bar"><a href="?type=0" title="Rank de Jogadors">Jogadores</a>&nbsp;&nbsp;&nbsp;<a href="?type=1" title="Rank de Clãns">Clãns</a>&nbsp;&nbsp;&nbsp;<a href="?type=2" title="Rank de Grupos">Grupos</a></div>
			</div>
			<div id="content">
		<?php		
			if( !$DeathArena->Ranking['total_rows'] ):
		?>
				<div id="no-result">Sem Resultados</div>
		<?php
			else:
		?>
				<table>
					<tr id="title">
						<td></td>
						<td><?=($type==1?"Clã":($type==2?"Grupo":"Jogador"))?></td>
						<td><span title="Vitórias">V</span></td>
						<td><span title="Derrotas">D</span></td>
						<td><span title="Proporcional">P</span></td>
					</tr>
		<?php
			for( $i=0, $line=0; $i < count($DeathArena->Ranking['object_name']); $i++ )
			{
				$position = ($i+$min_row)+1;
		?>
				<tr id="line-<?=$line?>">
					<td width="13%"><?=($position<=3?'<img src="images/medal_0' . $position . '.png" width="16" />':$position)?></td>
					<td><span title="<?=$DeathArena->Ranking['object_name'][$i]?>"><?=substr($DeathArena->Ranking['object_name'][$i], 0, 10)?></span></td>
					<td><?=$DeathArena->Ranking['wins'][$i]?></td>
					<td><?=$DeathArena->Ranking['loss'][$i]?></td>
					<td><?=$DeathArena->Ranking['ration'][$i]?></td>
				</tr>
		<?php
				$line = ($line?0:1);
			}
		?>
				</table>
				<div id="row">
					<?php
						$pg2 = ($pg!=($DeathArena->CountPage()-1)?1:0);
						
						if( $pg ):
					?>
						<span id="row-bar-left"><a href="?page=<?=($pg-1)?>">Anterior</a></span>
					<?php
						else:
					?>
						<span id="row-bar-left">&nbsp;</span>
					<?php
						endif;
						if( $pg2 ):
					?>
						<span id="row-bar-right"><a href="?page=<?=($pg+1)?>">Próximo</a></span>
					<?php
						else:
					?>
						<span id="row-bar-right">&nbsp;</span>
					<?php
						endif;
					?>
				</div>
		<?php endif; ?>
			</div>
		</div>
	</body>
</html>