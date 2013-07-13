-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2013 at 04:53 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.6-13ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vidcol`
--
CREATE DATABASE `vidcol` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vidcol`;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE IF NOT EXISTS `entertainment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `snapshot` varchar(500) NOT NULL,
  `dislike` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`id`, `name`, `path`, `description`, `keyword`, `snapshot`, `dislike`, `likes`) VALUES
(1, 'Chrome starts fast (hammock)', 'entertainment/Chrome starts fast (hammock).mp4', 'Stop-motion animation of a quick-fix with Google Chrome.', 'Chrome hammock', 'entertainment/Chrome starts fast (hammock).jpg', 18, 38),
(2, 'Chrome starts fast (pointer)', 'entertainment/Chrome starts fast (pointer).mp4', 'Stop-motion animation on a mouse pointer''s fast, snappy journey through Google Chrome.', 'Chrome starts fast', 'entertainment/Chrome starts fast (pointer).jpg', 4, 7),
(3, 'Google Chrominos', 'entertainment/Google Chrominos.mp4', 'Have you tried Google Chrome yet? What web browser do you use?  Domino''s Used: Approximately 6,317  (There were no breaks in the fall)  Can you make the Google Chrome icon out of something else?', 'Google Chrominos', 'entertainment/Google Chrominos.jpg', 6, 13),
(4, 'Guinness Record - Biggest Hand Made Balloon II', 'entertainment/Guinness Record - Biggest Hand Made Balloon II.mp4', 'Guy Blows Gigantic Balloon WIth Just His Bare Hands And Some Soap.  ~Imperial Eagle Entertainment', 'Biggest Hand Made Balloon', 'entertainment/Guinness Record - Biggest Hand Made Balloon II.jpg', 3, 4),
(5, 'Har Ek Friend Zaroori Hota Hai - Airtel New Ad', 'entertainment/Har Ek Friend Zaroori Hota Hai - Airtel New Ad.mp4', 'Chai Ke Liye Jaise Toast Hota Hai  Vaise Har Ek Friend Zaroori Hota Hai  Aise Har Ek Friend Zaroori Hota Hai   Koi Subah Paanch Baje Neend Se Jagaye  Koe Raat Ko Teen Baje Jaan Bachaye  Ek Teri Kadki Mein Sharing Kare  Aur Ek Tere Budget Mein Sneak In Kare    Koi Nature Se Guest.. KKoi Host Hota Hai..  Par Har Ek Friend Zaroori Hota Hai.', 'Har Ek Friend Zaroori Hota Hai', 'entertainment/Har Ek Friend Zaroori Hota Hai - Airtel New Ad.jpg', 2, 10),
(6, 'Invisible Dogs', 'entertainment/Invisible Dogs.mp4', 'The best in dog tricks and dog entertainment.', 'Invisible Dogs', 'entertainment/Invisible Dogs.jpg', 4, 10),
(7, 'Piano stairs', 'entertainment/Piano stairs.flv', 'Piano stairs - Rolighetsteorin.se -The fun theory', 'Piano stairs  fun theory', 'entertainment/Piano stairs.jpg', 1, 3),
(8, 'TheNeoCube', 'entertainment/TheNeoCube.mp4', 'The NeoCube is composed of 216 individual high-energy sphere magnets, which can be formed into BILLIONS of shapes and patterns. It is highly addictive!   Add the NeoCube on Facebook and look for special events and money saving deals:', 'Neo Cube', 'entertainment/TheNeoCube.jpg', 5, 9),
(9, 'abc', 'entertainment/abc.mp4', '', 'he', 'entertainment/abc.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `snapshot` varchar(500) NOT NULL,
  `dislike` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `path`, `description`, `keyword`, `snapshot`, `dislike`, `likes`) VALUES
(1, 'Call of Duty Modern Warfare 3', 'games/Call of Duty Modern Warfare 3.mp4', 'The definitive multiplayer experience returns with Call of Duty: Modern Warfare 3. Watch the official MW3 multiplayer trailer and follow the conversation on Twitter at @CallofDuty and on Facebook at Facebook.com/MW3.', 'Call of Duty Modern Warfare3 COD', 'games/Call of Duty Modern Warfare 3.jpg', 0, 0),
(2, 'Deus Ex Human Revolution E3 2010 Trailer [HD]', 'games/Deus Ex Human Revolution E3 2010 Trailer [HD].mp4', 'Deus Ex Human Revolution E3 2010 Trailer [HD] Developer: Eidos Studios Montreal Release: 2011 Genre: FPS Platform: PS3/X360/PC Publisher: Eidos Interactive Website: www.deusex.com', 'Deus Ex Human Revolution', 'games/Deus Ex Human Revolution E3 2010 Trailer [HD].jpg', 1, 2),
(3, 'Devil May Cry - Announcement Trailer', 'games/Devil May Cry - Announcement Trailer.mp4', 'Title: Devil May Cry 5 Release Date: TBA 2011 Platforms: Xbox 360, Playstation 3 Label: Capcom Genre: Action-adventure', 'Devil May Cry', 'games/Devil May Cry - Announcement Trailer.jpg', 0, 1),
(4, 'Mortal Kombat E3 2010 Announcement Trailer [HD]', 'games/Mortal Kombat E3 2010 Announcement Trailer [HD].mp4', 'Mortal Kombat E3 2010 Announcement Trailer [HD] Developer: NetherRealm Studios Release: Q4/2010 Genre: Fighting Platform: PS3/X360 Publisher: Warner Brothers Interactive Entertainment Website: www.themortalkombat.com. The newest chapter of the iconic fight franchise marks a triumphant return to the series'' mature presentation and a reinvention of its classic 2D fighting mechanic. Driven by an all new graphics engine, the fan favorite Fatality is back and presented in more gory detail than ever before.', 'Mortal Kombat', 'games/Mortal Kombat E3 2010 Announcement Trailer [HD].jpg', 0, 0),
(5, 'motion capture technology in games', 'games/motion capture technology in games.flv', 'The foundation of L.A. Noire is a brand new technology called MotionScan that enables us to capture and scan every nuance of a real actor''s facial performances and put them right into the game itself. It provides a level of realism, detail, performance and emotion never seen before in a videogame, and brings them to life in a totally new way. Remember you can embed, rate and subscribe.', 'motion capture games', 'games/motion capture technology in games.jpg', 0, 0),
(6, 'Need for Speed The Run', 'games/Need for Speed The Run.mp4', 'Need for Speed: The Run - An illicit, high-stakes race across the country. The only way to get your life back is to be the first from San Francisco to New York. No speed limits. No rules. No allies. All you have are your driving skills and sheer determination as you battle hundreds of the world''s most notorious drivers on the country''s most dangerous roads.', 'Need for Speed The Run', 'games/Need for Speed The Run.jpg', 0, 0),
(7, 'PROTOTYPE- Official Story Trailer [HD]', 'games/PROTOTYPE- Official Story Trailer [HD].mp4', 'Title: PROTOTYPE Release Date: June 9, 2009 Platforms: PC | X360 | PS3 Label: Activision Genre: Open World Age Rating: RP', 'PROTOTYPE', 'games/PROTOTYPE- Official Story Trailer [HD].jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `linux`
--

CREATE TABLE IF NOT EXISTS `linux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `snapshot` varchar(500) NOT NULL,
  `dislike` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `linux`
--

INSERT INTO `linux` (`id`, `name`, `path`, `description`, `keyword`, `snapshot`, `dislike`, `likes`) VALUES
(1, 'KDE 46 Stability Test (archlinux)', 'linux/KDE 46 Stability Test (archlinux).flv', '', 'KDE linux', 'linux/KDE 46 Stability Test (archlinux).jpg', 0, 0),
(2, 'KOffice Teaser', 'linux/KOffice Teaser.flv', 'KOffice', 'KOffice Teaser', 'linux/KOffice Teaser.jpg', 0, 0),
(3, 'OpenSUSE 113 KDE 64bit Linux', 'linux/OpenSUSE 113 KDE 64bit Linux.flv', 'OpenSuse', 'OpenSuse', 'linux/OpenSUSE 113 KDE 64bit Linux.jpg', 0, 0),
(4, 'Pinguy OS 1104', 'linux/Pinguy OS 1104.flv', 'Pinguy', 'Pinguy OS', 'linux/Pinguy OS 1104.jpg', 0, 0),
(5, 'LinuxMint', 'linux/LinuxMint.flv', '', 'Linux Mint', 'linux/LinuxMint.jpg', 0, 0),
(6, 'Fedora 15 Review', 'linux/Fedora 15 Review.flv', 'Fedora 15 Review', 'Fedora 15', 'linux/Fedora 15 Review.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `snapshot` varchar(500) NOT NULL,
  `dislike` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `path`, `description`, `keyword`, `snapshot`, `dislike`, `likes`) VALUES
(1, 'Fastest Bicycle racing', 'sports/Fastest Bicycle racing.flv', 'Watch now how some of the best criterium racers in the country compete in this fast and furious, eight corner criterium race in Winter Haven, Florida. Feel the excitement and adrenaline rush from the racers'' point of view', 'Bicycle', 'sports/Fastest Bicycle racing.jpg', 1, 1),
(2, 'Football Soccer [HD]', 'sports/Football Soccer [HD].mp4', 'Futbol, Football, Soccer, Emotions, Goals, Celebrations, Music: He Films? the Clouds, Pt.2 - Maybeshewill [tags]: Cristiano Ronaldo C.Ronaldo CR-7 07-08 Season Goals Tricks Skills Freestyle Power Ability Manchester United 2007 2008 07 Voetbal cristiano ronaldo c.ronaldo cr7 goals season compilation tricks vs skills 2008 07/08 manchester united quaremsa portugal viva champions league serie a inter milan ', 'Football Soccer', 'sports/Football Soccer [HD].jpg', 0, 0),
(3, 'Quantum Double Helix bowling HD', 'sports/Quantum Double Helix bowling HD.flv', 'ball drilled stacked. bought it used for $30 but never plugged it so the span is actually too long for me. sold the ball...i have others for sale though.', 'Bowling', 'sports/Quantum Double Helix bowling HD.jpg', 0, 1),
(4, 'Soccer', 'sports/Soccer.flv', 'soccer at its Best', 'Soccer', 'sports/Soccer.jpg', 0, 0),
(5, 'Team USA Basketball 2010 Mix (FULL HD)', 'sports/Team USA Basketball 2010 Mix (FULL HD).mp4', 'Team USA Basketball 2010 Mix FULL HD,FIBA World Championship 2010,Chauncey Billups,Tyson Chandler,Stephen Curry,Kevin Durant,Rudy Gay,Eric Gordon,Danny Granger,Andre Iguodala,Kevin Love,Lamar Odom,Derrick Rose,Russell Westbrook,HEAD COACH TEAM USA Mike Krzyzewski,Team USA Basketball 2010,teamwork,tomahawk dunk,backboard dunk,crossover,Fadeaway,EURO STEP,FIBA World Championship 2010,ESPN2HD broadcast', 'Basketball', 'sports/Team USA Basketball 2010 Mix (FULL HD).jpg', 1, 0),
(6, 'TIGER WOODS - Golf Tricks [Full HD]', 'sports/TIGER WOODS - Golf Tricks [Full HD].mp4', 'TIGER WOODS - Golf Tricks [Full HD]   tiger woods nike golf hd incredible best shots amazing shot swing tricks trick unbelievable putt hole in one short game slow motion us open bay hill memorial arnold palmer invitational major tour masters pga bmw championship st andrews 18th birdie commercial signature vision tribute juggling ball junior freestyle mickelson kim sean ohair day singh els nicklaus happy gilmore tin cup legend bagger vance iron callaway ea sports hq norbert bongartz 2006 2007 2008 2009 2010 2011 06 07 08 09 10 11', 'TIGER WOODS Golf', 'sports/TIGER WOODS - Golf Tricks [Full HD].jpg', 0, 1),
(7, 'Tony Kanaan and Helio Crash at Baltimore', 'sports/Tony Kanaan and Helio Crash at Baltimore.mp4', 'Scary crash during the warmup for the IZOD IndyCar Series race in Baltimore. Tony Kanaan lost his brakes going 180mph.', 'Formula1 Helio F1', 'sports/Tony Kanaan and Helio Crash at Baltimore.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE IF NOT EXISTS `technology` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `snapshot` varchar(500) NOT NULL,
  `dislike` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `name`, `path`, `description`, `keyword`, `snapshot`, `dislike`, `likes`) VALUES
(1, 'Three Dimensional Technology in 2010', 'technology/Three Dimensional Technology in 2010.mp4', 'Rocketboom Tech''s Ellie Rountree explains the different types of 3D viewing technology.  This episode was made in collaboration with Intel!', 'Three Dimensional', 'technology/Three Dimensional Technology in 2010.jpg', 0, 1),
(2, 'Future of Screen Technology', 'technology/Future of Screen Technology.mp4', 'This is the result of TAT''s Open Innovation experiment. It is an experience video showing the future of screen technology with stretchable screens, transparent screens and e-ink displays, to name a few.', 'screen', 'technology/Future of Screen Technology.jpg', 0, 0),
(3, 'Google Chrome Speed Tests', 'technology/Google Chrome Speed Tests.mp4', 'These speed tests were filmed at actual web page rendering times. ', 'chrome speed', 'technology/Google Chrome Speed Tests.jpg', 1, 1),
(4, 'Robot birds', 'technology/robot birds.flv', 'From his upturned palm, Ryan Carr launches then expertly flies what appears to be a remote-controlled bird. Later, ', 'Robot Birds', 'technology/robot birds.jpg', 1, 1),
(5, 'iPhone 5 Concept Features', 'technology/iPhone 5 Concept Features.mp4', 'Amazing Concept iPhone 5. This CG iPhone 5 has advanced iPhone features such as a sleeker iPhone design, a laser keyboard & holographic display all rolled into this iPhone 5 video.   The computer generated Concept iPhone 5 features is an exponential leap to the iPhone 4 or iPhone 3gs of today.  We hope you enjoy this iPhone 5 video more than the current trend of iPhone 5 rumors such as iPhone 5 leaked and iPhone 5 unboxing videos.', 'iPhone 5 ', 'technology/iPhone 5 Concept Features.jpg', 0, 0),
(6, 'The Flying Machine', 'technology/The Flying Machine.flv', 'Video overview of the ETH Flying Machine Arena (FMA) as of 2010. The FMA is an indoor 1000-cubic meter volume dedicated for research in autonomous systems and aerial robotics. It''s located in Zurich, Switzerland.', 'Flying Machine', 'technology/The Flying Machine.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercomment`
--

CREATE TABLE IF NOT EXISTS `usercomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `usercomment`
--

INSERT INTO `usercomment` (`id`, `name`, `username`, `comment`) VALUES
(1, 'Three Dimensional Technology in 2010', 'hitesh', 'hi'),
(2, 'TheNeoCube', 'hitesh', 'hi'),
(3, 'Quantum Double Helix bowling HD', 'hitesh', 'hi'),
(4, 'Invisible Dogs', 'hitesh', 'yup its gr8'),
(5, 'Google Chrominos', 'hitesh', 'hello'),
(6, 'Google Chrominos', 'hitesh', 'yo yoooyoyo'),
(7, 'Google Chrominos', 'hitesh', 'nanannana'),
(8, 'Google Chrominos', 'hitesh', 'skdkfksnfks'),
(9, 'Google Chrominos', 'hitesh', 'hi'),
(10, 'Football Soccer [HD]', 'hitesh', 'soccer'),
(11, 'Devil May Cry - Announcement Trailer', 'hitesh', 'i loved this one'),
(31, 'Invisible Dogs', 'hitesh', 'd,f v,dffv,v s. vvkkekkvkev'),
(32, 'Invisible Dogs', 'hitesh', 'd  dvdvlevevm .vm d'),
(33, 'Invisible Dogs', 'hitesh', 'vdfmvldmff'),
(34, 'Invisible Dogs', 'hitesh', 'japan'),
(35, 'Invisible Dogs', 'hitesh', 'japan'),
(36, 'Invisible Dogs', 'hitesh', 'dvd d'),
(37, 'Invisible Dogs', 'hitesh', ' dvsdfvdf vdvd'),
(38, 'Chrome starts fast (hammock)', 'hitesh', 'gud one'),
(39, 'Chrome starts fast (hammock)', 'hitesh', 'loved it'),
(40, 'Chrome starts fast (hammock)', 'hitesh', 'fantastic\r\n'),
(41, 'Google Chrominos', 'hitesh', 'yoyo'),
(42, 'Har Ek Friend Zaroori Hota Hai - Airtel New Ad', 'hitesh', 'asdassd');

-- --------------------------------------------------------

--
-- Table structure for table `userlike`
--

CREATE TABLE IF NOT EXISTS `userlike` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlike`
--

INSERT INTO `userlike` (`id`, `name`, `username`, `review`) VALUES
(1, 'Chrome starts fast (hammock)', 'neeraj', 1),
(8, 'TheNeoCube', 'hitesh', 1),
(5, 'Har Ek Friend Zaroori Hota Hai - Airtel New Ad', 'hitesh', 1),
(3, 'Google Chrominos', 'anjali', 1),
(2, 'Chrome starts fast (pointer)', 'hitesh', 1),
(7, 'Piano stairs', 'hitesh', 1),
(3, 'Google Chrominos', 'hitesh', 1),
(7, 'The Flying Machine', 'hitesh', 1),
(1, 'Chrome starts fast (hammock)', 'hitesh', 1),
(4, 'Guinness Record - Biggest Hand Made Balloon II', 'hitesh', 1),
(2, 'Chrome starts fast (pointer)', 'himanshu', 1),
(6, 'Invisible Dogs', 'hitesh', 1),
(7, 'Cluster Computing and MapReduce Lecture 1', 'hitesh', 1),
(1, 'Fastest Bicycle racing', 'hitesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` char(11) NOT NULL,
  `dob` date NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `gender`, `dob`, `date`) VALUES
(13, 'Hitesh Gaba', 'hitesh', 'gaba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-16'),
(28, 'Hitesh', 'himanshu12', 'gaba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-16'),
(29, 'Neeraj Kr. Jha', 'neeraj', 'neeraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-16'),
(30, 'Hianshu', 'himanshu123', 'gaba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-16'),
(31, 'Ayush', 'ayush', 'ayush@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-16'),
(32, 'neeraj', 'neeraj1', 'neha24jain@gmail.com', '792878aea59ea00194ece3d7eccd92da', 'Male', '1965-01-01', '2011-09-17'),
(33, 'a', 'a', 'abc@gmail.cpm', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-17'),
(34, 'b', 'a1', 'abv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2011-09-18'),
(35, 'anjali', 'anjali', 'hitesh@gmali.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '1965-01-01', '2011-09-18'),
(36, 'himanshu', 'himanshu', 'himanshugupta0188@gmail.com', '4122ea4f5490094a33d7cdba65136cf8', 'Male', '1989-01-01', '2011-10-05'),
(37, 'qwerty', 'qwerty', 'qwerty@com.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1965-01-01', '2012-09-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
