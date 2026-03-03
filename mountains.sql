-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2026 at 12:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountains_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mountains`
--

CREATE TABLE `mountains` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Height_ft` int(11) NOT NULL,
  `Location` varchar(150) NOT NULL,
  `Difficulty` varchar(50) NOT NULL,
  `Length_km` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mountains`
--

INSERT INTO `mountains` (`id`, `Name`, `Height_ft`, `Location`, `Difficulty`, `Length_km`, `Description`) VALUES
(1, 'Mount Everest', 29029, 'Himalayas, Nepal-China border', 'Very Difficult', 10, 'The highest peak in the world, known for its extreme weather conditions and challenging climbing routes.'),
(2, 'Mount Fuji', 12389, 'Honshu, Japan', 'Moderate', 15, 'An iconic stratovolcano and one of Japan\'s most famous mountains, known for its symmetrical cone and cultural significance.'),
(3, 'Kilimanjaro', 19341, 'Tanzania', 'Moderate', 93, 'The highest peak in Africa, known for its snow-capped summit and diverse ecosystems.'),
(4, 'Denali', 20318, 'Alaska, USA', 'Difficult', 20, 'The highest peak in North America, known for its challenging climbing routes and stunning views.'),
(5, 'Annapurna', 26545, 'Nepal', 'Extremely Difficult', 20, 'The highest peak in the Himalayas, known for its extreme difficulty and dangerous climbing conditions.'),
(6, 'Matterhorn', 14692, 'Alps, Switzerland-Italy border', 'Very Difficult', 20, 'A famous mountain in the Alps, known for its distinctive pyramidal shape and challenging climbing routes.'),
(7, 'Anconcagua', 22109, 'Andes, Argentina', 'Very Difficult', 20, 'The highest peak in South America, known for its challenging climbing routes and stunning views.'),
(8, 'K2', 28251, 'Karakoram Range, Pakistan-China border', 'Extremely Difficult', 20, 'The highest peak in the Karakoram Range, known for its challenging climbing routes and stunning views.'),
(9, 'Mount Elbrus', 14784, 'Caucasus Mountains, Russia', 'Difficult', 20, 'The highest peak in the Caucasus Mountains, known for its challenging climbing routes and stunning views.'),
(10, 'Mont Blanc', 15774, 'Alps, France-Italy border', 'Difficult', 20, 'The highest mountain in the Alps and Western Europe, known for its glaciated slopes and popular but demanding climbing routes.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mountains`
--
ALTER TABLE `mountains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mountains`
--
ALTER TABLE `mountains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
