-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

--
-- Database: `design`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gmail` varchar(60) NOT NULL,
  `message` text NOT NULL
) ;

--
-- Dumping data for table `message`
--

INSERT INTO `users` (`id`, `name`, `gmail`, `message`) VALUES
(1, 'Sadia Mohiuddin', 'a@gmai;.com', '	
asd sd ada sda sd'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
