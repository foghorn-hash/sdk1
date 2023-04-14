-- --------------------------------------------------------

DROP TABLE IF EXISTS `es_acl`;
CREATE TABLE IF NOT EXISTS `es_acl` (
  `acl_id` int(11) NOT NULL auto_increment,
  `role` varchar(80) NOT NULL default '',
  `access` text NOT NULL,
  `inherit` varchar(80) NOT NULL default '',
  `order_id` int(8) NOT NULL default '0',
  PRIMARY KEY  (`acl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `es_acl` (`acl_id`, `role`, `access`, `inherit`, `order_id`) VALUES 
(1, 'Administrator', '', 'Staff 2', 1),
(2, 'Staff 1', '', 'none', 3),
(3, 'Staff 2', '', 'Staff 1', 2);

-- --------------------------------------------------------

DROP TABLE IF EXISTS `es_lang`;
CREATE TABLE IF NOT EXISTS `es_lang` (
  `lang_id` int(8) NOT NULL auto_increment,
  `lang_name` varchar(40) NOT NULL default '',
  `lang_file` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`lang_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `es_lang` (`lang_id`, `lang_name`, `lang_file`) VALUES 
(1, 'Finnish', 'finnish'),
(2, 'English', 'english');

-- --------------------------------------------------------

DROP TABLE IF EXISTS `es_layouts`;
CREATE TABLE IF NOT EXISTS `es_layouts` (
  `layout_id` int(8) NOT NULL auto_increment,
  `layout_name` varchar(40) NOT NULL default '',
  `layout_dir` varchar(80) NOT NULL default '',
  PRIMARY KEY  (`layout_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



INSERT INTO `es_layouts` (`layout_id`, `layout_name`, `layout_dir`) VALUES 
(1, 'Default Blue', 'defaultblue'),
(2, 'Default Red', 'defaultred');

-- --------------------------------------------------------


DROP TABLE IF EXISTS `es_modules`;
CREATE TABLE IF NOT EXISTS `es_modules` (
  `module_id` int(8) NOT NULL auto_increment,
  `module_name` varchar(40) NOT NULL default '',
  `module_var` varchar(40) NOT NULL default '',
  `active` int(8) NOT NULL default '0',
  `order_id` int(8) NOT NULL default '0',
  PRIMARY KEY  (`module_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `es_modules` (`module_id`, `module_name`, `module_var`, `active`, `order_id`) VALUES 
(1, 'Frontpage', 'frontpage', 1, -9999);

-- --------------------------------------------------------

DROP TABLE IF EXISTS `es_users`;
CREATE TABLE IF NOT EXISTS `es_users` (
  `user_id` int(8) NOT NULL auto_increment,
  `username` varchar(60) NOT NULL default '',
  `password` varchar(60) NOT NULL,
  `userlevel` int(8) NOT NULL default '0',
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `mobile` varchar(8) NOT NULL,
  `email1` varchar(40) NOT NULL default '',
  `email2` varchar(40) NOT NULL default '',
  `address` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `info` text NOT NULL,
  `gender` varchar(8) NOT NULL,
  `www` varchar(255) NOT NULL default '',
  `active` int(8) NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `es_users` (`user_id`, `username`, `password`, `userlevel`, `firstname`, `lastname`, `phone`, `mobile`, `email1`, `email2`, `address`, `city`, `zip`, `country`, `state`, `fax`, `info`, `gender`, `www`, `active`) VALUES 
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Logan', 'Miller', '', '', '', '', '', '', '', '', '', '', '', 'Male', '', 1);
