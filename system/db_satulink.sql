-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2018 at 06:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satulink`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_nasabah`
--

CREATE TABLE `tbl_detail_nasabah` (
  `id_detail_nasabah` int(11) NOT NULL,
  `kode_nasabah` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(10) DEFAULT NULL,
  `pin` varchar(100) DEFAULT NULL,
  `jenis_nasabah` varchar(20) DEFAULT NULL,
  `status_nasabah` int(11) NOT NULL,
  `saldo_nasabah` float NOT NULL,
  `createdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `isactive` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komisi`
--

CREATE TABLE `tbl_komisi` (
  `id_komisi` int(11) NOT NULL,
  `nomor_referensi` varchar(100) DEFAULT NULL,
  `komisi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_magen`
--

CREATE TABLE `tbl_magen` (
  `id_agen` int(11) NOT NULL,
  `kode_agen` varchar(20) DEFAULT NULL,
  `kode_personal_agen` varchar(20) DEFAULT NULL,
  `kode_usaha_agen` varchar(20) DEFAULT NULL,
  `kode_rekening_agen` varchar(20) DEFAULT NULL,
  `nama_keagenan` varchar(50) DEFAULT NULL,
  `wilayah_operasional` varchar(20) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `nomor_virtual_account` varchar(50) DEFAULT NULL,
  `nama_virtual_account` varchar(50) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `alamat` text,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `status_agen` int(11) NOT NULL,
  `saldo_agen` float NOT NULL,
  `isactive` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  `editdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_magen`
--

INSERT INTO `tbl_magen` (`id_agen`, `kode_agen`, `kode_personal_agen`, `kode_usaha_agen`, `kode_rekening_agen`, `nama_keagenan`, `wilayah_operasional`, `longitude`, `latitude`, `nomor_virtual_account`, `nama_virtual_account`, `provinsi`, `kota`, `alamat`, `kecamatan`, `kelurahan`, `kode_pos`, `status_agen`, `saldo_agen`, `isactive`, `createdate`, `editdate`) VALUES
(1, '7036320001', 'KPA00000000000000001', 'KUA00000000000000001', 'KRA00000000000000001', 'agen wawan', 'jakarta', '1231231', '12313', '12321312432123', 'agen wawan', 'jakarta', 'jakarta', 'jakarta jalan', 'matmat', 'lurlur', '12312', 1, 0, 1, '2018-05-23 01:17:45', '0000-00-00 00:00:00'),
(2, '3297170002', 'KPA00000000000000002', 'KUA00000000000000002', 'KRA00000000000000002', 'agen ipon', 'jakarta', '1231231', '12313', '12321312432123', 'agen wawan', 'jakarta', 'jakarta', 'jakarta jalan', 'matmat', 'lurlur', '12312', 1, 0, 1, '2018-05-23 01:20:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mnasabah`
--

CREATE TABLE `tbl_mnasabah` (
  `id_nasabah` int(11) NOT NULL,
  `kode_nasabah` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomor_ktp` varchar(20) DEFAULT NULL,
  `nomor_npwp` varchar(20) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `pendidikan_terkahir` varchar(10) DEFAULT NULL,
  `nama_ibu_kandung` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `nomor_telepon` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat_ktp` text,
  `provinsi_ktp` varchar(20) DEFAULT NULL,
  `kota_ktp` varchar(20) DEFAULT NULL,
  `kecamatan_ktp` varchar(20) DEFAULT NULL,
  `kelurahan_ktp` varchar(20) DEFAULT NULL,
  `kode_pos_ktp` varchar(6) DEFAULT NULL,
  `alamat_domisili` text,
  `provinsi_domisili` varchar(20) DEFAULT NULL,
  `kota_domisili` varchar(20) DEFAULT NULL,
  `kecamatan_domisili` varchar(20) DEFAULT NULL,
  `kelurahan_domisili` varchar(20) DEFAULT NULL,
  `kode_pos_domisili` varchar(6) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `isactive` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mpersonal_agen`
--

CREATE TABLE `tbl_mpersonal_agen` (
  `id_personal_agen` int(11) NOT NULL,
  `kode_personal_agen` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomor_ktp` varchar(20) DEFAULT NULL,
  `nomor_npwp` varchar(20) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `alamat` text,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `nomor_telepon` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mpersonal_agen`
--

INSERT INTO `tbl_mpersonal_agen` (`id_personal_agen`, `kode_personal_agen`, `nama`, `nomor_ktp`, `nomor_npwp`, `jenis_kelamin`, `pendidikan_terakhir`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `provinsi`, `kota`, `alamat`, `kecamatan`, `kelurahan`, `kode_pos`, `pekerjaan`, `status_perkawinan`, `nomor_telepon`, `email`, `createdate`) VALUES
(1, 'KPA00000000000000001', 'wawan', '1231312312312311', '1232131231231231', 'L', 'SMP', 'jakarta', '2016-03-21', 'Indonesia', 'DKI Jakarta', 'Jakarta Pusat', 'jl. jalan', 'camat', 'lurah', '11231', '1', '1', '082298811904', '12312@sc.o', '2018-05-23 01:17:44'),
(2, 'KPA00000000000000002', 'dermawan', '1231312312312311', '1232131231231231', 'L', 'SMP', 'jakarta', '2017-05-09', 'Indonesia', 'DKI Jakarta', 'Jakarta Pusat', 'jl. jalan', 'camat', 'lurah', '11231', '1', '1', '082298811904', '12312@sc.o', '2018-05-23 01:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mrekening_agen`
--

CREATE TABLE `tbl_mrekening_agen` (
  `id_rekening_agen` int(11) NOT NULL,
  `kode_rekening_agen` varchar(20) DEFAULT NULL,
  `nama_pemilik_rekening` varchar(50) DEFAULT NULL,
  `jenis_rekening` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `cabang_terdekat` varchar(30) DEFAULT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mrekening_agen`
--

INSERT INTO `tbl_mrekening_agen` (`id_rekening_agen`, `kode_rekening_agen`, `nama_pemilik_rekening`, `jenis_rekening`, `nomor_rekening`, `cabang_terdekat`, `createdate`) VALUES
(1, 'KRA00000000000000001', 'wawan', '1', '12312313123123121312', 'jkt', '2018-05-23 01:17:45'),
(2, 'KRA00000000000000002', 'wawan', '1', '12312313123123121312', 'jkt', '2018-05-23 01:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mtipe_user`
--

CREATE TABLE `tbl_mtipe_user` (
  `id_tipe_user` int(11) NOT NULL,
  `nama_tipe_user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mtipe_user`
--

INSERT INTO `tbl_mtipe_user` (`id_tipe_user`, `nama_tipe_user`) VALUES
(1, 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_musaha_agen`
--

CREATE TABLE `tbl_musaha_agen` (
  `id_usaha_agen` int(11) NOT NULL,
  `kode_usaha_agen` varchar(20) DEFAULT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `jenis_usaha` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `alamat` text,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `nomor_telepon` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `penghasil_pertahun` int(11) DEFAULT NULL,
  `tanggal_mulai_usaha` date DEFAULT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_musaha_agen`
--

INSERT INTO `tbl_musaha_agen` (`id_usaha_agen`, `kode_usaha_agen`, `nama_usaha`, `jenis_usaha`, `provinsi`, `kota`, `alamat`, `kecamatan`, `kelurahan`, `kode_pos`, `nomor_telepon`, `email`, `penghasil_pertahun`, `tanggal_mulai_usaha`, `createdate`) VALUES
(1, 'KUA00000000000000001', 'toko pulpul', '1', 'jakarta', 'jakarta barat', 'jl. jakarta', 'mamat', 'lulur', '12312', '2373123918', 'ksaljda@asda.co', 2147483647, '2014-01-22', '2018-05-23 01:17:45'),
(2, 'KUA00000000000000002', 'tokoipon', '1', 'jakarta', 'jakarta barat', 'jl. jakarta', 'mamat', 'lulur', '12312', '2373123918', 'ksaljda@asda.co', 2147483647, '2019-04-25', '2018-05-23 01:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_muser`
--

CREATE TABLE `tbl_muser` (
  `id_user` int(11) NOT NULL,
  `kode_user` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `tipe_user` char(1) DEFAULT NULL,
  `isactive` char(1) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_muser`
--

INSERT INTO `tbl_muser` (`id_user`, `kode_user`, `username`, `password`, `tipe_user`, `isactive`, `createdate`, `editdate`) VALUES
(1, 'U0000000000000000000', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '1', '1', '2018-05-21 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ttransaksi`
--

CREATE TABLE `tbl_ttransaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nomor_referensi` varchar(100) DEFAULT NULL,
  `tanggal_transaksi` datetime DEFAULT NULL,
  `jenis_transaksi` varchar(25) DEFAULT NULL,
  `kode_agen` int(11) DEFAULT NULL,
  `nomor_rekening` varchar(15) DEFAULT NULL,
  `nominal_transaksi` int(11) DEFAULT NULL,
  `status_transaksi` char(1) DEFAULT NULL,
  `berita_transaksi` varchar(100) DEFAULT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_nasabah`
--
ALTER TABLE `tbl_detail_nasabah`
  ADD PRIMARY KEY (`id_detail_nasabah`),
  ADD KEY `kode_nasabah` (`kode_nasabah`),
  ADD KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indexes for table `tbl_komisi`
--
ALTER TABLE `tbl_komisi`
  ADD PRIMARY KEY (`id_komisi`),
  ADD KEY `nomor_referensi` (`nomor_referensi`);

--
-- Indexes for table `tbl_magen`
--
ALTER TABLE `tbl_magen`
  ADD PRIMARY KEY (`id_agen`),
  ADD KEY `kode_agen` (`kode_agen`),
  ADD KEY `kode_personal_agen` (`kode_personal_agen`),
  ADD KEY `kode_usaha_agen` (`kode_usaha_agen`),
  ADD KEY `kode_rekening_agen` (`kode_rekening_agen`);

--
-- Indexes for table `tbl_mnasabah`
--
ALTER TABLE `tbl_mnasabah`
  ADD PRIMARY KEY (`id_nasabah`),
  ADD KEY `kode_nasabah` (`kode_nasabah`);

--
-- Indexes for table `tbl_mpersonal_agen`
--
ALTER TABLE `tbl_mpersonal_agen`
  ADD PRIMARY KEY (`id_personal_agen`),
  ADD KEY `kode_personal_agen` (`kode_personal_agen`);

--
-- Indexes for table `tbl_mrekening_agen`
--
ALTER TABLE `tbl_mrekening_agen`
  ADD PRIMARY KEY (`id_rekening_agen`),
  ADD KEY `kode_rekening_agen` (`kode_rekening_agen`);

--
-- Indexes for table `tbl_mtipe_user`
--
ALTER TABLE `tbl_mtipe_user`
  ADD PRIMARY KEY (`id_tipe_user`);

--
-- Indexes for table `tbl_musaha_agen`
--
ALTER TABLE `tbl_musaha_agen`
  ADD PRIMARY KEY (`id_usaha_agen`),
  ADD KEY `kode_usaha_agen` (`kode_usaha_agen`);

--
-- Indexes for table `tbl_muser`
--
ALTER TABLE `tbl_muser`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `tbl_ttransaksi`
--
ALTER TABLE `tbl_ttransaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `nomor_referensi` (`nomor_referensi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_komisi`
--
ALTER TABLE `tbl_komisi`
  MODIFY `id_komisi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_magen`
--
ALTER TABLE `tbl_magen`
  MODIFY `id_agen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_mnasabah`
--
ALTER TABLE `tbl_mnasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mpersonal_agen`
--
ALTER TABLE `tbl_mpersonal_agen`
  MODIFY `id_personal_agen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_mrekening_agen`
--
ALTER TABLE `tbl_mrekening_agen`
  MODIFY `id_rekening_agen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_mtipe_user`
--
ALTER TABLE `tbl_mtipe_user`
  MODIFY `id_tipe_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_musaha_agen`
--
ALTER TABLE `tbl_musaha_agen`
  MODIFY `id_usaha_agen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_muser`
--
ALTER TABLE `tbl_muser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ttransaksi`
--
ALTER TABLE `tbl_ttransaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
