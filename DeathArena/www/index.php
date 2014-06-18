<!DOCTYPE html>
<html>
	<head>
		<title>Death Arena 1.0</title>
		<link rel="stylesheet" type="text/css" href="css/da_full.css" />
		<script type="text/javascript" src="scripts/functions.js"></script>
	</head>
	<body>
		<div id="layout">
			<div id="logo"><img src="images/logo.png"/></div>
			<div id="contents">
				<div id="menu">
					<span><a href="?page=raking-players">Rank de Jogadores</a></span> <span><a href="?page=raking-guilds">Rank de Clãns</a></span><span><a href="?page=raking-partys">Rank de Grupos</a></span>
				</div>
				<div id="filter-bar">
					<?php
						$filter = (isset($_GET['filter'])?($_GET['filter']==1?'1':($_GET['filter']==2?'2':'0')):0);
						$page = (isset($_GET['page'])?$_GET['page']:0);
					?>
					
					<input type="hidden" id="page" name="page" value="<?php echo $page; ?>" />
					<input type="hidden" id="filter" name="filter" value="<?php echo $filter; ?>" />
					
					<select onChange="ChangeFilter(this.value);">
						<option value="0" <?php echo ($filter==0?"selected":""); ?>>Vitórias</option>
						<option value="1" <?php echo ($filter==1?"selected":""); ?>>Derrotas</option>
						<option value="2" <?php echo ($filter==2?"selected":""); ?>>Proporcional</option>
					</select>
				</div>
				<div id="rank">
					<table>
						<tr id="title">
							<td>&nbsp;</td>
							<td>Jogador</td>
							<td>Vitórias</td>
							<td>Derrotas</td>
							<td>Clã</td>
							<td>Grupo</td>
							<td>Proporcional</td>
						</tr>
						<tr id="line-0">
							<td width="10%"><img src="images/medal_01.png" /></td>
							<td>SoulBlaker</td>
							<td>2</td>
							<td>0</td>
							<td>Cronus-Emulator</td>
							<td>Cronus-Emulator</td>
							<td>2</td>
						</tr>
						<tr id="line-1">
							<td width="5%"><img src="images/medal_02.png" /></td>
							<td>Fulano 1</td>
							<td>1</td>
							<td>2</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-0">
							<td width="5%"><img src="images/medal_03.png" /></td>
							<td>Fulano 2</td>
							<td>0</td>
							<td>1</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-1">
							<td width="5%">4</td>
							<td>Fulano 3</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-0">
							<td width="5%">5</td>
							<td>Fulano 4</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-1">
							<td width="5%">6</td>
							<td>Fulano 3</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-0">
							<td width="5%">7</td>
							<td>Fulano 4</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-1">
							<td width="5%">8</td>
							<td>Fulano 3</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-0">
							<td width="5%">9</td>
							<td>Fulano 4</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-1">
							<td width="5%">10</td>
							<td>Fulano 3</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-0">
							<td width="5%">11</td>
							<td>Fulano 4</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
						<tr id="line-1">
							<td width="5%">12</td>
							<td>Fulano 5</td>
							<td>0</td>
							<td>0</td>
							<td>Concorrencia</td>
							<td>Concorrencia</td>
							<td>0</td>
						</tr>
					</table>
				</div>
				<div id="page-bar">
				<select onChange="javascript:ChangePage(this.value);">
						<option value="0">Página 1</option>
						<option value="1">Página 2</option>
						<option value="2">Página 3</option>
					</select>
				</div>
				
				<div id="footer">Desenvolvido por <a href="http://github.com/SoulBlaker/">SoulBlaker</a><br/>Versão: 1.0</div>
			</div>
		</div>
	</body>
</html>