-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 28-11-2019 a las 13:16:49
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `proyectoLaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carts`
--

INSERT INTO `carts` (`id`, `created_at`, `updated_at`, `name`, `size`, `price`, `quantity`, `user_id`, `main_image`, `status`) VALUES
(3, '2019-11-26 17:57:27', '2019-11-26 17:57:27', 'Veniam possimus cumque.', '45', '4.10', 3, 32, 'c4f299ee2a0b083e4f643dcc674b35f6.jpg', 0),
(4, '2019-11-26 18:16:49', '2019-11-26 18:16:49', 'Est odio.', '45', '3.07', 2, 32, 'a872eaee0273ae41560903ecae83a907.jpg', 0),
(5, '2019-11-28 12:50:48', '2019-11-28 12:50:48', 'Dignissimos perferendis praesentium.', '41', '6.36', 2, 32, '8943c8fdd20d78b94833eeabb67140db.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_products`
--

CREATE TABLE `images_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images_products`
--

INSERT INTO `images_products` (`id`, `product_id`, `image`) VALUES
(1, 1, '50b658427987fefe3bf1114a50130af4.jpg'),
(2, 1, 'cca6653a17e5de14f919ea93e85d3fbf.jpg'),
(3, 1, '492dd00930a5be16528ecf12428dc004.jpg'),
(4, 1, 'e28d7b46a6da365f7f1cc0caca7d378b.jpg'),
(5, 1, 'c93d3094856940087efefe8dd01603c8.jpg'),
(6, 1, '898280591e980bf81b9660d553cfb677.jpg'),
(7, 1, '08e1396c8154affa0f34b98179cefb9a.jpg'),
(8, 1, 'bd28ae5eda7df0fe525af3be35112c98.jpg'),
(9, 1, 'fd95c35c660df2ac729c4851b7fda68c.jpg'),
(10, 1, '5d96d7d78c964fda4ad51ab8e32a6041.jpg'),
(11, 1, '0ebf5fcb69a90d3bc67738b5b47e8c01.jpg'),
(12, 1, '2f348a8a300cf5bb9b32a49d64af9ad4.jpg'),
(13, 1, '6e7fccd3753237d97f43aad7212c0909.jpg'),
(14, 1, 'fdf87f39996648dc1265e7fcffe846a0.jpg'),
(15, 1, 'c4201da67bbd5e92c819cf20c83b27b1.jpg'),
(16, 1, '05e66735c8901c24b7619f38484ccea4.jpg'),
(17, 1, '12ebc88c040c75507682cd3eaa7e1573.jpg'),
(18, 1, '6b0164720b947ad37e8ca59e3db6275b.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_05_141548_add_surname_to_users', 1),
(4, '2019_11_12_115931_create_products_table', 1),
(5, '2019_11_12_120610_create_carts_table', 1),
(6, '2019_11_12_141805_create_images_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `description`, `size`, `price`, `stock`, `brand`, `user_id`, `main_image`) VALUES
(1, '2019-11-26 16:32:11', '2019-11-26 16:32:11', 'Veniam possimus cumque.', 'Quaerat natus itaque ducimus aut a distinctio. Quaerat officia aut qui totam fuga iusto sunt.', '44', '4.10', 25, 'nike', 1, 'c4f299ee2a0b083e4f643dcc674b35f6.jpg'),
(2, '2019-11-26 16:32:11', '2019-11-26 16:32:11', 'Omnis consequatur.', 'Et id est ut id. Impedit similique illo earum tempore.', '42', '3.58', 6, 'nike', 1, '4e14664990e0b79a4a57115c94bf4e12.jpg'),
(3, '2019-11-26 16:32:11', '2019-11-26 16:32:11', 'Est odio.', 'Corrupti quo optio accusantium sequi molestiae omnis. Libero velit autem autem autem voluptatem et.', '42', '3.07', 7, 'nike', 1, 'a872eaee0273ae41560903ecae83a907.jpg'),
(4, '2019-11-26 16:32:11', '2019-11-26 16:32:11', 'Odit ut.', 'Et consequatur qui doloribus officia. Beatae neque ut autem deleniti aut.', '42', '5.63', 19, 'nike', 1, 'cb3cada1ef9dbb58593146e7397779dc.jpg'),
(5, '2019-11-26 16:32:11', '2019-11-26 16:32:11', 'Ducimus explicabo aut.', 'Quo earum maxime explicabo quam asperiores delectus. Voluptas sit earum consequatur ipsa. Quae consequatur aut facere illum earum incidunt et ut.', '42', '5.53', 37, 'nike', 1, '7f8bd72ef92edc594a47c79d8fd9e400.jpg'),
(6, '2019-11-26 16:32:11', '2019-11-26 16:32:11', 'Dignissimos perferendis praesentium.', 'Ad molestiae repudiandae aperiam voluptatem ipsam. Non rerum rerum veritatis ea consequatur hic.', '39', '6.36', 3, 'nike', 1, '8943c8fdd20d78b94833eeabb67140db.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lillian', 'O\'Hara', 'shania.boehm@example.com', '2019-11-26 16:25:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PJHwjhy8MIA0kHj3Pia6cK4HsHifDf4779ke7gMjj3OzQYQO1obg2DwfLzHg', '2019-11-26 16:25:22', '2019-11-26 16:25:22'),
(2, 'Mabel', 'Reichel', 'camille.bartoletti@example.com', '2019-11-26 16:25:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HbkKKG5BcR', '2019-11-26 16:25:22', '2019-11-26 16:25:22'),
(3, 'Elta', 'Nicolas', 'natalie10@example.com', '2019-11-26 16:25:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L3bEWIUfcz', '2019-11-26 16:25:22', '2019-11-26 16:25:22'),
(4, 'Brice', 'Monahan', 'rkutch@example.com', '2019-11-26 16:25:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4QkY0lQTbB', '2019-11-26 16:25:22', '2019-11-26 16:25:22'),
(5, 'Tomasa', 'Pollich', 'ivandervort@example.net', '2019-11-26 16:25:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'keN6GwNNsu', '2019-11-26 16:25:22', '2019-11-26 16:25:22'),
(6, 'Thad', 'Larson', 'aurelie.west@example.com', '2019-11-26 16:25:22', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NjMUYaGO05', '2019-11-26 16:25:22', '2019-11-26 16:25:22'),
(7, 'Chet', 'Moen', 'mallie.labadie@example.org', '2019-11-26 16:28:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3cPQORzTwf', '2019-11-26 16:28:59', '2019-11-26 16:28:59'),
(8, 'Arturo', 'Watsica', 'lois.mraz@example.com', '2019-11-26 16:28:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'daiVOQbIUx', '2019-11-26 16:28:59', '2019-11-26 16:28:59'),
(9, 'Olen', 'Daugherty', 'hartmann.anne@example.org', '2019-11-26 16:28:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'scktQ9BAMR', '2019-11-26 16:28:59', '2019-11-26 16:28:59'),
(10, 'Helene', 'Stokes', 'satterfield.eldred@example.net', '2019-11-26 16:28:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A7l7xBMKvW', '2019-11-26 16:28:59', '2019-11-26 16:28:59'),
(11, 'Aliyah', 'Weber', 'schoen.naomie@example.org', '2019-11-26 16:28:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '74hFhlZIbK', '2019-11-26 16:28:59', '2019-11-26 16:28:59'),
(12, 'Geoffrey', 'Jast', 'gregory46@example.org', '2019-11-26 16:28:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OWo7YLhhuz', '2019-11-26 16:28:59', '2019-11-26 16:28:59'),
(13, 'Kattie', 'McKenzie', 'turcotte.andy@example.org', '2019-11-26 16:30:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RYYcHVbL08', '2019-11-26 16:30:05', '2019-11-26 16:30:05'),
(14, 'Nikki', 'Gottlieb', 'franecki.lori@example.com', '2019-11-26 16:30:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ShCd29P5Ck', '2019-11-26 16:30:05', '2019-11-26 16:30:05'),
(15, 'Tracey', 'Stamm', 'orn.princess@example.com', '2019-11-26 16:30:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LpPwjkThdq', '2019-11-26 16:30:05', '2019-11-26 16:30:05'),
(16, 'Selina', 'Reichert', 'leopoldo16@example.com', '2019-11-26 16:30:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pB5CLaTty8', '2019-11-26 16:30:05', '2019-11-26 16:30:05'),
(17, 'Sherwood', 'Nicolas', 'sfeeney@example.org', '2019-11-26 16:30:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'U0xCpKYRqa', '2019-11-26 16:30:05', '2019-11-26 16:30:05'),
(18, 'Celine', 'Mitchell', 'erdman.bria@example.net', '2019-11-26 16:30:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XHeXavxEwY', '2019-11-26 16:30:05', '2019-11-26 16:30:05'),
(19, 'Gabe', 'Ziemann', 'cpagac@example.com', '2019-11-26 16:32:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BWQfSsKHbC', '2019-11-26 16:32:03', '2019-11-26 16:32:03'),
(20, 'Isobel', 'Stamm', 'ortiz.antonina@example.org', '2019-11-26 16:32:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '63N15uTsgK', '2019-11-26 16:32:03', '2019-11-26 16:32:03'),
(21, 'Aliyah', 'Dicki', 'green.reanna@example.com', '2019-11-26 16:32:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JxXGWSBXk4', '2019-11-26 16:32:03', '2019-11-26 16:32:03'),
(22, 'Will', 'Parisian', 'corene.pollich@example.org', '2019-11-26 16:32:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BYdzjFwJYQ', '2019-11-26 16:32:03', '2019-11-26 16:32:03'),
(23, 'Virgie', 'Hirthe', 'kuhlman.roderick@example.com', '2019-11-26 16:32:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nvXPyvKENR', '2019-11-26 16:32:03', '2019-11-26 16:32:03'),
(24, 'Hyman', 'Wunsch', 'myles.hyatt@example.com', '2019-11-26 16:32:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aBE2a1aj9T', '2019-11-26 16:32:03', '2019-11-26 16:32:03'),
(25, 'Gonzalo', 'Zevallos', 'gonza@dh.com', NULL, '$2y$10$k1gY.mJXxPoe45xTq3AU8eClPc/35NSrjkO2byFuZV9rFM2xrNgui', NULL, '2019-11-26 16:33:46', '2019-11-26 16:33:46'),
(26, 'Elian', 'Pollich', 'leonard.ledner@example.org', '2019-11-26 16:35:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yyrOt7aVDN', '2019-11-26 16:35:37', '2019-11-26 16:35:37'),
(27, 'Meaghan', 'Dietrich', 'kuphal.lance@example.org', '2019-11-26 16:35:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nnJIRgO4oI', '2019-11-26 16:35:37', '2019-11-26 16:35:37'),
(28, 'Kelsie', 'Schuppe', 'fay.gussie@example.com', '2019-11-26 16:35:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TI1DYyeGSr', '2019-11-26 16:35:37', '2019-11-26 16:35:37'),
(29, 'Mohammed', 'Rohan', 'bernhard.rhoda@example.com', '2019-11-26 16:35:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ot8Yhz11w0', '2019-11-26 16:35:37', '2019-11-26 16:35:37'),
(30, 'Brittany', 'Doyle', 'pfeffer.antonetta@example.com', '2019-11-26 16:35:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JkLzXjSQQd', '2019-11-26 16:35:37', '2019-11-26 16:35:37'),
(31, 'Joyce', 'Lehner', 'cristina.boehm@example.com', '2019-11-26 16:35:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YUUYty7lxd', '2019-11-26 16:35:37', '2019-11-26 16:35:37'),
(32, 'pam', 'delpino', 'delpino.h@hotmail.com', NULL, '$2y$10$BJm3IfTDAlMXRFXZ1.hU4.snqjBr3Y2QNXr8sLXa/KjS5bMNlGRKC', 'T25eK532Vk78XaRaXXi4BcoTE6Vp0cU4mrKd18mOWWuWk4KevmQ7dCYdbAHR', '2019-11-26 17:21:04', '2019-11-26 17:21:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `images_products`
--
ALTER TABLE `images_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_products_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `images_products`
--
ALTER TABLE `images_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `images_products`
--
ALTER TABLE `images_products`
  ADD CONSTRAINT `images_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
