-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 11:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `questions` varchar(250) NOT NULL,
  `answers` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questions`, `answers`) VALUES
(1, 'What is a Flash Drive?', 'A Flash Drive uses flash memory to function as a portable hard drive, allowing you to store and transport any kind of computer file on a very small device. They can hold incredibly large amounts of data and are small enough -- about the size of a pack of gum -- to slip easily into your pocket, on your key chain, or around your neck on a lanyard.'),
(2, 'How do I use a Flash Drive?', 'Using a flash drive to store files is just as easy as using an old floppy disk and even simpler than burning a CD or DVD. Just plug your Flash Drive into a USB port on your computer and drag the files you want to take with you into the folder that appears in "My Computer" or on your desktop. Your files are quickly copied over to your Flash Drive. To transfer the items on your USB flash drive onto another computer, simply plug your Flash Drive into the new computer, open the folder that appears on your screen, and drag the desired files onto a folder on the destination computer.'),
(3, 'Will my Flash Drive work with any computer?', 'Flash Drives are based on the USB standard and operate with all PCs (Macs too!) and devices with a USB port and running Windows ME or later (USB drivers are also available for Windows 98, Windows 98 SE and Windows NT) or Mac OS 8.6 or later. Virtually every personal computer manufactured in the past 10 years is equipped with USB ports, and nowadays it is common to find systems with as many as eight separate USB ports.'),
(4, '\r\n    What are the advantages of a Flash Drive as compared to recordable CDs and DVDs (CD-R/DVD-R)?\r\n    ', 'USB ports are much more common than DVD burners so while your Flash Drive will work with almost any computer, blank media (CD-R, CD-RW, DVD-R, etc.) would require the hardware necessary to write data to them. Also, the process of copying files from your computer to a Flash Drive is much faster and simpler than burning a CD or DVD. What''s more, Flash Drives act like portable hard drives to which you can add and delete files as many times as you like-as opposed to CD-R''s and DVD-R''s where you can only add data once and you cannot remove data once it is burned onto the disc. Also, unlike blank media which are sporadically faulty and deteriorate consistently over time, Flash Drives are manufactured and printed under rigorous quality control standards.'),
(5, 'What are the advantages of using a Flash Drive instead of an external hard drive?', 'Roughly the size of a pack of gum, Flash Drives are far smaller than external hard drives, offering users unrivalled portability. Additionally, Flash Drives utilize flash memory-technology that includes no moving parts whatsoever unlike traditional hard drives-so risk of damage from rough handling and accidental drops is greatly reduced. Flash Drives are also more convenient because they do not require any of the configuration and setup associated with typical external hard drives.'),
(6, 'How should I submit my organization''s logo for production?', 'We strongly encourage you when uploading your file(s) to upload vector logos such as AI or EPS.(These files are created in programs such as Illustrator and InDesign) However, if you do not have that file type we are able to work with high resolution .psd, .jpeg, or .png files.(These files are created in programs such as Photoshop, Illustrator, or InDesign). For more information on submitting your logo please view our logo guidelines.'),
(7, 'Why should I order customized USB products from you and not an overseas vendor?', 'While many buyers of large-quantity branded electronics are attracted to foreign markets under the presumption of cheaper prices, they often fail to recognize the unforeseen costs of importation and long-distance shipping in general. Furthermore, time constraints become unmanageable should anything with the order go wrong, and with language barriers they often do.\r\n\r\nCustom USB has a commitment to product quality and customer service that is rarely matched by companies both domestic and abroad.'),
(8, 'What if I have a problem with my order or my product?', 'Any question about any product or order should be directed first to your sales representative. They will be able to help you as they best know your order. Don''t remember your specific salesperson? Call us and we will route your call to the right party to help you.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'PD1001', 'Flash Drive 1', 'Flash Drive 1', '01.jpg', '50.50'),
(2, 'PD1002', 'Flash Drive 2', 'Flash Drive 2', '02.jpg', '50.85'),
(3, 'PD1003', 'Flash Drive 3', 'Flash Drive 3', '03.jpg', '10.00'),
(4, 'PD1004', 'Flash Drive 4', 'Flash Drive 4', '04.jpg', '40.30'),
(5, 'PD1005', 'Flash Drive 5', 'Flash Drive 5', '05.jpg', '50.85'),
(6, 'PD1006', 'Flash Drive 6', 'Flash Drive 6', '06.jpg', '10.00'),
(7, 'PD1007', 'Flash Drive 7', 'Flash Drive 7', '07.jpg', '20.30'),
(8, 'PD1008', 'Flash Drive 8', 'Flash Drive 8', '08.jpg', '40.20'),
(9, 'PD1009', 'Flash Drive 9', 'Flash Drive 9', '09.jpg', '20.30'),
(10, 'PD1010', 'Flash Drive 10', 'Flash Drive 10', '10.jpg', '10.30'),
(11, 'PD1011', 'Flash Drive 11', 'Flash Drive 11', '11.jpg', '60.90'),
(12, 'PD1012', 'Flash Drive 12', 'Flash Drive 12', '12.jpg', '70.45'),
(13, 'PD1013', 'Flash Drive 13', 'Flash Drive 13', '13.jpg', '80.30'),
(14, 'PD1014', 'Flash Drive 14', 'Flash Drive 14', '14.jpg', '90.55'),
(15, 'PD1015', 'Flash Drive 15', 'Flash Drive 15', '15.jpg', '45.30'),
(16, 'PD1016', 'Flash Drive 16', 'Flash Drive 16', '16.jpg', '48.24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'Amalan', 'Admin'),
(2, 'amal', 'amalan1', 'User'),
(3, 'Nhia', '1111', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
