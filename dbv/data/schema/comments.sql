CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text,
  `art_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_idx` (`user_id`),
  KEY `content_idx` (`art_id`),
  CONSTRAINT `content` FOREIGN KEY (`art_id`) REFERENCES `art` (`art_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1