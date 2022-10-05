-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2022 lúc 06:18 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fwlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `writer`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Nice view', 'Chúc Senpai', '2022081215522f880ef2e1761ec234bf68cba9e7f3bb.jpg', 'HÍ hí hí hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí  hí hí', '2022-08-10 02:29:52', '2022-08-12 08:52:47'),
(3, 'G Dragon', 'Hiếu Hơn Chúc', '20220812155620130906231306849s.png', 'G DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG DragonG Dragon', '2022-08-12 08:56:11', '2022-08-12 08:56:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productgallery_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`id`, `productgallery_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(15, '{\"3\":{\"name\":\"Áo bolo nam\",\"quantity\":\"2\",\"price\":\"152\"},\"2\":{\"name\":\"Áo giữ nhiệt nam\",\"quantity\":\"1\",\"price\":\"62\"},\"5\":{\"name\":\"Áo sơ mi cổ vest\",\"quantity\":\"1\",\"price\":\"99\"}}', 20, '2022-08-02 02:23:17', '2022-08-02 02:23:17'),
(16, '{\"3\":{\"name\":\"Áo bolo nam\",\"quantity\":\"2\",\"price\":\"152\"},\"2\":{\"name\":\"Áo giữ nhiệt nam\",\"quantity\":\"1\",\"price\":\"62\"},\"5\":{\"name\":\"Áo sơ mi cổ vest\",\"quantity\":\"1\",\"price\":\"99\"},\"7\":{\"name\":\"Áo chống nắng cao cấp\",\"quantity\":\"1\",\"price\":\"87\"}}', 21, '2022-08-02 02:24:09', '2022-08-02 02:24:09'),
(17, '{\"3\":{\"name\":\"Áo bolo nam\",\"quantity\":\"1\",\"price\":\"76\"}}', 22, '2022-08-02 23:52:02', '2022-08-02 23:52:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Áo Nam', '2022-07-28 20:57:38', '2022-07-28 20:57:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(20, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '20 Lê Lợi', 986733112, '2022-08-02 02:23:17', '2022-08-02 02:23:17'),
(21, 'Phan Văn Minh H', 'h@gmail.com', '40 Nguyễn Huệ', 987327423, '2022-08-02 02:24:09', '2022-08-02 02:24:09'),
(22, 'ChucOiLaChuc', 'ChucOiLaChuc@gmail.com', 'ChucOiLaChuc', 34563456, '2022-08-02 23:52:02', '2022-08-02 23:52:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_customers`
--

CREATE TABLE `login_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login_customers`
--

INSERT INTO `login_customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'chuc', 'chuc1@gmail.com', '$2y$10$EJAbWBBSd0xxOs8ulf4eHO4/61rjp1/0yGmJbWmU5NJ.i1gkIo7tW', '2022-08-01 18:39:47', '2022-08-01 18:39:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(82, '2014_10_12_000000_create_users_table', 1),
(83, '2014_10_12_100000_create_password_resets_table', 1),
(84, '2019_08_19_000000_create_failed_jobs_table', 1),
(85, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(86, '2022_07_04_031244_create_table_roles_table', 1),
(87, '2022_07_04_031259_create_table_permissions_table', 1),
(88, '2022_07_04_065018_create_table_roles_permissions_table', 1),
(89, '2022_07_04_065051_create_table_users_roles_table', 1),
(90, '2022_07_21_034103_create_categories_table', 1),
(91, '2022_07_21_034208_create_products_table', 1),
(92, '2022_07_21_034219_create_productsgallery_table', 1),
(93, '2022_07_26_034904_create_bookings_table', 1),
(94, '2022_07_29_025822_create_table_customers_table', 1),
(95, '2022_08_01_065252_create_login_customers_table', 2),
(96, '2022_08_10_083649_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `image`, `title`, `money`, `created_at`, `updated_at`) VALUES
(1, 1, '202207290358bad57b2375aa3f960491aa83260dbcd9.jpg', 'Áo sơ mi', 1000, '2022-07-28 20:58:16', '2022-07-28 20:58:16'),
(2, 1, '2022072903591d33bcd9977a02c305fa241575bad7de.jpg', 'Áo bun', 2000120, '2022-07-28 20:59:24', '2022-07-28 20:59:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productsgallery`
--

CREATE TABLE `productsgallery` (
  `productgallery_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productsgallery`
--

INSERT INTO `productsgallery` (`productgallery_id`, `product_id`, `image`, `title`, `description`, `money`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '202207290400bad57b2375aa3f960491aa83260dbcd9.jpg', 'Áo sơ mi HQ', 'Áo sơ mi trắng đen được sx tại HQ', 87, 'Sold Out', '2022-07-28 21:00:02', '2022-08-12 08:34:02'),
(2, 2, '202207290400ab472812203a5a80cd00f65d1d8152b5.jpg', 'Áo giữ nhiệt nam', 'Áo giữ nhiệt cổ cao, tay dài', 62, '', '2022-07-28 21:00:38', '2022-07-28 21:00:38'),
(3, 2, '2022072904010a067fdf8f3e484780be85ad0cbf7a2f.jpg', 'Áo bolo nam', 'Áo bolo với chất liệu vải dày, đứng form', 76, '', '2022-07-28 21:01:17', '2022-07-28 21:01:17'),
(4, 2, '2022072904011d33bcd9977a02c305fa241575bad7de.jpg', 'Áo bun tay lở nam', 'Áo bun tay lở phong cách HQ', 82, '', '2022-07-28 21:01:50', '2022-07-28 21:01:50'),
(5, 1, '2022072904029a4f3f00ac9c7ece28cc8aab5c4681f4.jpg', 'Áo sơ mi cổ vest', 'Sơ mi cổ vest 5 màu, form rộng, dáng Hàn Quốc', 99, '', '2022-07-28 21:02:24', '2022-07-28 21:02:24'),
(7, 1, '202208020411bf6c12d1dc8fd73dd7559c178b705cda.jpg', 'Áo chống nắng cao cấp', 'Áo chống nắng cho nam, chất liệu mát mẻ', 87, 'Show Out', '2022-08-01 21:11:18', '2022-08-12 08:32:43'),
(8, 1, '2022080207359a4f3f00ac9c7ece28cc8aab5c4681f4.jpg', 'Sơ mi là đây', 'Sơ mi cổ vest 5 màu, form rộng, dáng Hàn Quốc', 34, '', '2022-08-02 00:35:46', '2022-08-02 00:35:46'),
(9, 2, '2022080209071657b14b218fd5962fc3508d367379fc.jpg', 'Bolo xanh đen', 'Bolo cá sấu hàng chất lượng đạt chuẩn quốc tế', 120, '', '2022-08-02 02:07:31', '2022-08-02 02:07:31'),
(10, 2, '2022080209081d33bcd9977a02c305fa241575bad7de.jpg', 'Áo bun tay lỡ', 'Áo bun tay lở phong cách HQ, phù hợp xu hướng', 63, '', '2022-08-02 02:08:16', '2022-08-02 02:08:16'),
(15, 1, '202208121134965-tn07.jpg', 'Sơ mi trắng', 'Sơ mi âu', 75, 'In Stock', '2022-08-12 04:34:07', '2022-08-12 04:34:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'HieuBee', 'HieuBeex2@gmail.com', NULL, '$2y$10$n3hUlqUxk8JQLFg7PAEYfe8ojBzlai5t73et5SLX3sBTOzA3kchEy', 'd60BwmochYfzoZ0PaoNtOj3e8Gaqn1omEde3bkyg8fVcyoPyEIRFETNLikwD', '2022-07-28 20:57:16', '2022-07-28 20:57:16'),
(2, 'chuc', 'chuc@gmail.com', NULL, '$2y$10$ycANDC4idoRaGEfwa8GgkOKAvWb09WU3jyE.5a5RV.JDNcgQbcTCe', NULL, '2022-08-01 18:24:31', '2022-08-01 18:24:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_roles`
--

CREATE TABLE `users_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `login_customers`
--
ALTER TABLE `login_customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `productsgallery`
--
ALTER TABLE `productsgallery`
  ADD PRIMARY KEY (`productgallery_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_permissions_role_id_foreign` (`role_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roles_user_id_foreign` (`user_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `login_customers`
--
ALTER TABLE `login_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `productsgallery`
--
ALTER TABLE `productsgallery`
  MODIFY `productgallery_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
