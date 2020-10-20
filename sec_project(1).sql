-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 08:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sec_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `debt`
--

CREATE TABLE `debt` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `fisrt_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Debt_value` bigint(20) NOT NULL,
  `Debt_avance` double NOT NULL,
  `Debt_avance_date` date NOT NULL,
  `debt_reset` double NOT NULL,
  `pay` int(11) NOT NULL DEFAULT 0,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emplay_user`
--

CREATE TABLE `emplay_user` (
  `id` varchar(255) NOT NULL,
  `first_name_employ` varchar(255) NOT NULL,
  `last_name_employ` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `salyer` double NOT NULL,
  `avance` double NOT NULL,
  `reset` double NOT NULL,
  `pay` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `creat_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_buy`
--

CREATE TABLE `product_buy` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `Fournisseur` varchar(100) NOT NULL,
  `Nomber_de_Moutant` bigint(255) NOT NULL,
  `prix_de_kg` double NOT NULL,
  `poid` double NOT NULL,
  `prix_total_achat` double NOT NULL,
  `cearte_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `prix_de_vender` double NOT NULL,
  `prix_totle_de_vender` double NOT NULL,
  `marge_benificier` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `user_status`, `create_at`, `update_at`) VALUES
('user5f8be30184c1c0.69049799', 'admin@admin', '$2y$12$l9JpXdmmDpc45O1hheH6UOiPNYBOyB7IikjzQKD.XmfJxA6RsDSfW', 1, '2020-10-18', '2020-10-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `debt`
--
ALTER TABLE `debt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emplay_user`
--
ALTER TABLE `emplay_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employ`
--
ALTER TABLE `employ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_buy`
--
ALTER TABLE `product_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `debt`
--
ALTER TABLE `debt`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_buy`
--
ALTER TABLE `product_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
