-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 12:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `two_wheeler_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_registration`
--

CREATE TABLE `client_registration` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_registration`
--

INSERT INTO `client_registration` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(6, 'Anurag Anand', 'anandanurag695@gmail.com', '7992425789', 'Tupudana Ranchi', 'secure'),
(10, 'shubraj kumar', 'shubrajkumar001@gmail.com', '9887077293', 'patna', 'shubb'),
(11, 'abhishek', 'abhimdp7479@gmail.com', '9117833602', 'Devghar', 'ariya'),
(12, 'Ariya Naj', 'ariyanaj09558@gmail.com', '8757787874', 'Rattu Ranchi', 'ariyanaj');

-- --------------------------------------------------------

--
-- Table structure for table `client_vehicle_booked_details`
--

CREATE TABLE `client_vehicle_booked_details` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vehicle_image` varchar(255) NOT NULL,
  `vehicle_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_vehicle_booked_details`
--

INSERT INTO `client_vehicle_booked_details` (`id`, `client_name`, `address`, `email`, `phone`, `vehicle_name`, `vehicle_image`, `vehicle_price`) VALUES
(11, 'Anurag Anand', 'Tupudana Ranchi', 'anandanurag695@gmail.com', '7992425789', 'Indian Motorcycle', 'indian.png', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_details`
--

CREATE TABLE `vehicles_details` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles_details`
--

INSERT INTO `vehicles_details` (`id`, `name`, `image`, `price`, `description`) VALUES
(28, 'Honda Grazia', 'Honda_Grazia.png', 550, 'Engine Type: The Honda Grazia is equipped with a 124cc, fan-cooled, 4-stroke, SI engine with BS6 compliance. This engine is designed to offer a good balance between performance and fuel efficiency.\r\nPower Output: The engine produces around 8.14 bhp'),
(51, 'Royal Enfield Himalayan', 'Royal_Enfield_Himalayan.png', 1500, 'The Royal Enfield Himalayan is an adventure touring motorcycle designed for rugged terrains and long-distance riding. It features a 411cc single-cylinder engine, long-travel suspension, and a durable frame. The Himalayan is known for its off-road capabili'),
(57, 'Royal Enfield Hunter', 'Royal_Enfield_Hunter.png', 1200, 'The Royal Enfield Hunter is a nimble, street-focused motorcycle designed for urban commuting and light touring. It typically features a smaller, agile frame and a 349cc single-cylinder engine, offering a balance of power and efficiency.'),
(58, 'Royal Enfield Classic', 'royal-enfield-classic.png', 1000, 'The Royal Enfield Classic is a retro-styled motorcycle with a vintage design, available in 350cc and 500cc engines, known for its nostalgic appeal and robust performance.'),
(59, 'Indian Motorcycle', 'indian.png', 2000, 'Indian Motorcycle is an iconic American brand renowned for its premium cruisers, baggers, and touring motorcycles. With models like the Scout, Chief, and Roadmaster, Indian offers a range of V-twin powered bikes known for their robust performance.'),
(60, 'Jawa Perak', 'jawa_perak.png', 1250, 'The Jawa Perak is a bobber-style motorcycle known for its minimalist design and vintage appeal. It is powered by a 334cc single-cylinder engine, delivering a blend of classic aesthetics and modern performance. The Perak stands out with its low-slung seat.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_registration`
--
ALTER TABLE `client_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_vehicle_booked_details`
--
ALTER TABLE `client_vehicle_booked_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles_details`
--
ALTER TABLE `vehicles_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_registration`
--
ALTER TABLE `client_registration`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client_vehicle_booked_details`
--
ALTER TABLE `client_vehicle_booked_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicles_details`
--
ALTER TABLE `vehicles_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
