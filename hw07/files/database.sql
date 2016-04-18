DROP DATABASE IF EXISTS `hw6`;
CREATE DATABASE `hw6`;

USE `hw6`;

CREATE TABLE `games` (
  `game_id`           int(11) NOT NULL auto_increment,
  `prize_door`        int(2) NOT NULL,
  `opened_door`       int(2) default NULL,
  `initial_selected`  int(2) default NULL,
  `final_selected`    int(2) default NULL,
  PRIMARY KEY  (`game_id`)
) ENGINE=innodb DEFAULT CHARSET=latin1;
