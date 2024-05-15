-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 05:15 PM
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
-- Database: `redsco1`
--

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
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `id_user`, `id_produk`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 117000, '2024-05-02 07:43:44', '2024-05-02 07:45:34');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_18_071503_create_produks_table', 1),
(6, '2024_03_19_093245_create_pesanans_table', 1),
(7, '2024_04_24_054727_create_keranjangs_table', 1),
(8, '2024_05_03_033656_add_to_users_table', 2);

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `resi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `id_user`, `id_produk`, `nama_pemesan`, `jumlah`, `harga`, `alamat`, `status`, `bukti`, `resi`, `created_at`, `updated_at`) VALUES
(9, 14, 4, 'Pppppp', 2, 78000, 'gerbnngsfsgshtrd', 'selesai', 'bukti_9_Pppppp.png', 'KSDEF82112PN', '2024-05-05 11:35:07', '2024-05-06 09:34:40'),
(10, 14, 4, 'Pppppp', 2, 78000, 'gerbnngsfsgshtrd', 'belum_bayar', NULL, NULL, '2024-05-05 11:38:36', '2024-05-05 11:38:36'),
(11, 14, 4, 'Thoriq', 2, 78000, 'mjhvgutcdyr', 'belum_bayar', NULL, NULL, '2024-05-05 11:39:06', '2024-05-05 11:39:06'),
(12, 14, 2, 'Akara', 1, 39000, 'bhjuftydrxvuv', 'belum_bayar', NULL, NULL, '2024-05-05 11:40:30', '2024-05-05 11:40:30'),
(13, 14, 4, 'Akara', 1, 39000, 'bhjvujc', 'belum_bayar', NULL, NULL, '2024-05-05 11:41:08', '2024-05-05 11:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `varian` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `varian`, `tipe`, `deskripsi`, `harga`, `stok`, `terjual`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Esmeralda', 'Strong, Captivating', 'Merupakan aroma yang kuat dan memikat, menghadirkan kekuatan dan daya tarik yang tak tertandingi. Esmeralda adalah pilihan yang sempurna bagi mereka yang ingin memancarkan kepercayaan diri dan pesona yang tak terbantahkan.', 39000, 20, 0, 'varian_1.jpg', '2024-04-04 05:33:01', '2024-04-04 06:07:35'),
(2, 'Starboy', 'Exquisite, Intriguing', 'Menghadirkan aroma yang eksklusif dan memikat, membuat siapa pun terpesona dan penasaran. Starboy adalah pilihan yang sempurna bagi mereka yang ingin menonjol dan meninggalkan kesan yang mendalam dalam setiap ruangan yang mereka masuki', 39000, 25, 0, 'varian_2.jpg', '2024-04-04 06:49:08', '2024-04-04 06:50:03'),
(3, 'Vanille', 'Serene, Soothing', 'Menawarkan aroma yang tenang dan menenangkan, membawa kedamaian dan kesegaran dalam setiap hembusan. Parfum ini cocok untuk mereka yang menginginkan kesan yang lembut dan menenangkan, memancarkan aura kedamaian dan kenyamanan di sekeliling mereka', 39000, 12, 0, 'varian_3.jpg', '2024-04-04 06:51:05', '2024-04-04 06:51:15'),
(4, 'Euphoria', 'Sweet, Exciting', 'Menyuguhkan keharuman manis yang mendebarkan dan memikat. Setiap semprotan Euphoria membangkitkan perasaan gembira dan kegembiraan yang tak terlupakan. Ini adalah parfum yang cocok untuk mereka yang mencari pengalaman yang menyenangkan dan menggairahkan', 39000, 18, 0, 'varian_4.jpg', '2024-04-04 06:53:05', '2024-04-04 17:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `verification_token`, `email_verified`) VALUES
(1, 'user', 'user@gmail.com', 'user', NULL, NULL, '$2y$12$aiWVQkLZGGLr6.yr5NRqA.S4eykFU3yHu5lBUKpVWUJ2KCQ5H.AI.', NULL, '2024-04-23 23:25:47', '2024-04-23 23:25:47', '', 1),
(2, 'Admin', 'admin@gmail.com', 'admin', NULL, NULL, '$2y$12$j2Ebs8nAZ2o3fR049NPa0.vF8OENXPgHbqSXW7esRCuYnPbQEVlDq', NULL, '2024-04-23 23:39:49', '2024-04-23 23:39:49', NULL, 0),
(3, 'qwer', 'user1@gmail.com', 'user', NULL, NULL, '$2y$12$..IhnxIrUWSjufurfwKzkO0Neqf9jcAk2X/2QD080XDa6igOUyYKS', NULL, '2024-05-02 08:52:38', '2024-05-02 08:52:38', NULL, 0),
(14, 'thoriq', 'tmuchlishin@gmail.com', 'user', NULL, '2024-05-02 23:59:25', '$2y$12$FpnbclktBSXVcfzFSc.SKuXhC1pDa8mSAjGUNFxekdp47bYpDhgyK', NULL, '2024-05-02 23:50:02', '2024-05-02 23:59:25', 'Ok4QKj8lnEcIXEVl2ExgiWBEWMGzUo81VnwduIUYu1BdLwGwSZdvvAOYdZBC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjangs_id_user_foreign` (`id_user`),
  ADD KEY `keranjangs_id_produk_foreign` (`id_produk`);

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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanans_id_user_foreign` (`id_user`),
  ADD KEY `pesanans_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`),
  ADD CONSTRAINT `keranjangs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`),
  ADD CONSTRAINT `pesanans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
