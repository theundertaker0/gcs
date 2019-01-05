-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-01-2019 a las 05:43:50
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gcs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) unsigned NOT NULL,
  `folio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bills`
--

INSERT INTO `bills` (`id`, `folio`, `picture`, `date`, `created_at`, `updated_at`, `user_id`) VALUES
(4, '123456333', '1542240382CV_JEsquivel(1).pdf', '2018-11-05', '2018-11-10 21:48:43', '2018-11-16 00:58:07', NULL),
(6, '3445', 'dummyBill.jpg', '2018-11-14', '2018-11-14 22:17:52', '2018-11-14 22:17:52', NULL),
(8, '1-23', '1542235213cenefa1.png', '2018-11-07', '2018-11-15 04:40:13', '2018-11-15 04:40:13', NULL),
(9, '1-1-1-1', '1542402185cenefa1.png', '2018-11-16', '2018-11-17 03:03:05', '2018-11-17 21:15:37', 6),
(10, '222222', 'dummyBill.jpg', '2018-11-16', '2018-11-17 11:51:39', '2018-11-17 11:51:39', 6),
(11, '6666666', '1542467654diploma-programacion-basica.pdf', '2018-11-16', '2018-11-17 21:14:14', '2018-11-17 21:14:14', 6),
(12, '7', 'dummyBill.jpg', '2018-11-07', '2018-11-17 21:29:21', '2018-11-17 21:29:21', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enterprises`
--

CREATE TABLE IF NOT EXISTS `enterprises` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borough` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `enterprises`
--

INSERT INTO `enterprises` (`id`, `name`, `street`, `borough`, `city`, `state`, `cp`, `url`, `observation`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', '80', 'Centro', 'Mérida', 'Yucatán', '97000', 'http://samsung.com', 'Buena marca pero cara', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_22_012406_create_enterprises_table', 1),
(4, '2018_08_22_013802_create_reviews_table', 1),
(5, '2018_08_22_015214_create_products_table', 2),
(6, '2018_08_25_195957_agregarcampofotouser', 3),
(7, '2018_11_10_152411_add_timestamps_to_bill', 4),
(8, '2018_11_15_232645_add_userid_column_to_bills', 5),
(9, '2018_11_16_213456_delete_column_brand_id_add_column_brand', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amadeusdigital@gmail.com', '$2y$10$1rpDPL.CUv9X2cXWmQ9h8Ohwg.JTBxrsGkkjTxPp0KmnLqdkBHTye', '2018-08-28 09:22:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `description` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_date` date NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `brands_id` int(10) unsigned DEFAULT NULL,
  `bills_id` int(10) unsigned NOT NULL,
  `enterprises_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `description`, `serial_number`, `final_date`, `status`, `users_id`, `brands_id`, `bills_id`, `enterprises_id`, `created_at`, `updated_at`, `brand`) VALUES
(2, 'Tv LCD 50"', '1-1', '2018-11-17', 1, 6, NULL, 9, 1, '2018-11-17 08:48:18', '2018-11-24 21:24:31', 'Aurrera Progreso 2'),
(3, '22222', '2222222222', '2018-11-16', 1, 6, NULL, 10, 1, '2018-11-17 11:52:02', '2018-11-17 11:52:02', '2222'),
(4, '333333', '33333333', '2018-12-16', 1, 6, NULL, 9, 1, '2018-11-17 12:14:29', '2018-11-17 12:14:29', '333333'),
(5, '55555555', '555555', '2019-02-15', 1, 6, NULL, 10, 1, '2018-11-17 21:02:49', '2018-11-17 21:02:49', '555555'),
(6, 'Microondas 14" marca Samsung, color blanco, con funciones de cocina, descongelado rápido y ajuste de potencia', 'ef45d', '2019-02-14', 1, 6, NULL, 11, 1, '2018-11-17 21:23:52', '2018-11-17 21:23:52', 'Soriana Progreso'),
(7, 'hey', '22-2', '2019-11-25', 1, 6, NULL, 9, 1, '2018-11-24 11:03:31', '2018-11-24 11:03:31', 'Elektra Progreso'),
(8, 'Microondas 11"', '444444444', '2020-01-25', 1, 6, NULL, 9, 1, '2018-11-24 21:23:24', '2018-11-24 21:23:24', 'Elektra Progreso'),
(9, 'werewrwe', '1-1', '2018-11-24', 1, 6, NULL, 9, 1, '2018-11-24 21:25:16', '2018-11-24 21:25:16', 'werwer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) unsigned NOT NULL,
  `comment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ranking` int(10) unsigned NOT NULL,
  `enterprises_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'defaultuser.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `address`, `city`, `state`, `cp`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'Juani', 'Esquivel Méndez', 'Calle 82 #158A x 35 y 37 Centro', 'Progresito', 'Yucatán', '97320', 'amadeusdigital@gmail.com', '$2y$10$g2iBHm/QsTiFIffgJJITKeOUZBPzl/QRo2Htofohr.dxvooGBTVhm', 0, '8hz2rJcPYhIYTginJhV7CjCGF7xUSGjF08X4SDFBMHyU5TmIytiVdrUudvPv', '2018-08-26 00:31:27', '2018-08-26 09:45:49', '1_1535237316.jpg'),
(2, 'john', 'charles', 'sdasda', 'asdasd', 'Aguascalientes', '33333', 'kubo79mid@gmail.com', '$2y$10$a3H89BKoVTjMT8fJ.lirhuXxseEfUDMLBKd8TPzFS7w2FRML0gf4a', 0, NULL, '2018-08-28 09:28:59', '2018-08-28 09:28:59', 'defaultuser.jpg'),
(3, 'kevin', 'magaña pech', 'c.39 #80 x54', 'progreso', 'Yucatán', '97320', 'kevin1amatutino@gmail.com', '$2y$10$9Hrs55QnTiak9v85PAsdBesWVK5lNTK6Y64m0EhBRG9dJgqxJOPWK', 0, 'hDzrsHohC5MqE0Jwvd4NEcJFusivyD3dRdcdW93K224hEobWCXC6UtlTrITz', '2018-09-01 19:27:23', '2018-09-01 19:29:31', '3_1535812117.jpg'),
(4, 'ivan', 'canul', 'c.56 #113 27 y 28', 'progreso', 'Yucatán', '97320', 'perezivanxd@gmail.com', '$2y$10$xnHHY14yG8mLJfjLypf8pOwa74BkQH2Apperzn98yMTtumkfAkn7e', 0, 'lS1uOgovALFM7Pi9sF8ZJlrg7AUMvQGtd6iNbnlvSCHmwBrC7bGQolmCWMB8', '2018-09-01 19:34:07', '2018-09-01 19:39:51', '4_1535812791.jpg'),
(5, 'admin', 'admin', 'ssss', 'ssss', 'Yucatán', '97320', 'admin@gmail.com', '$2y$10$Wzp9Z.VN1B8B8ny1PYQPLex84LG10NWwJNM63fG99RqORp5p8HgRe', 0, NULL, '2018-11-06 10:36:28', '2018-11-06 10:40:47', '5_1541479247.jpg'),
(6, 'Juan', 'Esquivel', 'Calle 82 #158A x 35 y 37 Centrito', 'Progreso', 'null', '97320', 'amadeusdigitalmid@gmail.com', '$2y$10$ruc4CRJ/T9vQnwITxAj/n.RYhuyMDtUwXlF7oZz5zOkMjPoDujaIm', 0, 'rpbi27LGrhDQNFpRfsUuTyFIKLiQwnUqN8sLfUntNWTnfGt3Md4VuHxK5C6V', '2018-11-17 02:59:32', '2018-11-17 21:39:31', '6_1542469171.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_users_id_foreign` (`users_id`),
  ADD KEY `products_brands_id_foreign` (`brands_id`),
  ADD KEY `products_bills_id_foreign` (`bills_id`),
  ADD KEY `products_enterprises_id_foreign` (`enterprises_id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_enterprises_id_foreign` (`enterprises_id`),
  ADD KEY `reviews_users_id_foreign` (`users_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_bills_id_foreign` FOREIGN KEY (`bills_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `products_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_enterprises_id_foreign` FOREIGN KEY (`enterprises_id`) REFERENCES `enterprises` (`id`),
  ADD CONSTRAINT `products_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_enterprises_id_foreign` FOREIGN KEY (`enterprises_id`) REFERENCES `enterprises` (`id`),
  ADD CONSTRAINT `reviews_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
