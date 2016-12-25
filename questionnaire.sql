-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 25, 2016 at 03:47 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire-answer`
--

CREATE TABLE `questionnaire-answer` (
  `id` int(10) NOT NULL,
  `company` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `floor` int(2) NOT NULL,
  `road` varchar(255) NOT NULL,
  `subarea` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip` int(5) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `bscit` int(5) DEFAULT NULL,
  `bsccs` int(5) DEFAULT NULL,
  `mscit` int(5) DEFAULT NULL,
  `msccs` int(5) DEFAULT NULL,
  `mscse` int(5) DEFAULT NULL,
  `mscbis` int(5) DEFAULT NULL,
  `reason1` int(1) DEFAULT NULL,
  `reason2` int(1) DEFAULT NULL,
  `reason3` int(1) DEFAULT NULL,
  `reason4` int(1) DEFAULT NULL,
  `reason5` int(1) DEFAULT NULL,
  `reason6` int(1) DEFAULT NULL,
  `reason71` int(1) DEFAULT NULL,
  `reason72` int(1) DEFAULT NULL,
  `reason73` int(1) DEFAULT NULL,
  `reason74` int(1) DEFAULT NULL,
  `reason75` int(1) DEFAULT NULL,
  `reason76` int(1) DEFAULT NULL,
  `reason76add` varchar(255) DEFAULT NULL,
  `reason8` int(1) DEFAULT NULL,
  `want1` int(1) DEFAULT NULL,
  `want1add` varchar(255) DEFAULT NULL,
  `want2` int(1) DEFAULT NULL,
  `want3` int(1) DEFAULT NULL,
  `want3add` int(1) DEFAULT NULL,
  `want4` int(1) DEFAULT NULL,
  `want5` int(1) DEFAULT NULL,
  `want6` int(1) DEFAULT NULL,
  `want7` int(1) DEFAULT NULL,
  `want8` int(1) DEFAULT NULL,
  `want9` int(1) DEFAULT NULL,
  `want10` int(1) DEFAULT NULL,
  `want11` int(1) DEFAULT NULL,
  `want12` int(1) DEFAULT NULL,
  `want12add` varchar(255) DEFAULT NULL,
  `1it` int(1) NOT NULL,
  `1cs` int(1) NOT NULL,
  `2it` int(1) NOT NULL,
  `2cs` int(1) NOT NULL,
  `3it` int(1) NOT NULL,
  `3cs` int(1) NOT NULL,
  `4it` int(1) NOT NULL,
  `4cs` int(1) NOT NULL,
  `5it` int(1) NOT NULL,
  `5cs` int(1) NOT NULL,
  `6it` int(1) NOT NULL,
  `6cs` int(1) NOT NULL,
  `7it` int(1) NOT NULL,
  `7cs` int(1) NOT NULL,
  `8it` int(1) NOT NULL,
  `8cs` int(1) NOT NULL,
  `9it` int(1) NOT NULL,
  `9cs` int(1) NOT NULL,
  `s1it` varchar(255) DEFAULT NULL,
  `s2it` varchar(255) DEFAULT NULL,
  `s3it` varchar(255) DEFAULT NULL,
  `s1cs` varchar(255) DEFAULT NULL,
  `s2cs` varchar(255) DEFAULT NULL,
  `s3cs` varchar(255) DEFAULT NULL,
  `w1it` varchar(255) DEFAULT NULL,
  `w2it` varchar(255) DEFAULT NULL,
  `w3it` varchar(255) DEFAULT NULL,
  `w1cs` varchar(255) DEFAULT NULL,
  `w2cs` varchar(255) DEFAULT NULL,
  `w3cs` varchar(255) DEFAULT NULL,
  `im1it` varchar(255) DEFAULT NULL,
  `im2it` varchar(255) DEFAULT NULL,
  `im3it` varchar(255) DEFAULT NULL,
  `im1cs` varchar(255) DEFAULT NULL,
  `im2cs` varchar(255) DEFAULT NULL,
  `im3cs` varchar(255) DEFAULT NULL,
  `su1it` varchar(255) DEFAULT NULL,
  `su2it` varchar(255) DEFAULT NULL,
  `su3it` varchar(255) DEFAULT NULL,
  `su1cs` varchar(255) DEFAULT NULL,
  `su2cs` varchar(255) DEFAULT NULL,
  `su3cs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionnaire-answer`
--
ALTER TABLE `questionnaire-answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionnaire-answer`
--
ALTER TABLE `questionnaire-answer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
