-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 04:19 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hairmeout`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `user_name` varchar(280) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(205) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(105) NOT NULL,
  `name` varchar(105) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category` varchar(205) NOT NULL,
  `image` varchar(205) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category`, `image`) VALUES
(1, 'cantu ', 'leave -in for repair', 'CurlyHair', 'cantu-1651870817.jpeg'),
(2, 'Shea moisture', 'Apply to damp hair after shampooing Massage through mid-lengths and ends, avoiding the roots Leave in for a few minutes Rinse with warm water to remove.', 'CurlyHair', 'shea-1651871654.jpeg'),
(4, 'Cantu shea butter', 'Apply a generous amount to ends and work toward the root Rinse thoroughly with cold water.', 'CurlyHair', 'cantu-shea-1651871794.jpeg'),
(6, ' Garnier ultimate blends vegan hair food aloe vera 3 in 1 normal hair mask', 'Contains aloe vera It forms a protective layer to help hydrate and condition Soothes breakouts and sunburn, too.  to use :  put it through all of your hait for 10-15 mins and wash it with warm water ', 'StraightHair', 'garnier-1651871915.jpeg'),
(7, 'Revelation hair mask conditioner avocado.', ' Apply a generous amount to towel dried hair and comb through Leave for 10-15 minutes Rinse with warm water Apply 1-2 times a week as desired.', 'WavyHair', 'revelation-1651871958.jpeg'),
(8, '  Beauty works pearl nourishing argan oil mask .', 'Apply generously to clean, towel-dried hair and work evenly through mid-shafts to ends Comb through for an even distribution or product (avoid contact with pre-bonded extensions and application on the root) Leave on for 10 minutes, then rinse thoroug', 'StraightHair', 'beauty-1651872004.jpeg'),
(10, 'Giovani shampoo ', 'Massage rich lather into wet hair; rinse thoroughly. For best results, follow with Smooth as Silk™ Deep Moisture Conditioner.', 'StraightHair', 'product1-1651872166.jpeg'),
(11, 'Kinky curly ', 'Gives a shiny look Nourishes and moisturizes Reduces bulk and elongates curls Kinky Curly Curl Custard Gel retains the shine of your hair and protects curly hair that needs lot of attention.', 'CurlyHair', 'curlypro4-1651872255.png'),
(12, 'Maui Moisture', 'Apply desired amount to palms and work through damp or dry hair. Scrunch and then air dry or use a diffuser. Once dry, scrunch again to soften curls.', 'CurlyHair', 'curlypro7-1651872328.png'),
(13, 'John Frieda Frizz-Ease 3 Day Straight Flat Iron Spray', 'Safe For Color Treated And Chemically Treated Hair ,  Protects Against Heat Damage And Blocks Frizz', 'StraightHair', 'straighetprod2-1651872464.jpg'),
(14, 'Apple Cider Vinegar Hair Rinse', 'Wet scalp and hair, then squeeze excess water out Using the bottle tip, create a few small parts in your hair and gently squeeze the product onto your scalp Massage into scalp and hair, leave in 1-3 minutes, and rinse thoroughly. -Vegan, cruelty-free', 'StraightHair', 'straightpro5-1651872606.png'),
(15, 'MOROCCANOIL Intense Hydrating Mask', 'the brand infuses its antioxidant-rich hero oil with nourishing ingredients for a conditioning treatment. Watch the elasticity and texture of your hair improve with added shine.', 'WavyHair', 'p2-1651872785.jpg'),
(16, 'Alfaparf Precious Nature Capri Smooth Hair Shampoo', 'Precious Nature Shampoo is a cleanser to restructure weak, damaged, treated and brittle hair. Its 100% natural formula, made with orange and prickly pear oils, strengthens the hair structure, making it stronger and healthier. Free from sulfates, para', 'StraightHair', 'straightpro7-1651872907.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(2, 1, 'Sarah', 'poor product', 2, '2022-05-07 00:05:46'),
(3, 1, 'nora', 'Superb!', 5, '2022-05-07 00:08:19'),
(4, 13, 'nora', 'I really like this product especially those who expose their hair to heat a lot.', 4, '2022-05-07 00:39:10'),
(5, 10, 'nora', 'Best shampoo i have ever used .', 5, '2022-05-07 00:40:05'),
(6, 8, 'nora', 'Worth a try ', 4, '2022-05-07 00:40:58'),
(7, 6, 'nora', 'Nice smell and i will buy it again ', 5, '2022-05-07 00:42:02'),
(8, 2, 'nora', 'The best moisture everrrr', 5, '2022-05-07 00:42:41'),
(9, 11, 'nora', 'not that good . ', 3, '2022-05-07 00:43:11'),
(10, 12, 'nora', 'perfect prudoct ', 4, '2022-05-07 00:43:38'),
(11, 7, 'nora', 'Best avocado mask \r\n', 4, '2022-05-07 00:45:59'),
(12, 14, 'nora', 'Nice try \r\nworth it ', 3, '2022-05-07 00:47:10'),
(14, 11, 'rana', 'never buy it again ', 1, '2022-05-07 00:51:18'),
(15, 12, 'rana', 'Nice smell and good size ', 3, '2022-05-07 00:51:46'),
(16, 1, 'rana', 'poor prudoct\r\nwont buy again ', 2, '2022-05-07 00:52:18'),
(17, 6, 'rana', 'not that bad ', 3, '2022-05-07 00:52:43'),
(18, 10, 'rana', 'good', 4, '2022-05-07 00:53:05'),
(19, 13, 'rana', 'Sp perfect girllss you have to try it ', 5, '2022-05-07 00:53:52'),
(20, 15, 'rana', 'the smell is not good at all ', 2, '2022-05-07 00:54:28'),
(21, 7, 'rana', 'amazinnng ', 5, '2022-05-07 00:55:12'),
(22, 8, 'rana', 'bad ', 1, '2022-05-07 00:55:32'),
(23, 14, 'rana', 'good plus its vegan free (:  ', 3, '2022-05-07 00:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(101) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(205) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(1, 'Sarah', '123s', 'saraalfaris@gmail.com'),
(2, 'nora', '123n', 'nora@gmail.com'),
(3, 'rana', '123r', 'rana@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(105) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
