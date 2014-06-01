#
# Estrutura para a tabela `clock_vip`
#
CREATE TABLE IF NOT EXISTS `clock_vip` (
  `account_id` int(11) unsigned NOT NULL auto_increment,
  `level` tinyint(3) NOT NULL default '0',
  `flag` int(11) NOT NULL default '0',
  `expire_timer` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`account_id`),
  KEY `level` (`level`)
) ENGINE=MyISAM AUTO_INCREMENT=2000000;


#
# Estrutura para a tabela `sbank`
#
CREATE TABLE IF NOT EXISTS `sbank` (
  `account_id` int(11) unsigned NOT NULL auto_increment,
  `zeny` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`account_id`),
  KEY `zeny` (`zeny`)
) ENGINE=MyISAM AUTO_INCREMENT=2000000; 