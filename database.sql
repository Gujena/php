use test

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,

  PRIMARY KEY  (`id`)
);