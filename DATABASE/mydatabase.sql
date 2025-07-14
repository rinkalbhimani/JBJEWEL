-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 12:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `about-us`
--

CREATE TABLE `about-us` (
  `a_id` int(10) NOT NULL,
  `a_desc` varchar(2000) NOT NULL,
  `a_img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about-us`
--

INSERT INTO `about-us` (`a_id`, `a_desc`, `a_img`) VALUES
(1, 'This project will be basic for the development & implementation of the computerized system for better efficiently, effective utilization.\r\n 	Study has been conducted to understand the current processes being followed by the “Jewellery Shop”.\r\n 	An online jewellery design the main goal of this project was to create dynamic website, which allows customers to provide information about the jewellery products online.\r\n 	Moreover, the project is also designed in such a way it lets managers manage the products information.\r\n 	Customers are only getting the information about the Jewellery products, and they will be contacted to further process for by the jewellery.\r\n 	In today’s busy world, people don’t have time for their personal needs.\r\n 	If someone buy new things and he/she want to get information about jewellery with the help of internet.\r\n 	\r\n 	This website makes use of digital technology for managing the flow information.\r\n 	Information about the jewellery is one of the important facility provided in online informative website.\r\n 	This lets customer to browse different goods and services and once they select an item to purchase they can place the item in add to card.\r\n 	If can be used by a wide variety of outlets to automate the process of manually maintaining the records related to the projects.\r\n 	Our websites are provide the all information about large amount of variety of “JB JEWEL SHOP” products.\r\n 	All these function are interlinked to each other, which depend on the flow of information amongst them.', 'images/about_us.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `id` int(200) NOT NULL,
  `pro_image` varchar(200) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_price` int(200) NOT NULL,
  `quntity` int(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ct_id` int(25) NOT NULL,
  `p_id` int(20) NOT NULL,
  `ct_qty` int(30) NOT NULL,
  `ct_price` int(10) NOT NULL,
  `ct_total` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ct_id`, `p_id`, `ct_qty`, `ct_price`, `ct_total`) VALUES
(1, 3, 1, 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `ct_id` int(25) NOT NULL,
  `p_id` int(20) NOT NULL,
  `c_qty` int(25) NOT NULL,
  `c_price` int(25) NOT NULL,
  `c_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `cat_nm` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cat_nm`) VALUES
(6, 'silver'),
(7, 'Gold'),
(11, 'rose gold');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(10) NOT NULL,
  `c_nm` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_mobno` int(10) NOT NULL,
  `c_msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_nm`, `c_email`, `c_mobno`, `c_msg`) VALUES
(5, 'rinkal bhimanji', 'rkb@gmial.com', 1234567890, 'goood'),
(6, 'hvugh26313', 'rinkalmjk2021@gmail.com', 1234567890, ' bhtjbgjgmnt');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(30) NOT NULL,
  `f_nm` varchar(50) NOT NULL,
  `f_email` varchar(30) NOT NULL,
  `f_no` int(10) NOT NULL,
  `f_msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_nm`, `f_email`, `f_no`, `f_msg`) VALUES
(6, 'rinkal bhimani', 'rkb@gmail.com', 1234567890, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(50) NOT NULL,
  `g_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_img`) VALUES
(1, './images/gallery-img-01.jpeg'),
(2, './images/gallery-img-02.jpg'),
(3, './images/gallery-img-03.JPG'),
(4, './images/gallery-img-04.JPG'),
(5, './images/gallery-img-05.jpg'),
(6, './images/gallery-img-06.jpg'),
(7, './images/gallery-img-14.jpg'),
(9, './images/gallery-img-15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'nidhi', 'nidhi'),
(3, 'rinkal', 'rinkal');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `p_nm` varchar(50) NOT NULL,
  `p_price` int(15) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_id`, `p_nm`, `p_price`, `p_image`, `p_qty`) VALUES
(3, 6, 'CUFFLINGS', 2500, './images/silver_img_01.jpg', 0),
(4, 6, 'BRACLELET', 9000, './images/silver-02.jpg', 0),
(5, 6, 'ANKLETS', 2000, './images/silver-04.jpg', 0),
(6, 6, 'EARRING', 1000, './images/silver-09.jpg', 0),
(8, 11, 'WATCH', 10000, './images/silver-07.jpg', 0),
(9, 11, 'NOSE PIN', 1500, './images/rosegold_img_05.jpg', 0),
(10, 11, 'RING', 19000, './images/rosegold_img_07.jpg', 0),
(11, 11, 'PENDENT', 17000, './images/rosegold_img_04.jpg', 0),
(12, 7, 'MANGALSUTRA', 200000, './images/gold-02.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(10) NOT NULL,
  `r_fullnm` varchar(50) NOT NULL,
  `r_unm` varchar(50) NOT NULL,
  `r_psw` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_pno` int(10) NOT NULL,
  `r_add` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fullnm`, `r_unm`, `r_psw`, `r_email`, `r_pno`, `r_add`) VALUES
(1, 'rinkal bhimani', 'rinkal', 'rinkal', 'rkb@gmail.com', 1245555551, 'but bhavani krupa..'),
(2, 'nidhi', 'nidhi', 'nidhi', 'nidhi@gmail.com', 1234567890, ' chdfc7uegf'),
(3, 'admin', 'admin', 'admin', 'admin@gmail.com', 1511151515, 'gnrfurhgu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `unm` varchar(25) NOT NULL,
  `psw` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`unm`, `psw`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about-us`
--
ALTER TABLE `about-us`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ct_id`),
  ADD KEY `Foreign Key` (`p_id`);

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `ForeignKey` (`c_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about-us`
--
ALTER TABLE `about-us`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ct_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `ct_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `ForeignKey` FOREIGN KEY (`c_id`) REFERENCES `category` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
