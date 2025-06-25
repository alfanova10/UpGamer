-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2025 pada 02.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upgamer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_12_050321_create_orders_table', 1),
(5, '2025_06_25_103819_create_reviews_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `game_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `user_id_game` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `game_name`, `item_name`, `price`, `user_id_game`, `email`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 'UPGML202506121', 'Mobile Legends', '86 Diamonds', 12000, '123123123', 'testing@gmail.com', 'qris', 'pending', '2025-06-12 01:04:04', '2025-06-12 01:04:04'),
(2, 'UPGFF202506122', 'Free Fire', '70 Diamonds', 10000, '21312', 'rifky@gmailcom', 'qris', 'pending', '2025-06-12 01:37:23', '2025-06-12 01:37:24'),
(3, 'UPGFF202506123', 'Free Fire', '7290 Diamonds', 1000000, 'qwewqe', 'eewe@sdsd', 'qris', 'pending', '2025-06-12 02:52:29', '2025-06-12 02:52:29'),
(4, 'UPGML202506124', 'Mobile Legends', '5532 Diamonds', 602000, '2312312', 'weiw@gmail.com', 'qris', 'pending', '2025-06-12 04:47:47', '2025-06-12 04:47:47'),
(5, 'UPGFF202506135', 'Free Fire', '70 Diamonds', 10000, '12132', 'iki@gmail.com', 'qris', 'pending', '2025-06-12 17:46:20', '2025-06-12 17:46:20'),
(6, 'UPGFF202506146', 'Free Fire', '140 Diamonds', 20000, '123121', '213@gmai.com', 'qris', 'pending', '2025-06-14 04:57:06', '2025-06-14 04:57:06'),
(7, 'UPGFF202506197', 'Free Fire', '720 Diamonds', 100000, '2', 'fgf@gmail.com', 'qris', 'pending', '2025-06-18 23:37:57', '2025-06-18 23:37:57'),
(8, 'UPGFF202506238', 'Free Fire', '70 Diamonds', 10000, '13212', 'trtyr@gmail.com', 'qris', 'pending', '2025-06-23 08:47:09', '2025-06-23 08:47:09'),
(9, 'UPGML202506239', 'Mobile Legends', '12 Diamonds', 2500, '12223', 'erw@gmai.com', 'qris', 'pending', '2025-06-23 09:36:36', '2025-06-23 09:36:36'),
(10, 'UPGFF2025062510', 'Free Fire', '140 Diamonds', 20000, '1231312', 'rwje@gmail.com', 'qris', 'pending', '2025-06-25 02:49:36', '2025-06-25 02:49:36'),
(11, 'UPGFF2025062511', 'Free Fire', '140 Diamonds', 20000, '1231312', 'rwje@gmail.com', 'qris', 'pending', '2025-06-25 03:00:09', '2025-06-25 03:00:09'),
(12, 'UPGFF2025062512', 'Free Fire', '140 Diamonds', 20000, '1231312', 'rwje@gmail.com', 'gopay', 'pending', '2025-06-25 03:05:02', '2025-06-25 03:05:02'),
(13, 'UPGFF2025062513', 'Free Fire', '140 Diamonds', 20000, '1231312', 'rwje@gmail.com', 'dana', 'pending', '2025-06-25 03:05:15', '2025-06-25 03:05:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `comment`, `rating`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'GamerPro123', 'Prosesnya cepet banget! Top up ML langsung masuk gak sampe 1 menit. Harganya juga bersaing. Pasti langganan di sini!', 5, 1, '2025-06-25 04:01:03', '2025-06-25 04:01:03'),
(2, 'Siska_FF', 'Awalnya ragu, tapi ternyata amanah. CS-nya juga ramah pas aku tanya-tanya. Thank you UpGamer!', 5, 1, '2025-06-25 04:01:03', '2025-06-25 04:01:03'),
(3, 'TravelerTeyvat', 'Beli Genesis Crystal di sini lebih murah dari tempat lain. Pembayarannya juga gampang, banyak pilihan. Recommended!', 4, 1, '2025-06-25 04:01:03', '2025-06-25 04:01:03'),
(4, '213', 'saudhiad', 5, 1, '2025-06-25 04:09:16', '2025-06-25 04:09:16'),
(5, 'gooner', 'situs apa cona', 2, 1, '2025-06-25 04:18:35', '2025-06-25 04:18:35'),
(6, '123123', '123213', 4, 1, '2025-06-25 10:09:10', '2025-06-25 10:09:10'),
(7, 'rifky', '1 start for bad feedbacck (espesially for u)', 1, 1, '2025-06-25 10:12:50', '2025-06-25 10:12:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_transaction_id_unique` (`transaction_id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
