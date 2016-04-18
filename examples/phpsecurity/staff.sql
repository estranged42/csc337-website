SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `staff` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(1024) default NULL,
  `phone` varchar(1024) default NULL,
  `email` varchar(1024) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

insert into `staff` values('1','Mark','626-1541','fischerm@email.arizona.edu'),
 ('2','Margrit','626-1541','memcinto@email.arizona.edu'),
 ('3','Tracey','626-1541','thummel@email.arizona.edu'),
 ('4','Cindy','626-1541','ccamp@email.arizona.edu'),
 ('5','Jan','626-1541','jknight@email.arizona.edu'),
 ('6','Danielle','626-1541','danistil@email.arizona.edu'),
 ('7','Michael','626-1541','martelle@email.arizona.edu');

SET FOREIGN_KEY_CHECKS = 1;
