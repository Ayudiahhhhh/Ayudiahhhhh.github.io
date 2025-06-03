-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2025 at 05:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xipplg2_ayudiaputrirahayu`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan_kegiatan`
--

CREATE TABLE `catatan_kegiatan` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jum''at','Sabtu','Minggu') NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text NOT NULL,
  `status` enum('private','public') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `profil_pribadi`
--

CREATE TABLE `profil_pribadi` (
  `id` int NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` enum('P','L') COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `anak_ke` int NOT NULL,
  `alamat` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `warna_kesukaan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `cita_cita` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `hobi` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','pengguna') NOT NULL DEFAULT 'pengguna',
  `image` varchar(255) DEFAULT 'profill.jpeg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `image`) VALUES
(1, 'ayu', '$2y$10$mgXj7mC.sC/aogUY6ArXhO7pQHWdlm/bVJSB6EMpS20dbyx9z8raK', 'pengguna', 'profill.jpeg'),
(2, 'diah', '$2y$10$3RF6EiI1cJt2KHYCAm/7Ze7YlIhndMJQeZASur2HIVzAbAhIYfSz.', 'admin', 'jennii.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan_kegiatan`
--
ALTER TABLE `catatan_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_kegiatan`
--
ALTER TABLE `catatan_kegiatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
