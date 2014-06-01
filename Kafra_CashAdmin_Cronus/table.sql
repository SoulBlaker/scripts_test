#
# Table structure for table `kafra_cashadmin`
# Version: 1.0	by SoulBlaker
#

DROP TABLE IF EXISTS `kafra_cashadmin`;
CREATE TABLE `kafra_cashadmin` (
  `id` smallint(5) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `price` mediumint(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

