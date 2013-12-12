DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO account VALUES("1","1","user1","pass1");
INSERT INTO account VALUES("2","2","user2","pass2");
INSERT INTO account VALUES("3","3","user3","pass3");
INSERT INTO account VALUES("4","4","user4","pass4");



DROP TABLE IF EXISTS profile;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO profile VALUES("1","Peter","Wang");
INSERT INTO profile VALUES("2","Sarah","Mary");
INSERT INTO profile VALUES("3","Johan","Wilie");
INSERT INTO profile VALUES("4","Wane","Oper");
INSERT INTO profile VALUES("5","Null","Null");



