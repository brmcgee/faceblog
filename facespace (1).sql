-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 12:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facespace`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES
(0, 'Space'),
(0, 'Food'),
(0, 'Gaming'),
(0, 'Aquatic'),
(0, 'Travel'),
(0, 'Military'),
(0, 'Seasonal');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) UNSIGNED NOT NULL,
  `post_id` int(6) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `auth_avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `author`, `date`, `auth_avatar`) VALUES
(0, 1, 'Very nice fight jet, a true work of American might - cowabunga! ', 'Michalangelo', '2024-02-19 00:08:30', 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220'),
(0, 8, 'These two appear to be best-est of friends! ', 'Michalangelo', '2024-02-19 00:08:58', 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220'),
(0, 2, 'Big fish...funny fish...lol... Tilly come check this out. ', 'Cricket', '2024-02-19 00:12:38', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(0, 3, 'Yum Yum ... me so hungry. Will need a clown burger. LOL ', 'Cricket', '2024-02-19 00:13:16', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(0, 1, 'Yes awesome plane... I flew one - one time. ', 'Cricket', '2024-02-19 00:13:47', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(0, 9, 'Golden macaroni. I am hungry. Give me some. ', 'Cricket', '2024-02-19 00:14:30', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(0, 12, 'I am a artist too. Just ask anybody. ', 'Cricket', '2024-02-19 00:15:05', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(0, 2, 'Big grouper fish. I am going fishing. You hear me. ', 'Mr T', '2024-02-19 00:15:34', 'https://tse2.mm.bing.net/th?id=OIP.eRKBfZ2a-_9QwPf6FG09DgHaKl&pid=Api&P=0&h=220'),
(0, 7, 'I will make to make a call when I am in the air and need fuel! ', 'Mr T', '2024-02-19 00:16:05', 'https://tse2.mm.bing.net/th?id=OIP.eRKBfZ2a-_9QwPf6FG09DgHaKl&pid=Api&P=0&h=220'),
(0, 8, 'I play this game regularly. I even have the skin. ', 'Mr T', '2024-02-19 00:16:37', 'https://tse2.mm.bing.net/th?id=OIP.eRKBfZ2a-_9QwPf6FG09DgHaKl&pid=Api&P=0&h=220'),
(0, 6, 'Pizza, its whats for dinner ', 'Mr T', '2024-02-19 00:16:52', 'https://tse2.mm.bing.net/th?id=OIP.eRKBfZ2a-_9QwPf6FG09DgHaKl&pid=Api&P=0&h=220'),
(0, 4, ' One day Mr T going to space.. believe that', 'Mr T', '2024-02-19 00:18:24', 'https://tse2.mm.bing.net/th?id=OIP.eRKBfZ2a-_9QwPf6FG09DgHaKl&pid=Api&P=0&h=220'),
(0, 2, 'That is a awesome fish. I want to see in water. ', 'russ_mcplayz', '2024-02-19 00:20:21', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 6, 'Cheese only please! ', 'russ_mcplayz', '2024-02-19 00:20:43', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 5, 'Nice fight jet. This is one awesome plane. ', 'russ_mcplayz', '2024-02-19 00:21:12', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 9, 'I like mac n cheese with the chicken strips. ', 'russ_mcplayz', '2024-02-19 01:39:03', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 2, 'Nice fish ', 'XinGaDoo', '2024-02-19 05:53:44', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(0, 0, 'What an awesome picture. I cant imagine zooming back to earth in that. ', 'XinGaDoo', '2024-02-19 05:59:19', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(0, 0, 'What an awesome picture. I cant imagine zooming back to earth in that. ', 'XinGaDoo', '2024-02-19 06:00:17', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(0, 0, 'What an awesome picture. I cant imagine zooming back to earth in that. ', 'XinGaDoo', '2024-02-19 06:02:25', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(0, 0, 'What an amazing piece of history! ', 'XinGaDoo', '2024-02-19 06:05:37', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(0, 0, 'What an amazing piece of history! ', 'XinGaDoo', '2024-02-19 06:06:20', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(0, 0, 'What an amazing piece of history! ', 'XinGaDoo', '2024-02-19 06:07:12', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `liked` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `user_id`, `liked`) VALUES
(0, 0, 0),
(0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `myblogs`
--

CREATE TABLE `myblogs` (
  `id` int(6) UNSIGNED NOT NULL,
  `author` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(900) NOT NULL,
  `category` varchar(30) NOT NULL,
  `img` varchar(80) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment_count` int(30) NOT NULL DEFAULT 0,
  `author_id` int(5) NOT NULL,
  `author_avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myblogs`
--

INSERT INTO `myblogs` (`id`, `author`, `title`, `body`, `category`, `img`, `reg_date`, `comment_count`, `author_id`, `author_avatar`) VALUES
(1, 'XinGaDoo', 'F-35 Lightning stealth fighter jets', 'The Lockheed Martin F-35 Lightning II is an American family of single-seat, single-engine, all-weather stealth multirole combat aircraft that is intended to perform both air superiority and strike missions. ', 'Military', 'https://tse1.mm.bing.net/th?id=OIP.c5jHQ0gL6y0RWGf2iJIxywHaEK&pid=Api&P=0&h=220', '2024-02-18 19:13:47', 2, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(2, 'XinGaDoo', 'What Are The Different Types of Grouper?', 'Grouper is a common and favorite species you will find when you’re along the Gulf of Mexico or in many places in the Caribbean.  There is more than one type of Grouper in the water, and they range in size, what they eat, and where they live.', 'Aquatic', 'https://www.americanoceans.org/wp-content/uploads/2021/07/nassau-grouper.jpg', '2024-02-19 00:53:44', 0, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(3, 'XinGaDoo', 'Ribeye Steak Tacos with Grilled Tomato ', 'There’s nothing better than a juicy ribeye steak—except when it’s crispy and piled high on a corn tortilla. It was love at first sight when we saw and tasted these amazing steak tacos, a fusion of flavors from Chef Alexis Torres. Topped with a grilled tomato salsa and tangy cabbage and cilantro garnish, you never want a plain ribeye again! ', 'Military', 'https://tse1.mm.bing.net/th?id=OIP.JW5BuaTuvJhXeP1OcfFxAwHaEK&pid=Api&P=0&h=220', '2024-02-18 19:13:16', 1, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(4, 'XinGaDoo', 'Space shuttle 1 2 3 lift off! ', 'Space Shuttle Challenger OV-099 was a Space Shuttle orbiter manufactured by Rockwell International and operated by NASA. Challenger was the second Space Shuttle orbiter to fly into space after Columbia, and launched on its maiden flight in April 1983', 'Space', 'https://wp-assets.futurism.com/2019/04/nasa-space-shuttle-1200x800.jpg', '2024-02-18 19:18:24', 1, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(5, 'XinGaDoo', 'The F-16 Fighting Falcon is a compact je', 'The General Dynamics F-16 Fighting Falcon is an American single-engine supersonic multirole fighter aircraft originally developed by General Dynamics for the United States Air Force (USAF). ', 'Military', 'https://tse2.mm.bing.net/th?id=OIP.XEIvlGord4hNY7aB0yGRqAHaFa&pid=Api&P=0&h=220', '2024-02-18 19:21:12', 1, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(6, 'XinGaDoo', 'Pizza Is Actually Good for You ', 'The history of pizza begins in antiquity, as various ancient cultures produced flatbreads with several toppings.  A precursor of pizza was probably the focaccia, a flatbread known to the Romans as panis focacius, to which toppings were then added.', 'Food', 'https://ariston.com.au/media/RLW_8518_Web.jpg', '2024-02-18 19:20:43', 2, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(7, 'XinGaDoo', 'The Boeing KC-135 Stratotanker ', ' American military aerial refueling tanker aircraft that was developed from the Boeing 367-80 prototype, alongside the Boeing 707 airliner. It has a narrower fuselage and is shorter than the 707. Boeing gave the aircraft the internal designation of Model 717.', 'Military', 'https://tse2.explicit.bing.net/th?id=OIP.YJzxraoPXzOgBcKe6MAUQQHaER&pid=Api&P=0&', '2024-02-18 19:16:05', 1, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(8, 'XinGaDoo', 'Peely and Fishsticks, the original OGs', 'Peely, one of the most fan-favorite characters in Fortnite, is now on the map as an NPC, and players can interact with him at The Daily Bugle POI. There’s plenty of Fishstick in the sea, but only one is the OG.', 'Gaming', 'https://tse2.mm.bing.net/th?id=OIP.EtZYa2ElRbB7bR7MQG-lHAHaEr&pid=Api&P=0&h=220', '2024-02-18 19:16:37', 2, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(9, 'XinGaDoo', 'The golden colored noodles a delight!', 'The best food was created from noodles and cheese. Especially the little  elbow ones. Then mixed with gooey sauce and the shredded kind. Macaroni and cheese has been served as long as there has been a United States of America', 'Food', 'https://tse1.mm.bing.net/th?id=OIP.Jav0q9QGBOR5YcWBa7QoAwHaE8&pid=Api&P=0&h=220', '2024-02-18 20:39:03', 2, 15, 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg'),
(10, 'Michalangelo', 'Apollo program, Project Apollo', 'The Apollo spacecraft was composed of three parts designed to accomplish the American Apollo programs goal of landing astronauts on the Moon by the end of the 1960s and returning them safely to Earth. ', 'Space', 'http://www.collectspace.com/images/news-022218b-lg.jpg', '2024-02-18 19:07:53', 0, 11, 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220'),
(11, 'Cricket', 'BUFF (Big Ugly Fat Fella)', 'The Boeing B-52 Stratofortress is an American long-range, subsonic, jet-powered strategic bomber. The B-52 was designed and built by Boeing, which has continued to provide support and upgrades.', 'Military', 'https://tse3.mm.bing.net/th?id=OIP.n5jLUts6ebGxJMTWTAN3HgHaE2&pid=Api&P=0&h=220', '2024-02-18 19:09:49', 0, 13, 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(12, 'Cricket', 'Paintings can be more complex than appea', 'Art is a diverse range of human activity and its resulting product that involves creative or imaginative talent generally expressive of technical proficiency, beauty, emotional power, or conceptual ideas. ', 'Art', 'https://tse4.mm.bing.net/th?id=OIP.eOD7-R3gvXR-CYGsomD_tQHaHa&pid=Api&P=0&h=220', '2024-02-18 19:15:05', 1, 13, 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `username` text NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `fullname` text NOT NULL,
  `r_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `userpassword`, `avatar`, `fullname`, `r_date`) VALUES
(11, 'turtle', 'password', 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220', 'Michalangelo', '2024-02-17'),
(12, 'fishy', 'password', 'https://tse3.mm.bing.net/th?id=OIP.S9p1uYLr04tRCLx4TH_QRwHaEK&pid=Api&P=0&h=220', 'Fishsticks', '2024-02-17'),
(13, 'green', 'password', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220', 'Cricket', '2024-02-17'),
(14, 'russmc', 'password', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220', 'russ_mcplayz', '2024-02-17'),
(15, 'bm', 'password', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg', 'XinGaDoo', '2024-02-17'),
(16, 't', 'pass', 'https://tse2.mm.bing.net/th?id=OIP.eRKBfZ2a-_9QwPf6FG09DgHaKl&pid=Api&P=0&h=220', 'Mr T', '2024-02-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myblogs`
--
ALTER TABLE `myblogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myblogs`
--
ALTER TABLE `myblogs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
