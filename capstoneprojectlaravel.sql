-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 03:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstoneprojectlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(255) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `default_password` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `password_changed` varchar(255) NOT NULL DEFAULT 'false',
  `type` varchar(255) NOT NULL,
  `verification_code` int(11) DEFAULT NULL,
  `first_login` varchar(255) DEFAULT 'true',
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `email`, `default_password`, `password`, `password_changed`, `type`, `verification_code`, `first_login`, `status`) VALUES
(1, 'admin1@adamson.edu.ph', 'DEFAULT', NULL, 'false', 'AD', 8339, NULL, 'active'),
(2, 'admin2@adamson.edu.ph', 'DEFAULT', NULL, 'false', 'AD', 8632, NULL, 'active'),
(3, 'admin3@adamson.edu.ph', 'DEFAULT', NULL, 'false', 'AD', NULL, NULL, 'active'),
(4, 'admin4@adamson.edu.ph', 'DEFAULT', NULL, 'false', 'AD', NULL, NULL, 'active'),
(5, 'maori.trixia.leonardo@adamson.edu.ph', 'DEFAULT', '$2y$10$IzCSE5/2BM4DFI6uOX2ifO9u.E5p9seMI/86A/ygb89/5cqcVG38K', 'false', 'PE', 8841, 'true', 'active'),
(6, 'irish.mae.ong@adamson.edu.ph', 'gno3enkl', NULL, 'false', 'PE', NULL, 'true', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(255) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(6, 'ACCOUNTANCY DEPARTMENT'),
(87, 'ACCOUNTING OFFICE'),
(60, 'ADMISSION AND STUDENT RECRUITMENT'),
(1, 'BED-GRADE SCHOOL AND JHS (OFFICE)'),
(2, 'BED-GRADE SCHOOL AND JUNIOR HIGH SCHOOL'),
(3, 'BED-SENIOR HIGH SCHOOL'),
(4, 'BED-SENIOR HIGH SCHOOL (OFFICE)'),
(38, 'BIOLOGY DEPARTMENT'),
(39, 'BIOLOGY LABORATORY'),
(91, 'BUDGET OFFICE'),
(99, 'CAMPUS MINISTRY'),
(82, 'CAMPUS SECURITY AND SAFETY'),
(88, 'CASH MANAGEMENT OFFICE'),
(7, 'CBA-GRADUATE SCHOOL'),
(14, 'CELA-GRADUATE SCHOOL'),
(72, 'CENTER FOR HEALTH SERVICES'),
(61, 'CENTER FOR INNOVATIVE LEARNING'),
(62, 'CENTER FOR RESEARCH AND DEVELOPMENT (CRD)'),
(22, 'CHEMICAL ENGINEERING DEPARTMENT'),
(40, 'CHEMISTRY DEPARTMENT'),
(41, 'CHEMISTRY LABORATORY'),
(23, 'CIVIL ENGINEERING DEPARTMENT'),
(24, 'COE-GRADUATE SCHOOL'),
(8, 'COLLEGE OF BUSINESS ADMINISTRATION'),
(15, 'COLLEGE OF EDUCATION AND LIBERAL ARTS'),
(25, 'COLLEGE OF ENGINEERING'),
(16, 'COMMUNICATION DEPARTMENT'),
(26, 'COMPUTER ENGINEERING DEPARTMENT'),
(43, 'COMPUTER SCIENCE DEPARTMENT'),
(63, 'CONTINUING PROFESSIONAL DEVELOPMENT DEPARTMENT'),
(90, 'CONTROLLER\'S OFFICE'),
(44, 'COS-GRADUATE SCHOOL'),
(100, 'CULTURAL AFFAIRS OFFICE'),
(9, 'CUSTOMS ADMINISTRATION DEPARTMENT'),
(5, 'DEAN\'S OFFICE - COLLEGE OF ARCHITECTURE'),
(10, 'DEAN\'S OFFICE - COLLEGE OF BUSINESS ADMINISTRATION'),
(17, 'DEAN\'S OFFICE - COLLEGE OF EDUCATION & LIBERAL ARTS'),
(27, 'DEAN\'S OFFICE - COLLEGE OF ENGINEERING'),
(35, 'DEAN\'S OFFICE - COLLEGE OF LAW'),
(36, 'DEAN\'S OFFICE - COLLEGE OF NURSING'),
(37, 'DEAN\'S OFFICE - COLLEGE OF PHARMACY'),
(42, 'DEAN\'S OFFICE - COLLEGE OF SCIENCE'),
(18, 'EDUCATION DEPARTMENT'),
(28, 'ELECTRICAL ENGINEERING DEPARTMENT'),
(29, 'ELECTRONICS ENGINEERING DEPARTMENT'),
(30, 'ENGINEERING LAB.'),
(11, 'FINANCE & ECONOMICS DEPARTMENT'),
(89, 'GENERAL ACCOUNTING'),
(31, 'GEOLOGY DEPARTMENT'),
(102, 'GUIDANCE-CAREER AND PLACEMENT'),
(101, 'GUIDANCE, COUNSELING, TESTING & PLACEMENT- BED'),
(12, 'HOSPITALITY MANAGEMENT DEPARTMENT'),
(73, 'HRMDO-PEOPLE AND ORGANIZATIONAL DEVELOPMENT'),
(74, 'HRMDO-RECORDS AND INFORMATION MANAGEMENT'),
(75, 'HRMDO-RECRUITMENT AND PLACEMENT'),
(76, 'HRMDO-SALARIES AND BENEFITS'),
(32, 'INDUSTRIAL ENGINEERING DEPARTMENT'),
(45, 'INFORMATION TECHNOLOGY AND INFORMATION SYSTEMS'),
(50, 'INNOVATION TECHNOLOGY SUPPORT OFFICE (ITSO)'),
(49, 'INSTITUTE OF RELIGIOUS EDUCATION (IRED)'),
(81, 'INSTITUTIONAL DEVELOPMENT AND EXTERNAL AFFAIRS'),
(53, 'INSTITUTIONAL PLANNING AND POLICY DEVELOPMENT'),
(103, 'INTEGRATED COMMUNITY EXTENSION SERVICES (ICES)'),
(54, 'INTERNAL AUDIT'),
(77, 'ITC-INFORMATION TECHNOLOGY CENTER'),
(78, 'ITC-NETWORK INFRASTRUCTURE'),
(79, 'ITC-SYSTEMS DEVELOPMENT'),
(80, 'ITC-SYSTEMS MAINTENANCE'),
(51, 'ITSO-INTELLECTUAL PROPERTY'),
(52, 'ITSO-VIGORMIN TECHNOLOGY'),
(19, 'LANGUAGES DEPARTMENT'),
(65, 'LIBRARY SERVICES'),
(66, 'LIBRARY SERVICES - READERS SERVICES'),
(13, 'MANAGEMENT AND MARKETING DEPARTMENT'),
(46, 'MATH AND PHYSICS DEPARTMENT'),
(33, 'MECHANICAL ENGINEERING DEPARTMENT'),
(34, 'MGC DEPARTMENT'),
(104, 'OAD-ATHLETES\' ELIGIBILITY AND INTERNAL OPERATIONS'),
(96, 'OFFICE FOR ALLIED SERVICES (OAS)'),
(55, 'OFFICE FOR INSTITUTIONAL ADVANCEMENT (OIA)'),
(64, 'OFFICE FOR PROGRAMS AND STANDARDS (OPS)'),
(56, 'OFFICE FOR UNIVERSITY RELATIONS (OUR)'),
(57, 'OFFICE OF THE PRESIDENT'),
(59, 'OFFICE OF THE UNIVERSITY LEGAL COUNSEL'),
(97, 'OFFICE OF THE VICE PRESIDENT FOR FINANCE'),
(107, 'OFFICE OF THE VP FOR STUDENT AFFAIRS'),
(105, 'OSA-OFFICE FOR STUDENT AFFAIRS SCHOLARSHIP'),
(106, 'OSA-STUDENT DEVELOPMENT'),
(83, 'PFGSO-BLDG. MAINTENANCE & OPERATIONS (ELECTRICAL)'),
(84, 'PFGSO-BLDG. MAINTENANCE & OPERATIONS (MECH. WORKS)'),
(85, 'PFGSO-BLDG. MAINTENANCE & OPERATIONS(CIVIL WORKS)'),
(86, 'PFGSO-HOUSEKEEPING'),
(20, 'PHYSICAL EDUCATION DEPARTMENT'),
(47, 'PHYSICS LABORATORY'),
(48, 'PSYCHOLOGY DEPARTMENT'),
(98, 'PURCHASING'),
(68, 'REGISTRAR - SCHEDULING AND ENROLLMENT'),
(69, 'REGISTRAR - STUDENT RECORDS MGT. AND EVALUATION'),
(67, 'REGISTRAR\'S OFFICE'),
(21, 'SOCIAL SCIENCE DEPARTMENT'),
(108, 'ST. VINCENT SCHOOL OF THEOLOGY'),
(93, 'STUDENT\'S ACCOUNTS'),
(109, 'SVST-PASTORAL SERVICES'),
(110, 'SVST-PHILOSOPHY PROGRAM'),
(111, 'SVST-TREASURY'),
(95, 'TREASURER\'S OFFICE'),
(58, 'UNIVERSITY INFORMATION SECURITY OFFICE (UISO)'),
(71, 'VPA OFFICE'),
(70, 'VPAA OFFICE'),
(94, 'WAREHOUSE INVENTORY AND CONTROL SECTION');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(255) UNSIGNED NOT NULL,
  `account_id` int(255) UNSIGNED NOT NULL,
  `employee_number` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(255) UNSIGNED DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `immediate_superior_id` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `account_id`, `employee_number`, `first_name`, `last_name`, `department_id`, `job_title`, `position`, `immediate_superior_id`) VALUES
(1, 1, 202011111, 'Administrator', 'One', NULL, NULL, NULL, NULL),
(2, 2, 202011222, 'Administrator', 'Two', NULL, NULL, NULL, NULL),
(3, 3, 202011333, 'Administrator', 'Three', NULL, NULL, NULL, NULL),
(4, 4, 202011444, 'Administrator', 'Four', NULL, NULL, NULL, NULL),
(5, 5, 202011989, 'Maori Trixia', 'Leonardo', NULL, NULL, NULL, NULL),
(6, 6, 202011988, 'Irish Mae', 'Ong', 72, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_05_22_174608_modify_accounts_table', 2),
(8, '2023_05_22_181540_modify_accounts', 3),
(9, '2023_05_28_052649_drop_table_employees', 4),
(10, '2023_05_28_052829_drop_table_employees', 5),
(11, '2023_05_28_052927_create_employees_table', 6),
(12, '2023_05_28_053125_add_fk_employees', 7),
(13, '2023_05_28_055350_drop_employee_number', 8),
(14, '2023_05_28_081108_create_departments_table', 9),
(15, '2023_05_28_081657_create_departments_table2', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `departments_department_name_unique` (`department_name`),
  ADD UNIQUE KEY `department_name` (`department_name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employees_account_id_unique` (`account_id`),
  ADD UNIQUE KEY `employees_employee_number_unique` (`employee_number`),
  ADD KEY `employees_immediate_superior_id_foreign` (`immediate_superior_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`immediate_superior_id`) REFERENCES `employees` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
