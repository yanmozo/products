-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 06:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_t`
--

CREATE TABLE `products_t` (
  `productID` int(11) NOT NULL,
  `productName` varchar(75) NOT NULL,
  `productPrice` decimal(6,2) NOT NULL,
  `productDesc` varchar(300) NOT NULL,
  `productImage` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_t`
--

INSERT INTO `products_t` (`productID`, `productName`, `productPrice`, `productDesc`, `productImage`) VALUES
(1, 'Legend Trilogy Set', '1635.00', 'Author: Marie Lu\nPublisher: Penguin Group USA, Inc.\nISBN: 9780399169083', '"img1.jpg"'),
(2, 'Tales of the Peculiar', '599.00', 'Author: Ransom Riggs\r\nPublisher: Penguin Random House\r\nISBN: 9780399538537', '"img2.jpg"'),
(3, 'Iwas Sawi Project', '195.00', 'Author: Marcelo Santos III & Rhadson Mendoza\r\nPublisher: VRJBooksPublishing Inc.\r\nISBN: 978621954325', '"img3.jpg"'),
(4, 'The Singles Game', '945.00', 'Author: Lauren Weisberger\r\nPublisher: Simon & Schuster Inc.\r\nISBN: 9781476778211', '"img4.jpg"'),
(5, 'Curious Mind: The Secret To A Bigger Life', '675.00', 'Author: Brian Grazer and Charles Fishman\r\nPublisher: Simon & Schuster\r\nISBN: 9781476730776', '"img5.jpg"'),
(6, 'First Comes Love', '399.00', 'Author: Emily Giffin\r\nPublisher: Random House, Inc.\r\nISBN: 9780399177705', '"img6.jpg"'),
(7, 'The Universe of Us (Exclusive Special Edition)', '595.00', 'Author: Lang Leav\r\nPublisher: Simon & Schuster\r\nISBN: 9781449482114', '"img7.jpg"'),
(8, 'Milk and Honey', '599.00', 'Author: Rupi Kaur\r\nPublisher: Simon & Schuster\r\nISBN: 9781449474256', '"img8.jpg"'),
(9, 'Sweetbitter', '755.00', 'Author: Stephanie Danler\r\nPublisher: Random House, Inc.\r\nISBN: 9780451493354', '"img11.jpg."'),
(10, 'Dirty Pretty Things', '595.00', 'Author: Michael Faudet\r\nPublisher: Andrews McMeel Publishing\r\nISBN: 9781449481001', '"img12.jpg"'),
(11, 'Bakit Hindi Tayo', '120.00', 'Author: Jayson G. Benedicto\r\nPublisher: Psicom Publishing Inc.\r\nISBN: 9786214140077', '"img9.jpg"'),
(12, 'See Me', '315.00', 'Author: Nicholas Sparks\r\nPublisher: Grand Central Publishing\r\nISBN: 9781455595556', '"img10.jpg"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_t`
--
ALTER TABLE `products_t`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_t`
--
ALTER TABLE `products_t`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
