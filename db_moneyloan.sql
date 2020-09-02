-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 02:06 PM
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
  `Birthday` varchar(30) NOT NULL,
  `Age` varchar(250) NOT NULL,
  `Occupation` varchar(250) NOT NULL,
  `Company_Address` varchar(250) NOT NULL,
  `Salary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`User_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Birthday`, `Age`, `Occupation`, `Company_Address`, `Salary`) VALUES
(63, 'Gian Carlo', 'Nabor', 'Magdaleno', 'January 01, 0001', '2017', 'x', 'x', '1'),
(64, '2', '2', '2', 'February 02, 0002', '2016', '2', '2', '2'),
(65, '3', '3', '3', 'March 03, 0003', '2015', '3', '3', '3'),
(66, '4', '4', '4', 'April 04, 0004', '2014', '4', '4', '4'),
(67, '5', '5', '5', 'May 05, 0005', '2013', '5', '5', '5'),
(68, '6', '6', '6', 'June 06, 0066', '1952', '6', '6', '6'),
(69, '6', 'Nabor', 'Magdaleno', 'July 07, 0007', '2011', '77', '7', '7'),
(70, '7', '7', '7', 'July 07, 0007', '2011', '7', '7', '7'),
(71, '8', '8', '8', 'August 08, 8888', '6869', '8', '8', '8'),
(72, '9', '9', '9', 'September 09, 0999', '1019', '9', '9', '9'),
(73, '2', '3', '2', 'February 02, 0002', '2016', '2', '2', '2'),
(74, '3', '3', '3', 'March 03, 0003', '2015', '3', '3', '3'),
(75, 're', 'q', 'q', 'January 01, 0001', '2017', '11', '1', '1'),
(76, 'we', 'w', 'w', 'January 01, 0001', '2017', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_ID` int(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_ID`, `Username`, `Password`, `Role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(58, '1', '1', 'user'),
(64, '2', '2', 'user'),
(65, '3', '3', 'user'),
(66, '4', '4', 'user'),
(67, '5', '5', 'user'),
(68, '6', '6', 'user'),
(70, '7', '7', 'user'),
(71, '8', '8', 'user'),
(72, '9', '9', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `proof_bill`
--

CREATE TABLE `proof_bill` (
  `User_ID` int(250) NOT NULL,
  `ID_Bill` varchar(250) NOT NULL,
  `Path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proof_bill`
--

INSERT INTO `proof_bill` (`User_ID`, `ID_Bill`, `Path`) VALUES
(58, 'Meralco', '48d2f4d4d605e72f218422da915b6067.png'),
(64, 'Internet/Telephone/Mobile Phone Bills', '53e2336680a8cd8605e7ccdc4bd38c7a.png'),
(65, 'Internet/Telephone/Mobile Phone Bills', '8b5fde16e670cbb2f6870d789689eba3.png'),
(66, 'Internet/Telephone/Mobile Phone Bills', 'dff48a49a7efb0b152eb8a2b1d76c9f7.png'),
(67, 'Internet/Telephone/Mobile Phone Bills', 'ec7e833928713c7ff731a3a41dc1e2f9.png'),
(68, 'Internet/Telephone/Mobile Phone Bills', '89e6f4eb9bdc8184d92e323cc9c7e4c6.png'),
(70, '', '00bb6b2fa83554117b9c114d44bde9f2.png'),
(71, 'TV/Cable Bill', 'cdd0e857b64d1d800a9c230a28080b03.png'),
(71, '', 'b0511651c68ae9dab48febd2fb52b1a2.png'),
(72, 'Meralco', 'a13570f2d0cf069aa75e016e7b4b118d.PNG'),
(72, 'Meralco', 'a13570f2d0cf069aa75e016e7b4b118d.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `proof_id`
--

CREATE TABLE `proof_id` (
  `User_ID` int(250) NOT NULL,
  `ID_Type` varchar(250) NOT NULL,
  `Path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proof_id`
--

INSERT INTO `proof_id` (`User_ID`, `ID_Type`, `Path`) VALUES
(58, 'Government ID', '801c958eb7b9a6943a8c91238b45fabf.png'),
(64, 'Student ID', '2ef3cfba9e0450023ff04358f4d905db.png'),
(65, 'Student ID', '8fea7bb2ae677544f2fa6038ffe5de3a.png'),
(66, 'Driver\'s License', '0115ca963ab41256a34bd271fcd96ee6.png'),
(67, 'Student ID', '3e8d5fbf6b9ec4aa0050445228a410b6.png'),
(68, 'Student ID', '3e23aa6a18c83b72b0f6e4affe0c8c09.png'),
(70, 'Student ID', '5264ce3f19b60e2010e9be2588f35766.png'),
(71, 'Passport', '37f29a1fbb0c9d0003b0d8f6b01a70ea.png'),
(72, 'Passport', '48597499e700f4fe9ff73a27e50f76e5.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `reference_credentials`
--

CREATE TABLE `reference_credentials` (
  `Ref_NO` int(250) NOT NULL,
  `User_ID` int(250) NOT NULL,
  `Full_Name` varchar(250) NOT NULL,
  `Relationship` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_credentials`
--

INSERT INTO `reference_credentials` (`Ref_NO`, `User_ID`, `Full_Name`, `Relationship`, `Address`) VALUES
(76, 64, '2', '2', '2'),
(77, 64, '2', '2', '2'),
(78, 64, '2', '2', '2'),
(79, 65, '3', '3', '3'),
(80, 65, '3', '3', '3'),
(81, 65, '3', '3', '3'),
(82, 66, '44', '4', '4'),
(83, 66, '4', '4', '4'),
(84, 66, '4', '4', '4444'),
(85, 67, '5', '555', '5'),
(86, 67, '5555', '5', '5555'),
(87, 67, '5', '5', '5'),
(88, 68, '6', '6', '666'),
(89, 68, '6', '666', '6'),
(90, 68, '6', '6', '6666'),
(91, 70, '7', '7', '7'),
(92, 70, '7', '7', '7'),
(93, 70, '7', '7', '7'),
(94, 71, '8', '8', '8'),
(95, 71, '8', '8', '8'),
(96, 71, '8', '888', '888'),
(97, 72, '9', '9', '9'),
(98, 72, '9', '9', '9'),
(99, 72, '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `Trans_NO` int(250) NOT NULL,
  `User_ID` int(250) NOT NULL,
  `Loan_Amount` int(250) NOT NULL,
  `Loan_Date` date NOT NULL,
  `Loan_Due` date NOT NULL,
  `Status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `reference_credentials`
--
ALTER TABLE `reference_credentials`
  ADD PRIMARY KEY (`Ref_NO`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`Trans_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `User_ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `reference_credentials`
--
ALTER TABLE `reference_credentials`
  MODIFY `Ref_NO` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
