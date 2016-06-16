CREATE TABLE IF NOT EXISTS `Login` (
`UserID` int(3) NOT NULL auto_increment,
`User` varchar(15) NOT NULL,
`Pass` varchar(16) NOT NULL,
PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
INSERT INTO `Login` (`UserID`, `User`, `Pass`) VALUES
(1, 'Super User', 'password'),
(2, 'OldAbe', 'pr0clamat10n'),
(3, 'sideofmustard', 'moo72'),
(4, 'nineteenfifty5', '334193' ),
(5, 'babeRuth49', 'mlbSquared11');

CREATE TABLE IF NOT EXISTS `Posts` (
`PostID` int(6) NOT NULL auto_increment,
`UserID` int(3) NOT NULL,
`Post` varchar(175) NOT NULL,
PRIMARY KEY (`PostID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
INSERT INTO `Posts` (`PostID`, `UserID`, `Post`) VALUES
(1, 1, 'Today I...'),
(2, 2, 'Four Score...'),
(3, 2, 'America will...'),
(4, 5, 'The other night...' ),
(5, 4, 'Back in my day...');

CREATE TABLE IF NOT EXISTS `Followers` (
`Key` int(3) NOT NULL auto_increment,
`UserID` int(3) NOT NULL,
`Follower` int(3) NOT NULL,
PRIMARY KEY (`Key`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT = 1 ;
INSERT INTO `Followers` (`Key`, `UserID`, `Follower`) VALUES
(1, 1, 4),
(2, 1, 3),
(3, 5, 1),
(4, 4, 1),
(5, 1, 2),
(6, 5, 2),
(7, 3, 4),
(8, 4, 3),
(9, 2, 5) ;

CREATE TABLE IF NOT EXISTS `Profile` (
`UserID` int(3) NOT NULL auto_increment,
`Bio` varchar(40) NOT NULL,
`Pic` varbinary(3000),
PRIMARY KEY (`UserID`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT = 1 ;
INSERT INTO `Profile` (`UserID`, `Bio`, `Pic`) VALUES
(1, 'The Best...', NULL),
(2, 'Born and Raised in...', 'http://a4.files.biography.com/image/upload/c_fit,cs_srgb,dpr_1.0,h_1200,q_80,w_1200/MTIwNjA4NjMzODg2NTc0MDky.jpg'),
(3, 'Just a humble...', 'https://mcdonalds.com.au/sites/mcdonalds.com.au/files/hero_pdt_mustard.png'),
(4, 'When I was born...', NULL),
(5, 'One of the best...', NULL) ;
