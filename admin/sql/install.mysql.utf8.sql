CREATE TABLE IF NOT EXISTS `#__backpic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `pic` text NOT NULL,
  `article_id` int(11) NOT NULL,
  `width` varchar(8) NOT NULL,
  `height` varchar(8) NOT NULL,
  `published` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

