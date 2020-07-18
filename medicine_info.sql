-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 05:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine_info`
--

CREATE TABLE `medicine_info` (
  `NAME` varchar(30) NOT NULL,
  `PROTEIN_NAME` varchar(30) NOT NULL,
  `PURPOSE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_info`
--

INSERT INTO `medicine_info` (`NAME`, `PROTEIN_NAME`, `PURPOSE`) VALUES
('Paracetamol', 'Fibre', 'Cure Fever'),
('Vics Action 500', 'Fibre', 'Cure Head ache'),
('BabyGam', 'globulin', 'Cure teeth'),
('Arthritis pain', 'asprin', 'relieve occasional pain'),
('cuvitru', 'globulin', 'boost the bodys natural defence system '),
('gammagard liquid', 'globulin', 'used in people with certain type of weakened immun'),
('biotin', 'keratin', 'for preventing and treating biotin deficiency'),
('selinium capsule', 'se-plus protein', 'prevent selenium defiency'),
('min-25', 'alumin', 'used to treat or prevent low bloop volume'),
('cytogam', 'globulin', 'used to prevent a certain serious viral infection'),
('creon', 'proteease', 'used to improve food digestion in people'),
('ganunex-c', 'globulin', 'used to increase number of certain blood cells'),
('aluminex', 'alumin', 'used to treat low blood pressure'),
('flebogamma', 'glonulin', 'used in people with kawasaki syndrome');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
