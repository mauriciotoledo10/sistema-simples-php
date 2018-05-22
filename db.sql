CREATE TABLE `users` (
  `userid` int(11) NOT NULL auto_increment,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `ativo` char(1) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;