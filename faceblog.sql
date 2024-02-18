-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql108.infinityfree.com
-- Generation Time: Feb 17, 2024 at 08:18 PM
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
-- Table structure for table `active_user`
--

CREATE TABLE `active_user` (
  `a_fullname` varchar(30) NOT NULL,
  `a_avatar` varchar(100) NOT NULL,
  `a_id` int(4) NOT NULL,
  `a_user` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_user`
--

INSERT INTO `active_user` (`a_fullname`, `a_avatar`, `a_id`, `a_user`) VALUES
('russ_mc', 'https://tse3.mm.bing.net/th?id=OIP.LkPMqeroICRu-xL-7ZIKkwHaHZ&pid=Api&P=0&h=220', 4, 'mcplayz');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) UNSIGNED NOT NULL,
  `post_id` int(6) NOT NULL,
  `comment` varchar(800) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `auth_avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `author`, `date`, `auth_avatar`) VALUES
(0, 1, 'birds are such awesome species', 'birdman', '2024-02-15 19:17:17', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 1, 'that is so true', 'birdwomen', '2024-02-15 19:17:36', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 2, 'Great art work, just love the inspiration', 'Huey', '2024-02-15 19:18:06', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 0, 'This was so cool of a post. Right On!', 'Fishy', '2024-02-15 19:25:15', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 1, 'Awesome Jelly !  This was so cool of a post. I liked it, I liked it alot!', 'Office @ BRM', '2024-02-15 19:26:02', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 5, 'Great deal dude', 'Pap', '2024-02-15 19:32:17', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 9, 'That is great Santa... Sure worried', 'Sandman', '2024-02-15 19:55:46', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 6, 'Sweet', 'Dill Peppa', '2024-02-15 20:16:13', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 5, 'From mobile', 'Samsung', '2024-02-15 20:17:26', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 10, 'Sweet ðŸ˜‹ ', 'B', '2024-02-15 20:20:23', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 6, 'It depends if there is both salt and pepper to make it taste just right', 'Chef Boyaredee', '2024-02-15 20:54:22', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 9, 'Ho ho ho', 'Rudolf', '2024-02-15 20:57:23', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 13, 'Do not eat fish sticks okay', 'Peely', '2024-02-15 21:46:28', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 2, '100%', 'Bill', '2024-02-16 00:40:27', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 14, 'Awesome Peely dude', 'Brian m', '2024-02-16 03:04:25', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 13, 'Fishstick is the bomb. OG', 'peely', '2024-02-16 03:07:49', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 15, 'Sweet', 'Sweet', '2024-02-16 03:09:22', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 1, 'What a nice beaked billed eagle my friend', 'Wood E. Wood-Pecker', '2024-02-16 03:27:51', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 15, 'I love your hat, i use to wear one on the ship!', 'Peter Pan', '2024-02-16 03:44:37', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 15, 'Awesome', 'G. Money', '2024-02-16 03:45:07', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 18, 'Nice plane would love to fly!', 'John Jingles', '2024-02-16 03:51:13', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 18, 'Totally Awesome, that looks like a Viper', 'Maverick', '2024-02-16 03:51:48', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 17, 'Cool jet, I am glad to see its stealth!', 'Bill Clinton', '2024-02-16 03:52:30', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 5, 'Fish sticks is that really you. ', 'Tez', '2024-02-16 03:55:16', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 14, 'Lol ... peely in a suit. You look awesome dude', 'Orangie', '2024-02-16 03:59:21', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 2, 'Caribbean ðŸ‘¸  queen, queen of my heart', 'Davy crocket', '2024-02-16 04:01:00', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 13, 'I just knew you were good friends. Good times', 'John Wayne ', '2024-02-16 05:38:26', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 6, 'Blue tang very nice specie. I have one that is yellow, he swims gracefully. ', 'Dora', '2024-02-16 05:40:53', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 21, 'Yep you know thats right. Love some noodles', 'Sara Lee ', '2024-02-16 06:01:17', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 21, 'Yum love Mac n chz', 'Ron E', '2024-02-16 11:56:18', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 23, 'Yes 100%, pizza is da bomb', 'Donatello', '2024-02-16 12:48:09', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 22, 'Awesome movie Apollo 13 u should see', 'Tom hanks', '2024-02-16 13:20:23', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 23, 'That looks like a good tasty pizza pie, so yummy!', 'A friend', '2024-02-16 15:24:50', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 24, 'Perfect burn. That is a wholenlot of thrust. Look at the somke plumes', 'Buz Lightyear', '2024-02-16 15:43:51', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 2, 'Sweet... this is truly art ðŸŽ¨ ', 'Tezzy', '2024-02-16 15:45:32', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 1, 'This is my comment', 'Pablo', '2024-02-16 19:38:28', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 2, 'I love this post, it is the best!', 'Darwin', '2024-02-16 19:39:06', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 5, 'I love your hat, i use to wear one on the ship!', 'Pete', '2024-02-16 19:39:28', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 6, 'I just knew you were good friends. Good times', 'Pete', '2024-02-16 19:39:49', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 9, 'I have been very good this year big man', 'Timmy', '2024-02-16 19:40:16', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 13, 'Best-est of Friends', 'Shedder', '2024-02-16 19:40:39', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 17, 'Nice fight jet', 'Goose', '2024-02-16 19:40:54', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 15, 'Salute you fishy', 'Me', '2024-02-16 19:41:10', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 21, 'Mac N Chicken - Why not!', 'Fishy', '2024-02-16 19:41:28', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 18, 'That is cool, wish I could fly one', 'A Student Pilot', '2024-02-16 19:41:55', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 22, 'I have to check this out', 'Brian', '2024-02-16 19:42:13', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 24, 'Cool, American space power!', 'Stewart P', '2024-02-16 19:42:43', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 23, 'Thats amore! No really a good looking pizza', 'Chef BoyRDee', '2024-02-16 19:43:13', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 26, 'Hot mama', 'Brian', '2024-02-16 19:52:52', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 26, 'One hot mama', 'B... ', '2024-02-17 02:05:28', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 27, 'What a awesome fish. I would love to catch one in the open sea', 'Long John Silver', '2024-02-17 03:11:46', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 28, 'Those tacos look fire, 100%!!', 'Carlos', '2024-02-17 03:27:32', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 27, 'Looks like a happy fish ', 'Fisherman', '2024-02-17 07:25:14', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 1, 'Nice flying eagle. I bet you fly super fast.', 'Carmen', '2024-02-17 08:27:01', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 31, 'True', 'Dill', '2024-02-17 18:06:18', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 33, 'OMG corgi yawt...I think how u say i ðŸ¤”  ðŸ”¥ ðŸ’¯', 'Snoopy', '2024-02-17 20:01:08', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 31, 'I know thats right....ahhh green screen green bean.. lol', 'russ_mc', '2024-02-17 20:02:21', 'https://tse4.mm.bing.net/th?id=OIP.pcQABhR3MqWpsuElAiuMFgHaGL&pid=Api&P=0&h=220'),
(0, 21, 'I love mac n cheese', 'Michalangelo', '2024-02-17 23:11:35', 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220'),
(0, 14, 'Banana Man you are so cool!!', 'Michalangelo', '2024-02-17 23:12:55', 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220'),
(0, 28, 'Me love some tacos, most definently!', 'Cricket', '2024-02-17 23:14:02', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220'),
(0, 29, 'Awesome plane that will only get better with the new engines!! Way to go!', 'Fishsticks', '2024-02-17 23:16:33', 'https://tse3.mm.bing.net/th?id=OIP.S9p1uYLr04tRCLx4TH_QRwHaEK&pid=Api&P=0&h=220'),
(0, 5, 'Fishy you rock....Not as much as peely! ðŸŒ ðŸŸ ', 'russ_mcplayz', '2024-02-17 23:23:53', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 32, '100%', 'russ_mcplayz', '2024-02-17 23:24:37', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 29, '', 'russ_mcplayz', '2024-02-17 23:25:20', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 29, 'This is a cool plane', 'russ_mcplayz', '2024-02-17 23:25:35', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 33, 'Sweet corgi!!!', 'russ_mcplayz', '2024-02-18 01:15:29', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220'),
(0, 33, 'OMG corgi ðŸ”¥ â¤ï¸ ', 'XinGaDoo', '2024-02-18 01:21:01', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg');

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
  `img` varchar(150) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment_count` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myblogs`
--

INSERT INTO `myblogs` (`id`, `author`, `title`, `body`, `category`, `img`, `reg_date`, `comment_count`) VALUES
(1, 'Brian', 'The  eagles excellent vision for hunting', 'What an awesome specie of the  eagle.  Its can spot prey from afar and high up in the air. Sharp razor talons and strong wings.It can attack from over 500 meters. He can swoop and doop.', 'Bird', 'https://tse1.mm.bing.net/th?id=OIP.hF8_3tDhRrZvxm-j1kZwgwHaE9&pid=Api&P=0&h=220', '2024-02-17 08:27:01', 6),
(2, 'Heather', 'Pocahontas has dinner with the friends ', 'What else to feed a large crowd. Soup is good when you are hungry and there is a lot of people. This is great to eat some food that is good.', 'Art', 'https://tse4.mm.bing.net/th?id=OIP.eOD7-R3gvXR-CYGsomD_tQHaHa&pid=Api&P=0&h=220', '2024-02-16 19:39:06', 5),
(5, 'Fishy', 'Fishsticks the man, myth and legend', 'Thereâ€™s plenty of Fishstick in the sea, but only one is the OG. Fish stick is frozen in one skin. Fishsticks one of the most fan-favorite characters in Fortnite.', 'Fortnite', 'https://tse3.mm.bing.net/th?id=OIP.S9p1uYLr04tRCLx4TH_QRwHaEK&pid=Api&P=0&h=220', '2024-02-17 23:23:53', 5),
(6, 'Pablo', 'Fisherman likes to fish for purdy fish', 'Pablo like to fish in dirty oceans with sharks everywhere. Sharks are fans to hang out in these dirty waters. Pablo catches lots of sharks.', 'Fish', 'https://tse4.mm.bing.net/th?id=OIP.Uw0pCdop_3jA4J1gmGxIegHaEo&pid=Api&P=0&h=220', '2024-02-16 19:39:49', 4),
(9, 'Santa', 'Christmas wont miss us this year!', 'Christmas was approaching fast but the sleigh was super quick. Thanks to Mrs Claus for the pre-game cookies. Now the reindeer and I are off.', 'Holiday', 'https://tse4.mm.bing.net/th?id=OIP.P7kKJNew4bFNnU88YwBP0wAAAA&pid=Api&P=0&h=220', '2024-02-16 19:40:16', 3),
(13, 'Jumbo', 'Peely and Fishsticks, the original OGs', 'Peely, one of the most fan-favorite characters in Fortnite, is now on the map as an NPC, and players can interact with him at The Daily Bugle POI. Thereâ€™s plenty of Fishstick in the sea, but only one is the OG.', 'Fortnite', 'https://tse2.mm.bing.net/th?id=OIP.EtZYa2ElRbB7bR7MQG-lHAHaEr&pid=Api&P=0&h=220', '2024-02-16 19:40:39', 4),
(14, 'Russ McPlayz', 'Peely is an Epic Outfit in Fortnite,', 'Peely, one of the most fan-favorite characters in Fortnite, is now on the map as an NPC, and players can interact with him at The Daily Bugle POI. ', 'Fortnite', 'https://tse1.mm.bing.net/th?id=OIP.FBYO0WYA_CS7fD9hIYfyrgHaHa&pid=Api&P=0&h=220', '2024-02-17 23:12:55', 3),
(15, 'Heather McGee', 'My favorite thing about the game ', 'Fishsticks with this and that and everything else to take up space as we type a sentence out. this and that and everything else to take up space as we type a sentence out. ', 'Fortnite', 'https://wallpapercave.com/wp/wp3893261.jpg', '2024-02-16 19:41:10', 4),
(17, 'Will Turner', 'F-35 Lightning stealth fighter jets', 'The Lockheed Martin F-35 Lightning II is an American family of single-seat, single-engine, all-weather stealth multirole combat aircraft that is intended to perform both air superiority and strike missions. ', 'Fighter Jet', 'https://tse1.mm.bing.net/th?id=OIP.c5jHQ0gL6y0RWGf2iJIxywHaEK&pid=Api&P=0&h=220', '2024-02-16 19:40:54', 2),
(18, 'Brian M', 'The F-16 Fighting Falcon is a compact je', 'The General Dynamics F-16 Fighting Falcon is an American single-engine supersonic multirole fighter aircraft originally developed by General Dynamics for the United States Air Force (USAF). ', 'Fighter Jet', 'https://tse2.mm.bing.net/th?id=OIP.XEIvlGord4hNY7aB0yGRqAHaFa&pid=Api&P=0&h=220', '2024-02-16 19:41:55', 3),
(21, 'Mack A Roni', 'The golden colored noodles a delight!', 'The best food was created from noodles and cheese. Especially the little  elbow ones. Then mixed with gooey sauce and the shredded kind. Macaroni and cheese has been served as long as there has been a United States of America', 'Food', 'https://tse1.mm.bing.net/th?id=OIP.Jav0q9QGBOR5YcWBa7QoAwHaE8&pid=Api&P=0&h=220', '2024-02-17 23:11:35', 4),
(22, 'Wiki', 'Apollo program, Project Apollo', 'The Apollo spacecraft was composed of three parts designed to accomplish the American Apollo programs goal of landing astronauts on the Moon by the end of the 1960s and returning them safely to Earth. ', 'Space', 'http://www.collectspace.com/images/news-022218b-lg.jpg', '2024-02-16 19:42:13', 2),
(23, 'Papa John', 'Pizza Is Actually Good for You ', 'The history of pizza begins in antiquity, as various ancient cultures produced flatbreads with several toppings.  A precursor of pizza was probably the focaccia, a flatbread known to the Romans as panis focacius, to which toppings were then added.', 'Food', 'https://ariston.com.au/media/RLW_8518_Web.jpg', '2024-02-16 19:43:13', 3),
(24, 'Lisa Low', 'Space shuttle 1 2 3 lift off! ', 'this and that and everything else to take up space as we type a sentence out. this and that and everything else to take up space as we type a sentence out. ', 'Space', 'https://wp-assets.futurism.com/2019/04/nasa-space-shuttle-1200x800.jpg', '2024-02-16 19:42:43', 2),
(26, 'Pablo', 'Heather the all American CNA', 'Certified Nursing Assistants are trained to perform a limited range of procedures in support of Registered Nurses, under whose supervision they are generally required to work. ', 'Family', 'https://www.brmcontractors.net/blog/assets/gallery/heather.jpg', '2024-02-17 02:05:28', 2),
(27, 'Frenchy Fisher', 'What Are The Different Types of Grouper?', 'Grouper is a common and favorite species you will find when youâ€™re along the Gulf of Mexico or in many places in the Caribbean.  There is more than one type of Grouper in the water, and they range in size, what they eat, and where they live.', 'Fish', 'https://www.americanoceans.org/wp-content/uploads/2021/07/nassau-grouper.jpg', '2024-02-17 07:25:14', 2),
(28, 'Bart Simpson', 'Ribeye Steak Tacos with Grilled Tomato ', 'Thereâ€™s nothing better than a juicy ribeye steakâ€”except when itâ€™s crispy and piled high on a corn tortilla. It was love at first sight when we saw and tasted these amazing steak tacos, a fusion of flavors from Chef Alexis Torres. Topped with a grilled tomato salsa and tangy cabbage and cilantro garnish, you never want a plain ribeye again! ', 'Food', 'https://tse1.mm.bing.net/th?id=OIP.JW5BuaTuvJhXeP1OcfFxAwHaEK&pid=Api&P=0&h=220', '2024-02-17 23:14:02', 2),
(29, 'Brian M', 'BUFF (Big Ugly Fat Fella)', 'The Boeing B-52 Stratofortress is an American long-range, subsonic, jet-powered strategic bomber. The B-52 was designed and built by Boeing, which has continued to provide support and upgrades.', 'Bomber', 'https://tse3.mm.bing.net/th?id=OIP.n5jLUts6ebGxJMTWTAN3HgHaE2&pid=Api&P=0&h=220', '2024-02-17 23:25:35', 3),
(31, 'Russ', 'Green screen kids', 'Green screen kids are infecting YouTube like this to stop them', 'Annoying little kids', 'https://tse3.mm.bing.net/th?id=OIP.XgZlf2QV3h1Vz7dRkVLb2wHaEK&pid=Api&P=0&h=220', '2024-02-17 20:02:21', 2),
(32, 'Russ dilly dog', 'Midas', 'Midas can make anything gold ðŸ† stay safe', 'Idk', 'https://tse3.mm.bing.net/th?id=OIP.dqnKn7epnSGAZ_Mb7hUg_QHaHa&pid=Api&P=0&h=220', '2024-02-17 23:24:37', 1),
(33, 'I like corgis', 'CUTEST ANIMAL', 'CORGIS RULE', 'Pets', 'https://tse1.mm.bing.net/th?id=OIP.rIOZglVfzKUQZ4qB2loe7QHaGW&pid=Api&P=0&h=220', '2024-02-18 01:21:01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userpassword` varchar(30) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `r_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `userpassword`, `avatar`, `fullname`, `r_date`) VALUES
(11, 'turtle', 'password', 'https://tse2.mm.bing.net/th?id=OIP.JbyCkngzRSFLdHwhVla7MwHaFj&pid=Api&P=0&h=220', 'Michalangelo', '2024-02-17'),
(12, 'fishy', 'password', 'https://tse3.mm.bing.net/th?id=OIP.S9p1uYLr04tRCLx4TH_QRwHaEK&pid=Api&P=0&h=220', 'Fishsticks', '2024-02-17'),
(13, 'green', 'password', 'https://tse1.mm.bing.net/th?id=OIP.t3xoIOVXUJH93386CulqcQHaEq&pid=Api&P=0&h=220', 'Cricket', '2024-02-17'),
(14, 'russmc', '0317', 'https://tse2.mm.bing.net/th?id=OIP.8eyTdaSvgTvO-xH0YPMY7AHaJ4&pid=Api&P=0&h=220', 'russ_mcplayz', '2024-02-17'),
(15, 'bm', 'password', 'https://www.brmcontractors.net/blog/assets/gallery/brian.jpg', 'XinGaDoo', '2024-02-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_user`
--
ALTER TABLE `active_user`
  ADD PRIMARY KEY (`a_id`);

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
-- AUTO_INCREMENT for table `active_user`
--
ALTER TABLE `active_user`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `myblogs`
--
ALTER TABLE `myblogs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
