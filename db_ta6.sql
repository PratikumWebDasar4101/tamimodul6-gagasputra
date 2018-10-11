-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 03:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta6`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`) VALUES
('gagas', 'gagas'),
('omjono01', 'omjono01'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `username` varchar(15) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`username`, `nim`, `nama`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`) VALUES
('omjono01', '6701171017', 'Gagas Putra Persada', '1', 'Pria', 'Membaca, Mewarnai, Menggambar, Menulis', 'FIT', 'Jakarta'),
('user', '6701171018', 'â¤ Jono â¤', '1', 'Pria', 'Mewarnai', 'FIT', 'Kretek, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(15) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `konten` longtext NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `nim`, `konten`, `foto`) VALUES
(13, '6701171017', ' Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia Indonesia ', 'foto/irene.jpg'),
(15, '6701171018', 'Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku Indonesiaku ', 'foto/firewatch_2016_game.jpg'),
(16, '6701171018', 'Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono Jono ', 'foto/cloud9-csgo-wallpaper-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
