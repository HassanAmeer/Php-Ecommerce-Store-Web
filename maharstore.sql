-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2022 at 07:37 AM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maharstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(111) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `desc_msgs` varchar(250) NOT NULL DEFAULT '0',
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `desc_msgs`, `msg_date`) VALUES
(14, 'test2', 'test@gmail.com', 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. ', '2022-08-16 18:17:13'),
(3, 'maarkhoor', 'maarkhoor5@gmail.com', 'something', '2022-08-16 16:10:51'),
(4, 'test', 'test@gmail.com', 'something test', '2022-08-16 18:03:13'),
(5, 'test', 'test@gmail.com', 'something test', '2022-08-16 18:03:29'),
(6, 'test', 'test@gmail.com', 'something test', '2022-08-16 18:03:52'),
(8, 'test', 'test@gmail.com', 'something test', '2022-08-16 18:06:42'),
(11, 'test2', 'test2@gmail.com2', 'enje', '2022-08-16 18:09:21'),
(12, 'test2', 'test2@gmail.com2', 'enje', '2022-08-16 18:09:59'),
(15, 'test2', 'test@gmail.com', 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. ', '2022-08-16 18:23:12'),
(16, 'test2', 'test@gmail.com', 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. ', '2022-08-16 18:23:13'),
(17, 'test2', 'test@gmail.com', 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. ', '2022-08-16 18:23:15'),
(18, 'test2', 'test@gmail.com', 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. ', '2022-08-16 18:23:16'),
(19, 'test2', 'test@gmail.com', 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. ', '2022-08-16 18:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `c_orders`
--

CREATE TABLE `c_orders` (
  `id` int(250) NOT NULL,
  `orderid` varchar(150) NOT NULL DEFAULT '0',
  `cname` varchar(100) NOT NULL DEFAULT '0',
  `cemail` varchar(100) NOT NULL DEFAULT '0',
  `cphone` varchar(100) NOT NULL DEFAULT '0',
  `item_name` varchar(100) NOT NULL DEFAULT '0',
  `item_img` varchar(150) NOT NULL DEFAULT '0',
  `item_size` varchar(100) NOT NULL DEFAULT '0',
  `item_price` float NOT NULL DEFAULT '0',
  `item_quantity` int(10) NOT NULL DEFAULT '0',
  `total_price` float NOT NULL DEFAULT '0',
  `tr_id` varchar(250) NOT NULL DEFAULT '0',
  `payby` varchar(30) NOT NULL DEFAULT 'Tr_id',
  `payments_paid` varchar(50) NOT NULL DEFAULT 'Due',
  `shipping_statues` varchar(50) NOT NULL DEFAULT 'Recent',
  `cmsg` varchar(250) NOT NULL DEFAULT '0',
  `country` varchar(50) NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL DEFAULT '0',
  `postal_code` int(20) NOT NULL DEFAULT '0',
  `address` varchar(180) NOT NULL DEFAULT '0',
  `ip_address` varchar(100) NOT NULL DEFAULT '0',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `c_orders`
--

INSERT INTO `c_orders` (`id`, `orderid`, `cname`, `cemail`, `cphone`, `item_name`, `item_img`, `item_size`, `item_price`, `item_quantity`, `total_price`, `tr_id`, `payby`, `payments_paid`, `shipping_statues`, `cmsg`, `country`, `city`, `postal_code`, `address`, `ip_address`, `order_time`) VALUES
(8, '1661228544', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'hp laptop', '413KJSDjeBL._AC_SY780_.jpg', '19', 13000, 1, 15000, '17827436266181', 'Tr_id', 'Due', 'Recent', 'with minimum 8gb ram plz', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:22:31'),
(7, '1661228438', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'simple suits', '51BkzDWPlXL._AC_UY580_.jpg', '10', 2199, 4, 10796, '1852790137737182', 'Tr_id', 'Paid', 'InProgress', 'blue and white ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:21:13'),
(6, '1661228246', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'man shirt', '91MeE45z5zL._AC_UY580_.jpg', '8', 1199, 2, 4398, '7864215534', 'Tr_id', 'Due', 'Recent', 'need only in gray color', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:18:08'),
(5, '1661139816', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'MAUGELY', '61IkMhHaJiL._AC_UY1000_.jpg', '10', 7599, 2, 16198, '7861234567890', 'Tr_id', 'Due', 'Delivered', 'need this in white and yellow ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-22 05:55:22'),
(9, '1661228697', 'maarkhoor', 'maarkhoor5@gmail.com', '03099999999', 'joging cloth', '71st96XJMBL._AC_UY580_.jpg', '8', 1399, 2, 4798, '727277236151919292', 'Tr_id', 'Paid', 'InProgress', 'blue and gray  ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:25:06'),
(10, '1661230159', 'maarkhoor', 'maarkhoor5@gmail.com', '099068686', 'polo shirt', '51GJ3hmwXGL._AC_UY580_.jpg', '8', 1399, 2, 4798, '474732902293838', 'Tr_id', 'Due', 'Recent', 'hi plz need this in red and white ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:49:31'),
(11, '1661232648', 'maarkhoor', 'maarkhoor5@gmail.com', '03976131', 'Maugely', '61oeJXsrwLL._AC_UY1000_.jpg', '', 4999, 4, 21996, '82724726781822112747472882', 'Tr_id', 'Due', 'Return', 'need 7 to 10 numbers in white yellow', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 05:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `items_by_admin`
--

CREATE TABLE `items_by_admin` (
  `id` int(111) NOT NULL,
  `img` varchar(200) NOT NULL DEFAULT 'no have',
  `vtitle` varchar(30) NOT NULL DEFAULT 'just look',
  `vdesc` varchar(200) NOT NULL DEFAULT 'just look',
  `vprice` float NOT NULL DEFAULT '0',
  `vsize` varchar(20) NOT NULL DEFAULT '10',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vcategory` varchar(30) NOT NULL DEFAULT 'soprts'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items_by_admin`
--

INSERT INTO `items_by_admin` (`id`, `img`, `vtitle`, `vdesc`, `vprice`, `vsize`, `time`, `vcategory`) VALUES
(23, '61IkMhHaJiL._AC_UY1000_.jpg', 'MAUGELY', 'MAUGELY Men’s Soccer Shoes Outdoor Indoor High-top Ankle Turf Boots AG FG Men Size Professional Football Boots', 7599, '15', '2022-08-18 06:05:36', 'sports'),
(22, '61MZ+ay1i8L._AC_UY1000_.jpg', 'MAUGELY', 'MAUGELY Men’s Soccer Shoes Outdoor Indoor High-top Ankle Turf Boots AG FG Men Size Professional Football Boots', 5999, '15', '2022-08-18 06:04:16', 'sports'),
(21, '61oeJXsrwLL._AC_UY1000_.jpg', 'Maugely', 'MAUGELY Men’s Soccer Shoes Outdoor Indoor High-top Ankle Turf Boots AG FG Men Size Professional Football Boots', 4999, '16', '2022-08-18 06:02:47', 'sports'),
(20, '51m3FA0qHQS._AC_UY1000_.jpg', 'sports Shoes', 'Hightop Cleats Soccer Shoes Indoor Youth Training Athletic Football Team Turf Shoes', 2299, '', '2022-08-18 06:00:44', 'sports'),
(19, '51EsvvwiR0S._AC_UY1000_ - 2022-08-18T105700.503.jpg', 'sports Shoes', 'Unisex\'s Hightop Cleats Soccer Shoes Indoor Youth Training Athletic Football Team Turf Shoes', 1899, '17', '2022-08-18 05:57:51', 'sports'),
(24, '313eB2m8RkL._AC_SY580_.jpg', 'MDHANBK', 'MDHANBK Women\'s sandals fashion sweet buckle summer shoes pink casual shoes simple woman shoes', 3999, '15', '2022-08-18 06:10:20', 'fshoes'),
(25, '31DbAf1wExL._AC_SY580_.jpg', 'MDHANBK', 'MDHANBK Women\'s sandals fashion sweet buckle summer shoes pink casual shoes simple woman shoes', 3899, '11', '2022-08-18 06:11:42', 'fshoes'),
(26, '71wCtiCIxAL._AC_UY1000_.jpg', 'Madden', 'Madden Girl Women\'s Beella Heeled Sandal\r\n', 4099, '14', '2022-08-18 06:13:47', 'fshoes'),
(27, '71rqbiR4-NL._AC_UY1000_.jpg', 'Madden', 'Madden Girl Women\'s Beella Heeled Sandal\r\n', 4899, '15', '2022-08-18 06:15:41', 'fshoes'),
(28, '71CNdgTezqL._AC_UY1000_.jpg', 'drop shoes', 'The Drop Women\'s Monika Flat H-Band Slide Sandal', 6799, '11', '2022-08-18 06:19:07', 'fshoes'),
(29, '61jZ2jnwKIL._AC_UY1000_.jpg', 'dropslide shoes', 'The Drop Women\'s Monika Flat H-Band Slide Sandal', 6599, '11', '2022-08-18 06:19:56', 'fshoes'),
(30, '51fhjpsePJL._AC_UY580_.jpg', 'puma shoes', 'PUMA Unisex\'s Purecat Beach & Pool Shoes', 2300, '8', '2022-08-18 06:22:11', 'mshoes'),
(31, '712f9+mBsVL._AC_UY580_.jpg', 'fish shoes', 'Coddies Fish Flops | The Original Fish Slippers | Funny Gift, Unisex Sandals, Flip Flops, Bass Slides, Pool, Beach & Shower Shoes | Men, Women & Kids', 1499, '8', '2022-08-18 06:25:37', 'mshoes'),
(32, '61ZR83JUYWL._AC_UY580_.jpg', 'lobster shoes', 'Coddies lobster Flops | The Original Fish Slippers | Funny Gift, Unisex Sandals, Flip Flops, Bass Slides, Pool, Beach & Shower Shoes | Men, Women & Kids', 1799, '9', '2022-08-18 06:28:39', 'mshoes'),
(33, '51OEHfwAUfS._AC_UY580_ (1).jpg', 'parrot', 'HANDKEI Summer unisex parrot slippers children cartoon animal slippers funny parrot beach slippers sandals', 1699, '8', '2022-08-18 06:33:04', 'fshoes'),
(34, '81QEerCPcpL._AC_UY1000_.jpg', 'Toe sandle', 'Caterpillar Men\'s Giles Open Toe Sandals', 1899, '10', '2022-08-18 06:38:36', 'mshoes'),
(35, '61WQ+RehifS._AC_UY1000_.jpg', 'addidas', 'adidas Men\'s Adilette Comfort Adjustable Slides Sandal', 1799, '7', '2022-08-18 06:45:39', 'mshoes'),
(36, '71st96XJMBL._AC_UY580_.jpg', 'joging cloth', ' Men\'s Casual Warm Tracksuit Set Long Sleeve Full-Zip Athletic Jogging Sweat Suits', 1399, '8', '2022-08-18 06:47:41', 'mcloth'),
(37, '91MeE45z5zL._AC_UY580_.jpg', 'man shirt', 'Real Essentials 5 Pack: Men’s Dry-Fit Moisture Wicking Active Athletic Performance Crew T-Shirt', 1199, '8', '2022-08-18 06:48:47', 'mcloth'),
(38, '51GJ3hmwXGL._AC_UY580_.jpg', 'polo shirt', 'Becker Men\'s Slim Fit Polo Shirt T-Shirt Short Sleeve Top 100% Cotton', 1399, '8', '2022-08-18 06:49:59', 'mcloth'),
(39, '61DYySOrnsS._AC_UY1000_.jpg', 'black fire', 'WANGSHE Men 2 Piece Outfits Summer Casual Muscle Short Sleeve Graphic Tee Shirts and Classic Fit Sport Shorts Set Tracksuit Black, XL', 600, '9', '2022-08-18 06:52:41', 'mcloth'),
(40, '51BkzDWPlXL._AC_UY580_.jpg', 'simple suits', 'Short Sleeve Men\'s African Shirt Breathable Cotton Traditional Dashiki Crew Collar Shirts Slim Fit Tops', 2199, '10', '2022-08-18 06:55:24', 'mcloth'),
(41, '71UYEmNNbVL._AC_UY1000_.jpg', 'zip shirt', 'Autumn and Winter Women\'s Mid Length Zip Outwear Sweater Simple Solid Color\r\n', 1100, '8', '2022-08-18 06:58:37', 'fcloth'),
(42, '71QYKR2iRbL._AC_SX960_SY720_.jpg', 'hoody shirt', 'Miagooo Uneven Hemline Hoody Shirt Pocket Tunic Long Sleeve Casual Tops', 1400, '11', '2022-08-18 07:00:12', 'fcloth'),
(43, '81CJqgwUtOL._AC_UY1000_.jpg', 'notch neck', 'Miagooo Womens Long Sleeve Notch Neck T Shirts Color Block Striped Casual Blouses Tops', 1100, '8', '2022-08-18 07:01:32', 'fcloth'),
(44, 'images (8).jpeg', 'notch neck', 'Miagooo Womens Long Sleeve Notch Neck T Shirts Color Block Striped Casual Blouses Tops', 1400, '9', '2022-08-18 07:03:36', 'fcloth'),
(45, '71qNX0wixBL._AC_UY1000_.jpg', 'Smartwatch', 'Fossil Gen 5 Carlyle Stainless Steel Touchscreen Smartwatch with Speaker, Heart Rate, GPS, Contactless Payments, and Smartphone Notifications', 4000, '10', '2022-08-18 07:05:42', 'watch'),
(46, '41DeVlJI0WL._AC_SY580_.jpg', 'apple watch', 'Apple Watch Series 7 [GPS 41mm] Smart Watch w/ Blue Aluminum Case with Abyss Blue Sport Band. Fitness Tracker, Blood Oxygen & ECG Apps, Always-On Retina Display, Water Resistant', 800, '10', '2022-08-18 07:06:50', 'watch'),
(47, '71e-7qL7O2L._AC_UY1000_.jpg', 'smart watch', '869\r\nFossil Gen 6 42mm Touchscreen Smartwatch with Alexa Built-In, Heart Rate, Blood Oxygen, GPS, Contactless Payments, Speaker, Smartphone Notifications', 1400, '8', '2022-08-18 07:07:33', 'watch'),
(48, '41RtQdWsT4L._AC_SY580_.jpg', 'Gps Smart Watch', 'Garmin Venu, GPS Smartwatch with Bright Touchscreen Display, Features Music, Body Energy Monitoring, Animated Workouts, Pulse Ox Sensor and More, Rose Gold with Tan Band', 1100, '8', '2022-08-18 07:08:26', 'watch'),
(49, '31A6IQbLNrL._AC_SY780_.jpg', 'wifi booster', 'NETGEAR WiFi Booster Range Extender | WiFi Extender Booster | WiFi Repeater Internet Booster | Covers up to 1000 sq ft and 15 devices | AC750 (EX3700)', 2100, '10', '2022-08-18 07:11:19', 'electric'),
(50, '31Z-sQl1F4L._AC_SY350_.jpg', 'tp-link', 'TP-Link AC750 Universal Dual Band Range Extender, Broadband/Wi-Fi Extender, Wi-Fi Booster/Hotspot with Ethernet Port, Plug and Play, Smart Signal Indicator, UK Plug (RE220)', 1399, '10', '2022-08-18 07:13:40', 'electric'),
(51, '413KJSDjeBL._AC_SY780_.jpg', 'hp laptop', '2022 Newest Lenovo Ideapad 3 Laptop, 15.6\" HD Touchscreen, 11th Gen Intel Core i3-1115G4 Processor, 8GB DDR4 RAM, 256GB PCIe NVMe SSD, HDMI, Webcam, Wi-Fi 5, Bluetooth, Windows 11 Home', 13000, '16', '2022-08-18 07:15:08', 'electric'),
(52, '41V7ddj75tL._AC_SY350_QL15_.jpg', 'gaming pad', 'Retro-Bit Tribute 64 Wired N64 Controller for Nintendo 64 - Original Port - (Atomic Purple)', 3000, '6', '2022-08-18 07:16:01', 'electric'),
(53, '81IIhjlZ1oL._AC_UY1000_FMwebp_.webp', 'gift combo set', 'Make yourself a pleasure or offer as a gift this perfect present for Christmas, Birthday, Mothers Day, San Valentine or any celebration. Privilege ...', 21999, '10', '2022-08-18 07:18:04', 'jewlery'),
(54, '81ASjDFcxcL._AC_UY580_FMwebp_.webp', 'peora set', 'Peora Crystal Pearl Traditional Ethnic Bridal Choker Necklace with Earrings Jewellery Set for Women Girls\r\n', 4699, '', '2022-08-18 07:18:58', 'jewlery'),
(55, '71UspiEzfZL._AC_UY580_FMwebp_.webp', 'gold necklace', 'Jewels Galaxy Tantalizing Gold Plated Necklace', 4000, '8', '2022-08-18 07:20:38', 'jewlery'),
(56, '8192LKdhbeL._AC_UY780_.jpg', 'gift set', 'Gift Set Women\'s Watch - Jewelry Set- Necklace-Ring- Earrings', 4000, '7', '2022-08-18 07:22:03', 'jewlery');

-- --------------------------------------------------------

--
-- Table structure for table `notifiy`
--

CREATE TABLE `notifiy` (
  `id` int(111) NOT NULL,
  `bell_from` varchar(50) NOT NULL DEFAULT 'Store',
  `bell_to` varchar(150) NOT NULL DEFAULT '0',
  `msgs` varchar(500) NOT NULL DEFAULT 'thank you for orders you can access tgis page from bottom page of the store for see the statics of your product request',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifiy`
--

INSERT INTO `notifiy` (`id`, `bell_from`, `bell_to`, `msgs`, `date`) VALUES
(1, 'Store', 'itxtxtbell', 'e', '2022-08-20 13:12:49'),
(2, 'Store', 'itxtxtbell', '', '2022-08-20 13:17:11'),
(3, 'Store', 'itxtxtbell', 'js', '2022-08-20 13:24:59'),
(4, 'Store', 'itxtxtbell', 'sk', '2022-08-20 13:25:05'),
(5, 'Store', 'itxtxtbell', '', '2022-08-20 13:26:26'),
(6, 'Store', 'itxtxtbell', '', '2022-08-20 13:26:28'),
(7, 'Store', 'itxtxtbell', '', '2022-08-20 13:26:29'),
(8, 'Store', 'itxtxtbell', 'bzbbsb', '2022-08-20 13:27:00'),
(9, 'Store', 'maarkhoor5@gmail.com', 'bzbbsb', '2022-08-20 13:27:02'),
(10, 'Store', 'maarkhoor5@gmail.com', 'bzbbsb', '2022-08-20 13:27:02'),
(11, 'Store', 'itxtxtbell', 'jd', '2022-08-20 13:27:30'),
(12, 'Store', 'itxtxtbell', 'cc', '2022-08-20 13:27:35'),
(13, 'Store', 'itxtxtbell', 'c', '2022-08-20 14:01:09'),
(14, 'Store', 'itxtxtbell', 'f', '2022-08-20 14:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(111) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `phone` varchar(100) NOT NULL DEFAULT '0',
  `prod_name` varchar(50) NOT NULL DEFAULT 'not choosed',
  `prod_price` float NOT NULL DEFAULT '0',
  `prod_size` varchar(20) NOT NULL DEFAULT 'any',
  `prod_color` varchar(20) NOT NULL DEFAULT 'any',
  `prod_img` varchar(250) NOT NULL DEFAULT '0',
  `prod_quantity` int(50) NOT NULL DEFAULT '0',
  `prod_vpayments` varchar(20) NOT NULL DEFAULT 'due',
  `tr_id` varchar(100) NOT NULL DEFAULT '0',
  `ifpay_bytrid` varchar(10) NOT NULL DEFAULT 'yes',
  `prod_status` varchar(50) NOT NULL DEFAULT 'recent',
  `user_msgs` varchar(250) NOT NULL DEFAULT '0',
  `country` varchar(20) NOT NULL DEFAULT '0',
  `city` varchar(20) NOT NULL DEFAULT '0',
  `adress` varchar(200) NOT NULL DEFAULT '0',
  `postal_code` varchar(20) NOT NULL DEFAULT '0',
  `ip_adresd` varchar(50) NOT NULL DEFAULT '0',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_tax`
--

CREATE TABLE `shipping_tax` (
  `id` int(111) NOT NULL,
  `vcountry` varchar(20) NOT NULL DEFAULT 'Pakistan',
  `vtax` float NOT NULL DEFAULT '0',
  `othertax` float NOT NULL DEFAULT '1000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping_tax`
--

INSERT INTO `shipping_tax` (`id`, `vcountry`, `vtax`, `othertax`) VALUES
(1, 'pakistan', 2000, 1000),
(2, 'india', 700, 1000),
(3, 'turky', 4500, 1000),
(4, 'japan', 8000, 1000),
(5, 'Usa', 709, 1000),
(6, 'Afghanistan', 500, 1000),
(7, 'Uk', 6000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `store_stngs`
--

CREATE TABLE `store_stngs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'admin',
  `pass` varchar(50) NOT NULL DEFAULT '786',
  `profile` varchar(100) NOT NULL DEFAULT 'no',
  `bell` varchar(100) NOT NULL DEFAULT 'anounce soon',
  `ntitle` varchar(50) NOT NULL DEFAULT 'mahastore',
  `ndesc` varchar(250) NOT NULL DEFAULT 'soon',
  `vpay_page` varchar(20) NOT NULL DEFAULT 'bydirect',
  `email` varchar(100) NOT NULL DEFAULT 'maarkhoor5@gmail.com',
  `t_visitor` int(250) NOT NULL DEFAULT '0',
  `logo` varchar(150) NOT NULL DEFAULT '0',
  `headbgimg` varchar(200) NOT NULL DEFAULT '0',
  `baner1` varchar(150) NOT NULL DEFAULT '0',
  `shoesbg` varchar(200) NOT NULL DEFAULT '0',
  `voucherv0` int(2) NOT NULL DEFAULT '0',
  `acc_holder_name` varchar(30) NOT NULL DEFAULT 'Admin',
  `acc_number` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_stngs`
--

INSERT INTO `store_stngs` (`id`, `name`, `pass`, `profile`, `bell`, `ntitle`, `ndesc`, `vpay_page`, `email`, `t_visitor`, `logo`, `headbgimg`, `baner1`, `shoesbg`, `voucherv0`, `acc_holder_name`, `acc_number`) VALUES
(1, 'admino', '8c7e0a569a77041fd89ece0eef85d956', 'Screenshot_20220816-091454.png', 'announced Soon', 'Mahar Store', 'something about store', 'bytrid', 'maarkhoor5@gmail.com', 793, 'logo2_180x.png', 'banerstore.jpg', 'paper-art-shopping-online-on-smartphone-and-new-buy-sale-promotion-pink-backgroud-for-banner-market-ecommerce-free-vector.jpg', 'product-8.png', 0, 'Ammar Hasan', '786-123-123-111');

-- --------------------------------------------------------

--
-- Table structure for table `vochercode`
--

CREATE TABLE `vochercode` (
  `id` int(111) NOT NULL,
  `vcode` varchar(250) NOT NULL DEFAULT '0',
  `vpercentage` int(30) NOT NULL DEFAULT '0',
  `vexpired` varchar(250) NOT NULL DEFAULT '0',
  `gen_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vochercode`
--

INSERT INTO `vochercode` (`id`, `vcode`, `vpercentage`, `vexpired`, `gen_date`) VALUES
(10, 'today voucher', 5, '1660748174', '2022-08-16 15:26:14'),
(11, 'today voucher', 5, '1660578997', '2022-08-16 15:26:37'),
(13, 'tijr8b8ri', 50, '1660977786', '2022-08-18 07:43:06'),
(14, 'start21', 70, '1661494082', '2022-08-21 08:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_orders`
--

CREATE TABLE `waiting_orders` (
  `id` int(250) NOT NULL,
  `orderid` varchar(150) NOT NULL DEFAULT '0',
  `cname` varchar(100) NOT NULL DEFAULT '0',
  `cemail` varchar(100) NOT NULL DEFAULT '0',
  `cphone` varchar(100) NOT NULL DEFAULT '0',
  `item_name` varchar(100) NOT NULL DEFAULT '0',
  `item_img` varchar(150) NOT NULL DEFAULT '0',
  `item_size` varchar(100) NOT NULL DEFAULT '0',
  `item_price` float NOT NULL DEFAULT '0',
  `item_quantity` int(10) NOT NULL DEFAULT '0',
  `total_price` float NOT NULL DEFAULT '0',
  `tr_id` varchar(250) NOT NULL DEFAULT '0',
  `payments_paid` varchar(50) NOT NULL DEFAULT '0',
  `shipping_statues` varchar(50) NOT NULL DEFAULT '0',
  `cmsg` varchar(250) NOT NULL DEFAULT '0',
  `country` varchar(50) NOT NULL DEFAULT '0',
  `city` varchar(50) NOT NULL DEFAULT '0',
  `postal_code` int(20) NOT NULL DEFAULT '0',
  `address` varchar(180) NOT NULL DEFAULT '0',
  `ip_address` varchar(100) NOT NULL DEFAULT '0',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waiting_orders`
--

INSERT INTO `waiting_orders` (`id`, `orderid`, `cname`, `cemail`, `cphone`, `item_name`, `item_img`, `item_size`, `item_price`, `item_quantity`, `total_price`, `tr_id`, `payments_paid`, `shipping_statues`, `cmsg`, `country`, `city`, `postal_code`, `address`, `ip_address`, `order_time`) VALUES
(1, '786', 'maarkhoor2', 'maarkhoor5@gmail.com2', '03091111111', 'brown watch', 'watch.png', '8', 500, 3, 1500, '09876543321', 'paid', 'recent', 'Why have can provide me a blue color watch', 'pakistan', 'kahror pacca', 91300, 'chanfni chowk kahror pacca', '192.34.453.33', '2022-08-20 03:23:51'),
(2, '1661100391', 'maarkhoor', 'maarkhoor5@gmail.com', '0309', '', '413KJSDjeBL._AC_SY780_.jpg', '', 13000, 4, 53000, '0', '0', '0', 'need in white color', 'Benin', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-21 16:46:31'),
(3, '1661139816', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'MAUGELY', '61IkMhHaJiL._AC_UY1000_.jpg', '10', 7599, 2, 16198, '0', '0', '0', 'need this in white and yellow ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-22 03:43:36'),
(4, '1661228164', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'man shirt', '91MeE45z5zL._AC_UY580_.jpg', '8', 1199, 2, 4398, '0', '0', '0', 'need only white color', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:16:04'),
(5, '1661228246', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'man shirt', '91MeE45z5zL._AC_UY580_.jpg', '8', 1199, 2, 4398, '0', '0', '0', 'need only in gray color', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:17:26'),
(6, '1661228438', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'simple suits', '51BkzDWPlXL._AC_UY580_.jpg', '10', 2199, 4, 10796, '0', '0', '0', 'blue and white ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:20:38'),
(7, '1661228544', 'maarkhoor', 'maarkhoor5@gmail.com', '0300', 'hp laptop', '413KJSDjeBL._AC_SY780_.jpg', '19', 13000, 1, 15000, '0', '0', '0', 'with minimum 8gb ram plz', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:22:24'),
(8, '1661228697', 'maarkhoor', 'maarkhoor5@gmail.com', '03099999999', 'joging cloth', '71st96XJMBL._AC_UY580_.jpg', '8', 1399, 2, 4798, '0', '0', '0', 'blue and gray  ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:24:57'),
(9, '1661230159', 'maarkhoor', 'maarkhoor5@gmail.com', '099068686', 'polo shirt', '51GJ3hmwXGL._AC_UY580_.jpg', '8', 1399, 2, 4798, '0', '0', '0', 'hi plz need this in red and white ', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 04:49:19'),
(10, '1661232611', 'maarkhoor', 'maarkhoor5@gmail.com', '', 'Maugely', '61oeJXsrwLL._AC_UY1000_.jpg', '', 4999, 4, 21996, '0', '0', '0', 'need 7 to 10 numbers in white yellow', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 05:30:11'),
(11, '1661232637', 'maarkhoor', 'maarkhoor5@gmail.com', '03976131', 'Maugely', '61oeJXsrwLL._AC_UY1000_.jpg', '8', 4999, 4, 21996, '0', '0', '0', 'need 7 to 10 numbers in white yellow', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 05:30:37'),
(12, '1661232648', 'maarkhoor', 'maarkhoor5@gmail.com', '03976131', 'Maugely', '61oeJXsrwLL._AC_UY1000_.jpg', '', 4999, 4, 21996, '0', '0', '0', 'need 7 to 10 numbers in white yellow', 'pakistan', 'kahror pacca', 91300, 'kahror pacca chandni chowk', '::1', '2022-08-23 05:30:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_orders`
--
ALTER TABLE `c_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_by_admin`
--
ALTER TABLE `items_by_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifiy`
--
ALTER TABLE `notifiy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_tax`
--
ALTER TABLE `shipping_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_stngs`
--
ALTER TABLE `store_stngs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vochercode`
--
ALTER TABLE `vochercode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiting_orders`
--
ALTER TABLE `waiting_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `c_orders`
--
ALTER TABLE `c_orders`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `items_by_admin`
--
ALTER TABLE `items_by_admin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `notifiy`
--
ALTER TABLE `notifiy`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_tax`
--
ALTER TABLE `shipping_tax`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_stngs`
--
ALTER TABLE `store_stngs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vochercode`
--
ALTER TABLE `vochercode`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `waiting_orders`
--
ALTER TABLE `waiting_orders`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
