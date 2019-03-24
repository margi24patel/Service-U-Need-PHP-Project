-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 03:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_u_need`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_title` varchar(30) NOT NULL,
  `image_url` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `publish_date` date NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image_title`, `image_url`, `first_name`, `last_name`, `publish_date`, `content`) VALUES
(10, 'Important Tips to Consider When Chossing the Right HVAC Contractor', 'HVAC Contractor', 'HVAC-Repair-Costs.jpg', 'Samantha', 'Giggs', '2019-03-12', 'When searching for an HVAC contractor in the Toronto area, itâ€™s important to know who you are dealing with. Your HVAC system is one of the most important purchase decisions you can make for your home. HVAC stands for Heating, Ventilation, and Air Conditioning. Basically, itâ€™s the system that keeps your house warm in the Winter, and cool in the Summer. Having a properly installed HVAC system is very important, as not only will it save money on your energy bills. Toronto is one of those places where the weather varies year-round. The Winter months are typically very cold, while the Summer months are very mild, so choosing the correct HVAC contractor will also prevent costly problems later down the road, such as dangerous black mold, freezing pipes, water damage, and other repairs that can put a big hole in your wallet, or even make your house unsafe. Here are five of the biggest tips you should consider when selecting your HVAC contractor.'),
(11, 'Furnace Maintenace Toronto', 'Fixing Furnace', 'furnace-maintenace.jpg', 'Rabih', 'Aoun', '2019-03-15', 'Now is the time to get your furnace maintenance done by a certified technician in Toronto. Greater Toronto Area will be experiencing a harsh winter this year. Furnace maintenance is important because are expected to drop at -45 in Toronto, Scarborough, Oshawa, Mississauga, Brampton and the surrounding areas. Get your furnace ready for these extreme conditions!'),
(12, 'How to Choose the Best Commercial Cleaning Company', 'Cleaning', 'cleaning.jpg', 'Wassim', 'Hajar', '2019-03-09', 'A clean and sanitary office or business facility is necessary for success. Your customers demand it and your employees will thank you for it. But one of the most important questions is: Who will clean your business?\r\n\r\nOne option: You can choose to outsource cleaning responsibilities to a local office cleaning business. When you hire a commercial cleaning company, the company conducts cleaning after-hours (or at regular intervals in highly-trafficked facilities), and the cleaning services company is responsible for tidying up, from cleaning restrooms and vacuuming, to restocking consumables and removing trash.'),
(13, 'At Home Salon Saves The Day', 'Cutting Hair', 'hair-cut.jpg', 'Layan', 'Hajar', '2019-03-19', 'You must have heard of At Home Salon becoming the convenient option to running to salons during festivities. Looking our best for the celebrations should be at the top of our to-do list. However, most of us barely get time to look into the mirror during these hectic days. In such a case, there is no way we can find time to book an appointment at a salon to avail the desired beauty services. This is where at home salons save the day. We have listed below some top benefits of opting for salon at home.');

-- --------------------------------------------------------

--
-- Table structure for table `book_an_appointments`
--

CREATE TABLE `book_an_appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `service` varchar(200) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_an_appointments`
--

INSERT INTO `book_an_appointments` (`id`, `name`, `email`, `phone`, `service`, `appointment_date`, `appointment_time`) VALUES
(1, 'Ektaaaaaaaaaaaaaaaa', 'ektapatel@gmail.com', '7056707970', 'repair', '2019-03-20', '00:00:00.000000'),
(3, 'EKTA PATELlllllllllllllllllllll', 'ektapatel71292@gmail.com', '7055007071', 'cdca\\v', '0000-00-00', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_registrations`
--

CREATE TABLE `client_registrations` (
  `id` int(11) NOT NULL,
  `client_firstname` varchar(50) NOT NULL,
  `client_lastname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `street_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postalcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `rating` varchar(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `questions` varchar(300) NOT NULL,
  `answers` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_apply_employee_client_side`
--

CREATE TABLE `job_apply_employee_client_side` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `employee_firstname` varchar(300) NOT NULL,
  `employee_lastname` varchar(300) NOT NULL,
  `streetname` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `province` varchar(300) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `phone_no` varchar(300) NOT NULL,
  `availability` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_apply_employee_client_side`
--

INSERT INTO `job_apply_employee_client_side` (`id`, `job_id`, `employee_firstname`, `employee_lastname`, `streetname`, `city`, `province`, `postal_code`, `email_id`, `phone_no`, `availability`) VALUES
(1, 1, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-03-26'),
(2, 1, 'Mishwa', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-03-27'),
(5, 0, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-03-27'),
(6, 0, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-03-27'),
(7, 6, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_admin_side`
--

CREATE TABLE `job_post_admin_side` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `skill_requirements` varchar(300) NOT NULL,
  `job_requirements` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salary` varchar(300) NOT NULL,
  `job_type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_admin_side`
--

INSERT INTO `job_post_admin_side` (`id`, `job_title`, `location_name`, `skill_requirements`, `job_requirements`, `description`, `salary`, `job_type`) VALUES
(5, 'Web Developer', 'Etobicoke', 'have good work ethic', 'should 1yr experience', 'HTML,CSS', '$70,000', 'Full-Time'),
(6, 'Pharmacist', 'Etobicoke', 'have good work ethic', 'should 1yr experience', 'Cology', '$80,000', 'Part-Time'),
(8, 'web designer', 'Etobicoke', 'have good work ethic', 'should 1yr experience', 'HTML,CSS,JS', '$60,000', 'Full-Time');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `date`) VALUES
(1, 'Home Cleaning', '2019-03-17'),
(2, 'Appliance Repair', '2019-03-17'),
(5, 'Business and Technology', '2019-03-17'),
(6, 'Beauty', '2019-03-17'),
(9, 'Wedding & Events', '2019-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sub_service_id` int(11) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `emailid`) VALUES
(1, 'tandeljetal@gmail.com'),
(5, 'subham@gmail.com'),
(9, 'tandeljinish@yahoo.ca'),
(16, 'badh@gmail.com'),
(18, 'tandelsubham@gmail.com'),
(19, 'jinish@yahoo.ca');

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `name`, `service_id`) VALUES
(1, 'Carpet Cleaning', 1),
(4, 'Home Deep Cleaning', 1),
(5, 'Kitchen Cleaning', 1),
(6, 'Bathroom Cleaning', 1),
(7, 'AC Service and Repair', 2),
(9, 'Washing Machine Repair', 2),
(10, 'Refrigerator Repair', 2),
(11, 'Microwave Repair', 2),
(12, 'Heater Repair', 2),
(13, 'Home Salon for Women', 6),
(14, 'Women Massage', 6),
(15, 'Men Massage', 6),
(16, 'Men\'s Haircut ', 6),
(17, 'Makeup and Hairstyling', 6),
(18, 'Income Tax Filing', 5),
(19, 'GST Registration Services', 5),
(20, 'Lawyer', 5),
(21, 'Web Designer and Developer', 5),
(22, 'Packers and Movers', 5),
(23, 'Wedding Photographer', 9),
(24, 'Party Decoration', 9),
(25, 'Event Photographer', 9),
(26, 'Wedding Venues', 9),
(27, 'cleaning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_an_appointments`
--
ALTER TABLE `book_an_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_registrations`
--
ALTER TABLE `client_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_service_id` (`sub_service_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `book_an_appointments`
--
ALTER TABLE `book_an_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_registrations`
--
ALTER TABLE `client_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD CONSTRAINT `service_providers_ibfk_1` FOREIGN KEY (`sub_service_id`) REFERENCES `sub_services` (`id`);

--
-- Constraints for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD CONSTRAINT `sub_services_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
