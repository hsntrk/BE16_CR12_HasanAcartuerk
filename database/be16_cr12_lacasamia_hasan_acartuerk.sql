-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 09:23 PM
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
-- Database: `be16_cr12_lacasamia_hasan_acartuerk`
--
CREATE DATABASE IF NOT EXISTS `be16_cr12_lacasamia_hasan_acartuerk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be16_cr12_lacasamia_hasan_acartuerk`;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `description` varchar(250) NOT NULL,
  `size` varchar(30) NOT NULL,
  `room_number` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `price_reduction` enum('Yes','No') DEFAULT 'No',
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `description`, `size`, `room_number`, `address`, `city`, `longitude`, `latitude`, `price`, `price_reduction`, `picture`) VALUES
(1, 'Apartment Citypano', 'Very cozy city apartment with the best infrastructure. With kitchen, bedroom, bathroom and living room. In the storage room there is a washing machine and a dryer.', '85 m²', 4, 'Van Leijenberghlaan 80', 'Amsterdam', '4.87947672679152', '52.33173777724768', 340000, 'No', 'property_1.jpg'),
(2, 'Apartment Belliview', 'With the best view right in the center, you can enjoy the open-plan rooms with a modern, well-equipped bar kitchen and a beautifully exposed suspended ceiling.', '125 m²', 6, 'Walfischgasse 8', 'Vienna', '16.371799193749702', '48.20317293011119', 750000, 'No', 'property_2.jpg'),
(3, 'Apartment Oasissun', 'On a beautiful island, in the center, is the ideal apartment with a communal swimming pool ...', '75 m²', 3, 'Carrer de Sant Joaquim 2', 'Palma', '2.6483310714094075', '39.58081699579258', 470000, 'Yes', 'property_3.jpg'),
(4, 'Apartment Vellistreet', 'The great apartment, which has been newly renovated, is located right next to the world-famous Spanish Steps ...', '140 m²', 7, 'Piazza di Spagna 9', 'Rom', '12.481819138741809', '41.90676378808407', 1200000, 'Yes', 'property_4.jpg'),
(5, 'Apartment Modernikus', 'New ultra modern apartment created by a popular developer, which has an open swimming pool and is within walking distance to the sea.', '95 m²', 4, '610. Sk. 1-13', 'Antalya', '30.65408364253151', '36.87284618494431', 850000, 'No', 'property_5.jpg'),
(6, 'Apartment Oldytown', 'The top floor apartment, which can be reached by elevator, is located in the immediate vicinity of a popular shopping street.', '120 m²', 5, 'Lindengasse 6', 'Vienna', '16.353886266733657', '48.20122555954494', 1300000, 'No', 'property_6.jpg'),
(7, 'Apartment Moshoka', 'Close to the Swiss border, the newly renovated apartment with large windows and high ceilings is ideal for people who want to enjoy the view.', '78 m2', 3, 'Reichstrasse 6', 'Bregenz', '9.750609235067786', '47.50645940151126', 650000, 'Yes', 'property_7.jpg'),
(8, 'Apartment Penthaview', 'The penthouse apartment is located directly on the canal, with the best view towards Stephansplatz and a very large terrace with plenty of space for events...', '124 m²', 4, 'Gredlerstrasse 4', 'Vienna', '16.378769708772897', '48.21367121790941', 1500000, 'Yes', 'property_8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
