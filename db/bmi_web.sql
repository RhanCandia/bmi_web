-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2016 at 06:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmi_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chart`
--

CREATE TABLE `tbl_chart` (
  `id` int(11) NOT NULL,
  `agem` double NOT NULL,
  `val_l` double NOT NULL,
  `val_m` double NOT NULL,
  `val_s` double NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `date_tracked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chart`
--

INSERT INTO `tbl_chart` (`id`, `agem`, `val_l`, `val_m`, `val_s`, `gender`, `date_tracked`) VALUES
(34, 180, -1.4961, 19.7744, 0.12412, 0, 1456125441),
(35, 181, -1.4848, 19.8367, 0.12248, 0, 1456125484),
(36, 182, -1.4733, 19.8987, 0.12443, 0, 1456125518),
(38, 183, -1.4617, 19.9603, 0.12458, 0, 1456125616),
(39, 184, -1.45, 20.0215, 0.12473, 0, 1456125677),
(40, 185, -1.4382, 20.0823, 0.12487, 0, 1456125721),
(41, 186, -1.4263, 20.1427, 0.12501, 0, 1456125756),
(42, 187, -1.4143, 20.2026, 0.12514, 0, 1456125795),
(43, 188, -1.4022, 20.2621, 0.12528, 0, 1456125937),
(44, 189, -1.39, 20.3211, 0.12541, 0, 1456126016),
(45, 190, -1.3777, 20.3796, 0.12554, 0, 1456126131),
(46, 191, -1.3653, 20.4376, 0.12567, 0, 1456126180);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intakes`
--

CREATE TABLE `tbl_intakes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `bfprotein` double NOT NULL,
  `bfcarbs` double NOT NULL,
  `bffats` double NOT NULL,
  `bfcalories` double NOT NULL,
  `lhprotein` double NOT NULL,
  `lhcarbs` double NOT NULL,
  `lhfats` double NOT NULL,
  `lhcalories` double NOT NULL,
  `drprotein` double NOT NULL,
  `drcarbs` double NOT NULL,
  `drfats` double NOT NULL,
  `drcalories` double NOT NULL,
  `date_tracked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_intakes`
--

INSERT INTO `tbl_intakes` (`id`, `user_id`, `day`, `bfprotein`, `bfcarbs`, `bffats`, `bfcalories`, `lhprotein`, `lhcarbs`, `lhfats`, `lhcalories`, `drprotein`, `drcarbs`, `drfats`, `drcalories`, `date_tracked`) VALUES
(1, 5, 0, 4, 6, 0, 0, 0, 0, 8.67, 0, 0, 0, 0.33, 0, 1456157579),
(2, 5, 1, 1, 2, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 1456156878),
(3, 5, 5, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1456156900),
(4, 5, 4, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1456156906),
(5, 5, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1456156909),
(6, 5, 3, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1456156915);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `weight` double NOT NULL,
  `height` double NOT NULL,
  `bmi` double NOT NULL,
  `zscore` double NOT NULL,
  `class` varchar(64) NOT NULL,
  `date_tracked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`id`, `user_id`, `weight`, `height`, `bmi`, `zscore`, `class`, `date_tracked`) VALUES
(1, 3, 60, 1.8, 18.52, -0.59035589890061, 'Normal', 1456143331),
(2, 3, 60, 1, 60, 4.4357444100264, 'Obese', 1456143350),
(3, 3, 60, 3, 6.67, -22.239998016475, 'Severely Wasted', 1456143355),
(4, 3, 60, 2, 15, -2.828224933539, 'Wasted', 1456143359),
(5, 3, 60, 1.78, 18.94, -0.39094741103272, 'Normal', 1456143407),
(6, 5, 60, 2, 15, -2.7571626715057, 'Wasted', 1456145185),
(7, 5, 60, 2, 15, -2.7571626715057, 'Wasted', 1456145254),
(8, 5, 60, 1, 60, 4.3618411779669, 'Obese', 1456145547),
(9, 5, 60, 1.82, 18.11, -0.75708115751596, 'Normal', 1456159119),
(10, 7, 60, 1.83, 17.92, -0.89551619240634, 'Normal', 1456160743),
(11, 7, 60, 2, 15, -2.828224933539, 'Wasted', 1456160746);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `level` varchar(32) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `birthdate` int(11) NOT NULL,
  `user_group` tinyint(4) NOT NULL,
  `date_tracked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `level`, `gender`, `email`, `password`, `birthdate`, `user_group`, `date_tracked`) VALUES
(1, 'RHAN', 'CANDIA', 'ABC', 0, 'rhancandia@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 697417200, 1, 1456130746),
(2, 'RHAN', 'CANDIA', 'ABC', 0, 'rhan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 912985200, 0, 1456132302),
(3, 'RHAN', 'CANDIA', 'abc', 0, 'r@r.com', '5f4dcc3b5aa765d61d8327deb882cf99', 978303600, 0, 1456132420),
(4, 'RHANEL', 'CANDIA', 'abcd', 0, 'rhan@rhan.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1009839600, 0, 1456144646),
(5, 'RHAN', 'CANDIA', 'rhan@rhan.io', 0, 'rhan@rhan.io', '5f4dcc3b5aa765d61d8327deb882cf99', 980982000, 0, 1456145152),
(6, 'RHAN', 'CANDIA', 'abcd', 0, 'r@c.io', '5f4dcc3b5aa765d61d8327deb882cf99', 981759600, 0, 1456159995),
(7, 'RHAN', 'CANDIA', 'abcd', 0, 'i@o.io', '5f4dcc3b5aa765d61d8327deb882cf99', 978303600, 0, 1456160736);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_intakes`
--
ALTER TABLE `tbl_intakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_records`
--
ALTER TABLE `tbl_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chart`
--
ALTER TABLE `tbl_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tbl_intakes`
--
ALTER TABLE `tbl_intakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
