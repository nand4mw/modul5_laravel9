-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2024 at 02:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uniba_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jurusan`
--

CREATE TABLE `data_jurusan` (
  `id_jurusan` int NOT NULL,
  `nama_jurusan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Informatika', NULL, NULL),
(3, 'Teknik Industri', NULL, NULL),
(5, 'Akuntansi', NULL, NULL),
(6, 'Manajemen', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `id_jurusan` int NOT NULL,
  `nama_mahasiswa` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nim_mahasiswa` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id_mahasiswa`, `id_jurusan`, `nama_mahasiswa`, `nim_mahasiswa`, `tgl_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yosi Bagus Sadar Rasuli', '2202320106', '2000-04-22', 'L', NULL, NULL),
(12, 1, 'Yosi', '12736236', '2024-12-05', 'L', '2024-01-02 05:45:28', '2024-01-02 05:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `operator_sistem`
--

CREATE TABLE `operator_sistem` (
  `id_operator` int NOT NULL,
  `nama_operator` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_operator` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operator_sistem`
--

INSERT INTO `operator_sistem` (`id_operator`, `nama_operator`, `email_operator`, `password`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Yosi', 'yosibagus@unibamadura.ac.id', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `operator_sistem`
--
ALTER TABLE `operator_sistem`
  ADD PRIMARY KEY (`id_operator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  MODIFY `id_jurusan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `operator_sistem`
--
ALTER TABLE `operator_sistem`
  MODIFY `id_operator` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD CONSTRAINT `data_mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `data_jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
