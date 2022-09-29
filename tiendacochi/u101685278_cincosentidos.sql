-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 13:07:20
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u101685278_cincosentidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_to_zero` decimal(11,2) NOT NULL,
  `px_km` decimal(11,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `delivery`
--

INSERT INTO `delivery` (`id`, `location`, `km_to_zero`, `px_km`, `created_at`, `user`) VALUES
(1, 'Capital - Ciudad Capital', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(2, 'Godoy Cruz - Ciudad de Godoy Cruz', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(3, 'Guaymallen - Belgrano', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(4, 'Guaymallen - Bermejo', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(5, 'Guaymallen - Buena Nueva', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(6, 'Guaymallen - Capilla del Rosario', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(8, 'Guaymallen - Colonia Segovia', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(9, 'Guaymallen - Dorrego', '1.00', '240.00', '0000-00-00 00:00:00', ''),
(10, 'Guaymallen - El Sauce', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(11, 'Guaymallen - Jesus Nazareno', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(12, 'Guaymallen - kilometro 11', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(13, 'Guaymallen - kilometro 8', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(14, 'Guaymallen - La Primavera (G)', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(15, 'Guaymallen - Las Cañas', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(16, 'Guaymallen - Los Corralitos', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(17, 'Guaymallen - Nueva Ciudad', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(18, 'Guaymallen - Pedro Molina', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(19, 'Guaymallen - Puente de Hierro', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(20, 'Guaymallen - Rodeo de la Cruz', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(21, 'Guaymallen - San Francisco del Monte', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(22, 'Guaymallen - San Jose', '5.00', '260.00', '0000-00-00 00:00:00', ''),
(23, 'Guaymallen - Villa Nueva', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(24, 'Las Heras - Capdeville', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(25, 'Las Heras - Ciudad de Las Heras', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(26, 'Las Heras - El Algarrobal', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(28, 'Las Heras - El Challao', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(30, 'Las Heras - El Pastal', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(31, 'Las Heras - El Plumerillo', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(32, 'Las Heras - El Zapallar', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(33, 'Las Heras - Panqueua', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(34, 'Lujan - Agrelo', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(35, 'Lujan - Carrodilla', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(36, 'Lujan - Chacras de Coria', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(37, 'Lujan - Ciudad de Lujan', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(38, 'Lujan - La Puntilla', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(39, 'Lujan - Las Compuertas', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(40, 'Lujan - Mayor Drummond', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(43, 'Lujan - Perdriel', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(44, 'Lujan - Vistalba', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(45, 'Maipu- Barrancas', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(46, 'Maipu- Ciudad de Maipu', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(47, 'Maipu- Coquimbito', '15.00', '350.00', '0000-00-00 00:00:00', ''),
(48, 'Maipu- Cruz de Piedra', '30.00', '500.00', '0000-00-00 00:00:00', ''),
(50, 'Maipu- Fray Luis Betlran', '30.00', '600.00', '0000-00-00 00:00:00', ''),
(51, 'Maipu- General Gutierrez', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(53, 'Maipu- Lunlunta', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(54, 'Maipu- Luzuriaga', '10.00', '310.00', '0000-00-00 00:00:00', ''),
(55, 'Maipu- Rodeo del Medio', '20.00', '400.00', '0000-00-00 00:00:00', ''),
(57, 'Maipu- Russel', '20.00', '400.00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedidos`
--

CREATE TABLE `detallepedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pedido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Estructura de tabla para la tabla `direccions`
--

CREATE TABLE `direccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigoPostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telContacto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `direccions`
--
--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacions`
--

CREATE TABLE `facturacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` bigint(20) NOT NULL,
  `condicion_fiscal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(13, '2021_08_19_154701_create_products_table', 2),
(15, '2021_08_19_160430_create_detallepedidos_table', 3),
(16, '2021_08_19_153749_create_pedidos_table', 4),
(19, '2021_08_27_200405_create_facturacions_table', 5),
(20, '2021_08_27_200418_create_direccions_table', 5),
(21, '2021_09_13_183412_create_estados_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dato` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`id`, `titulo`, `dato`, `created_at`, `updated_at`) VALUES
(1, 'cbu', '0720068720000001574472', '2021-10-25 15:45:14', '0000-00-00 00:00:00'),
(3, 'titulo_catalogo', 'NUESTROS PRODUCTOS', '2021-10-25 15:45:55', '0000-00-00 00:00:00');

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
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comprando',
  `observaciones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modo_pago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_pago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_fact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seguimiento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transporte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_seguimiento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remito` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `detalle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `stock` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'si',
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5s.png',
  `orden` int(4) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `titulo`, `sub_titulo`, `precio`, `detalle`, `descripcion`, `estado`, `stock`, `imagen`, `orden`, `user`, `created_at`, `updated_at`) VALUES
(1, 'EL VIÑATERO', 'MALBEC 2021', 4680, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'elviñatero.png', 1, 'admin', '2021-11-05 13:36:47', '2022-06-01 15:25:18'),
(2, 'RESERVA', 'MALBEC 2019', 7500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'reservaMalbec2017.png', 2, 'admin', '2021-11-05 13:37:46', '2022-06-01 15:25:44'),
(3, 'RESERVA', 'CABERNET SAUVIGNON 2019', 7500, 'CAJA x 6 x 750ml', NULL, 'activo', 'si', 'reservaCabernet2017.png', 3, 'admin', '2021-11-05 13:38:19', '2022-06-01 15:25:54'),
(4, 'RESERVA', 'CHARDONNAY 2020', 7500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'reservaChardonnay2018.png', 4, 'admin', '2021-11-05 13:41:54', '2022-06-01 15:26:11'),
(5, 'RESERVA', 'TORRONTÉS 2021', 7500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'reservaTorontes.png', 5, 'admin', '2021-11-05 13:43:38', '2022-06-01 15:26:35'),
(6, 'RESERVA', 'SAUVIGNON BLANC 2020', 7500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'reservaSouvignonBlank2019.png', 6, 'admin', '2021-11-05 13:44:57', '2022-06-01 15:26:47'),
(7, 'EXTRA BRUT', '.', 8400, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'no', 'extrabrut.png', 7, 'admin', '2021-11-05 13:45:49', '2022-06-01 15:27:31'),
(8, 'EXTRA BRUT', 'ROSE', 8400, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'extrabrutRose.png', 8, 'admin', '2021-11-05 13:46:30', '2022-06-01 15:27:47'),
(9, 'COSECHA TARDIA', 'TORRONTÉS', 7500, 'CAJA x 6 bot. x 500ml', NULL, 'activo', 'no', 'reservaTardia.png', 9, 'admin', '2021-11-05 13:47:19', '2022-06-01 15:28:04'),
(10, 'COSECHA TARDIA', 'MALBEC', 10500, 'CAJA x 6 bot. x 500ml', NULL, 'activo', 'no', 'cosechaTardiaMalbec.png', 10, 'admin', '2021-11-05 13:48:25', '2022-06-01 15:28:46'),
(11, 'SPECIAL BLEND', '50% MALBEC - 50% ANCELOTTA', 10500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'specialBlendMalbecAncelota.png', 11, 'admin', '2021-11-05 13:49:35', '2022-06-01 15:29:21'),
(12, 'SPECIAL BLEND', '50% MALBEC - 50% CABERNET', 10500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'specialBlendMalbecCabernet.png', 12, 'admin', '2021-11-05 13:50:25', '2022-06-01 15:29:39'),
(13, 'SPECIAL BLEND', '50% CHARDONNAY - 50% SAUVIGNON BLANC', 10500, 'CAJA x 6 bot. x 750ml', NULL, 'activo', 'si', 'specialBlendChardonaySauvignon.png', 13, 'admin', '2021-11-05 13:51:21', '2022-06-01 15:30:02'),
(14, 'GRAN RESERVA 2017', '60% MALBEC - 20% CAB. SAUV. - 20% CAB FRANC', 12200, 'CAJA x 4 bot. x 750ml', NULL, 'activo', 'no', 'granReserva2015.png', 14, 'admin', '2021-11-05 13:52:01', '2022-06-04 15:38:49'),
(15, 'MALUCO', 'FAMILY RED BLEND', 24600, 'CAJA x 3 bot. x 750ml', NULL, 'activo', 'no', 'malucaFamilyRedBlend.png', 15, 'admin', '2021-11-05 13:52:43', '2022-06-01 15:30:49'),
(16, 'RESERVA', 'Cabernet Franc 2019', 7500, 'CAJA x 6 x 750ml', NULL, 'activo', 'si', 'CS18.jpg', 1, 'AdminTest', '2021-11-29 19:10:45', '2022-06-01 15:25:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transports`
--

CREATE TABLE `transports` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_seguimiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(535) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_cc` varchar(535) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transports`
--

INSERT INTO `transports` (`id`, `title`, `link_seguimiento`, `email`, `email_cc`, `created_at`, `updated_at`) VALUES
(1, 'PRUEBA', 'https://www.andesmarcargas.com/seguimiento.html', '\"priopelliza@gmail.com\", \"priopelliza@gmail.com\", \"priopelliza@gmail.com\", \"priopelliza@gmail.com\", \"priopelliza@gmail.com\"', 'priopelliza@gmail.com', '2022-05-12 14:05:13', '2022-05-12 14:05:13')

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento` decimal(11,3) DEFAULT 0.200,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `descuento`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MANUEL VALDEZ', 'admin', 'manuval@finca-algarve.com.ar', '0.500', NULL, '$2y$10$p8EB85zOSdC33wY65qA92egyPfLJE4iXtnLGMvlET9Bitis6auH8W', NULL, NULL, '4xVG1SUR85fOQFFFABVtwHPWEAltJMdTM3j2uH6qXkG3NVaxarhQoWOntNxV', '2021-11-08 14:05:05', '2022-04-22 11:46:41'),
(3, 'AdminTest', 'admin', 'priopelliza@gmail.com', '0.200', NULL, '$2y$10$RpPIbYfLklclakOZzai7R.GIqdadzgxMvqWIne.a/4Twvvuc1rama', NULL, NULL, 'PFzonb4RB0Uhg5hv2voWxt52kGc2Sb4z98wLHycuGSl3zcYBdR748VVuBDz9', '2021-11-29 14:52:11', '2022-04-23 20:08:26')

-- Índices para tablas volcadas
--

--
-- Indices de la tabla `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccions`
--
ALTER TABLE `direccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturacions`
--
ALTER TABLE `facturacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `detallepedidos`
--
ALTER TABLE `detallepedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=696;

--
-- AUTO_INCREMENT de la tabla `direccions`
--
ALTER TABLE `direccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturacions`
--
ALTER TABLE `facturacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `parametros`
--
ALTER TABLE `parametros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
