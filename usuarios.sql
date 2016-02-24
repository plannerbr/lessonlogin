CREATE TABLE IF NOT EXISTS `usuario` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_nome` varchar(100) NOT NULL,
  `us_email` varchar(100) NOT NULL,
  `us_data` date NOT NULL,
  `us_hora` time NOT NULL,
  `us_ip` varchar(50) NOT NULL,
  `us_senha` varchar(50) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;