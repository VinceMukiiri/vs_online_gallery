CREATE TABLE `favorites` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  PRIMARY KEY (`fav_id`),
  KEY `user_idx` (`user_id`),
  CONSTRAINT `favoriter` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1