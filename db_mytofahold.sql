-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 03:24 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mytofah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `status`) VALUES
(1, 'About Us', '<br><p>THIS IS FOR TESTING ONLY....<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(100) DEFAULT NULL,
  `blog_description` text,
  `blog_category` varchar(100) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `featured_image` text,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_description`, `blog_category`, `author`, `created_date`, `featured_image`, `status`) VALUES
(1, 'My blog', 'This is my first blog here..<br>', '["2","3"]', 'Mr david', '2016-04-02 10:05:39', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_slug` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `contact_table` (
  `pk_contact_id` int(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(500) NOT NULL,
  `contact_reference` varchar(20) NOT NULL COMMENT 'google or facebook',
  `is_invitation_sent` int(1) NOT NULL DEFAULT '0',
  `fk_wedding_page_id` int(255) NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `content` text,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `address`, `phone`, `email`, `content`, `status`) VALUES
(1, 'Contact Us', '411, Princes Business Skypark, Agra-Bombay Rd, L I G Colony, Indore, Madhya Pradesh 452001', '0731 409 2411', 'Test@gmail.com', '<p>Welcome to My Tofah<br></p><p>Feel free to contact with us.<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `siterole_id` int(2) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  `is_reset` bit(1) DEFAULT b'0',
  `reset_email_sent_date` datetime DEFAULT NULL,
  `log_in` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `useremail`, `password`, `siterole_id`, `status`, `is_reset`, `reset_email_sent_date`, `log_in`) VALUES
(1, 'admin@mytofah.com', '123456', 1, 1, b'0', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `pk_payment_id` int(255) NOT NULL,
  `amount_paid` int(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_date` datetime NOT NULL,
  `fk_contact_id` int(255) NOT NULL,
  `fk_wedding_item_id` int(255) NOT NULL,
  `fk_wedding_page_id` int(255) NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture_table`
--

CREATE TABLE `picture_table` (
  `pk_picture_id` int(255) NOT NULL,
  `picture_path` text NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `fk_wedding_page_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usersessiontable`
--

CREATE TABLE `usersessiontable` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `last_activity` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `siterole_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `user_registration_table` (
  `pk_user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_page_table`
--

CREATE TABLE `wedding_page_table` (
  `pk_wedding_page_id` int(255) NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `spause_name` varchar(255) NOT NULL,
  `wedding_date` datetime NOT NULL,
  `venue` text NOT NULL,
  `date_to_keep_list_open` datetime NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `couple_summery` text NOT NULL,
  `is_amount_withdrawl` int(1) NOT NULL DEFAULT '0',
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_item_table`
--

CREATE TABLE `wishlist_item_table` (
  `pk_wishlist_item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_specification` text NOT NULL,
  `approx_cost` int(10) NOT NULL,
  `web_url` text NOT NULL,
  `amount_paid` int(10) NOT NULL,
  `is_amount_completed` int(1) NOT NULL DEFAULT '0',
  `fk_wedding_page_id` int(255) NOT NULL,
  `fk_user_id` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`pk_contact_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`pk_payment_id`);

--
-- Indexes for table `picture_table`
--
ALTER TABLE `picture_table`
  ADD PRIMARY KEY (`pk_picture_id`);

--
-- Indexes for table `usersessiontable`
--
ALTER TABLE `usersessiontable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration_table`
--
ALTER TABLE `user_registration_table`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- Indexes for table `wedding_page_table`
--
ALTER TABLE `wedding_page_table`
  ADD PRIMARY KEY (`pk_wedding_page_id`);

--
-- Indexes for table `wishlist_item_table`
--
ALTER TABLE `wishlist_item_table`
  ADD PRIMARY KEY (`pk_wishlist_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `pk_contact_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `pk_payment_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `picture_table`
--
ALTER TABLE `picture_table`
  MODIFY `pk_picture_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usersessiontable`
--
ALTER TABLE `usersessiontable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user_registration_table`
--
ALTER TABLE `user_registration_table`
  MODIFY `pk_user_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wedding_page_table`
--
ALTER TABLE `wedding_page_table`
  MODIFY `pk_wedding_page_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist_item_table`
--
ALTER TABLE `wishlist_item_table`
  MODIFY `pk_wishlist_item_id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
