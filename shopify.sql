-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2023 at 12:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('john@gmail.com', 'Hello@12'),
('Mary', '$2y$10$kAceO94w6t2OnvNSezGGb.OVuM5a2lIjO/p5VgjBa1EAz7RT1nGby'),
('Tommy', 'Tom@12'),
('Jack', '$2y$10$KB7GlDB6eW2miEdn8E.zMud5/JpxDc//6tsB7avUNHIF.PsnJJvJy'),
('Jack', '$2y$10$KB7GlDB6eW2miEdn8E.zMud5/JpxDc//6tsB7avUNHIF.PsnJJvJy'),
('Meghana', 'Hello@123'),
('John Cena', 'Abcd@12'),
('Virat kohli', 'Hello@123'),
('Jack', 'Jack@123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `address`) VALUES
('John', 'john@gmail.com', '1211 Main Dr Street, Dallas, TX'),
('Mary', 'mary@yahoo.com', '410 Creek Ave, Apt 778, Texas'),
('Tommy', 'tom22@hotmail.com', 'Jack Street, 8827 Dr, Atlanta'),
('Jack', 'jack@gmail.com', '123 Street'),
('Loki', 'loki@yahoo.com', '1111 Street Dr, CA'),
('Biden', 'biden98@hotmail.com', 'Washington Street, VG'),
('Meghana', 'megh@gmail.com', '848 street, Arlington, TX'),
('John Cena', 'johncena12@gmail.com', '1212 Street, CA, USA'),
('Virat Kohli', 'virat@gmail.com', 'Mumbai, India');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
