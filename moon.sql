-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 12:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nadpis` varchar(48) NOT NULL,
  `text` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `nadpis`, `text`, `created_at`) VALUES
(18, NULL, 'Dejny', 'Cau ja jsem dejny a jsem mega frajer ale nemam nervy na totok', '2023-04-28 22:52:15'),
(24, NULL, 'qha', 'aha', '2023-04-28 23:16:53'),
(25, NULL, 'Ehlou', 'kocka domaci je vlastne ydegenerovanej psik', '2023-04-29 07:36:17'),
(26, NULL, 'Dejny Now', 'ZABIJU SE', '2023-04-29 07:57:13'),
(27, NULL, 'lorem', 'ipsum', '2023-04-29 07:57:43'),
(29, NULL, 'vodopad', 'voda padajici ze skaly', '2023-04-29 07:58:43'),
(30, NULL, 'Ehlou', 'kockakockackakocka', '2023-04-29 09:28:10'),
(31, NULL, 'kockackokadk', 'cokoladacokolada', '2023-04-29 09:28:37'),
(32, NULL, 'kockackokadk', 'cokoladacokolada', '2023-04-29 09:28:59'),
(33, NULL, 'kockkopes', 'psik', '2023-04-29 09:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `surname` varchar(24) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `con_question` varchar(64) NOT NULL,
  `con_answer` varchar(24) NOT NULL,
  `note` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `surname`, `username`, `password`, `email`, `con_question`, `con_answer`, `note`) VALUES
(5, 'Daniel', 'Slaby', 'Dejn', '6b6277afcb65d33525545904e95c2fa240632660', 'danslaby@email.cz', 'otec?', 'ne', 'nn'),
(6, 'Mat', 'av', 'MATAVGAMING', '54c561224f5cddbae9039a8690ae4ea424d8e635', 'matav@gaming.cz', 'je matav geek?', 'ANO', 'matav je top'),
(7, 'dejn', 'dejn', 'dejn', '3fa14810d4f663ee5d901ea1350855aa0da61dd6', 'dejn', 'dejn', 'dejn', 'dejn'),
(8, 'tom', 'tom', 'tom', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'tom', 'tom', 'tom', 'tom'),
(9, 'hej', 'hej', 'hej', 'c412b37f8c0484e6db8bce177ae88c5443b26e92', 'hej', 'hej', 'hej', ''),
(10, 'hou', 'hou', 'hou', '8e17f43b88178bf8facaca56028454b32c2028c2', 'hou', 'hou', 'hou', ''),
(11, 'ola', 'ola', 'ola', '793f970c52ded1276b9264c742f19d1888cbaf73', 'ola', 'ola', 'ola', ''),
(12, 'dejn', 'dejn', 'dejn', '3fa14810d4f663ee5d901ea1350855aa0da61dd6', 'dejn', 'dejn', 'dejn', ''),
(13, 'dar', 'dar', 'dar', '08fb52cf0b3735a314211e242d1b09700519b162', 'dar', 'dar', 'dar', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
