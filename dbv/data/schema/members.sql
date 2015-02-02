CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `national_id` int(15) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_no` varchar(250) NOT NULL,
  `ppic_url` varchar(250) NOT NULL,
  `authority` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `onames` varchar(250) NOT NULL,
  `active` int(2) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1