-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2022 a las 18:07:32
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papehome`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregado_carrito_tmp`
--

CREATE TABLE `agregado_carrito_tmp` (
  `id_sesion` varchar(100) NOT NULL,
  `id_producto` int(5) NOT NULL,
  `cantidad` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agregado_carrito_tmp`
--

INSERT INTO `agregado_carrito_tmp` (`id_sesion`, `id_producto`, `cantidad`) VALUES
('fm7hfujnchrq0rbieuj2lt1he6', 4, '10.00'),
('fm7hfujnchrq0rbieuj2lt1he6', 6, '1.00'),
('fm7hfujnchrq0rbieuj2lt1he6', 8, '2.00'),
('fm7hfujnchrq0rbieuj2lt1he6', 10, '3.00'),
('fm7hfujnchrq0rbieuj2lt1he6', 14, '20.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_sesion` varchar(100) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_sesion`, `id_usuario`, `create_at`) VALUES
('fm7hfujnchrq0rbieuj2lt1he6', NULL, '2022-04-29 23:12:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(5) NOT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `venta_online` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`, `venta_online`) VALUES
(1, 'Papel Cortado', 1),
(2, 'Papel extendido', 1),
(3, 'Escritura', 1),
(4, 'Pegamento', 1),
(5, 'Manualidades', 1),
(6, 'Oficina', 1),
(7, 'Regalos y Fiesta', 1),
(8, 'Electronica/Computo', 1),
(9, 'Tramites', 0),
(10, 'Dulces', 0),
(11, 'Impresion', 0),
(12, 'Recargas', 0),
(13, 'Trabajos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta_pedido` bigint(20) NOT NULL,
  `id_producto` int(5) NOT NULL,
  `cantidad` decimal(7,2) DEFAULT NULL,
  `precio_vta` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_dir` bigint(20) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `cp` int(6) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `referencias` text,
  `empresa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(5) NOT NULL,
  `id_producto` int(5) DEFAULT NULL,
  `path` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_producto`, `path`) VALUES
(1, 1, 'https://tonypapelerias.vtexassets.com/arquivos/ids/211386-1200-auto?v=637733205061400000&width=1200&height=auto&aspect=true'),
(2, 10, 'https://tonypapelerias.vtexassets.com/arquivos/ids/213492-1200-auto?v=637733876762930000&width=1200&height=auto&aspect=true'),
(3, 10, 'https://tonypapelerias.vtexassets.com/arquivos/ids/213676-1200-auto?v=637733882982900000&width=1200&height=auto&aspect=true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(10) NOT NULL,
  `id_producto` int(5) DEFAULT NULL,
  `id_proveedor` int(10) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `costo_compra` decimal(7,2) DEFAULT NULL,
  `costo_operacion` decimal(7,2) DEFAULT NULL,
  `costo_venta` decimal(7,2) DEFAULT NULL,
  `cantiada` decimal(7,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(5) NOT NULL,
  `marca` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(1, 'DBC'),
(2, 'Scribe'),
(3, 'Azor'),
(4, 'Dixon'),
(5, 'Sharpie'),
(6, 'Maped'),
(7, 'Norma'),
(8, 'DBC'),
(9, 'BIC'),
(10, 'BACO'),
(11, 'Estrella'),
(12, 'Rayter'),
(13, 'Sharpie'),
(14, 'Pinguino'),
(15, 'APSA'),
(16, 'Berol'),
(17, 'Paper Mate'),
(18, 'Smart'),
(19, 'Janel'),
(20, 'Crayola'),
(21, 'Transfer'),
(22, 'Pritt'),
(23, 'Barrilito'),
(24, 'Berol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(5) NOT NULL,
  `id_categoria` int(5) DEFAULT NULL,
  `id_marca` int(5) DEFAULT NULL,
  `sku` int(10) DEFAULT NULL,
  `barcode` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `min_alerta` decimal(7,2) DEFAULT NULL,
  `presentacion` varchar(30) DEFAULT NULL,
  `costo_promedio` decimal(7,2) DEFAULT NULL,
  `descuento` decimal(7,2) DEFAULT NULL,
  `stock` decimal(7,2) DEFAULT NULL,
  `estatus` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_categoria`, `id_marca`, `sku`, `barcode`, `nombre`, `descripcion`, `min_alerta`, `presentacion`, `costo_promedio`, `descuento`, `stock`, `estatus`) VALUES
(1, 3, 10, 100, '15615615', 'Gises Colores 12 Pzs', 'Gises de colores varios, caja con 12 piezas', '1.00', 'CAJA', '12.00', '0.50', '50.00', 1),
(4, 3, 24, 101, '165156156', 'Lápiz con Goma Número 2 Hexagonal', '• Lápiz Mirado Paper Mate #2 de madera 100% reciclada. • Más suave, más intenso, borrador que no mancha ni rompe el papel.\r\n• Banda roja para mostrar la calidad controlada.\r\n• Material no tóxico.', '10.00', 'PIEZA', '5.00', '2.50', '60.00', 1),
(6, 1, 15, 102, '25612561', 'Papel Opalina Carta Blanco 100/H', 'Papel Opalina Tamaño Carta Blanco C/100 hojas', '10.00', 'PIEZA', '2.00', '0.00', '10.00', 1),
(8, 3, 17, 103, '', 'Bolígrafo Gel Stick 5mm Negro', 'Bolígrafo Gel Stick 5mm Negro Blt Paper Mate 2066232', '5.00', 'PIEZA', '7.50', '0.50', '30.00', 1),
(10, 3, 9, 923995, '00730021', 'Bolígrafo Punto Mediano Stick Negro ', 'Bolígrafo Punto Mediano Stick Negro Bic Dura+ Bic 923995', '5.00', 'PIEZA', '5.00', '0.50', '0.00', 1),
(13, 6, 15, 108, '', 'Producto X', 'Producto prueba', '10.00', 'PIEZA', '5.00', '1.00', '0.00', 1),
(14, 6, 20, 110, '', 'Crayola', 'Crayola 12 colores tamaño mediano', '10.00', 'CAJA', '23.00', '15.00', '0.00', 1),
(16, 10, 15, 11111, '', 'paleta', 'qqqq', '1.00', 'PIEZA', '10.00', '2.00', '0.00', 1),
(17, 6, 4, 1005, '1156156156', 'Pluma Azul', 'Pluma de color azul bic punta mediano', '1.00', 'PIEZA', '5.00', '10.00', '0.00', 1),
(19, 6, 7, 180, '2542542424524', 'Libreta Profesional C/Chico', 'Libreta profesional C/GRANDE doble espiral de fulanitos', '50.00', 'PIEZA', '100.00', '20.00', '0.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_prioveedor` int(10) NOT NULL,
  `proveedor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pw` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `app`, `apm`, `email`, `pw`, `created_at`) VALUES
(152957130787851, 'Christian', 'Hernandez', 'Pioquinto', 'christian.floppy@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-04-29 16:59:50'),
(8845023872850938, 'Juan', 'Perez', 'Sanchez', 'juan@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-04-29 16:35:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(5) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pw` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `app`, `apm`, `email`, `pw`, `puesto`, `telefono`) VALUES
(314206372, 'Christian', 'Pioquinto', 'Hernandez', 'christian@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'Programmer', '5565241529');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_pedido`
--

CREATE TABLE `venta_pedido` (
  `id_venta_pedido` bigint(20) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `id_dir_entrega` bigint(20) DEFAULT NULL,
  `id_vendedor` int(5) DEFAULT NULL,
  `subtotal` decimal(7,2) DEFAULT NULL,
  `descuento` decimal(7,2) DEFAULT NULL,
  `iva` decimal(7,2) DEFAULT NULL,
  `total` decimal(7,2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `forma_entrega` varchar(30) DEFAULT NULL,
  `forma_pago` varchar(30) DEFAULT NULL,
  `estatus_pago` varchar(30) DEFAULT NULL,
  `estatus_envio` varchar(30) DEFAULT NULL,
  `no_guia` text,
  `estatus_venta` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agregado_carrito_tmp`
--
ALTER TABLE `agregado_carrito_tmp`
  ADD PRIMARY KEY (`id_sesion`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_carrito` (`id_sesion`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_sesion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_venta_pedido`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_dir`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_prioveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- Indices de la tabla `venta_pedido`
--
ALTER TABLE `venta_pedido`
  ADD PRIMARY KEY (`id_venta_pedido`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_dir_entrega` (`id_dir_entrega`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id_ingreso` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prioveedor` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agregado_carrito_tmp`
--
ALTER TABLE `agregado_carrito_tmp`
  ADD CONSTRAINT `FK_tmp_carrito` FOREIGN KEY (`id_sesion`) REFERENCES `carrito` (`id_sesion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agregado_carrito_tmp_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta_pedido`) REFERENCES `venta_pedido` (`id_venta_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingreso_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_prioveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_pedido`
--
ALTER TABLE `venta_pedido`
  ADD CONSTRAINT `venta_pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_pedido_ibfk_2` FOREIGN KEY (`id_dir_entrega`) REFERENCES `direcciones` (`id_dir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_pedido_ibfk_3` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
