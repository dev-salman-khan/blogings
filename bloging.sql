-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 07:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloging`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_entrydt` varchar(255) DEFAULT NULL,
  `admin_status` int(11) DEFAULT 1,
  `admin_lastname` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `user_deleted_date` varchar(255) DEFAULT NULL,
  `admin_user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_entrydt`, `admin_status`, `admin_lastname`, `phonenumber`, `firstname`, `last_login`, `user_deleted_date`, `admin_user_type`) VALUES
(4, 'admin', 'admin@admin.com', '4a3f953f189ee4be9b955f673e81d9e3', '09-01-23 06:46:33', 1, 'admin', '0610398355', 'admin', '', '', 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_image` text NOT NULL,
  `blog_status` int(11) NOT NULL DEFAULT 1,
  `blog_datetime` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_slug` text NOT NULL,
  `blog_cover_image` varchar(255) NOT NULL,
  `blog_small_description` varchar(255) NOT NULL,
  `blog_add_by` varchar(255) NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_description` text NOT NULL,
  `blog_popular` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_image`, `blog_status`, `blog_datetime`, `blog_description`, `blog_slug`, `blog_cover_image`, `blog_small_description`, `blog_add_by`, `seo_keyword`, `seo_description`, `blog_popular`) VALUES
(1, 'Duplex Appartment Latest Design', 'sgs.jpg', 0, '10-Mar-24', '<p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising a pain wasnad I will give complete take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids</p>\r\n\r\n<p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising is pain wasnad I will give complete take a trivial example, which of us ever undertakes laborious</p>\r\n', 'duplex-appartment-latest-design', 'dsfds.jpg', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', 'admin', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', '1'),
(2, 'Architectural design Represent', 'dsdsd.jpg', 0, '10-Mar-24', '<h2><strong>We never compromize<br />\r\nwith quality work</strong></h2>\r\n\r\n<p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete</p>\r\n', 'architectural-design-represent', 'sdgfs.jpg', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', 'admin', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', '0'),
(3, 'Architectural design Represent 2', 'fgffd.jpg', 0, '06-Mar-2024', '<h2><strong>We never compromize<br />\r\nwith quality work</strong></h2>\r\n\r\n<p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete</p>\r\n', 'architectural-design-represent-2', 'dff.jpg', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', 'admin', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete ', '0'),
(4, 'First Blog', '1730038849.png', 0, 'Oct-27-2024', 'dasd', 'first-blog', '11730038448.jpg', 'dsadsa', '', 'dsaa', 'dsadsa', ''),
(5, 'Salman Khan', '1730134182.png', 1, 'Oct-28-2024', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'salman-khan', '11730134472.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1'),
(6, 'Salman', '1730134191.png', 1, 'Oct-28-2024', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'salman', '11730134482.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'fdgfSome quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', '0'),
(7, 'Javascript Development ', '1730134150.png', 1, 'Oct-28-2024', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'javascript-development-', '11730134150.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiry`
--

CREATE TABLE `product_enquiry` (
  `product_enquiry_id` int(11) NOT NULL,
  `product_enquiry_service_id` varchar(255) NOT NULL,
  `product_enquiry_name` varchar(255) NOT NULL,
  `product_enquiry_phone` varchar(255) NOT NULL,
  `product_enquiry_email` varchar(255) NOT NULL,
  `product_enquiry_details` varchar(255) NOT NULL,
  `product_enquiry_status` int(11) NOT NULL DEFAULT 1,
  `product_enquiry_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_enquiry`
--

INSERT INTO `product_enquiry` (`product_enquiry_id`, `product_enquiry_service_id`, `product_enquiry_name`, `product_enquiry_phone`, `product_enquiry_email`, `product_enquiry_details`, `product_enquiry_status`, `product_enquiry_date`) VALUES
(1, '6', 'Salman Khan', '65686', 'salman@gmail.com', 'fsdfsdfsd', 1, '28-10-2024 05:41:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `product_enquiry`
--
ALTER TABLE `product_enquiry`
  ADD PRIMARY KEY (`product_enquiry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_enquiry`
--
ALTER TABLE `product_enquiry`
  MODIFY `product_enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
