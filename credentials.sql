-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 12:06 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moneyloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `User_ID` int(250) NOT NULL,
  `First_Name` varchar(250) NOT NULL,
  `Middle_Name` varchar(250) NOT NULL,
  `Last_Name` varchar(250) NOT NULL,
  `Birthday` date NOT NULL,
  `Age` varchar(250) NOT NULL,
  `Occupation` varchar(250) NOT NULL,
  `Company_Address` varchar(250) NOT NULL,
  `Salary` varchar(250) NOT NULL,
  `Contact_Number` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`User_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Birthday`, `Age`, `Occupation`, `Company_Address`, `Salary`, `Contact_Number`, `Address`) VALUES
(163, 'Gian Carlo', 'Nabor', 'Magdaleno', '2000-11-02', '15', 'Teacher', 'company address', '13500', '888777', 'adrresss'),
(165, 'Gian', 'Nabor', 'Magdaleno', '1998-10-05', '9', 'Programmer', 'company address', '13500', '09093r02490', 'address'),
(167, 'Abigail', 'Canas', 'Santos', '1995-09-01', '26', 'Teacha', 'comp Add', '1000000', '9999999', 'address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `User_ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
