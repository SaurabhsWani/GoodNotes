-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 10:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allnotes`
--

CREATE TABLE `allnotes` (
  `nid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` text NOT NULL,
  `note` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allnotes`
--

INSERT INTO `allnotes` (`nid`, `uid`, `title`, `note`, `date`, `time`, `category`) VALUES
(1, 1, 'Daily Expenses', 'Daily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily ExpensesDaily Expenses', '2022-03-17', '10:39:36', 'DE'),
(2, 1, 'Grocery Expenses', 'Grocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery ExpensesGrocery Expenses', '2022-03-17', '10:39:49', 'GE'),
(3, 1, 'Billing Data', 'Billing DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling DataBilling Data', '2022-03-17', '10:40:00', 'BD'),
(4, 1, 'Daily Notes', 'Daily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily NotesDaily Notes', '2022-03-17', '10:40:09', 'DN'),
(5, 1, 'Reminder', 'Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder ', '2022-03-18', '03:15:00', 'RM'),
(6, 1, 'Reminder 1', 'Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder Reminder ', '2022-03-16', '03:13:00', 'RM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Saurabh Wani', 'admin@admin.com', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allnotes`
--
ALTER TABLE `allnotes`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allnotes`
--
ALTER TABLE `allnotes`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allnotes`
--
ALTER TABLE `allnotes`
  ADD CONSTRAINT `allnotes_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
