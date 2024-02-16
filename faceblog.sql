-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql108.byetcluster.com
-- Generation Time: Feb 15, 2024 at 08:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33444535_faceblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) UNSIGNED NOT NULL,
  `post_id` int(6) NOT NULL,
  `comment` varchar(800) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `author`, `date`) VALUES
(0, 1, 'birds are such awesome species', 'birdman', '2024-02-15 19:17:17'),
(0, 1, 'that is so true', 'birdwomen', '2024-02-15 19:17:36'),
(0, 2, 'Great art work, just love the inspiration', 'Huey', '2024-02-15 19:18:06'),
(0, 0, 'This was so cool of a post. Right On!', 'Fishy', '2024-02-15 19:25:15'),
(0, 1, 'Awesome Jelly !  This was so cool of a post. I liked it, I liked it alot!', 'Office @ BRM', '2024-02-15 19:26:02'),
(0, 5, 'Great deal dude', 'Pap', '2024-02-15 19:32:17'),
(0, 9, 'That is great Santa... Sure worried', 'Sandman', '2024-02-15 19:55:46'),
(0, 5, 'aaa', 'Brian', '2024-02-15 19:56:21'),
(0, 6, 'Sweet', 'Dill Peppa', '2024-02-15 20:16:13'),
(0, 5, 'From mobile', 'Samsung', '2024-02-15 20:17:26'),
(0, 10, 'Sweet ðŸ˜‹ ', 'B', '2024-02-15 20:20:23'),
(0, 6, 'It depends if there is both salt and pepper to make it taste just right', 'Chef Boyaredee', '2024-02-15 20:54:22'),
(0, 9, 'Ho ho ho', 'Rudolf', '2024-02-15 20:57:23'),
(0, 13, 'Do not eat fish sticks okay', 'Peely', '2024-02-15 21:46:28'),
(0, 2, '100%', 'Bill', '2024-02-16 00:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `myblogs`
--

CREATE TABLE `myblogs` (
  `id` int(6) UNSIGNED NOT NULL,
  `author` varchar(30) NOT NULL,
  `title` varchar(40) NOT NULL,
  `body` varchar(900) NOT NULL,
  `category` varchar(30) NOT NULL,
  `img` varchar(80) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myblogs`
--

INSERT INTO `myblogs` (`id`, `author`, `title`, `body`, `category`, `img`, `reg_date`) VALUES
(1, 'Brian', 'The balded ducked billed Plata', 'What an awesome specie of the duckl bill platamapus. It can attack from over 500 meters. He can swoop and doop.', 'Bird', 'https://tse1.mm.bing.net/th?id=OIP.hF8_3tDhRrZvxm-j1kZwgwHaE9&pid=Api&P=0&h=220', '0000-00-00 00:00:00'),
(2, 'Heather', 'Pocahontas has dinner with the rest of u', 'Soup is good when you are hungry and there is a lot of people. This is great to eat some food that is good.', 'Art', 'https://tse4.mm.bing.net/th?id=OIP.eOD7-R3gvXR-CYGsomD_tQHaHa&pid=Api&P=0&h=220', '0000-00-00 00:00:00'),
(5, 'Fishy', 'Fish news update', 'Fish news Fish news Fish news Fish news Fish news Fish news Fish news Fish news Fish news Fish news Fish news Fish news ', 'Fish', 'https://www.brmcontractors.net/assets/logo/brm.ico', '0000-00-00 00:00:00'),
(6, 'Pablo', 'Fishermans  like to fish in dirty oceans', 'Pablo like to fish in dirty oceans with sharks everywhere. Pablo like to fish in dirty oceans with sharks everywhere..', 'Fish', 'https://tse4.mm.bing.net/th?id=OIP.Uw0pCdop_3jA4J1gmGxIegHaEo&pid=Api&P=0&h=220', '0000-00-00 00:00:00'),
(9, 'Santa', 'Christman wont miss us this year', 'Chirstmas was approaching fast but the sleigh was super quick. Thanks to mrs claus for the cookies.', 'Holiday', 'https://tse4.mm.bing.net/th?id=OIP.pRcIT_CCXbbHjvPSzFqjUAAAAA&pid=Api&P=0&h=220', '0000-00-00 00:00:00'),
(13, 'Jumbo', 'Eating good in the neighborhood ', 'Awesome dude of the hour the  jumbo Cajun fish for dinner that is all', 'Food', 'https://wallpapercave.com/wp/wp3893261.jpg', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myblogs`
--
ALTER TABLE `myblogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myblogs`
--
ALTER TABLE `myblogs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
