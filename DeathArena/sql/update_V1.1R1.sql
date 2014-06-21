ALTER TABLE  `da_arena` ADD COLUMN `death_points` int(11) unsigned NOT NULL DEFAULT '0' AFTER `group_id` ;

CREATE TABLE IF NOT EXISTS `da_shop` (
	`item_id` int(11) unsigned  NOT NULL default '0',
	`value` int(11) unsigned NOT NULL default '0',
	 PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;