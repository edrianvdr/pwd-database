-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 10:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwdinfo`
--

CREATE TABLE `pwdinfo` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `Gender` enum('Male','Female','Other') DEFAULT NULL,
  `MaritalStatus` enum('Single','Married','Widowed','Separated','Divorced') DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `DisabilityType` varchar(255) DEFAULT NULL,
  `CauseOfDisability` text DEFAULT NULL,
  `PwdIdNumber` varchar(50) DEFAULT NULL,
  `EducationalAttainment` varchar(255) DEFAULT NULL,
  `Occupation` varchar(255) DEFAULT NULL,
  `BankName` varchar(255) DEFAULT NULL,
  `BankAccountNumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pwdinfo`
--

INSERT INTO `pwdinfo` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Birthday`, `Gender`, `MaritalStatus`, `Address`, `ContactNumber`, `EmailAddress`, `DisabilityType`, `CauseOfDisability`, `PwdIdNumber`, `EducationalAttainment`, `Occupation`, `BankName`, `BankAccountNumber`) VALUES
(1, 'Edrian', 'Villados', 'Delos Reyes', '1999-10-21', 'Male', 'Single', '#51 AFP Road, Holy Spirit, Quezon City', '09292259697', 'edrianvdr@gmail.com', 'Visual Disability', 'Leber\'s Hereditary Optic Neuropathy', '43180401', 'BS in Computer Science Graduate', 'Web Developer', 'GCash', '09292259697'),
(2, 'Alma', 'Ronquillo', 'Corsanes', '1996-03-20', 'Female', 'Single', 'QC', '09095492640', 'almacorsanes20@gmail.com', 'Visual Disability', 'Glaucoma', '045355', 'Educ Graduate', 'Recruitment Specialist', 'GCash', '09095492640');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwdinfo`
--
ALTER TABLE `pwdinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwdinfo`
--
ALTER TABLE `pwdinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
