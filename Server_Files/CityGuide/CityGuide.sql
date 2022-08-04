
-- ----------------------------
--  Table structure for `CityGuide`
-- ----------------------------
DROP TABLE IF EXISTS `CityGuide`;
CREATE TABLE `CityGuide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `description` text,
  `long` varchar(128) DEFAULT NULL,
  `lat` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `rate` int(1) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `mail` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `type` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

