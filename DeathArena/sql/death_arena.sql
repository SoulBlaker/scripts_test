---
--- table `da_arena` {
--- 	auto_id		-> Auto-implementação de identificação da arena.
--- 	map_index	-> Mapa da arena.
--- 	coord_x		-> Coordenada X aonde os jogadores serão teleportados. (Padrão: 0 = random)
--- 	coord_y		-> Coordenada Y aonde os jogadores serão teleportados. (Padrão: 0 = random)
--- 	name		-> Nome da arena.
--- 	type		-> Tipo da arena. (0: Jogadores vs Jogadores/ 1: Clãns vs Clãns/ 2: Grupos vs Grupos)
--- 	max_player	-> Máximo de jogadores que podem acessar a arena. (0 é ilimitado)
--- 	min_level	-> Nível Minimo de Base para acessar a arena. (0 é desabilitado)
--- 	max_level	-> Nível Máximo de Base para acessar a arena. (1 é habilitado)
--- 	group		-> Identificação do Grupo de Restrições.
--- }
CREATE TABLE IF NOT EXISTS `da_arena` (
	`auto_id` int(11) unsigned NOT NULL auto_increment,
	`map_index` varchar(11) NOT NULL default 'unknown',
	`coord_x` int(3) unsigned NOT NULL default '0',
	`coord_y` int(4) unsigned NOT NULL default '0',
	`name` varchar(34) NOT NULL default '',
	`type` int(1) NOT NULL default '0',
	`max_player` int(4) NOT NULL default '0',
	`max_level` int(4) unsigned NOT NULL default '0',
	`min_level` int(4) unsigned NOT NULL default '0',
	`group_id` int(11) unsgigned NOT NULL default '0',
	 PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

--- table `da_group` {
--- 	auto_id		-> Auto-implementação de identificação do Grupo de Restrições.
--- 	name		-> Nome do grupo de restrição.
--- }
CREATE TABLE IF NOT EXISTS `da_group` (
	`auto_id` int(11) unsigned NOT NULL auto_increment,
	`name` varchar(34) NOT NULL default '',
	 PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

--- table `da_restrictions` {
--- 	auto_id		-> Auto-implementação de identificação da Restrição.
--- 	group_id	-> Id de identificação do grupo.
--- 	value		-> Id do item/classe a ser restringido.
--- 	type		-> Tipo da ser restringido. (0: item/ : classe)
--- }
CREATE TABLE IF NOT EXISTS `da_restrictions` (
	`auto_id` int(11) unsigned NOT NULL auto_increment,
	`group_id` int(11) unsgigned NOT NULL default '0',
	`value` int(11) unsgigned NOT NULL default '0',
	`type` int(1) unsgigned NOT NULL default '0',
	 PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

--- table `da_ranking` {
--- 	auto_id		-> Auto-implementação de identificação do jogador/clã/grupo
--- 	object_id	-> Id do objeto. (jogador, clã ou grupo)
--- 	type		-> Tipo do objeto. (0: jogador/ 1: clã / 2: grupo)
--- 	wins		-> Vitórias do objeto.
--- 	loss		-> Derrotas do objeto.
--- 	ration		-> Vitórias proporcional a derrotas do objeto.
--- }
CREATE TABLE IF NOT EXISTS `da_ranking` (
	`auto_id` int(11) unsigned NOT NULL auto_increment,
	`object_id` int(11) unsgigned NOT NULL default '0',
	`type` int(1) unsgigned NOT NULL default '0',
	`wins` int(4) unsgigned NOT NULL default '0',
	`loss` int(4) unsgigned NOT NULL default '0',
	`ration` int(4) unsgigned NOT NULL default '0',
	 PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;