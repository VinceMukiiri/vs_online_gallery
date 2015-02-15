CREATE TABLE `art` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` text,
  `file_name` varchar(100) DEFAULT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `uploader_user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `upload_date` bigint(20) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `favorites` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`art_id`),
  KEY `category_idx` (`category_id`),
  CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1