CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `hashed_password` varchar(32) NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `second_name` varchar(15) DEFAULT NULL,
  `profile_picture` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1