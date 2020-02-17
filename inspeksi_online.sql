-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 02:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspeksi_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `tgl` int(11) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `nama_lok` varchar(128) NOT NULL,
  `nama_pngmd` varchar(128) NOT NULL,
  `umur` int(11) NOT NULL,
  `nama_po` varchar(128) NOT NULL,
  `no_kendaraan` varchar(128) NOT NULL,
  `jns_no_kendaraan` varchar(128) NOT NULL,
  `no_stuk` varchar(128) NOT NULL,
  `jenis_trayek` varchar(128) NOT NULL,
  `trayek` varchar(128) NOT NULL,
  `kartu_uji_stuk` int(11) DEFAULT NULL,
  `kp_reguler` int(11) DEFAULT NULL,
  `kp_cadangan` int(11) DEFAULT NULL,
  `sim_pengemudi` int(11) DEFAULT NULL,
  `luk_dekat` int(11) DEFAULT NULL,
  `luk_jauh` int(11) DEFAULT NULL,
  `sein_depan` int(11) DEFAULT NULL,
  `sein_belakang` int(11) DEFAULT NULL,
  `lampu_rem` int(11) DEFAULT NULL,
  `lampu_mundur` int(11) DEFAULT NULL,
  `rem_utama` int(11) DEFAULT NULL,
  `rem_mundur` int(11) DEFAULT NULL,
  `kaca_depan` int(11) DEFAULT NULL,
  `ban_depan` int(11) DEFAULT NULL,
  `ban_belakang` int(11) DEFAULT NULL,
  `sabuk` int(11) DEFAULT NULL,
  `kecepatan` int(11) DEFAULT NULL,
  `lampu_posisi_d` int(11) DEFAULT NULL,
  `lampu_posisi_b` int(11) DEFAULT NULL,
  `kaca_spion` int(11) DEFAULT NULL,
  `wiper` int(11) DEFAULT NULL,
  `klakson` int(11) DEFAULT NULL,
  `tempat_duduk` int(11) DEFAULT NULL,
  `ban_cadangan` int(11) DEFAULT NULL,
  `stg_pengaman` int(11) DEFAULT NULL,
  `dongkrak` int(11) DEFAULT NULL,
  `pmbk_roda` int(11) DEFAULT NULL,
  `lampu_senter` int(11) DEFAULT NULL,
  `pintu_darurat` int(11) DEFAULT NULL,
  `jendela_darurat` int(11) DEFAULT NULL,
  `pemecah_kaca` int(11) DEFAULT NULL,
  `hasil_inspeksi` int(11) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `id_penguji` int(11) DEFAULT NULL,
  `nama_penyidik` varchar(128) DEFAULT NULL,
  `nip_penyidik` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Penguji');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
