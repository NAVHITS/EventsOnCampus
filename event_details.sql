-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 07:06 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `coord` varchar(60) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event`, `location`, `date`, `time`, `coord`, `mail`, `phone`, `descr`) VALUES
('BreakSec', 'MGR Hall', '2019-03-02', '09:00:00', 'Naveen', 'navs@gmail.com', '+917358477106', 'Yay attend this event!'),
('CTF', 'Moorthy Hall', '2018-10-11', '09:00:00', 'Raj Kumar', 'srk19981234@gma', '+911234568790', 'This event is conducted by Raj Kumar!'),
('Event', 'MGR hall', '2019-02-01', '01:00:00', 'Juhi Singh', 'sjuhi1818@gmail.com', '+917894561230', 'Hi. Test event'),
('Symposium', 'MGR hall', '2018-01-01', '01:00:00', 'John', 'navs@gmail.com', '+917358477106', 'This is a free event. Anyone can join. It is open to all departments. OD will be given.'),
('Workshop', 'Coders Hub', '2018-01-18', '16:00:00', 'Adam', 'adam@gmail.com', '+911234567890', 'We are conducting a VR workshop. It is supported by IET. The cost is 500 rupees. On spot payment. Register by <a href=\"http://docs.google.com/abcd\">clicking here</a>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
