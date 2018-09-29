CREATE TABLE IF NOT EXISTS `files` (
  `fileid` bigint(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `subject` varchar(5) NOT NULL,  
  `wrby` varchar(100) NOT NULL, 
  PRIMARY KEY (`fileid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
);

