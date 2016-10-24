-- 2016-10-23 15:08:05

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `articles` (`id`, `title`, `content`, `created`, `modified`, `views`, `activated`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima culpa reiciendis molestiae at aspernatur. Accusamus saepe hic, deserunt ratione libero numquam consequuntur optio facilis commodi laborum necessitatibus id iste odio eveniet tempore adipisci! Repellat, et, veritatis, necessitatibus magni odio ipsum eaque assumenda consequatur maxime libero consequuntur voluptas fugiat eos sequi iste provident error in impedit ex tempora qui quam. Aperiam expedita veritatis natus similique dicta laborum, magnam, provident sint quam obcaecati, cupiditate cum. Itaque repudiandae omnis suscipit beatae, laudantium enim sed quod aspernatur vitae pariatur doloribus. Corporis maxime necessitatibus dolore modi ipsum eaque odio vel ullam, voluptas odit quis sit praesentium hic eos recusandae sequi impedit? Rerum culpa laudantium animi nihil delectus consequuntur repudiandae magnam totam eius. Labore, dolorem, deleniti!',  '2016-10-23 17:06:52',  '2016-10-23 17:06:52',  50, 1),
(2, 'test 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima culpa reiciendis molestiae at aspernatur. Accusamus saepe hic, deserunt ratione libero numquam consequuntur optio facilis commodi laborum necessitatibus id iste odio eveniet tempore adipisci! Repellat, et, veritatis, necessitatibus magni odio ipsum eaque assumenda consequatur maxime libero consequuntur voluptas fugiat eos sequi iste provident error in impedit ex tempora qui quam. Aperiam expedita veritatis natus similique dicta laborum, magnam, provident sint quam obcaecati, cupiditate cum. Itaque repudiandae omnis suscipit beatae, laudantium enim sed quod aspernatur vitae pariatur doloribus. Corporis maxime necessitatibus dolore modi ipsum eaque odio vel ullam, voluptas odit quis sit praesentium hic eos recusandae sequi impedit? Rerum culpa laudantium animi nihil delectus consequuntur repudiandae magnam totam eius. Labore, dolorem, deleniti!',  '2016-10-23 17:07:14',  '2016-10-23 17:07:14',  1500, 1);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;