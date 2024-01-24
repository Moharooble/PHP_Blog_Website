-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 11:41 AM
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
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `infotb`
--

CREATE TABLE `infotb` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infotb`
--

INSERT INTO `infotb` (`id`, `title`, `body`, `date`) VALUES
(3, 'Today', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, \r\n        nesciunt nihil. Ducimus facere ullam fugiat esse, quia deserunt. \r\n        Impedit ad magni debitis consectetur, \r\n        eos nihil amet quae omnis quibusdam animi.', '2023-12-06 21:00:00'),
(5, 'Today', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, \r\n        nesciunt nihil. Ducimus facere ullam fugiat esse, quia deserunt. \r\n        Impedit ad magni debitis consectetur, \r\n        eos nihil amet quae omnis quibusdam animi.', '2023-12-06 21:00:00'),
(6, 'Today', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, \r\n        nesciunt nihil. Ducimus facere ullam fugiat esse, quia deserunt. \r\n        Impedit ad magni debitis consectetur, \r\n        eos nihil amet quae omnis quibusdam animi.', '2023-12-06 21:00:00'),
(7, 'Wararka maanta', 'wararka naga soo garaya puntland waxay sheegayan in deni uu tanaasulay oo u tanaasulay shacabka rer puntland taa so ah war lagu farxo waan uga mahad celinaynaa go aankas hadaanahay shacabka puntland', '2023-12-07 17:58:40'),
(9, 'warka subaxnimo', 'wararka naga soo garaya puntland waxay sheegayan in deni uu tanaasulay oo u tanaasulay shacabka rer puntland taa so ah war lagu farxo waan uga mahad celinaynaa go aankas hadaanahay shacabka puntland', '2023-12-08 03:43:55'),
(11, 'jumco', 'jumcadu waa habeen somalidu aad u jeceshahy dhanka kalana waa habeen qiimo ku le diintena dhexdeeda,\r\nhabenkas diinteenu waxay qabtaa in cibaado lagu wayneeyo oo an layska cayaarin ama barabulsho lacamiran.', '2023-12-08 18:27:11'),
(12, 'aniyo adan', 'ani adan waxan nahay labo saaxib mido kudhan hal sano lknse mudadii ugu danbaysay', '2023-12-08 19:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infotb`
--
ALTER TABLE `infotb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infotb`
--
ALTER TABLE `infotb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
