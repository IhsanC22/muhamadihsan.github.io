-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 02:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komentar`
--

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `tanggal` datetime NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`cid`, `uid`, `tanggal`, `pesan`) VALUES
(3, 'Anonymous', '2023-10-16 11:08:48', 'hello there edited yo'),
(4, 'Anonymous', '2023-10-16 11:12:02', 'verry trippy!'),
(5, 'Anonymous', '2023-10-16 11:18:40', 'why are my face in there?'),
(6, 'Anonymous', '2023-10-16 11:18:56', 'emak gw masuk tv !1!!!11!!1!!!111 horweeeeeeee'),
(14, 'Anonymous', '2023-10-16 11:59:30', 'wow'),
(23, 'Anonymous', '2023-10-16 12:07:36', 'mau mengetik pesan tes dulu\r\n\r\nhalo'),
(24, 'Anonymous', '2023-10-16 12:07:36', 'mau 3'),
(31, 'Anonymous', '2023-10-16 13:12:57', 'hello meem'),
(32, 'Anonymous', '2023-10-16 13:12:57', 'hello edit'),
(33, 'Anonymous', '2023-10-16 13:12:57', 'hello merde'),
(34, 'Anonymous', '2023-10-16 14:32:50', 'whiped out lollll'),
(37, 'Anonymous', '2023-10-16 14:35:42', 'yo komen ini di edit'),
(38, 'Anonymous', '2023-10-16 21:02:26', 'ma men'),
(40, 'Anonymous', '2023-10-16 21:16:11', 'touche');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
