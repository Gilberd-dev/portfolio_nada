-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 02, 2023 at 05:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `doings`
--

CREATE TABLE `doings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doings`
--

INSERT INTO `doings` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Web Design Project', 'Can create a dynamic website with nead code.', NULL, NULL),
(2, 'Display Designing Project', 'Can design a page or file by using Figma, Picsart or Canva.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `school_place` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school_name`, `year`, `school_place`, `created_at`, `updated_at`) VALUES
(1, 'KINDERGARTEN PEMBINA TARUTUNG', '2009 - 2010', 'Tarutung, North Sumatera', NULL, '2023-11-02 01:35:45'),
(2, 'ELEMENTARY SCHOOL 173105 TARUTUNG', '2009 - 2014', 'Tarutung, North Sumatera', NULL, NULL),
(3, 'JUNIOR HIGH SCHOOL 2 TARUTUNG', '2014 - 2018', 'Tarutung, North Sumatera', NULL, NULL),
(4, 'HIGH SCHOOL 1 TARUTUNG', '2018 - 2021', 'Tarutung, North Sumatera', NULL, NULL),
(5, 'DEL INSTITUTE OF TECHNOLOGY', '2021 - Present', 'Sitoluama, Laguboti, North Sumatera', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exp_title` varchar(255) NOT NULL,
  `exp_year` varchar(255) NOT NULL,
  `exp_place` varchar(255) NOT NULL,
  `exp_desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `exp_title`, `exp_year`, `exp_place`, `exp_desc`, `created_at`, `updated_at`) VALUES
(1, 'STUDENT LEADERSHIP', '2022 - 2023', 'Del Institute of Technology', 'Lead and manage 5 new students per 1 semester;Designing worship procedures, schedule of activities and list of names during Student;Leadership activities\r\ncan manage time and expenses well and in detail', NULL, '2023-11-02 02:12:32'),
(2, 'MEMBER OF MULTIMEDIA AND DOCUMENTATION DIVISION', '2022 - 2023', 'Del Institute of Technology', 'Became MC in the handover ceremony of the student association;Document debate activities between candidates for president and vice president of the student association', NULL, NULL),
(3, 'JOIN THE ARTIFICIAL INTELLIGENCE INNOVATION SUMMIT 2021 WEBINAR', '10 - 13 November 2021', 'Attend online from home due to COVID', '', NULL, NULL),
(4, 'PARTICIPATED IN THE SCE USU COMPETITION', 'October 5, 2019', 'Pardede hall, Medan North Sumatra', '', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_30_133054_create_profiles_table', 1),
(6, '2023_10_30_135039_create_doings_table', 1),
(7, '2023_10_30_135215_create_resumes_table', 1),
(8, '2023_10_30_135642_create_education_table', 1),
(9, '2023_10_30_135830_create_experiences_table', 1),
(10, '2023_10_31_005726_create_port_projects_table', 1),
(11, '2023_11_01_125555_create_skills_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `port_projects`
--

CREATE TABLE `port_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_images` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `kategori` enum('App','Project','Web') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `port_projects`
--

INSERT INTO `port_projects` (`id`, `port_images`, `detail`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'picsart.jpg', 'portfolio-details.html', 'App', NULL, '2023-11-02 07:14:50'),
(2, 'canva.jpg', 'portfolio-details.html', 'App', NULL, NULL),
(3, 'figma.jpg', 'https://www.figma.com', 'App', NULL, NULL),
(4, 'w3.jpg', 'https://www.w3schools.com/', 'Web', NULL, NULL),
(5, 'github.jpg', 'https://github.com/', 'Web', NULL, NULL),
(6, 'chatgpt.jpeg', 'https://chat.openai.com/', 'Web', NULL, NULL),
(7, 'project web Del.jpg', 'https://www.figma.com/file/jFYAQjuVfA82xpUjqhdPhF/Untitled?type=design&node-id=0-1&mode=design&t=Z6MMuIINlocZhygn-0', 'Project', NULL, NULL),
(8, 'project olis Del.png', 'https://www.figma.com/file/f85cAH4QiMkPMRQg0V0ucJ/Untitled?type=design&node-id=0-1&mode=design&t=oYAroauUVkl6R3ME-0', 'Project', NULL, NULL),
(9, 'project jadwal piket.png', 'https://www.youtube.com/playlist?list=PLV2dAuaP5hUyrnVTfQEmiE13wGDog1CDA', 'Project', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto_profil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `city` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `foto_profil`, `email`, `no_hp`, `birthday`, `age`, `gender`, `city`, `about`, `hobby`, `created_at`, `updated_at`) VALUES
(1, 'profile-img.jpg', 'nadabakara@gmail.com', '0822-7510-0796', '28 March 2004', '19', 'Female', 'Tarutung, IDN', '5th semester student of S1 Informatics Education Program, Del Institute of Technology. I can do the tasks given to me well. I can\'t work well if I\'m under pressure for a short period of time. I usually look for resources or tutorials from several applications or websites.I often learn to use websites like w3Schools, github, and tutorials from youtube.\r\n\r\nI can understand 2 foreign languages besides Indonesian. That is English and French. I can fluently speak English. I can separate masculine or femina words from syllables in French. In addition, I am also interested in the field of health, especially in midwifery and nursing.', 'Sing;Cook;Dancing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `res_description` text NOT NULL,
  `summary` text NOT NULL,
  `res_city` text NOT NULL,
  `res_no` text NOT NULL,
  `res_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `res_description`, `summary`, `res_city`, `res_no`, `res_email`) VALUES
(1, 'I am a 5th semester student from the S1 informatics education program. I went to Del. Institute of Technology, I am interested in becoming a web developer. I\'m exploring how to create a website with good look, responsiveness and neat code. I have good foreign language skills. Such as English and French. My public speaking skills are also good, I can explain important points if I am doing a presentation. But I was less able to work under pressure with limited time.', '5th semester students who are exploring how to become a good web developer. I am interested in the field of design, such as website page design, desktop display or wallpaper display on mobile phones by using several tools and tutorials from the internet to get satisfactory results', 'Tarutung, North Sumatera', '(+62)822 7510 0796', 'nadabakara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `kategori` enum('Programming','Soft') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `rate`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'HTML', '100', 'Programming', NULL, '2023-11-02 06:19:45'),
(2, 'CSS', '90', 'Programming', NULL, NULL),
(3, 'JAVASCRIPT', '75', 'Programming', NULL, NULL),
(4, 'PYTHON', '80', 'Programming', NULL, NULL),
(5, 'JAVA', '70', 'Programming', NULL, NULL),
(6, 'C', '85', 'Programming', NULL, NULL),
(7, 'ENGLISH', '100', 'Soft', NULL, NULL),
(8, 'FRENCH', '60', 'Soft', NULL, NULL),
(9, 'TIME MANAGEMENT', '85', 'Soft', NULL, NULL),
(10, 'DESIGN', '80', 'Soft', NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nada Bakara', 'nadabakara@gmail.com', NULL, '$2y$10$MiFdRqd2sBZjjHxrNYd1QOZ3s9o2AJQWzwOcxidkmpsY.ajwhq.iS', NULL, '2023-11-01 23:57:57', '2023-11-01 23:57:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doings`
--
ALTER TABLE `doings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `port_projects`
--
ALTER TABLE `port_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `doings`
--
ALTER TABLE `doings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `port_projects`
--
ALTER TABLE `port_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
