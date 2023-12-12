-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mount_bee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_mountbee`
--

CREATE TABLE `admin_mountbee` (
  `adminid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_mountbee`
--

INSERT INTO `admin_mountbee` (`adminid`, `firstname`, `lastname`, `username`, `email`, `password`, `mobileNumber`, `gender`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', '0765770535', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_us_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mnumber` varchar(20) NOT NULL,
  `message` varchar(700) DEFAULT NULL,
  `adminid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_us_id`, `Name`, `email`, `mnumber`, `message`, `adminid`) VALUES
(1, 'chamal', 'chamaljayasinghe8@gmail.com', '075869009', 'hi', 1),
(2, 'Omer ', 'Omer@gmail.com', '0765770535', 'Call Me', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `lname`, `email`, `nic`, `password`, `adminid`) VALUES
(1, 'user', 'user', 'user@gmail.com', '123412345674', '$2y$10$psxaTSL/sKbqygDvhpQ4/e6laMfHvzwswdsjxQz1bM9dGqLrvVcTa', 1),
(2, 'user2', 'user2', 'user2@gmail.com', '12345678', '12345678', 1),
(3, 'user3', 'user3', 'user3@gmail.com', '123456789', '$2y$10$tpdwz.gu8CgvJcgt2q90WewWVQHQ4gsSuPSTqEBWjvy3gASkJTE5q', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE `dining` (
  `dining_id` int(11) NOT NULL,
  `dining_name` varchar(50) NOT NULL,
  `dining_image` varchar(255) DEFAULT NULL,
  `dining_banner_image` varchar(255) DEFAULT NULL,
  `dining_description` varchar(700) DEFAULT NULL,
  `adminid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`dining_id`, `dining_name`, `dining_image`, `dining_banner_image`, `dining_description`, `adminid`) VALUES
(1, 'Coffee Shop', '../IMAGES/DINING/DINING_IMAGE/coffee2.png', '../IMAGES/DINING/DINING_BANNER/coffeemain.png', 'Bright and airy, this dining room offers a relaxing and casual atmosphere for diners. Daily buffet for breakfast and lunch. Open 24 hours the Coffee Shop also features an international a la carte menu with many Asian specialty dishes.', 1),
(2, 'Indian Restaurent', '../IMAGES/DINING/DINING_IMAGE/india1.png', '../IMAGES/DINING/DINING_BANNER/indiamain.png', 'Conjuring images from different parts of India, from rhythms to ragas, Maharajas to Sultans Flavors combines cuisines of divers Indian regions offering diners a most fabulous creation…\r\nWith its bright interiors and warm ambience, the restaurant has an atmosphere of elegance and peacefulness, making it an ideal place to have a family dinner or lunch with friends. The menu selection is a gourmet’s delight hailing from the finest cuisines of each region offering the most authentic and exotic signature dishes.\r\nWith the use of authentic ingredients bringing forth a delicious array oriental dishes, every dish is carefully blended with an innovative twist to create an experience that is familiar ', 1),
(3, 'Italian Restaurent', '../IMAGES/DINING/DINING_IMAGE/italy1.png', '../IMAGES/DINING/DINING_BANNER/italymain.png', 'Taste sweet bliss with our delicate handmade chocolates, moist, delectable cakes and scrumptious desserts or if savory is more to your taste, try our wide selection of pastries, sandwiches, breads and lunch\r\nTaste sweet bliss with our delicate handmade chocolates, moist, delectable cakes and scrumptious desserts or if savory is more to your taste, try our wide selection of pastries, sandwiches, breads and lunch', 1),
(4, 'Sky Lounge', '../IMAGES/DINING/DINING_IMAGE/sky3.png', '../IMAGES/DINING/DINING_BANNER/skymain.png', 'Sky Lounge is Mount Bee chique rooftop bar. Boasting views of the city and coastline below, Sky Lounge offers curated entertainment that changes as the night progresses to suit the mood. Additionally, an impressive A la carte Tapas menu and a number of cocktails carefully crafted by our in-house mixologists, offer guests just the right atmosphere to wind down and enjoy the night.', 1),
(5, 'Pastry Shop', '../IMAGES/DINING/DINING_IMAGE/pastry4.png', '../IMAGES/DINING/DINING_BANNER/pastrymain.png', 'Taste sweet bliss with our delicate handmade chocolates, moist, delectable cakes and scrumptious desserts or if savory is more to your taste, try our wide selection of pastries, sandwiches, breads and lunch', 1),
(6, 'Lily Restaurent', '../IMAGES/DINING/DINING_IMAGE/lily3.png', '../IMAGES/DINING/DINING_BANNER/lilymain.png', 'Starting from tasty appetizers you get to take pleasure in tantalizing main dishes and desserts, while moisturizing your lips with an outstanding Beverage Menu.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dining_booking`
--

CREATE TABLE `dining_booking` (
  `booking_id` int(11) NOT NULL,
  `dining_name` varchar(20) DEFAULT NULL,
  `dbookingdate` date DEFAULT NULL,
  `dbookingtime` varchar(10) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `price` int(10) DEFAULT 10000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `booking_id` int(11) NOT NULL,
  `event_name` varchar(20) DEFAULT NULL,
  `ebookingdate` date DEFAULT NULL,
  `ebookingtime` varchar(10) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT 100000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_booking`
--

INSERT INTO `event_booking` (`booking_id`, `event_name`, `ebookingdate`, `ebookingtime`, `cid`, `price`) VALUES
(2, 'GAGADARA', '2022-05-24', 'night', 1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_number` varchar(30) NOT NULL,
  `Card_type` enum('visa','Master') NOT NULL,
  `Expyear` enum('2022','2023','2024','2025','2026','2027','2028','2029') NOT NULL,
  `Expmonth` enum('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `adminid` int(11) NOT NULL DEFAULT 1,
  `cid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `card_name`, `card_number`, `Card_type`, `Expyear`, `Expmonth`, `amount`, `adminid`, `cid`) VALUES
(1, 'chamal jayasinghe', '1234567812345678', 'visa', '2025', 'April', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile_image`
--

CREATE TABLE `profile_image` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wevent`
--

CREATE TABLE `wevent` (
  `wevent_id` int(11) NOT NULL,
  `wevent_name` varchar(50) NOT NULL,
  `wevent_banner_image` varchar(255) NOT NULL,
  `wevent_image` varchar(255) DEFAULT NULL,
  `wevent_description` varchar(700) DEFAULT NULL,
  `wevent_price` varchar(10) DEFAULT '10000',
  `adminid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wevent`
--

INSERT INTO `wevent` (`wevent_id`, `wevent_name`, `wevent_banner_image`, `wevent_image`, `wevent_description`, `wevent_price`, `adminid`) VALUES
(1, 'ARALIYA BALLROOM', '../IMAGES/wedding/weddingbannergala.jpg', '../IMAGES/wedding/weddingimagecl2a1400.jpg', 'Another very popular wedding venue is the Araliya Ballroom. The spacious ballroom offers a seating capacity of 180 and is ideal for those who wish to celebrate a private wedding reception. Araliya can easily accommodate 200 packs for theatre-style meetings and conferences.', '10000', 1),
(2, 'ORCHID', '../IMAGES/wedding/weddingbanner20.jpg', '../IMAGES/wedding/weddingimage20.jpg', 'Has a capacity of 80 packs in an intimate small banquet area, and is also ideal for conferences and stalls.', '10000', 1),
(3, 'THE VICTORIAN', '../IMAGES/wedding/weddingbannerweddingbannerparty.jpg', '../IMAGES/wedding/weddingimageweddingimageparty.jpg', 'As people today opt for more private and smaller party receptions, this will be the ideal venue.', '10000', 1),
(4, 'The Kingswood', '../IMAGES/wedding/weddingbannerweddingbannerconferens.jpg', '../IMAGES/wedding/weddingimageweddingimageconf.jpg', 'The Kingswood Hall is a private and comfy smaller venue for a maximum of 100 packs and is best for board meetings and other such private gatherings.', '10000', 1),
(5, 'GAGADARA', '../IMAGES/wedding/weddingbannerweddingbanneroutdoorbaner.jpg', '../IMAGES/wedding/weddingimageweddingbanneroutdoor2.jpg', 'As people today opt for small wedding receptions, this will be the ideal venue.', '10000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_mountbee`
--
ALTER TABLE `admin_mountbee`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_us_id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`dining_id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `dining_booking`
--
ALTER TABLE `dining_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `profile_image`
--
ALTER TABLE `profile_image`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `wevent`
--
ALTER TABLE `wevent`
  ADD PRIMARY KEY (`wevent_id`),
  ADD KEY `adminid` (`adminid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_mountbee`
--
ALTER TABLE `admin_mountbee`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dining`
--
ALTER TABLE `dining`
  MODIFY `dining_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dining_booking`
--
ALTER TABLE `dining_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_image`
--
ALTER TABLE `profile_image`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wevent`
--
ALTER TABLE `wevent`
  MODIFY `wevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin_mountbee` (`adminid`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin_mountbee` (`adminid`);

--
-- Constraints for table `dining`
--
ALTER TABLE `dining`
  ADD CONSTRAINT `dining_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin_mountbee` (`adminid`);

--
-- Constraints for table `dining_booking`
--
ALTER TABLE `dining_booking`
  ADD CONSTRAINT `dining_booking_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);

--
-- Constraints for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD CONSTRAINT `event_booking_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`adminid`) REFERENCES `admin_mountbee` (`adminid`);

--
-- Constraints for table `profile_image`
--
ALTER TABLE `profile_image`
  ADD CONSTRAINT `profile_image_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);

--
-- Constraints for table `wevent`
--
ALTER TABLE `wevent`
  ADD CONSTRAINT `wevent_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin_mountbee` (`adminid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
