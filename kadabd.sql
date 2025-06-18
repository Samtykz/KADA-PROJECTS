-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2024 a las 23:00:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Definir constantes
SET @CLIE_DOCUMENTO_FK_89012345= 89012345;
SET @FECHA_PEDIDO_2024-09-28= 2024-09-28;
SET @MATERIAL_ALDODÓN= Algodón;
SET @DOCUMENTO_PROVEEDOR_321654987= 321654987;

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
  `usua_nombre` varchar(32) NOT NULL,
  `admi_contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`admi_Codigo_PK`, `admi_nombre`, `admi_apellido`, `admi_telefono`, `admi_direccion`, `admi_correo`, `usua_nombre`, `admi_contrasena`) VALUES
(1, 'Laura', 'González', '555-1234', 'Calle Mayor 45', 'laura.gonzalez@example.com', 'laura_g', NULL),
(2, 'Andrés', 'Martínez', '555-5678', 'Avenida de la Libertad 78', 'andres.martinez@example.com', 'andres_m', NULL),
(3, 'Marta', 'Pérez', '555-8765', 'Calle de la Reina 12', 'marta.perez@example.com', 'marta_p', NULL),
(4, 'Javier', 'Rodríguez', '555-4321', 'Carrera 23C # 34-56 Norte', 'javier.rodriguez@example.com', 'javier_r', NULL),
(5, 'Isabel', 'López', '555-3456', 'Calle 34-87', 'isabel.lopez@example.com', 'isabel_l', NULL),
(6, 'Sergio', 'Fernández', '555-6543', 'Avenida Chile # 34B Norte', 'sergio.fernandez@example.com', 'sergio_f', NULL),
(7, 'Elena', 'Gómez', '555-7890', 'Carrera 34L Norte', 'elena.gomez@example.com', 'elena_g', NULL),
(8, 'Manuel', 'Jimenez', '555-2109', 'Calle 23-45', 'manueljimenez@example.com', 'manuel_j', NULL),
(9, 'Claudia', 'Ruiz', '555-0987', 'Calle de los Ángeles 44', 'claudia.ruiz@example.com', 'claudia_r', NULL),
(10, 'Francisco', 'Ortega', '555-4320', 'Calle de la Paz 67, Salamanca', 'francisco.ortega@example.com', 'francisco_o', NULL),
(11, 'Carlos ', 'Chavez', '3103569456', 'Calle falsa 594', 'carlos@ejemplo.com', 'CarlosCh', '$2y$10$NtAU.3OOV9mG/NShGwb17.UbkD.cIzZLVbRVxwPpp9H'),
(12, 'Santiago', 'Real', '3224828409', 'KRA 13 C BIS', 'realsantiago2404@gmail.com', 'LG_MOON!', 'e64b78fc3bc91bcbc7dc232ba8ec59e0'),
(14, 'David', 'Rodríguez', '3026724246', 'KRA 13C BIS ESTE', 'realsantiago2405@gmail.com', 'DSR24', '25426deebf91380dd4e33d79eef0741a');

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
  `usua_nombre` varchar(32) NOT NULL,
  `id_TipoDocumento_FK` int(11) NOT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`clie_Documento_PK`, `clie_nombre`, `clie_apellido`, `clie_Telefono`, `clie_Telefono2`, `clie_direccion`, `clie_correo`, `usua_nombre`, `id_TipoDocumento_FK`, `contrasena`) VALUES
('1019763323', 'David', 'Real', '5552006', '5552405', 'KRA 13C BIS ESTE', 'real@example.com', 'LG_MOON!', 1, '$2y$10$QzDQyZVGMSGtYss1p0ealefvq36nXA6oCQVZ6BR1Nc/'),
('45678901', 'Ana', 'García', '3219170873', '3425617286', 'CALLE 85 SUR #92-85', 'analucia4@gmail.com', 'Anitta', 1, 'gfdgfghj'),
('56789012', 'Javier', 'Pérez', '5555432', '5559876', 'Calle del Carmen 890', 'javier.perez@example.com', 'javier.pz', 3, NULL),
('67890123', 'Monica', 'Acuña', '45776', '4567893', 'Calle 24', 'monica@ejemplo.com', 'MonicaAc', 1, 'MonicaAc'),
('78901234', 'Carlos', 'González', '5553210', '5557654', 'Calle Mayor 456', 'carlos.gonzalez@example.com', 'carlos.glez', 1, NULL),
(@CLIE_DOCUMENTO_FK_89012345, 'Isabel', 'Ruiz', '5552109', '5556543', 'Plaza España 789', 'isabel.ruiz@example.com', 'isabel.rz', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `cantidadProductoPedido` int(11) NOT NULL,
  `precioUnidadProducto` float NOT NULL,
  `subtotalPedidoProducto` float NOT NULL,
  `id_Pedido_FK` int(11) NOT NULL,
  `prod_Codigo_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`cantidadProductoPedido`, `precioUnidadProducto`, `subtotalPedidoProducto`, `id_Pedido_FK`, `prod_Codigo_FK`) VALUES
(2, 200000, 400000, 12, 26),
(1, 123000, 123000, 13, 12),
(2, 150000, 300000, 14, 28),
(1, 180000, 180000, 17, 27),
(2, 200000, 400000, 12, 26),
(1, 123000, 123000, 13, 12),
(2, 150000, 300000, 14, 28),
(1, 180000, 180000, 17, 27);

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
(12, '2024-09-26', '14:57:00', @CLIE_DOCUMENTO_FK_89012345),
(13, '2024-09-26', '15:40:00', '67890123'),
(14, @FECHA_PEDIDO_2024-09-28, '13:55:00', '56789012'),
(17, @FECHA_PEDIDO_2024-09-28, '16:45:00', @CLIE_DOCUMENTO_FK_89012345);

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
(1, 'Manantial', 250000, 'M', 45, @MATERIAL_ALDODÓN, 'Buzo oversize de algodón perchado, cómodo y perfecto para el uso diario', 1, '86396482'),
(2, 'Aqua', 340000, 'L', 56, @MATERIAL_ALDODÓN, 'Buzo de cuello redondo color negro hecho de poliéster, ideal para el invierno', 2, '987654321'),
(3, 'Zipper', 200000, 'XL', 56, @MATERIAL_ALDODÓN, 'Buzo con medio cierre, mezcla de algodón y poliéster, versátil y moderno', 3, '456789123'),
(4, 'Lenix', 80000, 'S', 56, @MATERIAL_ALDODÓN, 'Hoodie color rojo de algodón perchado, con capucha y bolsillo frontal', 4, @DOCUMENTO_PROVEEDOR_321654987),
(6, 'Austin', 210000, 'L', 23, @MATERIAL_ALDODÓN, 'Crewneck hecho en algodón, elegante y confortable', 2, '654321789'),
(8, 'RutsEze', 300000, 'L', 32, @MATERIAL_ALDODÓN, 'Hoddie de algodón, casual y funcional para todo tipo de actividades', 4, '963852741'),
(9, 'MF DOOM Merch Hoddie', 290000, 'S', 55, @MATERIAL_ALDODÓN, 'Buzo oversize de algodón color verde oscuro, ideal para un estilo casual y relajado', 1, '258369147'),
(10, 'gaete', 140000, 'M', 65, @MATERIAL_ALDODÓN, 'Buzo de cuello redondo de algodón ajustado y flexible', 2, '852741963'),
(11, 'Algarete', 218000, 'M', 60, @MATERIAL_ALDODÓN, 'Buzo oversize color negro echo de algodón', 1, @DOCUMENTO_PROVEEDOR_321654987),
(12, 'Bad rust', 123000, 'M', 60, @MATERIAL_ALDODÓN, 'Buzo Oversize hecho en algodón, ideal para días lluviosos', 1, @DOCUMENTO_PROVEEDOR_321654987),
(26, 'Aqua Fina', 200000, 'L', 47, 'Cotton 100%', 'Hoodie hecho en material 100% algodón, comodidad y frescura.', 4, '4962354'),
(27, 'Aqua Fina', 180000, 'M', 30, @MATERIAL_ALDODÓN, 'Hoodie hecho en material 100% algodón, comodidad y frescura.', 4, '4962354'),
(28, 'Oblivions Mighty Trash', 150000, 'XL', 25, @MATERIAL_ALDODÓN, 'Hoodie de algodón. Merch de Oblivions Mighty Trash', 4, '54984563'),
(29, 'Baby Tears', 210000, 'L', 24, @MATERIAL_ALDODÓN, 'Hoodie de algodón con motivos florales.', 4, '654321789');

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
(@DOCUMENTO_PROVEEDOR_321654987, 'TelaMarina', '3216549', 'Calle 321, Parque Empresarial', 'soporte@marinatela.com', 4),
('456789123', 'Suministros Industriales SRL', '4567891', 'Carretera Industrial 78', 'info@suministrosind.com', 4),
('4962354', 'Dispensador de telas AMC', '3453683749', 'Carrera 52c ', 'amc@ejemplo.com', 4),
('54984563', 'Tejicol', '3153566845', 'Calle 18 ', 'tejicol@ejemplo.com', 4),
('654321789', 'Telas del Sur S.A', '6543217', 'Calle 567, Ciudad Sur', 'ventas@alimsur.com', 4),
('789123456', 'BuzoCraft', '7891234', 'Avenida 234, Ciudad Nueva', 'pedidos@buzocraft.com', 4),
('852741963', 'Nautical Threads', '8527419', 'Avenida Jimenez 852, Centro', 'soporte@nthreads.com', 4),
('86396482', 'Soluciones LUM', '874876', 'Calle 45 # 76-98', 'solucioneslum@example.com', 4),
('963852741', 'Productos Químicos S.A.', '9638527', 'Avenida 963, Parque Industrial', 'contacto@prodquimicos.com', 1),
('987654321', 'Proveedora Central Ltda', '9876543', 'Avenida Central 456', 'ventas@provcentral.com', 4);

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
(5, 'RUT'),
(6, 'mondá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `vent_codigo_PK` int(11) NOT NULL,
  `vent_fecha` date NOT NULL,
  `vent_Hora` time NOT NULL,
  `vent_Subtotal` float NOT NULL,
  `vent_IVA` float NOT NULL,
  `vent_total` float NOT NULL,
  `vent_MetodoPago` varchar(12) NOT NULL,
  `id_Pedido_FK` int(11) NOT NULL,
  `admi_Codigo_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`vent_codigo_PK`, `vent_fecha`, `vent_Hora`, `vent_Subtotal`, `vent_IVA`, `vent_total`, `vent_MetodoPago`, `id_Pedido_FK`, `admi_Codigo_FK`) VALUES
(11, @FECHA_PEDIDO_2024-09-28, '12:21:00', 400000, 19, 476000, 'NEQUI', 12, 11),
(12, @FECHA_PEDIDO_2024-09-28, '14:07:00', 300000, 19, 357000, 'NEQUI', 14, 11),
(13, @FECHA_PEDIDO_2024-09-28, '15:32:00', 123000, 19, 146370, 'VISA', 13, 11),
(14, @FECHA_PEDIDO_2024-09-28, '16:46:00', 180000, 19, 214200, 'DAVIPLATA', 14, 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admi_Codigo_PK`);

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
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_Pedido_PK`),
  ADD KEY `clie_Documento_FK` (`clie_Documento_FK`);

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
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`id_TipoDocumento_PK`);

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
  MODIFY `admi_Codigo_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_Pedido_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `prod_Codigo_PK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productocategoria`
--
ALTER TABLE `productocategoria`
  MODIFY `id_Categoria_PK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `id_TipoDocumento_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `vent_codigo_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
