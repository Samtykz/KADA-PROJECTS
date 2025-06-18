-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2025 a las 06:38:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Definir constantes para los estados
SET @ESTADO_ACTIVO = 'activo';
SET @ESTADO_INACTIVO = 'inactivo';
SET @APELLIDO_BELLO = 'Bello';
SET @DOCUMENTO_PROVEEDOR_86396482 = '86396482';
SET @MATERIAL_ALGODÓN = 'algodón';

--
-- Base de datos: `kadabd`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `administrador`
--
CREATE TABLE `administrador` (
  `admi_Codigo_PK` int(11) NOT NULL,
  `admi_nombre` varchar(50) NOT NULL,
  `admi_apellido` varchar(50) NOT NULL,
  `admi_telefono` varchar(15) NOT NULL,
  `admi_direccion` varchar(50) NOT NULL,
  `admi_correo` varchar(50) NOT NULL,
  `admi_contrasena` varchar(100) NOT NULL,
  `estado` enum('activo','inactivo') DEFAULT @ESTADO_ACTIVO
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`admi_Codigo_PK`, `admi_nombre`, `admi_apellido`, `admi_telefono`, `admi_direccion`, `admi_correo`, `admi_contrasena`, `estado`) VALUES
(1, 'Laura', 'González', '555-1234', 'Calle Mayor 45', 'laura.gonzalez@example.com', '', @ESTADO_ACTIVO),
(2, 'Andrés', 'Martínez', '3102564879', 'Avenida de la Libertad 78', 'andres.martinez@example.com', '', @ESTADO_ACTIVO),
(3, 'Marta', 'Pérez', '555-8765', 'Calle de la Reina 12', 'marta.perez@example.com', '', @ESTADO_ACTIVO),
(4, 'Javier', 'Rodríguez', '555-4321', 'Carrera 23C # 34-56 Norte', 'javier.rodriguez@example.com', '', @ESTADO_ACTIVO),
(5, 'Isabel', 'López', '555-3456', 'Calle 34-87', 'isabel.lopez@example.com', '', @ESTADO_ACTIVO),
(6, 'Sergio', 'Fernández', '555-6543', 'Avenida Chile # 34B Norte', 'sergio.fernandez@example.com', '', @ESTADO_ACTIVO),
(7, 'Elena', 'Gómez', '555-7890', 'Carrera 34L Norte', 'elena.gomez@example.com', '', @ESTADO_ACTIVO),
(8, 'Manuel', 'Jimenez', '555-2109', 'Calle 23-45', 'manueljimenez@example.com', '', @ESTADO_ACTIVO),
(9, 'Claudia', 'Ruiz', '555-0987', 'Calle de los Ángeles 44', 'claudia.ruiz@example.com', '', @ESTADO_ACTIVO),
(10, 'Francisco', 'Ortega', '555-4320', 'Calle de la Paz 67, Salamanca', 'francisco.ortega@example.com', '', @ESTADO_ACTIVO),
(11, 'Carlos ', 'Chavez', '3103569456', 'Calle falsa 594', 'carlos@ejemplo.com', '$2y$10$NtAU.3OOV9mG/NShGwb17.UbkD.cIzZLVbRVxwPpp9H', @ESTADO_ACTIVO),
(12, 'Santiago', 'Real', '3224828409', 'KRA 13 C BIS', 'realsantiago2404@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', @ESTADO_ACTIVO),
(14, 'David', 'Rodríguez', '3026724246', 'KRA 13C BIS ESTE', 'realsantiago2405@gmail.com', '25426deebf91380dd4e33d79eef0741a', @ESTADO_ACTIVO),
(16, 'Martin', ' @APELLIDO_BELLO', '3219170009', 'CALLE 22 SUR #91-85', 'manuelito@gmail.com', '$2y$10$tJ8eWUgZdnxv5pDs93eWgeH.YDeByf1RT0YhXq4Tdrr', @ESTADO_ACTIVO),
(19, 'Eusebio', ' @APELLIDO_BELLO', '3216548765', 'calle 23 #12-21', 'eusebio@gmail.com', '$2y$10$sWsIFSBTRzgACXvxo/nUte9/spTpOewtTSZvlWJsZEjaroBnRHJ2O', @ESTADO_ACTIVO),
(20, 'Roman', 'palmeraatricio', '3698741', 'Avenida palmera # 34B Norte', 'solitoTC@example.com', '$2y$12$mPLKKmUn2Xn47q419K/njOF8MI8ze1A0BMruQikyFSe2E0iqStdCC', @ESTADO_ACTIVO),
(23, 'SANTIAGO', 'DIAZ GUEVARA', '3219170873', 'CALLE 85 SUR #92-85', 'sd170419@gmail.com', '$2y$10$FzNDuviXhjtVo7gizS2wfufTIMY3mMuiCon9ZprOye.c.G4LHxqPu', @ESTADO_ACTIVO);
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `cliente`
--
CREATE TABLE `cliente` (
  `clie_Documento_PK` varchar(20) NOT NULL,
  `clie_nombre` varchar(50) NOT NULL,
  `clie_apellido` varchar(50) NOT NULL,
  `clie_Telefono` varchar(15) NOT NULL,
  `clie_Telefono2` varchar(15) DEFAULT NULL,
  `clie_direccion` varchar(50) NOT NULL,
  `clie_correo` varchar(50) NOT NULL,
  `id_TipoDocumento_FK` int(11) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `estado` enum('activo','inactivo') DEFAULT @ESTADO_ACTIVO
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Volcado de datos para la tabla `cliente`
--
INSERT INTO `cliente` (`clie_Documento_PK`, `clie_nombre`, `clie_apellido`, `clie_Telefono`, `clie_Telefono2`, `clie_direccion`, `clie_correo`, `id_TipoDocumento_FK`, `contrasena`, `estado`) VALUES
('0908765432', 'Cristian ', 'Perez', '3234641219', '', 'CRA 82c #45-08', 'cristian2@ejemplo.com', 1, '$2y$10$d.0fpihVjsq29oIN5TUwaemrPnNJdGaAscSMbogYoPYODUToUYQs.', @ESTADO_ACTIVO),
('1007364233', 'Camilo', 'Perez', '3234641219', '', 'CRA 82c #45-09', 'camilo@ejemplo.com', 1, '$2y$10$jqyGjo5alNd77O2YOijMAe/anBvI7xxWNTqgEWp6Wzyo9i.6kX1ya', @ESTADO_ACTIVO),
('1069473899', 'Eusebio', '@APELLIDO_BELLO', '3219170009', '21321231', 'CALLE 22 SUR ', 'eusebio12@gmail.com', 1, '$2y$10$P17ynyzycm2n5puoDqrmoej8/vxyVFGYFWmfWxLlDVI', @ESTADO_ACTIVO),
('124562711', 'Samuel', 'Guevara', '3125676521', '23417122', 'Calle 54 #87 sur', 'Samuelito22@gmail.com', 1, '$2y$10$DB3pQ42src1TULXVCe/7..64wf4heix2nIMgXzioVOs5vfFMW5VKq', @ESTADO_ACTIVO),
('126879211', 'Manuel', 'Ovalle', '3215462765', '43216271', 'Calle 54 #87 sur', 'manuelito@gmail.com', 1, '$2y$10$UnBm9xfunct9BYTjkE4Cdu7GbShI5oB3hnN44qTMCcxcy7JtDdxYi', @ESTADO_ACTIVO),
('1456456455', 'eusebio', 'topollillo', '4658433', '5552490', 'KRA 82C #45-07 SUR', 'sabrooso@example.com', 1, '123456', @ESTADO_ACTIVO),
('14569876', 'mssi', 'kaka', '58423', '78963', 'KRA 13C bsite', 'romero@example.com', 1, 'abeja', @ESTADO_ACTIVO),
('3242343423', 'louis samuel santiago', 'diaz rodriguez bello', '313213133', '4124342324', 'localhost', 'salchichon@gmail.com', 1, '789456', @ESTADO_ACTIVO),
('456789', 'Maria', 'Gomez', '23455839', '43562783', 'CALLE 84 SUR #92-85', 'mariahsga@gmail.com', 1, 'gfdgfghj', @ESTADO_ACTIVO),
('48564564564', 'Juan David', 'Romero Castaño', '645546564', '45465456', 'call3 K8', 'juaandavid@gmail.com', 1, '3053652257', @ESTADO_ACTIVO),
('4866856', 'fdsdfs', 'hdgsgs', '75757', '67375', 'calle 22 avenida dorado', 'jsudus@example.com', 1, '7896', @ESTADO_ACTIVO),
('546987123', 'Samuel', 'Toquica', '665478912', '78541236', 'CHIPRE AVENIDA 60', 'toquisam@gmail.com', 1, '$2y$12$JqV14Jq8LsVSLLpUBoa5vezb/47H.DP26Sdg8Vlq7HKBqJiF3RS/y', @ESTADO_ACTIVO),
('56789012', 'Javier', 'Pérez', '5555432', '5559876', 'Calle del Carmen 890', 'javier.perez@example.com', 3, '', @ESTADO_ACTIVO),
('67890123', 'Monica', 'Acuña', '45776', '4567893', 'Calle 24', 'monica@ejemplo.com', 1, 'MonicaAc', @ESTADO_ACTIVO),
('785412369', 'Juan David', 'Romero Castaño', '3658945522', '3023697845', 'CALE 13', 'cataneda@gmail.com', 1, '789456', @ESTADO_ACTIVO),
('78901234', 'Carlos', 'González', '5553210', '5557654', 'Calle Mayor 456', 'carlos.gonzalez@example.com', 1, '', @ESTADO_ACTIVO),
('7894561230', 'oscar', LOWER'@APELLIDO_BELLO', '6544865522', '3669566699', 'lomas del manbuco', 'guerrerodragon@gmail.com', 1, '$2y$10$M7HZmL.fNs5AmsbxpKiDvOGCAOeakgFtW/Kyd/CEaQ8PHciKUVtMy', @ESTADO_ACTIVO),
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `cantidadProductoPedido` int(11) NOT NULL,
  `precioUnidadProducto` float NOT NULL,
  `subtotalPedidoProducto` float NOT NULL,
  `id_Pedido_FK` int(11) NOT NULL,
  `prod_Codigo_FK` int(11) NOT NULL,
  `metodoPago` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`cantidadProductoPedido`, `precioUnidadProducto`, `subtotalPedidoProducto`, `id_Pedido_FK`, `prod_Codigo_FK`, `metodoPago`) VALUES
(1, 290000, 290000, 87, 9, 'Bancolombia'),
(1, 250000, 250000, 90, 1, 'Nequi'),
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `codigoImagenes` int(5) NOT NULL,
  `prod_Codigo` int(10) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`codigoImagenes`, `prod_Codigo`, `imagen`) VALUES
(9, 1, 0x696d616765732f696d675f36376566306231643634336136372e35323436343435312e6a7067),
(10, 1, 0x696d616765732f696d675f36376566306333346437313561312e37313939363733382e6a7067),
(11, 1, 0x696d616765732f696d675f36376630333938313763393130322e33303330353439372e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
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
-- Estructura de tabla para la tabla `job_batches`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_15_221612_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_Pedido_PK` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `clie_Documento_FK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_Pedido_PK`, `fechaPedido`, `horaPedido`, `clie_Documento_FK`) VALUES
(86, '2025-04-15', '22:42:00', '126879211'),
(87, '2025-04-15', '22:50:00', '3214567252'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `prod_Codigo_PK` int(5) NOT NULL,
  `prod_Nombre` varchar(50) NOT NULL,
  `prod_PrecioVenta` float NOT NULL,
  `prod_UnidadMedida` varchar(25) NOT NULL,
  `prod_Stock` float NOT NULL,
  `prod_Material` varchar(20) NOT NULL,
  `prod_Descripcion` varchar(100) DEFAULT NULL,
  `id_Categoria_FK` int(5) NOT NULL,
  `documentoProveedor_FK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`prod_Codigo_PK`, `prod_Nombre`, `prod_PrecioVenta`, `prod_UnidadMedida`, `prod_Stock`, `prod_Material`, `prod_Descripcion`, `id_Categoria_FK`, `documentoProveedor_FK`) VALUES
(1, 'Manantial', 250000, 'M', 45, 'MATERIAL_ALGODON', 'Buzo oversize de algodón perchado, cómodo y perfecto para el uso diario', 1, 'DOCUMENTO_PROVEEDOR_86396482'),
(2, 'Aqua', 340000, 'L', 56, 'MATERIAL_ALGODON', 'Buzo de cuello redondo color negro hecho de poliéster, ideal para el invierno', 2, '987654321'),
(3, 'Zipper', 200000, 'XL', 56, 'Mezcla de algodón y ', 'Buzo con medio cierre, mezcla de algodón y poliéster, versátil y moderno', 3, '456789123'),
(4, 'Lenix', 80000, 'S', 56, 'Algodón orgánico', 'Hoodie color rojo de algodón perchado, con capucha y bolsillo frontal', 4, '321654987'),
(6, 'Austin', 210000, 'L', 23, 'MATERIAL_ALGODON', 'Crewneck hecho en algodón, elegante y confortable', 2, '654321789'),
(8, 'RutsEze', 300000, 'L', 32, 'MATERIAL_ALGODON', 'Hoddie de algodón, casual y funcional para todo tipo de actividades', 4, '963852741'),
(9, 'MF DOOM Merch Hoddie', 290000, 'S', 55, 'MATERIAL_ALGODON', 'Buzo oversize de algodón color verde oscuro, ideal para un estilo casual y relajado', 1, '258369147'),
(10, 'gaete', 140000, 'M', 65, 'MATERIAL_ALGODON', 'Buzo de cuello redondo de algodón ajustado y flexible', 2, '852741963'),
(11, 'Algarete', 218000, 'M', 60, 'Algodon', 'Buzo oversize color negro echo de algodón', 1, '321654987'),
(12, 'Bad rust', 123000, 'M', 60, 'MATERIAL_ALGODON', 'Buzo Oversize hecho en algodón, ideal para días lluviosos', 1, '321654987'),
(26, 'Aqua Fina', 200000, 'L', 47, 'Cotton 100%', 'Hoodie hecho en material 100% algodón, comodidad y frescura.', 4, '4962354'),
(27, 'Aqua Fina', 180000, 'M', 30, 'MATERIAL_ALGODON', 'Hoodie hecho en material 100% algodón, comodidad y frescura.', 4, '4962354'),
(28, 'Oblivions Mighty Trash', 150000, 'XL', 25, 'MATERIAL_ALGODON', 'Hoodie de algodón. Merch de Oblivions Mighty Trash', 4, '54984563'),
(29, 'Baby Tears', 210000, 'L', 24, 'MATERIAL_ALGODON', 'Hoodie de algodón con motivos florales.', 4, '654321789'),
(31, 'UrbanFit', 180000, 'L', 21, 'MATERIAL_ALGODON', 'CrewNeck ideal para el día a día.', 2, '4962354'),
(32, 'NeoHood', 280000, 'M', 2, 'MATERIAL_ALGODON', 'Half Zip perfecto para todo tipo de climas.', 3, '147258369'),
(33, 'Arctic Flow', 178000, 'L', 4, 'AlMATERIAL_ALGODONgodón', 'Artic Flow, maneja la tranquilidad.', 3, '456789123'),
(44, 'StormWear', 270000, 'M', 11, 'MATERIAL_ALGODON', 'Buso Half Zip a la moda.', 3, 'DOCUMENTO_PROVEEDOR_86396482'),
(47, 'SkyWave', 110000, 'S', 32, 'MATERIAL_ALGODON', 'SkyWave, estiloso.', 4, '963852741'),
(49, 'Certified Lover Hood', 190000, 'L', 12, 'MATERIAL_ALGODON', 'Certified Lover Hood, buso a la moda para todas las edades.', 4, '321654987'),
(50, 'Savage Mode', 230000, 'S', 23, 'MATERIAL_ALGODON', 'Hoodie de excelente calidad.', 4, '321654987');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productocategoria`
--

CREATE TABLE `productocategoria` (
  `id_Categoria_PK` int(5) NOT NULL,
  `nombreCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productocategoria`
--

INSERT INTO `productocategoria` (`id_Categoria_PK`, `nombreCategoria`) VALUES
(1, 'Oversize'),
(2, 'Crewnecks'),
(3, 'Half Zip'),
(4, 'Hoodie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `documentoProveedor_PK` varchar(20) NOT NULL,
  `nombreProveedor` varchar(40) NOT NULL,
  `telefonoProveedor` varchar(15) NOT NULL,
  `direccionProveedor` varchar(40) NOT NULL,
  `correoProveedor` varchar(50) NOT NULL,
  `id_TipoDocumento_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`documentoProveedor_PK`, `nombreProveedor`, `telefonoProveedor`, `direccionProveedor`, `correoProveedor`, `id_TipoDocumento_FK`) VALUES
('147258369', 'Buzos & Textiles S.A.', '1472583', 'Calle de la Innovación 741', 'info@bztextiles.com', 4),
('258369147', 'Soluciones Agrícolas SRL', '2583691', 'Carretera Agraria 258, Zona Rural', 'ventas@solagricolas.com', 4),
('321654987', 'TelaMarina', '3216549', 'Calle 321, Parque Empresarial', 'soporte@marinatela.com', 4),
('4362782', 'Cafam', '34213123', 'CALLE 12 SUR #21-83', 'cafam90907@gmail.com', 4),
('456789123', 'Suministros Industriales SRL', '4567891', 'Carretera Industrial 78', 'info@suministrosind.com', 4),
('4962354', 'Dispensador de telas AMC', '3453683749', 'Carrera 52c ', 'amc@ejemplo.com', 4),
('54984563', 'Tejicol', '3153566845', 'Calle 18 ', 'tejicol@ejemplo.com', 4),
('654321789', 'Telas del Sur S.A', '6543217', 'Calle 567, Ciudad Sur', 'ventas@alimsur.com', 4),
('789123456', 'BuzoCraft', '7891234', 'Avenida 234, Ciudad Nueva', 'pedidos@buzocraft.com', 4),
('852741963', 'Nautical Threads', '8527419', 'Avenida Jimenez 852, Centro', 'soporte@nthreads.com', 4),
('DOCUMENTO_PROVEEDOR_86396482', 'Soluciones LUM', '874876', 'Calle 45 # 76-98', 'solucioneslum@example.com', 4),
('963852741', 'Productos Químicos S.A.', '9638527', 'Avenida 963, Parque Industrial', 'contacto@prodquimicos.com', 1),
('987654321', 'Proveedora Central Ltda', '9876543', 'Avenida Central 456', 'ventas@provcentral.com', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4izExQ2TzXqFepFUoSRFknzObyiCsECmXsKv5BRJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTE5QVXdtamRzdkFzcm1Yc2pwZVVhYXN2QWlRcnNpYXRpVmliQ2RyQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731709444),
('4SpUpunyOHAlJGVRE0Uyn7wYFgPcVjW77zijmrq1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1A3MFRkeHA2YWVDcTRLVFpGZ2lyWEZMeUYzOVBwajBNcVA2amp5NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731968284),
('9SbqmOrtgsP8QSKUqzeIcnYeOdn2GT4odTqbPSzm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1NnTHoyNHpLSFBOaWJZYjhWdzltUHRsSnQ0TzVHRHFKTFZQNHRUOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044734),
('BgGvLf0ttmgmgVvZ5ZCeDHykuyWGfRPoPJvo9Z7c', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnFKcE54TFFweHVVZFRqNVZXRHFpNkJPZEpKeW1OWkNQcUtXSURFNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044735),
('FarxQhAd9pn2ohrWZrRh2Rvsu2hzF7eUdLFwf5h8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWlEcUM1WEI0S2RUNFlXcFplMk9qRFBhSVJ3ZkV6UUxoWGJZS3hlQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044733),
('Fqt1zlcEtFoF9wJLvYX6KJzp9BbTX7YKwAxQ9t21', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidm52WDE1aWt3bmhMQVFmTFl6V2sxZW9BSDlJcmFhVUc4b05MWFJpWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044731),
('g1m5nscuq3jYPXNoGqCOdsyobH2VEr1K1QkoDbTI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzU3ak9MMlpGUGc5MmdDUTFGZEVUMXA4WkcwVFQ3NzFWellRTFBLbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044733),
('h7zIGF8EJZ6cDDve5jo1McJbdVtUFd3R3x3NEyry', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnhId05oeEJ2amtPejhpWHFIeElhY2NPUGwxWlZxalJJRlptaGM3dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044734),
('RMpIEQPIplAYMypkk6IwCDCQW9iuevX9w7wdg5fK', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1JYQnhlQXVldm45MExpdEtXOURkZmtXYnNpeEd6RjFlVFNTQjFhdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731960669),
('T1La0ZnO0gMUjHlV6TC6c5BbWJiJN9zQYGmpNpY5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2pKRFlwVGxTRW5URjhLMUE1dmZFWTJrQ0R6cVpGb2ZlbXNORHh0RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044732),
('URRNzRvtfGPnhXBSGCczR3zdvivXFCSzGVfxnY3q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVVjZ1hvNEZYRkF6d0k2OXgxOWcyR3R2WDQ2MW1BcUkxTVBmVVRIUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731967162),
('X3locub9imMj0n5Tb7dDPuMccYKZ7U6Z4OZ5dXOd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3J3M1RpcVpNTUpZcGV0ZnZEdE83d0lieGxPVllUU2x6eWVra3dZTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732044735);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `id_TipoDocumento_PK` int(11) NOT NULL,
  `nombreDocumento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id_TipoDocumento_PK`, `nombreDocumento`) VALUES
(1, 'Cédula de Ciudadanía'),
(2, 'Tarjeta de Identidad'),
(3, 'Cédula de Extranjería'),
(4, 'NIT'),
(5, 'RUT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'eusebio', 'eusebio@example.com', NULL, '$2y$12$oAEaMDPTpjmnZlPg.hVUbetkDoSFvE0GYJCqoZaK9T7355pKh626a', NULL, '2024-11-20 00:34:03', '2024-11-20 00:34:03'),
(2, 'lasapa', 'rocacho.net@example.com', NULL, '$2y$12$gNn7JC9/hOmKCeIcjKBU7u8OV2Uk5S9t66sfhZSEPr/xc6ORSHA6a', NULL, '2024-11-20 00:44:02', '2024-11-20 00:44:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `vent_codigo_PK` int(11) NOT NULL,
  `vent_fecha` date NOT NULL,
  `vent_Hora` time NOT NULL,
  `vent_total` float NOT NULL,
  `id_Pedido_FK` int(11) NOT NULL,
  `admi_Codigo_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admi_Codigo_PK`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`clie_Documento_PK`),
  ADD KEY `id_TipoDocumento_FK` (`id_TipoDocumento_FK`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `id_Pedido_FK` (`id_Pedido_FK`),
  ADD KEY `prod_Codigo_FK` (`prod_Codigo_FK`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`codigoImagenes`),
  ADD KEY `prod_Codigo` (`prod_Codigo`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_Pedido_PK`),
  ADD KEY `clie_Documento_FK` (`clie_Documento_FK`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`prod_Codigo_PK`),
  ADD KEY `id_Categoria_FK` (`id_Categoria_FK`),
  ADD KEY `documentoProveedor_FK` (`documentoProveedor_FK`);

--
-- Indices de la tabla `productocategoria`
--
ALTER TABLE `productocategoria`
  ADD PRIMARY KEY (`id_Categoria_PK`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`documentoProveedor_PK`),
  ADD KEY `id_TipoDocumento_FK` (`id_TipoDocumento_FK`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`id_TipoDocumento_PK`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`vent_codigo_PK`),
  ADD KEY `id_Pedido_FK` (`id_Pedido_FK`),
  ADD KEY `admi_Codigo_FK` (`admi_Codigo_FK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `admi_Codigo_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `codigoImagenes` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_Pedido_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `prod_Codigo_PK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `productocategoria`
--
ALTER TABLE `productocategoria`
  MODIFY `id_Categoria_PK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `id_TipoDocumento_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `vent_codigo_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_TipoDocumento_FK`) REFERENCES `tipodocumento` (`id_TipoDocumento_PK`);

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`id_Pedido_FK`) REFERENCES `pedido` (`id_Pedido_PK`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`prod_Codigo_FK`) REFERENCES `producto` (`prod_Codigo_PK`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`clie_Documento_FK`) REFERENCES `cliente` (`clie_Documento_PK`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_Categoria_FK`) REFERENCES `productocategoria` (`id_Categoria_PK`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`documentoProveedor_FK`) REFERENCES `proveedor` (`documentoProveedor_PK`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`id_TipoDocumento_FK`) REFERENCES `tipodocumento` (`id_TipoDocumento_PK`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_Pedido_FK`) REFERENCES `pedido` (`id_Pedido_PK`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`admi_Codigo_FK`) REFERENCES `administrador` (`admi_Codigo_PK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
