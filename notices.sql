-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 04:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `date`, `title`, `description`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(2, '2024-02-22', 'saf', 'mahfuz', 'postimage/1708429350.png', NULL, '2024-02-20 19:42:30', '2024-02-20 19:42:30'),
(3, '2024-02-24', 'afs', 'sssfa', 'postimage/1708429390.jpg', NULL, '2024-02-20 19:43:10', '2024-02-20 19:43:10'),
(4, '2024-03-01', 'asf', 'asfasf as  fs', 'postimage/1708429483.png', 'pdf/1708429483.pdf', '2024-02-20 19:44:43', '2024-02-20 19:44:43'),
(5, '2024-02-20', 'e-Tender of 4 Storied Administrative Building', 'ইংরেজি বিভাগের ২০১৯-২০ শিক্ষাবর্ষের বি.এ (অনার্স) ৩য় বর্ষ ২য় এবং ২০২১-২২ শিক্ষাবর্ষের বি.এ (অনার্স) ১ম বর্ষ, ২য় সেমিস্টার ফাইনাল পরীক্ষা-২০২২ এর সময়সূচি', 'postimage/1708432747.png', 'pdf/1708432747.pdf', '2024-02-20 20:39:07', '2024-02-20 20:39:07'),
(6, '2024-02-20', 'e-Tender of 4 Storied Administrative Building', 'ইংরেজি বিভাগের ২০১৯-২০ শিক্ষাবর্ষের বি.এ (অনার্স) ৩য় বর্ষ ২য় এবং ২০২১-২২ শিক্ষাবর্ষের বি.এ (অনার্স) ১ম বর্ষ, ২য় সেমিস্টার ফাইনাল পরীক্ষা-২০২২ এর সময়সূচি', 'postimage/1708432807.png', 'pdf/1708432807.pdf', '2024-02-20 20:40:07', '2024-02-20 20:40:07'),
(7, '2024-02-22', 'Mr. Md. Humaun Kabir, Asst. Prof. of CSE, Attended 12 Days Sakura Science Exchange Program in Japan', 'Mr. Md. Humaun Kabir, Chairman & Assistant Professor of the CSE Department, successfully attended 12 days (23 February to 05 March, 2023) research collaboration-based program named Sakura Science Exchange Program at Wagatsuma Laboratory, Department of Human Intelligence Systems, Kyushu Institute of Technology (Kyutech), Japan for conducting BCI and Biomedical Signal Processing oriented research.', NULL, NULL, '2024-02-20 21:50:14', '2024-02-20 21:50:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
