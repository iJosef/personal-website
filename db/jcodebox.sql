-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2019 at 01:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jcodebox`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `category`
--


-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `visitor` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `commentDate` varchar(255) NOT NULL,
  `commentTime` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL,
  `sluggedTitle` varchar(255) NOT NULL,
  `approval` int(225) NOT NULL DEFAULT '0',
  PRIMARY KEY (`commentid`),
  KEY `postid` (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `visitor`, `eMail`, `comment`, `commentDate`, `commentTime`, `postid`, `sluggedTitle`, `approval`) VALUES
(1, 'Joseph Iyke', 'writetojoseph1@gmail.com', 'Never say goodbye till the end comes.', 'June 13, 2019', '12:11pm', 5, 'marketing-and-merchandising-professionals', 0),
(2, 'Joseph Iyke', 'writetojoseph1@gmail.com', 'Never ever say goodbye till the end comes', 'June 13, 2019', '12:13pm', 5, 'marketing-and-merchandising-professionals', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `portfolioid` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`portfolioid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolioid`, `photo`, `title`, `description`, `website`) VALUES
(1, 'p1.jpg', 'wexchange', 'A Cryptocurrency/Gift Card trading website.', 'https://www.wexchange.com.ng'),
(2, 'p2.jpg', 'my personal website', 'A portfolio website', 'https://www.josephemeruwa.com.ng'),
(3, 'p3.jpg', 'jetheights gap affliate ', 'An affiliate website', 'https://www.gap.jetheights.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `posttitle` varchar(255) NOT NULL,
  `featimage` varchar(255) NOT NULL,
  `blogPost` text NOT NULL,
  `sluggedTitle` varchar(255) NOT NULL,
  `postdate` varchar(255) NOT NULL,
  `views` int(70) NOT NULL DEFAULT '0',
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `posttitle`, `featimage`, `blogPost`, `sluggedTitle`, `postdate`, `views`, `category`) VALUES
(1, 'astronomy binoculars a great alternative', 'cardigan.jpg', '<div class="col-lg-9 col-md-9">\r\n<p class="excert">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>\r\n<p>Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</p>\r\n<p>Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed</p>\r\n</div>\r\n<p', 'astronomy-binoculars-a-great-alternative', '13 May, 2019', 2, ''),
(5, 'marketing and merchandising professionals', 'jo.png', '<p>Artificial intelligence (AI) and machine learning are the most exciting developments in business today, they offer many ways to personalise at scale and draw actionable insights from huge pools of customer data.</p>\r\n<p>However, the threats posed to jobs by the advent of AI and machine learning are a serious concern. Any job that primarily entails analysis and processing of data is at risk of being automated out of existence. This is according to Bluegrass Digital managing director Nick Durrant.</p>\r\n<p>AI-powered personalisation seems to offer the prospect of fulfilling &ndash; at the level of the individual &ndash; the very definition of marketing: creating, communicating, and delivering offerings that have value for customers.</p>\r\n<p>Marketing and merchandising professionals could be forgiven for wondering where this development leaves them. The answer is that AI reaffirms their place in the driver&rsquo;s seat, fully in control, adding value where AI cannot.</p>\r\n<p>AI-powered personalisation seems to offer the prospect of fulfilling &ndash; at the level of the individual &ndash; the very definition of marketing: creating, communicating, and delivering offerings that have value for customers.</p>\r\n<p>Marketing and merchandising professionals could be forgiven for wondering where this development leaves them. The answer is that AI reaffirms their place in the driver&rsquo;s seat, fully in control, adding value where AI cannot.</p>\r\n<p><img src="../img/blog/briltech.png" alt="briltech" width="489" height="229" /></p>', 'marketing-and-merchandising-professionals', '31 May, 2019', 152, ''),
(6, 'ai offers many opportunities but poses threats to jobs', 'techie.jpg', '<p>Artificial intelligence (AI) and machine learning are the most exciting developments in business today, they offer many ways to personalise at scale and draw actionable insights from huge pools of customer data.</p>\r\n<p>However, the threats posed to jobs by the advent of AI and machine learning are a serious concern. Any job that primarily entails analysis and processing of data is at risk of being automated out of existence. This is according to Bluegrass Digital managing director Nick Durrant.</p>\r\n<p>AI-powered personalisation seems to offer the prospect of fulfilling &ndash; at the level of the individual &ndash; the very definition of marketing: creating, communicating, and delivering offerings that have value for customers.</p>\r\n<p>Marketing and merchandising professionals could be forgiven for wondering where this development leaves them. The answer is that AI reaffirms their place in the driver&rsquo;s seat, fully in control, adding value where AI cannot.</p>\r\n<p>That&rsquo;s not to deny the likelihood that AI will prompt a significant and undoubtedly large-scale realignment of roles and responsibilities in many organisations. AI drastically reduces the resources required to interpret data, build and manage static segments, deploy and manage internal campaigns or devise content and product permutations.</p>\r\n<p>Conversely there&rsquo;s a greater role for AI-trained data scientists &ndash; whether in-house or third party &ndash; who are able to use their technical skills and curiosity to push the boundaries of what AI can do.</p>\r\n<p>Taking a broader view, successful marketing is heavily dependent on context. Applied AI is, by definition, less successful at analysing context. Empathy, creativity and even broader problem-solving skills are missing. The capacity to synthesise business goals, devise strategies, select KPIs and orchestrate tactical marketing efforts: this is all the domain of humans.</p>\r\n<p>Ultimately, the algorithms at the heart of AI-led personalisation are computer programs, written by humans. Determining the right algorithms to use, the desired output, and determining their role in the purchase process is a job that only a marketer or merchandiser can do.</p>\r\n<p>When you combine the expertise of marketers with the algorithms of AI, however, you can present relevant, engaging experiences at a level that was never before possible. Content and campaigns can now be personalised at the individual level. This is important because engagement and conversions are increasingly linked to the quality of your digital experiences.</p>\r\n<p>For commerce companies, great experiences are often what sets them apart from competitors. With AI you can present intelligent campaigns and individualised content that lead to big results.</p>\r\n<p>Companies with a large and growing inventory are particularly well-suited to AI-powered marketing. Near-endless product permutations are possible, far beyond the capabilities of any team.</p>\r\n<p>Wherea', 'ai-offers-many-opportunities-but-poses-threats-to-jobs', '13 June, 2019', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `replyid` int(11) NOT NULL AUTO_INCREMENT,
  `replier` varchar(255) NOT NULL,
  `emaiL` varchar(255) NOT NULL,
  `reply` text NOT NULL,
  `replyDate` varchar(255) NOT NULL,
  `replyTime` varchar(255) NOT NULL,
  `commentid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `sluggedTitle` varchar(225) NOT NULL,
  `approval` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`replyid`),
  KEY `commentid` (`commentid`),
  KEY `postid` (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`replyid`, `replier`, `emaiL`, `reply`, `replyDate`, `replyTime`, `commentid`, `postid`, `sluggedTitle`, `approval`) VALUES
(1, 'Iyke Joseph', 'writetojoseph1@yahoo.com', 'to God be my glory', 'July 11, 2019', '3:52pm', 2, 5, 'marketing-and-merchandising-professionals', 0),
(5, 'admin', 'hello@josephemeruwa.com.ng', 'thanks for your response', 'July 12, 2019', '7:31am', 2, 5, 'marketing-and-merchandising-professionals', 1),
(6, 'hradmin', 'jaetechit@gmail.com', 'thanks', 'July 23, 2019', '3:22pm', 2, 5, 'marketing-and-merchandising-professionals', 0),
(7, 'mdadmin', 'jaetechit@gmail.com', 'iyewuigewouoewi', 'July 24, 2019', '7:05am', 2, 5, 'marketing-and-merchandising-professionals', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'admin001', 'b4af804009cb036a4ccdc33431ef9ac9');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`commentid`) REFERENCES `comments` (`commentid`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`) ON DELETE CASCADE;
