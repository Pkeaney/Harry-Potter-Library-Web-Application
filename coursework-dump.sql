-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 02:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursework`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbnNumber` varchar(13) NOT NULL,
  `title` varchar(60) NOT NULL DEFAULT '',
  `genre` enum('Magic','Herbalism','Alchemy','History') NOT NULL DEFAULT 'Magic',
  `author` varchar(30) DEFAULT '',
  `publishYear` int(4) DEFAULT 2010,
  `publisher` varchar(20) DEFAULT '',
  `bookLibrary` varchar(15) DEFAULT '',
  `loanedBy` smallint(6) DEFAULT NULL,
  `status` enum('In Library','On Loan') DEFAULT 'In Library'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbnNumber`, `title`, `genre`, `author`, `publishYear`, `publisher`, `bookLibrary`, `loanedBy`, `status`) VALUES
('1209812949153', 'Alchemy, Ancient Art and Science', 'Alchemy', 'Argo Pyrites', 2001, NULL, 'Gryffindor', 4, 'On Loan'),
('1236854392857', 'Quidditch Through the Ages: Illustrated Edition', 'History', 'JK Rowling', 2011, 'Bloomsbury', 'Ravenclaw', NULL, 'In Library'),
('2345964854744', 'Quidditch Through the Ages: Deluxe Illustrated Edition', 'History', 'JK Rowling', 2011, 'Bloomsbury', 'Ravenclaw', 2, 'On Loan'),
('3047318043208', 'Fantastic Beasts and Where to Find Them', 'Magic', 'Newton Scamander', 1980, NULL, 'Slytherin', 1, 'On Loan'),
('3084732084039', 'The Book of Spells', 'Magic', 'Miranda Goshawk', 1999, NULL, 'Hufflepuff', 3, 'On Loan'),
('3841304813944', 'Secrets of the Dark Arts', 'Magic', 'Owle Bullock', 1996, NULL, 'Slytherin', NULL, 'In Library'),
('3875280750247', 'Magical Water Plants of the Highland Lochs', 'Herbalism', 'Hadrian Whittle', 1980, NULL, 'Gryffindor', 1, 'On Loan'),
('6087340238214', 'My Life as a Muggle', 'History', 'Daisy Hookum', 1980, NULL, 'Hufflepuff', 2, 'On Loan');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`name`, `address`, `phone`) VALUES
('Gryffindor', '12 Acanthia Way', '02836532185'),
('Hufflepuff', '23 Wisteria Walk', '02865438532'),
('Ravenclaw', '84 Diagon Alley', '02899845736'),
('Slytherin', '2 Grimmauld Place', '02877532945');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` smallint(6) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `firstName` varchar(15) NOT NULL DEFAULT '',
  `lastName` varchar(15) NOT NULL DEFAULT '',
  `phone` varchar(11) DEFAULT '',
  `email` varchar(30) DEFAULT '',
  `pass` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `firstName`, `lastName`, `phone`, `email`, `pass`) VALUES
(1, 'Pkeaney', 'Patrick', 'Keaney', '07534685743', 'patrickkeaney14@gmail.com', 'password1234'),
(2, 'LHillen', 'Lauren', 'Hillen', '07578654732', 'lhillen@gmail.com', 'passwordlh2309'),
(3, 'Mickyjones123', 'Micky', 'Jones', '07515857432', 'mjones@hotmail.co.uk', 'passwordmick'),
(4, 'MaguireJohn', 'John', 'Maguire', '07523865742', 'johnmaguire@gmail.com', 'passwordmag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbnNumber`),
  ADD KEY `for_books` (`bookLibrary`),
  ADD KEY `for_books2` (`loanedBy`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `for_books` FOREIGN KEY (`bookLibrary`) REFERENCES `library` (`name`),
  ADD CONSTRAINT `for_books2` FOREIGN KEY (`loanedBy`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
