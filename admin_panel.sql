-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 07:09 AM
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
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `firstname`, `lastname`, `designation`, `department`, `email`, `created_at`, `updated_at`, `password`) VALUES
(1, 'Masab', 'Khan', 'Manager', 'Sales', 'masabkhan@gmail.com', '2024-02-27 18:59:02', '2024-02-27 18:59:02', '0'),
(2, 'Masab', 'Khan', 'Manager', 'Sales', 'test@test.com', '2024-02-27 19:35:35', '2024-02-27 19:35:35', '0'),
(3, 'Ali', 'Khan', 'Manager', 'IT', 'alikhan@gmail.com', '2024-02-27 19:42:45', '2024-02-27 19:42:45', '0'),
(4, 'Masab', 'Usman', 'Manager', 'Sales', 'usmankhan@gmail.com', '2024-02-27 20:30:42', '2024-02-27 20:30:42', '0'),
(5, 'Foreigner', 'Admi', 'Manager', 'HR', 'foreigneradmi@uk.com', '2024-02-27 21:07:11', '2024-02-27 21:07:11', '0'),
(6, 'Karim', 'Janat', 'Manager', 'Sales', 'karimjanat@afghanistan.com', '2024-02-27 21:12:25', '2024-02-27 21:12:25', '0'),
(7, 'ALi', 'Ahmad', 'Manager', 'IT', 'Alialam@gmail.com', '2024-02-27 21:14:24', '2024-02-27 21:14:24', '0'),
(8, 'Asad', 'Khan', 'Manager', 'IT', 'asadkhan@asad.com', '2024-02-27 21:15:35', '2024-02-27 21:15:35', '0'),
(9, 'asad', 'ali', 'Manager', 'IT', 'asadali@gmail.com', '2024-02-27 21:16:51', '2024-02-27 21:16:51', '0'),
(10, 'asd', 'dsa', 'Manager', 'IT', 'dsa@dsa.com', '2024-02-27 21:17:48', '2024-02-27 21:17:48', '0'),
(11, 'Jaquie', 'fan', 'Manager', 'IT', 'faq@hotmail.com', '2024-02-27 21:20:52', '2024-02-27 21:20:52', '0'),
(12, 'Musab Bin', 'Usman', 'Manager', 'IT', 'musabbinusman404@gmail.com', '2024-02-28 13:24:00', '2024-02-28 13:24:00', 'Asd123'),
(13, 'Imp', 'Man', 'Manager', 'IT', 'impman@gmail.com', '2024-02-28 13:43:23', '2024-02-28 13:43:23', 'impman'),
(14, 'Very', 'Important', 'Manager', 'IT', 'vip@hotmail.com', '2024-02-28 14:05:22', '2024-02-28 14:05:22', 'asd123'),
(15, 'Jhonny', 'Sins', 'Manager', 'IT', 'jhonnysings@gmail.com', '2024-02-28 14:07:58', '2024-02-28 14:07:58', 'asd123'),
(16, 'Musab', 'Usman', 'Manager', 'IT', 'musabbinusman@gmail.com', '2024-02-28 15:22:02', '2024-02-28 15:22:02', 'asd123'),
(17, 'a', 'b', 'Manager', 'IT', 'ab@gmail.com', '2024-02-28 15:28:47', '2024-02-28 15:28:47', 'aaa111'),
(18, 'Test', 'Tester', 'Manager', 'IT', 'Tester@gmail.com', '2024-02-28 21:22:53', '2024-02-28 21:22:53', 'asd123'),
(19, 'Mia', 'Khalifa', 'Manager', 'Sales', 'miakhalifa@hotmail.com', '2024-02-29 17:59:16', '2024-02-29 17:59:16', 'asd123'),
(20, 'Musab Bin', 'Usman', 'Manager', 'Sales', 'member@akodes.com', '2024-03-02 12:50:29', '2024-03-02 12:50:29', 'asd123');

-- --------------------------------------------------------

--
-- Table structure for table `authority_details`
--

CREATE TABLE `authority_details` (
  `Authority_id` int(11) NOT NULL,
  `Authority_Title` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authority_details`
--

INSERT INTO `authority_details` (`Authority_id`, `Authority_Title`) VALUES
(1, 'Change his name');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `department` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `admin_id`, `fullname`, `designation`, `department`, `password`, `created_at`, `updated_at`) VALUES
(1, 16, 'Jawad Khan', 'Incharge', 'IT', 'asd123', '2024-02-29 12:56:52', '2024-02-29 12:56:52'),
(3, 16, 'Asad Khan', 'Designer', 'IT', 'asad123', '2024-02-29 15:54:10', '2024-02-29 15:54:10'),
(12, 5, 'Data Man', 'Planner', 'HR', 'dsa321', '2024-03-02 12:48:41', '2024-03-02 12:48:41'),
(13, 20, 'Wasif Khan', 'Designer', 'Sales', 'wasif123', '2024-03-02 12:57:53', '2024-03-02 12:57:53'),
(14, 20, 'Jameel Rana', 'Designer', 'Sales', 'jameel321', '2024-03-02 13:00:08', '2024-03-02 13:00:08'),
(15, 20, 'Jawad Khan', 'Planner', 'Sales', 'jawad321', '2024-03-02 13:01:42', '2024-03-02 13:01:42'),
(16, 20, 'Successman', 'Incharge', 'Sales', 'success', '2024-03-02 13:02:13', '2024-03-02 13:02:13'),
(17, 20, 'Jannat MIrza', 'Planner', 'Sales', 'jannat321', '2024-03-02 13:13:58', '2024-03-02 13:13:58'),
(18, 19, 'Musab Bin Usman', 'Incharge', 'Sales', 'asd123', '2024-03-04 18:55:10', '2024-03-04 18:55:10'),
(19, 19, 'Ahmad Khan', 'Planner', 'Sales', 'khan123', '2024-03-04 19:55:51', '2024-03-04 19:56:23'),
(20, 19, 'Sana Anwar', 'Designer', 'Sales', 'sana321', '2024-03-05 13:31:11', '2024-03-05 13:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `employees_authority`
--

CREATE TABLE `employees_authority` (
  `row_id` int(11) NOT NULL,
  `authority_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `authority_name` varchar(30) NOT NULL,
  `authority_status` varchar(10) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees_authority`
--

INSERT INTO `employees_authority` (`row_id`, `authority_id`, `emp_id`, `authority_name`, `authority_status`, `admin_id`, `updated_at`, `created_at`) VALUES
(1, 1, 18, 'Change his name', 'Access', 19, '2024-03-06 06:06:01', '2024-03-05 09:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `password`, `created_at`, `updated_at`, `admin_id`) VALUES
(1, 'asd123', '2024-02-27 21:17:48', '2024-02-27 21:17:48', 10);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_02_27_091731_create_table_admin_info', 2),
(11, '2024_02_27_120730_login_info', 3),
(12, '2024_02_27_130325_add_foreign_key', 4),
(13, '2024_02_28_045353_new_col', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authority_details`
--
ALTER TABLE `authority_details`
  ADD PRIMARY KEY (`Authority_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employees_authority`
--
ALTER TABLE `employees_authority`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_info_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `authority_details`
--
ALTER TABLE `authority_details`
  MODIFY `Authority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employees_authority`
--
ALTER TABLE `employees_authority`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_info`
--
ALTER TABLE `login_info`
  ADD CONSTRAINT `login_info_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
