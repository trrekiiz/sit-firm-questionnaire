-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 18, 2017 at 11:05 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire_answers`
--

CREATE TABLE `questionnaire_answers` (
  `id` int(10) NOT NULL,
  `company` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `village` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `floor` varchar(4) DEFAULT NULL,
  `road` varchar(255) NOT NULL,
  `subarea` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip` int(5) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `bscit` varchar(5) DEFAULT NULL,
  `bsccs` varchar(5) DEFAULT NULL,
  `mscit` varchar(5) DEFAULT NULL,
  `msccs` varchar(5) DEFAULT NULL,
  `mscse` varchar(5) DEFAULT NULL,
  `mscbis` varchar(5) DEFAULT NULL,
  `reason1` varchar(4) DEFAULT NULL,
  `reason2` varchar(4) DEFAULT NULL,
  `reason3` varchar(4) DEFAULT NULL,
  `reason4` varchar(4) DEFAULT NULL,
  `reason5` varchar(4) DEFAULT NULL,
  `reason6` varchar(4) DEFAULT NULL,
  `reason7` varchar(4) DEFAULT NULL,
  `reason8` varchar(4) DEFAULT NULL,
  `reason91` varchar(4) DEFAULT NULL,
  `reason92` varchar(4) DEFAULT NULL,
  `reason93` varchar(4) DEFAULT NULL,
  `reason94` varchar(4) DEFAULT NULL,
  `reason95` varchar(4) DEFAULT NULL,
  `reason96` varchar(4) DEFAULT NULL,
  `reason97` varchar(4) DEFAULT NULL,
  `reason97add` varchar(255) DEFAULT NULL,
  `reason10` varchar(255) DEFAULT NULL,
  `reason10add` varchar(255) NOT NULL,
  `want1` varchar(4) DEFAULT NULL,
  `want1add` varchar(255) DEFAULT NULL,
  `want2` varchar(4) DEFAULT NULL,
  `want3` varchar(4) DEFAULT NULL,
  `want3add` varchar(255) DEFAULT NULL,
  `want4` varchar(4) DEFAULT NULL,
  `want5` varchar(4) DEFAULT NULL,
  `want6` varchar(4) DEFAULT NULL,
  `want7` varchar(4) DEFAULT NULL,
  `want8` varchar(4) DEFAULT NULL,
  `want9` varchar(4) DEFAULT NULL,
  `want10` varchar(4) DEFAULT NULL,
  `want11` varchar(4) DEFAULT NULL,
  `want12` varchar(4) DEFAULT NULL,
  `want12add` varchar(255) DEFAULT NULL,
  `it1` int(1) NOT NULL,
  `cs1` int(1) NOT NULL,
  `it2` int(1) NOT NULL,
  `cs2` int(1) NOT NULL,
  `it3` int(1) NOT NULL,
  `cs3` int(1) NOT NULL,
  `it4` int(1) NOT NULL,
  `cs4` int(1) NOT NULL,
  `it5` int(1) NOT NULL,
  `cs5` int(1) NOT NULL,
  `it6` int(1) NOT NULL,
  `cs6` int(1) NOT NULL,
  `it7` int(1) NOT NULL,
  `cs7` int(1) NOT NULL,
  `it8` int(1) NOT NULL,
  `cs8` int(1) NOT NULL,
  `it9` int(1) NOT NULL,
  `cs9` int(1) NOT NULL,
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
  `su3cs` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionnaire_answers`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionnaire_answers`
--
ALTER TABLE `questionnaire_answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
