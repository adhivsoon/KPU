-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2016 at 10:20 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$$kpu');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE IF NOT EXISTS `admin1` (
  `id_admin1` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id_admin1`, `user`, `pass`) VALUES
(1, 'irgi', '(@)$$irgi(@)$$##');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `kd_fakultas` varchar(2) NOT NULL,
  `nama_fakultas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE IF NOT EXISTS `kandidat` (
  `id_kandidat` int(10) NOT NULL AUTO_INCREMENT,
  `no_urut` int(5) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `nim_capres` varchar(10) NOT NULL,
  `nama_capres` varchar(50) NOT NULL,
  `nim_cawapres` varchar(10) NOT NULL,
  `nama_cawapres` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  PRIMARY KEY (`id_kandidat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `no_urut`, `foto`, `nim_capres`, `nama_capres`, `nim_cawapres`, `nama_cawapres`, `visi`, `misi`) VALUES
(1, 1, 'no1.jpg', '1', '1', '1', '1', '1', '1'),
(2, 2, 'no2.jpg', '2', '2', '2', '2', '2', '2'),
(3, 3, 'no3.jpg', '3', '3', '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE IF NOT EXISTS `suara` (
  `id_suara` int(5) NOT NULL AUTO_INCREMENT,
  `id_kandidat` int(3) NOT NULL,
  `jumlah_suara` int(5) NOT NULL,
  PRIMARY KEY (`id_suara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suara`
--

INSERT INTO `suara` (`id_suara`, `id_kandidat`, `jumlah_suara`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
