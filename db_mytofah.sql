-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2016 at 11:27 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mytofah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `status`) VALUES
(1, 'About Us', '<br><p>THIS IS FOR TESTING ONLY....<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) DEFAULT NULL,
  `blog_description` text,
  `blog_category` varchar(100) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `featured_image` text,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_description`, `blog_category`, `author`, `created_date`, `featured_image`, `status`) VALUES
(1, 'My blog', 'This is my first blog here..<br>', '["2","3"]', 'Mr david', '2016-04-02 10:05:39', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  `category_slug` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_name`, `category_slug`, `status`) VALUES
(1, 'Uncategorized', 'uncategorized', 1),
(2, 'Marketing', 'marketing', 1),
(3, 'Business', 'business', 1),
(4, 'Blogging', 'blogging', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE IF NOT EXISTS `contact_table` (
  `pk_contact_id` int(255) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(500) NOT NULL,
  `contact_reference` varchar(20) NOT NULL COMMENT 'google or facebook',
  `is_invitation_sent` int(1) NOT NULL DEFAULT '0',
  `fk_wedding_page_id` int(255) NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `content` text,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `address`, `phone`, `email`, `content`, `status`) VALUES
(1, 'Contact Us', '411, Princes Business Skypark, Agra-Bombay Rd, L I G Colony, Indore, Madhya Pradesh 452001', '0731 409 2411', 'Test@gmail.com', '<p>Welcome to My Tofah<br></p><p>Feel free to contact with us.<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useremail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `siterole_id` int(2) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  `is_reset` bit(1) DEFAULT b'0',
  `reset_email_sent_date` datetime DEFAULT NULL,
  `log_in` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `useremail`, `password`, `siterole_id`, `status`, `is_reset`, `reset_email_sent_date`, `log_in`) VALUES
(1, 'admin@mytofah.com', '123456', 1, 1, b'0', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE IF NOT EXISTS `payment_table` (
  `pk_payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `amount_paid` int(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_date` datetime NOT NULL,
  `fk_contact_id` int(255) NOT NULL,
  `fk_wedding_item_id` int(255) NOT NULL,
  `fk_wedding_page_id` int(255) NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `picture_table`
--

CREATE TABLE IF NOT EXISTS `picture_table` (
  `pk_picture_id` int(255) NOT NULL AUTO_INCREMENT,
  `picture_path` text NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `fk_wedding_page_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_picture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usersessiontable`
--

CREATE TABLE IF NOT EXISTS `usersessiontable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `last_activity` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `siterole_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `usersessiontable`
--

INSERT INTO `usersessiontable` (`id`, `session_id`, `ip_address`, `user_agent`, `last_activity`, `user_id`, `siterole_id`) VALUES
(3, 'a287bb2fe9760b860f61a7e3b1cc4ad2c5de8485', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', '1458559734', 1, 1),
(4, 'a287bb2fe9760b860f61a7e3b1cc4ad2c5de8485', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', '1458559734', 1, 1),
(5, 'a287bb2fe9760b860f61a7e3b1cc4ad2c5de8485', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', '1458559734', 1, 1),
(6, 'a287bb2fe9760b860f61a7e3b1cc4ad2c5de8485', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', '1458559734', 1, 1),
(11, '21f734ec20373d88e43dc08e1eb9437070e36237', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', '1458643339', 1, 1),
(15, 'd0b0a4d775080e494a07f4000d88957534f50864', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1458729451', 1, 1),
(16, '6d0a4c0b1e23d554378da49d30f4fd27037be467', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.5.2564.88 Safari/537.36', '1458730980', 1, 1),
(19, '1d8b47281076bbc653e0e7b7d0d380b602de1fdf', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1458741053', 1, 1),
(20, '6b8799343386fdcfea754b8f8c7f9e85ee64c71b', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.5.2564.88 Safari/537.36', '1458886659', 1, 1),
(21, '2441a1e6fe328636373f3c6e8378b09a0985a124', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1458889821', 1, 1),
(22, '85b63425ecf4a8505297371caac88ac125faffaa', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1458901836', 1, 1),
(24, 'f55476dce1c7717d9e7d542708d841af0b6e7f94', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.5.2564.88 Safari/537.36', '1458996712', 1, 1),
(25, '60344094eaf8e951ac21fe17055c7e7518a73fb4', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1459419377', 1, 1),
(26, 'f9004be2d787f8058b57a8b829756d806dd07f3f', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1459508705', 1, 1),
(29, '364b40fe4ba3821c38a2e58ca3c9877199f71905', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1459769831', 1, 1),
(31, '92576defa67ec4c984fbde617958efa61524ecb5', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1459941398', 1, 1),
(32, '8c90bd6fd54a889cfdeb75eb697a75d8a1fb654c', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '1460034588', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_table`
--

CREATE TABLE IF NOT EXISTS `user_registration_table` (
  `pk_user_id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `verification_status` int(11) NOT NULL DEFAULT '0',
  `no_of_times` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_registration_table`
--

INSERT INTO `user_registration_table` (`pk_user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `status`, `verification_status`, `no_of_times`) VALUES
(1, 'Ranjana', 'Bhagwat', 'ranjana', 'ranjana.bhagwat21@gmail.com', '123456', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_page_table`
--

CREATE TABLE IF NOT EXISTS `wedding_page_table` (
  `pk_wedding_page_id` int(255) NOT NULL AUTO_INCREMENT,
  `your_name` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `wedding_date` date NOT NULL,
  `venue` text NOT NULL,
  `date_to_keep_list_open` datetime NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `couple_summary` text NOT NULL,
  `is_amount_withdrawl` int(1) NOT NULL DEFAULT '0',
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_wedding_page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wedding_page_table`
--

INSERT INTO `wedding_page_table` (`pk_wedding_page_id`, `your_name`, `spouse_name`, `wedding_date`, `venue`, `date_to_keep_list_open`, `no_of_days`, `email`, `phone`, `couple_summary`, `is_amount_withdrawl`, `fk_user_id`, `status`) VALUES
(1, 'adsfasf', 'asfasd', '0000-00-00', 'safdasf', '0000-00-00 00:00:00', 1, 'admin@lnctgroup.org', '24234234324', 'adsfasf', 0, 1, 1),
(2, 'adasf', 'afdasf', '2016-04-29', 'afas', '0000-00-00 00:00:00', 1, 'admin@lnctgroup.org', '54353453454', 'dasfasf', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_item_table`
--

CREATE TABLE IF NOT EXISTS `wishlist_item_table` (
  `pk_wishlist_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_specification` text NOT NULL,
  `approx_cost` int(10) NOT NULL,
  `web_url` text NOT NULL,
  `amount_paid` int(10) NOT NULL,
  `is_amount_completed` int(1) NOT NULL DEFAULT '0',
  `fk_wedding_page_id` int(255) NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_wishlist_item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wishlist_item_table`
--

INSERT INTO `wishlist_item_table` (`pk_wishlist_item_id`, `item_name`, `item_specification`, `approx_cost`, `web_url`, `amount_paid`, `is_amount_completed`, `fk_wedding_page_id`, `fk_user_id`, `status`) VALUES
(1, 'Jeans', 'hllo', 500, 'http://www.w3schools.com/', 0, 0, 1, 1, 1),
(2, 'Top', '', 490, 'http://www.w3schools.com/', 0, 0, 1, 1, 1),
(3, 'asdfsa', 'adfaf', 56, 'http://www.w3schools.com/', 0, 0, 2, 1, 1),
(4, 'Jeans', 'Hi', 500, 'http://www.w3schools.com/', 0, 0, 2, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
