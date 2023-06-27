-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 10:43 PM
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
-- Database: `suraksha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Andrew', '1234@');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `give_feedback` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `give_feedback`, `phone_number`, `image`) VALUES
(2, 'chathuranga priyadarshana', 'nice', '071234556', 'pexels-nicole-avagliano-2749481.jpg'),
(10, 'chathuranga priyadarshana', 'wow that is a very good', '071-4567890', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `PackageName` varchar(255) NOT NULL,
  `pack_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `PackageName`, `pack_description`) VALUES
(0, '', ''),
(1, '', ''),
(0, '1', '1'),
(0, '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `packagee`
--

CREATE TABLE `packagee` (
  `id` int(11) NOT NULL,
  `Package_Name` varchar(255) NOT NULL,
  `pack_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packagee`
--

INSERT INTO `packagee` (`id`, `Package_Name`, `pack_description`) VALUES
(5, 'Youwn', 'Health insurance package for 18+ young people only for 30$'),
(9, 'Shakthi', 'Health insurance Package for Middle Age people only 50$ .'),
(10, '2323', 'sdsdsdsddsd'),
(14, '232', 'dsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`) VALUES
(24),
(25);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `decription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `title`, `decription`) VALUES
(1, 'umbrella policy', 'An umbrella policy is liability insurance that provides additional coverage in excess of the policyholder\'s current policy limits. '),
(2, 'What Is a Universal Life Insurance Policy?', 'A universal life (UL) insurance policy is permanent life insurance that allows the policyholder to invest their cash value in a separate account, which features funds tied to the stock market. It is a flexible policy, whereby premiums and death benefits.'),
(3, 'How Do You Cancel an Insurance Policy', 'A policyholder must cancel an insurance policy according to the cancellation provisions of their contract. Often, insurers allow policyholders to cancel by phone; however, some require the request in writing.'),
(9, 'What Is the Cash Value of a Life Insurance Policy?', 'The cash value of a life insurance policy is the amount in excess of the premiums that has accumulated in the policy. Cash value is the savings component of a permanent life insurance policy that accumulates interest and can be accessed by the policy\'s.'),
(10, 'What Is the Declarations Page of an Insurance Poli', 'An insurance policy declarations page is the part of the insurance contract that includes the general policy information. An insurance policy declarations page is the part of the insurance contract that includes the general policy information. '),
(11, 'What Is a Whole Life Insurance Policy?', 'A whole life insurance policy is a permanent life insurance policy in which death benefits are paid upon the death of an insured. The whole life policy remains in force for the life of the insured as long as premiums are up-to-date.'),
(27, 'umbrella policy', 'An umbrella policy is liability insurance that provides additional coverage .'),
(28, 'ddth', 'dhd');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `Customer_Name` varchar(200) NOT NULL,
  `Nic` varchar(200) NOT NULL,
  `Date_` date NOT NULL,
  `Bill_Number` varchar(200) NOT NULL,
  `Paid_Amount` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `Customer_Name`, `Nic`, `Date_`, `Bill_Number`, `Paid_Amount`) VALUES
(1, 'chathuranga', '200031901163', '2022-06-10', '1232', '2003300.00'),
(4, 'chathuranga', '200031901163', '2022-05-26', '345', '23500.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `E_mail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `First_Name`, `Last_Name`, `E_mail`, `username`, `password`, `gender`, `city`, `address`) VALUES
(17, 2196214725202, 'chathuranga', 'priyadarshana', 'chathurangapriyadarshana29@gmail.com', 'kamal', '12345', 'male', 'Eheliyagoda', 'No24,Udumaththa,Eheliyagoda'),
(18, 1086591237607370484, 'sankalpa', 'gunasekara', 'chathurangapriyadarshana29@gmail.com', 'sankalpa', '1234', 'male', 'Eheliyagoda', 'No24,Udumaththa,Eheliyagoda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagee`
--
ALTER TABLE `packagee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packagee`
--
ALTER TABLE `packagee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
