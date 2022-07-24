-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 06:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogspedigree`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpendingusers`
--

CREATE TABLE `adminpendingusers` (
  `id` int(30) NOT NULL,
  `fname` varchar(250) COLLATE utf8_bin NOT NULL,
  `lname` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_bin NOT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `kname` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminpendingusers`
--

INSERT INTO `adminpendingusers` (`id`, `fname`, `lname`, `email`, `mobilenumber`, `username`, `password`, `kname`) VALUES
(1, 'lama', 'elkadi', 'lama.elkadi@gmail.com', 1221331254, 'Lama.Elkadi', '123', 'vom');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(250) NOT NULL,
  `mn` varchar(250) COLLATE utf8_bin NOT NULL,
  `dn` varchar(250) COLLATE utf8_bin NOT NULL,
  `dob` varchar(250) COLLATE utf8_bin NOT NULL,
  `drn` varchar(250) COLLATE utf8_bin NOT NULL,
  `drn Others` varchar(250) COLLATE utf8_bin NOT NULL,
  `dg` varchar(30) COLLATE utf8_bin NOT NULL,
  `df` varchar(250) COLLATE utf8_bin NOT NULL,
  `dm` varchar(250) COLLATE utf8_bin NOT NULL,
  `dc` varchar(250) COLLATE utf8_bin NOT NULL,
  `hc` varchar(250) COLLATE utf8_bin NOT NULL,
  `st` varchar(250) COLLATE utf8_bin NOT NULL,
  `hd` varchar(250) COLLATE utf8_bin NOT NULL,
  `ed` varchar(250) COLLATE utf8_bin NOT NULL,
  `dna` varchar(250) COLLATE utf8_bin NOT NULL,
  `tat` varchar(250) COLLATE utf8_bin NOT NULL,
  `wt` varchar(250) COLLATE utf8_bin NOT NULL,
  `kkl` varchar(250) COLLATE utf8_bin NOT NULL,
  `owner` varchar(250) COLLATE utf8_bin NOT NULL,
  `oadd` varchar(250) COLLATE utf8_bin NOT NULL,
  `badd` varchar(250) COLLATE utf8_bin NOT NULL,
  `db` varchar(250) COLLATE utf8_bin NOT NULL,
  `dp` varchar(250) COLLATE utf8_bin NOT NULL,
  `addedby` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `mn`, `dn`, `dob`, `drn`, `drn Others`, `dg`, `df`, `dm`, `dc`, `hc`, `st`, `hd`, `ed`, `dna`, `tat`, `wt`, `kkl`, `owner`, `oadd`, `badd`, `db`, `dp`, `addedby`) VALUES
(17, '90021500097666', 'ULexa Vom Cedarland', '14/01/2021', 'LOL 19255', '', 'Female', 'Sogno Del Murnighello', 'Pola Von Wonderland', 'Long Hair', 'Black & tan', 'VP1 LB 2021', '-', '', '-', '-', '-', '', 'Daniel El Kadi', 'Aley - Lebanon', 'Chouf - Lebanon', 'Charbel Khoury', '', ''),
(18, '380260010328443', 'Sogno Del Murnighello', '05/05/2014', 'ROI 14/108609', '', 'Male', 'Nilo Del Murnighello', 'Dana Del Frutteto', 'Stockhair', 'Black & tan', 'SG1', 'Normal', '', 'tested', '', '', '', 'Ayoub Bou Dargham', 'Chouf - Lebanon', '', 'Egidio Boselli, I - Foresto Sparso (BG)', '', ''),
(19, '900164001594793', 'Pola von Wonderland', '01/05/2019', 'LOL  19037', '', 'Female', 'Lexus vom Eichenplatz', 'Bentley team wonderland', 'STOCK HAIR', 'Black & tan', '', '', '', '', '', '', '', '-', '-', '-', '-', '12/30/2021', '-'),
(21, '', 'Nilo Del Murnighello', '12/09/2021', 'ROI 11/40048', '', 'Male', 'arex', 'carla del murnighello', 'STOCK HAIR', '', 'v(bszs)', '-', 'normal', 'tested', '-', 'ipo2', '', '-', '-', '-', '-', '01/05/2022', '-'),
(22, '-', 'Dana Del Frutteto', '12/01/2021', 'ROI 12/86446', '', 'Female', 'Paer Vom Hasenborn', 'Noia Del Murnighello', 'STOCK HAIR', 'Black & TaN', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'Dan164'),
(25, '-', 'Arex', '12/15/2021', '-', '', 'Male', 'vegas du haut mansard', 'ulli von aurelius', 'STOCK HAIR', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '12/28/2021', '-'),
(26, '', 'Nilo Mother', '', '', '', 'Female', 'Nilo mother Grand Father', 'Nilo mother Grand Mother', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '933000120015697', 'U-Bouka Vom Melanis House', '04/07/2018', 'SCBA/LB 2103', 'CYGSD 181849192', 'Male', 'Pep Vom Hanneb', 'Umbra Vom Augrund', 'Stock Hair', 'Black & Tan', 'SG6', '', '', '', '', '', '', 'Daniel El Kadi', 'Kfarmatta, Aley', '', 'Elias Andreou', '12/30/2021', 'dan164'),
(31, '900215000083111', 'hera north kennel', '11/12/2019', 'SCBA/LB 2103', 'gs1066/20kcl', 'Female', 'sogno del murnighello', 'britty della roveda', 'STOCK HAIR', '', '', '', '', '', '', '', '', 'Daniel El Kadi', 'Kfarmatta, Aley', 'hadsheet, north-lebanon', 'charbel dreiby', '01/05/2022', 'dan164'),
(34, '-', 'bentley team wonderland', '14/02/2013', 'SCBA/LB 2101', '', 'Female', 'leo', 'ira freiherr vom schloss pauli', 'Stock Hair', 'Black & Tan', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(36, '981189900039533', 'Lexus vom Eichenplatz', '14/02/2013', 'SCBA/LB 2101', '', 'Male', 'Chicco Dogshof', 'Ossi vom Eichenplatz', 'STOCK HAIR', 'Black & Tan', 'VA1', 'normal', 'normal', 'tested', '', 'IGP1', 'Lebenszeit (lbz.)', 'Mohammad hashem', 'beirut - lebanon', '', '', '01/02/2022', 'dan164'),
(37, '-', 'stone vom cedarland', '12/21/2021', 'SCBA/LB 2102', '', 'Male', 'Lexus vom Eichenplatz', 'ira freiherr vom schloss pauli', 'STOCK HAIR', 'Black & Tan', 'sg7', '', '', '', '', '', '', 'hamza', 'aineb', 'bchemoun - lebanon', 'raed hassan', '12/30/2021', 'dan164'),
(38, '934000080031477', 'akira', '12/18/2021', '', '', 'Female', 'info @ del murnighello', 'Ira von bereich sandalvi', 'Stock Hair', 'Black & Tan', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(41, '380260010233813', 'info @ del murnighello', '16/04/2013', '', 'LOI 13/104882', 'Male', 'Remo vom Fichtenschlag', 'carla del murnighello', 'Stock Hair', 'Black & Tan', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(42, '-', 'britty della roveda', '12/29/2021', '', '', 'Female', 'Thiago della Valle del Seveso', 'Hisel della Roveda', '', '', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(44, '135213', 'Hisel della Roveda', '12/15/2021', '', '', 'Female', 'Cronos del Seprio', 'Tanya del Seprio', '', '', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(45, 'kjb', 'carla del murnighello', '12/11/2021', '', '', 'Female', 'Zeit del Murnighello', 'Tosca 2 del Murnighello', '', '', '', '', '', '', '', '', '', 'j', 'j', '', '', '12/30/2021', 'dan164'),
(46, 'ereecefcer', 'Cronos del Seprio', '12/04/2021', '', '', 'Male', 'Remo vom Fichtenschlag', 'Afra del Seprio', '', '', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(47, '-', 'THIAGO DELLA VALLE DEL SEVESO', '04/07/2018', '', '', 'Male', 'Kronos von Nürburgring', 'Vilma Del Ceresio', '', '', '', '', '', '', '', '', '', '-', '-', '', '', '12/30/2021', 'dan164'),
(48, '15241', 'gala boghaus', '', 'jr 810793', 'jr 810793', 'Female', 'omen vom radhaus', 'tasha boghaus', 'STOCK HAIR', '', '', '', '', '', '', '', '', '', '', '', '', '01/02/2022', ''),
(51, '154', 'chassie north kennel', '', '', '', 'Female', 'info @ del murnighello', 'gala boghaus', 'STOCK HAIR', '', 'sg2', '', '', '', '', 'bh', '', 'Mohamad farshoukh', 'barja - lebanon', '', '', '01/02/2022', 'dan164'),
(53, '', 'RAY VOM FICHTENSCHLAG', '', '', 'SZ 2208401', 'Male', '', '', 'STOCK HAIR', '', 'v', 'normal', 'normal', '', '', 'Schh3', '', '', '', '', '', '01/05/2022', ''),
(54, '', 'THORA VOM FICHTENSCHLAG', '', '', 'SZ 2157843', 'Female', '', '', 'STOCK HAIR', '', 'v', 'normal', 'normal', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', 'dan164'),
(55, '4', 'ZEIT DEL MURNIGHELLO', '15/08/2004', '', 'LOI 05/23281', 'Male', '', '', 'Stock Hair', '', 'V(BSZS)', '', 'normal', 'tested', '', 'IPO2', '', '', '', '', '', '01/05/2022', 'dan164'),
(56, '545', 'Tosca 2 del Murnighello', '', '', 'LOI 05/106006', 'Female', '', '', 'STOCK HAIR', '', 'SG', '', 'normal', 'tested', '', 'IPO1', '', '', '', '', '', '01/05/2022', 'dan164'),
(57, '', 'Remo vom Fichtenschlag', '', '', 'SZ 2208401', 'Male', 'RAY VOM FICHTENSCHLAG', 'THORA VOM FICHTENSCHLAG', 'STOCK HAIR', '', 'va', 'normal', 'nearly normal', 'tested', '', 'Schh3', '', '', '', '', '', '01/05/2022', 'dan164'),
(58, '356434', 'OPRAH VON AURELIUS', '', '', 'SZ 2211180', 'Female', '', '', '', '', 'sg', 'normal', 'normal', 'tested', '', 'ipo1', 'KKL1', '', '', '', '', '01/05/2022', 'dan164'),
(59, '51', 'TYSON FIXFRUTtA', '', '', 'SZ 2291258', 'Male', '', '', '', '', 'v(bszs)', 'normal', 'normal', 'tested', '', 'ipo3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', 'dan164'),
(60, '5454', 'Felina v. Panoniansee', '', '', 'HR 28736', 'Female', 'Remo vom Fichtenschlag', '', '', '', 'v', 'normal', 'normal', 'tested', '', 'IPO1', 'KKL1', '', '', '', '', '01/05/2022', 'dan164'),
(62, '2424', 'OMEN VOM RADHAUS', '', '', 'SZ 2267318', 'Male', 'Remo vom Fichtenschlag', 'OPRAH VON AURELIUS', 'STOCK HAIR', '', 'va', 'normal', 'normal', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', 'dan164'),
(63, '6556', 'Tasha Boghaus', '', '', 'JR 809790', 'Female', 'TYSON FIXFRUTTA', 'FELINA V. PANONIANSEE', 'STOCK HAIR', '', '', 'nearly normal', 'normal', 'tested', '', 'ipo1', 'KKL1', '', '', '', '', '01/05/2022', 'dan164'),
(64, '3542', 'R.COPPER TEAM FELSENBERG', '', '', 'LOL 16224', 'Male', 'info @ del murnighello', 'gala boghaus', '', '', '', '', '', '', '', '', '', '', '', '', '', '01/05/2022', 'dan164'),
(66, '--', 'URAN VOM MOORBECK', '04/12/1999', '', 'SZ 2058750', 'Male', '', '', 'Stock Hair', 'Black & Tan', 'v(bszs)', 'normal', '', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(67, '', 'ELSA VOM KUCKUCKSLAND ', '', '', 'SZ 2038495', 'Female', '', '', 'STOCK HAIR', '', 'v', 'normal', '', 'tested', '', 'schh2', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(68, '65554', 'MACK VON ADUCHT', '', '', 'SZ 1995026', 'Male', '', '', '', '', 'va', 'normal', '', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(69, '654', 'Quenn vom Löher Weg', '', '', 'SZ 2119344', 'Male', '', '', '', '', 'va', 'normal', 'normal', '', '', 'SCHH3 IPO3 FH1', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(73, '992001000123257', 'AROS VOM RAGNARSON', '01-Jan-21', '', 'LOL 19290', 'Male', 'R.COPPER TEAM FELSENBERG', 'YACKIE VOM FALKBERG', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '992001000123253', 'ALPHA VOM RAGNARSON', '01-Jan-21', '', 'LOL 19291', 'Female', 'R.COPPER TEAM FELSENBERG', 'YACKIE VOM FALKBERG', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, '992001000123248', 'AKKI VOM RAGNARSON', '01-Jan-21', '', 'LOL 19289', 'Female', 'R.COPPER TEAM FELSENBERG', 'YACKIE VOM FALKBERG', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, '900215000979669', 'AMBER VOM HOUSE DARGHAM', '12-May-21', '', 'LOL 19277', 'Female', 'Sogno Del Murnighello', 'Akira Vom Ralhaus', 'Short Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '900215000979668', 'ALICE VOM HOUSE DARGHAM', '12-May-21', '', 'LOL 19276', 'Female', 'Sogno Del Murnighello', 'Akira Vom Ralhaus', 'Short Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '900215000979671', 'ARTHUR VOM HOUSE DARGHAM', '12-May-21', '', 'LOL 19275', 'Male', 'Sogno Del Murnighello', 'Akira Vom Ralhaus', 'Short Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, '953010001862645', 'NEYMAR VOM RIVERSIDE KENNEL', '22-Mar-21', '', 'LOL19278', 'Male', 'DeOrse MakFlai Chapay', 'Vittoria Della Roveda', 'Short Hair', 'Solid Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, '900215000979676', 'CAYA VOM HOUSE DARGHAM', '5-Sep-21', '', 'LOL19302', 'Female', 'Elvin North Kennel', 'Pola von Wonderland', 'Long Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, '900215000979675', 'CAROL VOM HOUSE DARGHAM', '5-Sep-21', '', 'LOL19303', 'Female', 'Elvin North Kennel', 'Pola von Wonderland', 'Long Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, '900182000546637', 'HECTOR VOM HOUSE JAZZ', '15-Jan-22', '', 'LOL 19304', 'Male', 'Furbo Casa Del Sibos', 'Ely Vom Haus Jazz', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, '900182000546639', 'HOPE VOM HOUSE JAZZ', '15-Jan-22', '', 'LOL 19305', 'Female', 'Furbo Casa Del Sibos', 'Ely Vom Haus Jazz', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, '90018200546640', 'HERA VOM HOUSE JAZZ', '15-Jan-22', '', 'LOL 19306', 'Female', 'Furbo Casa Del Sibos', 'Ely Vom Haus Jazz', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '9 00113001661515', 'BANDY STEINGIPFEL', '01/05/2021', '', 'LOL19952', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, '9 00113001661514', 'BELLE STEINGIPFEL', '01/05/2021', '', 'LOL19951', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, '9 00113001661513', 'BARBY STEINGIPFEL', '01/05/2021', '', 'LOL19950', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, '9 00215000978572', 'BELLA STEINGIPFEL', '01/05/2021', '', 'LOL19949', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, '9 00113001661512', 'BRUTUS STEINGIPFEL', '01/05/2021', '', 'LOL19948', 'MALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, '9 00113001661511', 'BUSTER STEINGIPFEL', '01/05/2021', '', 'LOL19947', 'MALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, '9 00215000978572', 'BRUNO STEINGIPFEL', '01/05/2021', '', 'LOL19946', 'MALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, '', 'Paer vom Hasenborn', '', '', 'SZ 2194208', 'Male', 'Quenn vom Löher Weg', 'Yada vom Mittelwest', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, '', 'Noia del Murnighello', '', '', 'LOI 03/118961', 'Female', 'Graham del Murnighello', 'Darla del Murnighello', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, '', 'Leo von der Zenteiche', '', '', 'SZ 2260720', 'Male', 'Furbo degli Achei', 'Yanka von der Zenteiche', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, '', 'Chicco Dogshof', '', '', 'SZ 2271652', 'Male', 'Joker vom Eichenplatz', 'Oxana vom Schindbachtal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, '', 'Ira Freiherr vom Schloss Pauli', '', '', 'SZ 2293605', 'Male', 'Jello vom Kuckucksland', 'Unja vom Steinway-Park', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, '90021500097666', 'ULexa Vom Cedarland', '14/01/2021', 'LOL 19255', '', 'Female', 'Sogno Del Murnighello', 'Pola Von Wonderland', 'Long Hair', 'Black & tan', 'VP1 LB 2021', '-', '', '-', '-', '-', '', 'Daniel El Kadi', 'Aley - Lebanon', 'Chouf - Lebanon', 'Charbel Khoury', '', ''),
(102, '', 'Ira Freiherr vom Schloss Pauli', '', '', 'SZ 2293605', 'Male', 'Jello vom Kuckucksland', 'Unja vom Steinway-Park', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, '', 'Ossi vom Eichenplatz', '', '', 'SZ 2215539', 'Male', 'Quenn vom Löher Weg', 'Alisha vom Eichenplatz', 'STOCK HAIR', 'Black', '', '', '', '', '', '', 'KKL1', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dogspedigreetable`
--

CREATE TABLE `dogspedigreetable` (
  `microchipNumber` varchar(50) COLLATE utf8_bin NOT NULL,
  `DogName` varchar(100) COLLATE utf8_bin NOT NULL,
  `BreederName` varchar(100) COLLATE utf8_bin NOT NULL,
  `Location` varchar(250) COLLATE utf8_bin NOT NULL,
  `MobileNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dogspedigreetable`
--

INSERT INTO `dogspedigreetable` (`microchipNumber`, `DogName`, `BreederName`, `Location`, `MobileNumber`) VALUES
('1', 'test1', 'test2', 'test3', 123123132),
('2', 'test11', 'test22', 'test33', 2147483647),
('3', 'test111', 'test222', 'test333', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pendingdogs`
--

CREATE TABLE `pendingdogs` (
  `id` int(250) NOT NULL,
  `mn` varchar(250) COLLATE utf8_bin NOT NULL,
  `dn` varchar(250) COLLATE utf8_bin NOT NULL,
  `dob` varchar(250) COLLATE utf8_bin NOT NULL,
  `drn` varchar(250) COLLATE utf8_bin NOT NULL,
  `drn Others` varchar(250) COLLATE utf8_bin NOT NULL,
  `dg` varchar(30) COLLATE utf8_bin NOT NULL,
  `df` varchar(250) COLLATE utf8_bin NOT NULL,
  `dm` varchar(250) COLLATE utf8_bin NOT NULL,
  `dc` varchar(250) COLLATE utf8_bin NOT NULL,
  `hc` varchar(250) COLLATE utf8_bin NOT NULL,
  `st` varchar(250) COLLATE utf8_bin NOT NULL,
  `hd` varchar(250) COLLATE utf8_bin NOT NULL,
  `ed` varchar(250) COLLATE utf8_bin NOT NULL,
  `dna` varchar(250) COLLATE utf8_bin NOT NULL,
  `tat` varchar(250) COLLATE utf8_bin NOT NULL,
  `wt` varchar(250) COLLATE utf8_bin NOT NULL,
  `kkl` varchar(250) COLLATE utf8_bin NOT NULL,
  `owner` varchar(250) COLLATE utf8_bin NOT NULL,
  `oadd` varchar(250) COLLATE utf8_bin NOT NULL,
  `badd` varchar(250) COLLATE utf8_bin NOT NULL,
  `db` varchar(250) COLLATE utf8_bin NOT NULL,
  `dp` varchar(250) COLLATE utf8_bin NOT NULL,
  `addedby` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pendingdogs`
--

INSERT INTO `pendingdogs` (`id`, `mn`, `dn`, `dob`, `drn`, `drn Others`, `dg`, `df`, `dm`, `dc`, `hc`, `st`, `hd`, `ed`, `dna`, `tat`, `wt`, `kkl`, `owner`, `oadd`, `badd`, `db`, `dp`, `addedby`) VALUES
(58, '356434', 'OPRAH VON AURELIUS', '', '', 'SZ 2211180', 'Female', '', '', '', '', 'sg', 'normal', 'normal', 'tested', '', 'ipo1', 'KKL1', '', '', '', '', '01/05/2022', 'dan164'),
(59, '51', 'TYSON FIXFRUTtA', '', '', 'SZ 2291258', 'Male', '', '', '', '', 'v(bszs)', 'normal', 'normal', 'tested', '', 'ipo3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', 'dan164'),
(60, '5454', 'Felina v. Panoniansee', '', '', 'HR 28736', 'Female', 'Remo vom Fichtenschlag', '', '', '', 'v', 'normal', 'normal', 'tested', '', 'IPO1', 'KKL1', '', '', '', '', '01/05/2022', 'dan164'),
(62, '2424', 'OMEN VOM RADHAUS', '', '', 'SZ 2267318', 'Male', 'Remo vom Fichtenschlag', 'OPRAH VON AURELIUS', 'STOCK HAIR', '', 'va', 'normal', 'normal', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', 'dan164'),
(63, '6556', 'Tasha Boghaus', '', '', 'JR 809790', 'Female', 'TYSON FIXFRUTTA', 'FELINA V. PANONIANSEE', 'STOCK HAIR', '', '', 'nearly normal', 'normal', 'tested', '', 'ipo1', 'KKL1', '', '', '', '', '01/05/2022', 'dan164'),
(64, '3542', 'R.COPPER TEAM FELSENBERG', '', '', 'LOL 16224', 'Male', 'info @ del murnighello', 'gala boghaus', '', '', '', '', '', '', '', '', '', '', '', '', '', '01/05/2022', 'dan164'),
(66, '--', 'URAN VOM MOORBECK', '04/12/1999', '', 'SZ 2058750', 'Male', '', '', 'Stock Hair', 'Black & Tan', 'v(bszs)', 'normal', '', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(67, '', 'ELSA VOM KUCKUCKSLAND ', '', '', 'SZ 2038495', 'Female', '', '', 'STOCK HAIR', '', 'v', 'normal', '', 'tested', '', 'schh2', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(68, '65554', 'MACK VON ADUCHT', '', '', 'SZ 1995026', 'Male', '', '', '', '', 'va', 'normal', '', 'tested', '', 'schh3', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(69, '654', 'Quenn vom Löher Weg', '', '', 'SZ 2119344', 'Male', '', '', '', '', 'va', 'normal', 'normal', '', '', 'SCHH3 IPO3 FH1', 'Lebenszeit (lbz.)', '', '', '', '', '01/05/2022', ''),
(73, '992001000123257', 'AROS VOM RAGNARSON', '01-Jan-21', '', 'LOL 19290', 'Male', 'R.COPPER TEAM FELSENBERG', 'YACKIE VOM FALKBERG', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '992001000123253', 'ALPHA VOM RAGNARSON', '01-Jan-21', '', 'LOL 19291', 'Female', 'R.COPPER TEAM FELSENBERG', 'YACKIE VOM FALKBERG', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, '992001000123248', 'AKKI VOM RAGNARSON', '01-Jan-21', '', 'LOL 19289', 'Female', 'R.COPPER TEAM FELSENBERG', 'YACKIE VOM FALKBERG', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, '900215000979669', 'AMBER VOM HOUSE DARGHAM', '12-May-21', '', 'LOL 19277', 'Female', 'Sogno Del Murnighello', 'Akira Vom Ralhaus', 'Short Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '900215000979668', 'ALICE VOM HOUSE DARGHAM', '12-May-21', '', 'LOL 19276', 'Female', 'Sogno Del Murnighello', 'Akira Vom Ralhaus', 'Short Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '900215000979671', 'ARTHUR VOM HOUSE DARGHAM', '12-May-21', '', 'LOL 19275', 'Male', 'Sogno Del Murnighello', 'Akira Vom Ralhaus', 'Short Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, '953010001862645', 'NEYMAR VOM RIVERSIDE KENNEL', '22-Mar-21', '', 'LOL19278', 'Male', 'DeOrse MakFlai Chapay', 'Vittoria Della Roveda', 'Short Hair', 'Solid Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, '900215000979676', 'CAYA VOM HOUSE DARGHAM', '5-Sep-21', '', 'LOL19302', 'Female', 'Elvin North Kennel', 'Pola von Wonderland', 'Long Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, '900215000979675', 'CAROL VOM HOUSE DARGHAM', '5-Sep-21', '', 'LOL19303', 'Female', 'Elvin North Kennel', 'Pola von Wonderland', 'Long Hair', 'Tan & Black', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, '900182000546637', 'HECTOR VOM HOUSE JAZZ', '15-Jan-22', '', 'LOL 19304', 'Male', 'Furbo Casa Del Sibos', 'Ely Vom Haus Jazz', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, '900182000546639', 'HOPE VOM HOUSE JAZZ', '15-Jan-22', '', 'LOL 19305', 'Female', 'Furbo Casa Del Sibos', 'Ely Vom Haus Jazz', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, '90018200546640', 'HERA VOM HOUSE JAZZ', '15-Jan-22', '', 'LOL 19306', 'Female', 'Furbo Casa Del Sibos', 'Ely Vom Haus Jazz', 'Long Hair', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '9 00113001661515', 'BANDY STEINGIPFEL', '01/05/2021', '', 'LOL19952', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, '9 00113001661514', 'BELLE STEINGIPFEL', '01/05/2021', '', 'LOL19951', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, '9 00113001661513', 'BARBY STEINGIPFEL', '01/05/2021', '', 'LOL19950', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, '9 00215000978572', 'BELLA STEINGIPFEL', '01/05/2021', '', 'LOL19949', 'FEMALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, '9 00113001661512', 'BRUTUS STEINGIPFEL', '01/05/2021', '', 'LOL19948', 'MALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, '9 00113001661511', 'BUSTER STEINGIPFEL', '01/05/2021', '', 'LOL19947', 'MALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, '9 00215000978572', 'BRUNO STEINGIPFEL', '01/05/2021', '', 'LOL19946', 'MALE', 'Copper vom Haus Jazz', 'Chelsea vom Ralhaus', 'LONG', 'Black & Tan', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, '', 'Paer vom Hasenborn', '', '', 'SZ 2194208', 'Male', 'Quenn vom Löher Weg', 'Yada vom Mittelwest', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, '', 'Noia del Murnighello', '', '', 'LOI 03/118961', 'Female', 'Graham del Murnighello', 'Darla del Murnighello', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, '', 'Leo von der Zenteiche', '', '', 'SZ 2260720', 'Male', 'Furbo degli Achei', 'Yanka von der Zenteiche', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `fname` varchar(250) COLLATE utf8_bin NOT NULL,
  `lname` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `username` varchar(250) COLLATE utf8_bin NOT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `kname` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `kname`) VALUES
(1, 'Daniel', 'El-Kadi', 'daniel.elkadi@gmail.com', 'daniel.elkadi', '123', 'VOM Ragnerson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogspedigreetable`
--
ALTER TABLE `dogspedigreetable`
  ADD PRIMARY KEY (`microchipNumber`);

--
-- Indexes for table `pendingdogs`
--
ALTER TABLE `pendingdogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `pendingdogs`
--
ALTER TABLE `pendingdogs`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
