-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 12:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'Yhomi Ace', 'yhomi1996@gmail.com', '0813270084', 'Test Message Two', '2021-01-14 15:29:58'),
(3, 'Test One', 'test1@test.com', '0813270084', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '2021-01-14 19:41:02'),
(4, 'Yhomi Ace', 'test1@test.com', '444-444-444', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-01-23 18:22:43'),
(5, 'John Doe', 'jdoe@gmail.com', '44-44-44', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-01-23 18:26:18'),
(6, 'John Doe', 'jdoe@gmail.com', '111-111-111-111', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-01-23 18:29:34'),
(7, 'Samantha Smith', 'yhomiace18@gmail.com', '08137205684', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-01-26 07:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `country_flag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `type`, `duration`, `price`, `description`, `created_at`, `image`, `country_flag`) VALUES
(8, 'Canada', 'Real Estate', '6 months', '€250,000', 'As a country, Canada has ten provinces and three territories. It’s four largest provinces by area are Québec, Ontario, British Colombia &amp; Alberta. The smallest subdivision of both land and water area is the province of Prince Edward Island. Canada is the second-largest country in the world; it has the fourth-largest dry land area, and the largest freshwater area.', '2021-01-11 20:46:13', '5ffcb915356b1w1.JPG', '5ffcb915356b3w7.JPG'),
(9, 'GERMANY', 'BUSINESS SETUP', '6 months', '€450,000', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', '2021-01-12 09:44:13', '5ffd6f6d09b6fw2.JPG', '5ffd6f6d09b72ws.JPG'),
(10, 'Portugal', 'REAL ESTATE', '1-3 Months', ' €350,000', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', '2021-01-12 21:07:26', '5ffe0f8e296e6portugal.jpg', '5ffe0f8e296eapt.jpg'),
(11, 'UK', 'Full ', '6 months', '$140,000', 'he Commonwealth of Dominica , also known as the Nature Island of the Caribbean is an independent state situated near the islands of Martinique and Guadeloupe. Dominica, formerly a British colony, is a member of the British Commonwealth of Nations, the Organization of American States (OAS), Caricom and also the United Nations. The Dominica Citizenship-by-Investment Programme grants citizenship to investors and their families in exchange for an investment in a government fund or else in real estate. Citizenship obtained under this programme grants the right of full citizenship for life and can be passed on to future generations.', '2021-01-20 19:22:20', '600c88bf0dc23malta-pr.jpg', '600c88bf0dc25bu.png'),
(13, 'Dominica', 'Real Estate', '1-4 Months', '$140,000', 'The Commonwealth of Dominica , also known as the Nature Island of the Caribbean is an independent state situated near the islands of Martinique and Guadeloupe. Dominica, formerly a British colony, is a member of the British Commonwealth of Nations, the Organization of American States (OAS), Caricom and also the United Nations. The Dominica Citizenship-by-Investment Programme grants citizenship to investors and their families in exchange for an investment in a government fund or else in real estate. Citizenship obtained under this programme grants the right of full citizenship for life and can be passed on to future generations.', '2021-01-23 15:56:12', '600c471c647e8dominica-citizenship-by-investment.jpg', '600c471c647eedm.svg'),
(14, 'Austria', 'REAL ESTATE', '1 - 3 Months', '€8,000,000', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', '2021-01-26 10:52:07', '600ff4576118fmontenegro.jpg', '600ff45761198au.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `post_image`, `created_at`) VALUES
(1, 'Solo leveling', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.                                                                                                                                                                ', 'John doe', '12-01-21-01-04w8.JPG', '2021-01-12 12:04:09'),
(2, 'Post Two title', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Jon Snow', '12-01-21-01-05cw.JPG', '2021-01-12 12:05:09'),
(4, 'Test Post ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Wale Turner', '12-01-21-03-34w4.JPG', '2021-01-12 14:34:35'),
(5, 'Test Post  Two', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Webnovel', '13-01-21-11-32bulgaria-passport.jpg', '2021-01-13 10:32:39'),
(6, 'Test Post 2', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'John doe', '13-01-21-11-33grenada.jpg', '2021-01-13 10:33:02'),
(7, 'Test Post 3', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Jon Snow', '13-01-21-11-33st-lucia-citizenship.jpg', '2021-01-13 10:33:22'),
(8, 'Test Post 4', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Wale Turner', '13-01-21-11-33dominica-citizenship-by-investment.jpg', '2021-01-13 10:33:49'),
(10, 'Post 19', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'John doe', '13-01-21-11-34citizenship-vanuatu.jpg', '2021-01-13 10:34:27'),
(11, 'Test Post  Four', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Jon Snow', '13-01-21-11-35greek-golden-visa.jpg', '2021-01-13 10:35:32'),
(12, 'Solo leveling', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Webnovel', '13-01-21-11-36ireland.jpg', '2021-01-13 10:36:43'),
(13, 'Java Swing', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'Taiye Sanni', '13-01-21-11-38antigua-citizenship.jpg', '2021-01-13 10:38:07'),
(14, 'Post Six', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'John doe', '13-01-21-11-38montenegro.jpg', '2021-01-13 10:38:29'),
(15, 'Java Swing', 'Portugal is an EU country enjoying a sound political system, and a fully liberalised market economy. The country offers a European standard of living, including high standards of education and healthcare. Being a Mediterranean country, Portugal boasts of a rich and diverse culture as well as a Mediterranean climate. Portugal has been a member of the European Union since 1986 and of the Schengen Area since 1995. The country’s fast developing market coupled with the access it provides to the entire Schengen Area, makes it an ideal relocation destination for families, as well as businesses. The Portugal Golden Visa Programme is an attractive option to non-EU citizens wishing to reside, study and do business in Europe. The Programme also paves the way to permanent residency and European citizenship.', 'James Doe', '13-01-21-11-39greek-golden-visa.jpg', '2021-01-13 10:39:48'),
(17, 'Solo leveling', 'As shown above by the extensive usage of .then calls, Sequelize uses Promises extensively. This means that, if your Node version supports it, you can use ES2017 async/await syntax for all asynchronous calls made with Sequelize.\n\nAlso, all Sequelize promises are in fact Bluebird promises, so you have the rich Bluebird API to use as well (for example, using finally, tap, tapCatch, map, mapSeries, etc). You can access the Bluebird constructor used internally by Sequelize with Sequelize.Promise, if you want to set any Bluebird specific options.\n\n', 'Webnovel', '23-01-21-04-48ca.jpg', '2021-01-23 15:48:01'),
(18, 'Post Six', 'As shown above by the extensive usage of .then calls, Sequelize uses Promises extensively. This means that, if your Node version supports it, you can use ES2017 async/await syntax for all asynchronous calls made with Sequelize.\n\nAlso, all Sequelize promises are in fact Bluebird promises, so you have the rich Bluebird API to use as well (for example, using finally, tap, tapCatch, map, mapSeries, etc). You can access the Bluebird constructor used internally by Sequelize with Sequelize.Promise, if you want to set any Bluebird specific options.\n\n                                ', 'Wale Turner', '23-01-21-04-51grenada.jpg', '2021-01-23 15:51:06'),
(19, 'Php developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'James Doe', '25-01-21-04-24malta-pr.jpg', '2021-01-25 15:24:23'),
(20, 'Solo leveling', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Webnovel', '25-01-21-04-26ca.jpg', '2021-01-25 15:26:15'),
(21, 'Php developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Jon Snow', '25-01-21-04-26dominica-citizenship-by-investment.jpg', '2021-01-25 15:26:33'),
(22, 'Java Swing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Wale Turner', '25-01-21-04-27grenada.jpg', '2021-01-25 15:27:10'),
(23, 'Wordpress developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'James Doe', '26-01-21-11-08stkitts-citizenship.jpg', '2021-01-26 10:08:46'),
(24, 'React Developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'John doe', '26-01-21-11-24bulgaria-passport.jpg', '2021-01-26 10:24:03'),
(25, 'Solo leveling', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Webnovel', '26-01-21-11-25antigua-citizenship.jpg', '2021-01-26 10:25:20'),
(26, 'Php developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Taiye Sanni', '26-01-21-11-26greek-golden-visa.jpg', '2021-01-26 10:26:49'),
(27, 'Solo leveling', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Wale Turner', '26-01-21-11-29citizenship-vanuatu.jpg', '2021-01-26 10:29:32'),
(28, 'Post Six', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'John doe', '26-01-21-11-45grenada.jpg', '2021-01-26 10:45:56'),
(29, 'Solo leveling', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'John doe', '26-01-21-11-47citizenship-cyprus.jpg', '2021-01-26 10:47:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
