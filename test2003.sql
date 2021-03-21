-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2021 г., 17:15
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test2003`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2021_03_20_171511_create_order_table', 2),
(10, '2021_03_20_193803_create_products_table', 3),
(11, '2021_03_20_193845_create_product_user_table', 3),
(12, '2021_03_21_125441_change_orders_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `maker`, `price_fr`, `price_to`, `detail`, `created_at`, `updated_at`, `user_id`, `product_id`) VALUES
(10, 'Maker1', '1', '1', 'Detail1', '2021-03-21 05:43:20', '2021-03-21 05:43:20', 32, 1),
(11, 'Maker2', '1', '1', 'Detail2', '2021-03-21 05:43:32', '2021-03-21 05:43:32', 32, 2),
(12, 'Maker7', '1', '1', 'Detail7', '2021-03-21 05:43:57', '2021-03-21 05:43:57', 32, 7),
(13, 'Maker8', '1', '1', 'Detail8', '2021-03-21 05:44:11', '2021-03-21 05:44:11', 32, 8),
(14, 'Maker2', '1', '1', 'Detail2', '2021-03-21 05:44:33', '2021-03-21 05:44:33', 33, 2),
(15, 'Maker3', '1', '1', 'Detail3', '2021-03-21 05:44:43', '2021-03-21 05:44:43', 33, 3),
(16, 'Maker4', '1', '1', 'Detail4', '2021-03-21 05:44:57', '2021-03-21 05:44:57', 33, 4),
(17, 'Maker5', '1', '1', 'Detail5', '2021-03-21 05:45:08', '2021-03-21 05:45:08', 33, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `shop`, `maker`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Shop1', 'Maker1', 'Detail1', NULL, NULL),
(2, 'Shop1', 'Maker2', 'Detail2', NULL, NULL),
(3, 'Shop1', 'Maker3', 'Detail3', NULL, NULL),
(4, 'Shop1', 'Maker4', 'Detail4', NULL, NULL),
(5, 'Shop1', 'Maker5', 'Detail5', NULL, NULL),
(6, 'Shop2', 'Maker6', 'Detail6', NULL, NULL),
(7, 'Shop2', 'Maker7', 'Detail7', NULL, NULL),
(8, 'Shop2', 'Maker8', 'Detail8', NULL, NULL),
(9, 'Shop2', 'Maker9', 'Detail9', NULL, NULL),
(10, 'Shop2', 'Maker10', 'Detail10', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_user`
--

CREATE TABLE `product_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_user`
--

INSERT INTO `product_user` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 34, NULL, NULL),
(2, 2, 34, NULL, NULL),
(3, 3, 34, NULL, NULL),
(4, 5, 34, NULL, NULL),
(5, 7, 35, NULL, NULL),
(6, 8, 35, NULL, NULL),
(7, 9, 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_shop` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_shop`) VALUES
(32, 'Client1', 'DemakovDD@yandex.ru', NULL, '$2y$10$NgVHSoN0nZoj/fzCM1zQGe.fXxpTFojI.gsYks8eHIpwnNdgikn5u', NULL, '2021-03-20 15:41:39', '2021-03-20 15:41:39', 0),
(33, 'Client2', 'admin@admin.ru', NULL, '$2y$10$rektXwvpEUMOU6WDl9nb2OGV.AMTFeIovvTxt2MzRxgFkAUfWjV.i', NULL, '2021-03-20 16:20:07', '2021-03-20 16:20:07', 0),
(34, 'Shop1', 'Ya@ya.ru', NULL, '$2y$10$0xnwVeCVsRNNsaGyCz5oS.JXcg3zTcNcTpIgHW0495XrTuVnaXFVS', NULL, '2021-03-21 04:30:59', '2021-03-21 04:30:59', 1),
(35, 'Shop2', 'D@d.ru', NULL, '$2y$10$3gBvPPSYNywPntqYQDPkgOj9sd9tpUlzwWid5zys1qgYiE4qzn/1a', NULL, '2021-03-21 05:13:24', '2021-03-21 05:13:24', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `product_user`
--
ALTER TABLE `product_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
