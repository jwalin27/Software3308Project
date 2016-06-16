CREATE TABLE IF NOT EXISTS 'Login' (
'UserID' int(1) NOT NULL auto_increment,
'User' varchar(6) NOT NULL,
'Pass' varchar(4) NOT NULL,
PRIMARY KEY ('UserID')
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
INSERT INTO 'Login' ('UserID' 'User', 'Pass`' VALUES
(1, 'Super User' 'password'),
(2, 'OldAbe', 'pr0clamat10n'),
(3, 'sideofmustard', 'moo72'),
(4, 'nineteenfifty5', '334193' ),
(5, 'babeRuth49', 'mlbSquared11');

CREATE TABLE IF NOT EXISTS 'Posts' (
'PostID' int(2) NOT NULL,
'UserID' int(1) NOT NULL auto_increment,
'Post' varchar(24) NOT NULL,
PRIMARY KEY ('PostID')
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
INSERT INTO 'Posts' ('PostID' 'UserID', 'Post' VALUES
(1, 1 'Today I...'),
(2, 2 'Four Score...'),
(3, 2, 'America will...'),
(4, 5, 'The other night...' ),
(5, 4, 'Back in my day...');


