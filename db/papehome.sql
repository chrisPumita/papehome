-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-05-2022 a las 13:54:21
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
-- Base de datos: `u538509646_papehome`
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
('9796ab51ca02dc35ca37d5d87810af47', 27, '3.00'),
('9796ab51ca02dc35ca37d5d87810af47', 32, '1.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_sesion` varchar(100) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_sesion`, `id_usuario`, `create_at`) VALUES
('06ec593d1bed98d7b9467ad7f5edf0a1', NULL, '2022-05-26 16:02:35'),
('0eebd33f03f30f13ad807c234794ce6c', NULL, '2022-05-26 04:02:36'),
('1adee0060cf66e07cede7113738c8946', NULL, '2022-05-26 17:40:45'),
('4457c8ea75ca7a93a6efb632adc02476', NULL, '2022-05-26 18:05:55'),
('48ce0e726341959c81189729b168fce6', NULL, '2022-05-26 18:49:54'),
('5d625c5f398de52d5c1d1d2c0906c675', NULL, '2022-05-26 18:13:50'),
('61e35a7875e0cb55c2a8b8f60e8f8bed', NULL, '2022-05-26 16:00:21'),
('8807da8061afeda5e9aeae77f83de14e', NULL, '2022-05-26 03:34:08'),
('9796ab51ca02dc35ca37d5d87810af47', NULL, '2022-05-26 23:08:21'),
('9a1789da92bb59eed236155844a1691d', NULL, '2022-05-26 16:28:17'),
('cc05c223cc300fec31488e968e9754f6', NULL, '2022-05-27 02:19:06'),
('e2df9580f4e97dbfa068b24f6b769c93', NULL, '2022-05-26 18:33:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(5) NOT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `venta_online` tinyint(2) NOT NULL DEFAULT 1
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
(13, 'Trabajos', 0),
(14, 'Escolar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta_pedido` bigint(20) NOT NULL,
  `id_producto` int(5) NOT NULL,
  `cantidad` decimal(7,2) DEFAULT NULL,
  `precio_vta` decimal(7,2) DEFAULT NULL,
  `descuento` decimal(7,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_venta_pedido`, `id_producto`, `cantidad`, `precio_vta`, `descuento`) VALUES
(22052404665371, 1, '26.00', '12.00', '0.50'),
(22052426800749, 1, '10.00', '12.00', '0.50'),
(22052426800749, 10, '10.00', '5.00', '0.50'),
(22052426800749, 19, '10.00', '100.00', '20.00'),
(22052486510922, 10, '1.00', '5.00', '0.50'),
(22052486510922, 14, '1.00', '23.00', '15.00'),
(22052486510922, 16, '1.00', '10.00', '2.00'),
(22052607175825, 42, '82.00', '103.00', '35.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_dir` int(5) NOT NULL,
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
  `referencias` text DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_dir`, `id_usuario`, `nombre`, `apellidos`, `telefono`, `celular`, `calle`, `cp`, `estado`, `municipio`, `colonia`, `referencias`, `empresa`) VALUES
(2, 152957130787851, 'Christian', 'Pioquinto', '+525565241529', '5565241529', 'Puerto Vllarta 17', 54405, 'Estado de México', 'Nicolas Romero', 'Juarez', 'Casa 2 pisos', 'ReCkrea'),
(3, 152957130787851, 'Juan', 'Temerario', '5512457845', '5523568956', 'Tamoico 12', 54405, 'Nayarit', 'Acoyac', 'Libertad', 'Casa 3 pisos', 'NA'),
(4, 152957130787851, 'Daniel', 'Gomez', '42353453', '432425', 'Cocido 32', 54400, 'Colima', 'Conocido', 'Libertad', 'Ninguna', 'Cemex Solutions');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(5) NOT NULL,
  `id_producto` int(5) DEFAULT NULL,
  `path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_producto`, `path`) VALUES
(11, 1, './galeria/9caf4fdd3d3c3dada8f66644530f81a6.jpg'),
(12, 23, './galeria/bc1d7ff001e4915091225afa0afaa0c5.webp'),
(13, 23, './galeria/d0afa370c74e9650b236fbb6cd9c41e0.webp'),
(14, 23, './galeria/cbf551c9a77549955d7f89e76f24e769.webp'),
(15, 1, './galeria/622fa5c4c20597c633877c56deded9b8.webp'),
(16, 17, './galeria/4b106fad0ca4ee48e24281fd30b7d878.webp'),
(17, 4, './galeria/1a957f88003dc49fbd6acd8f7a29131c.webp'),
(18, 8, './galeria/581a7a36ee0a3475a37cf0ffb70d2c95.webp'),
(19, 13, './galeria/2531d541555e284a204e245548e209ad.webp'),
(20, 14, './galeria/7a4a01e6e6671a66b973a7d62d799040.webp'),
(21, 22, './galeria/99bbb3b1f845aafcd0c8b17d4c76bba0.webp'),
(22, 22, './galeria/028e3f80a06ea1cd2af7bbe3faf7b978.webp'),
(23, 10, './galeria/f3c0f3e74eb33efaaa23e939cb02b9c5.webp'),
(24, 16, './galeria/1edfa1d7b99177edcf41855a7e926224.webp'),
(25, 19, './galeria/ac75452b706f00209acfc44ab18f6620.webp'),
(26, 25, './galeria/ec1b5891bc53ce4edec3da75bc3644a6.webp'),
(27, 25, './galeria/8078146b29af98a66a829c59dd99ee51.webp'),
(28, 25, './galeria/65cf7fb38cc69186bf32b541a431b1b4.webp'),
(29, 26, './galeria/17df224445759620b7538a99b441f1ba.webp'),
(30, 26, './galeria/b89f1610d632c85e5028ff7e25c8d92c.webp'),
(31, 27, './galeria/b88d51d5cee427a1e93815907a290ee6.gif'),
(32, 28, './galeria/2471c9fde9222b8a6e0a7ce1eec6a9de.webp'),
(33, 28, './galeria/d2e24d6aa1bb9edc3080c3957bcc1e78.webp'),
(34, 28, './galeria/8cfce4e8f6d74bbec7fa9c28641de39e.webp'),
(35, 28, './galeria/39be15202b6706e4fd1e09583f87e2ad.webp'),
(36, 29, './galeria/e3be6a0ce6d2b1517b71ad5b13ad2586.jpeg'),
(37, 29, './galeria/c59c13ea117d68d1adc7822db14cff14.jpeg'),
(38, 29, './galeria/3de08930cccf72605da67419a998ea35.jpeg'),
(39, 29, './galeria/ce624e5bc71f82f158bcf934cbd456d4.jpeg'),
(40, 30, './galeria/8e0e0e8560c9e100c770d8bf77a7070a.jpeg'),
(41, 30, './galeria/a849b029535a79f0f0c015b8f0d3966c.jpeg'),
(42, 31, './galeria/4c1044b5b0048358f885b8227c028f98.webp'),
(43, 31, './galeria/aff805b84f34380e3678612483d709e2.webp'),
(44, 31, './galeria/aff805b84f34380e3678612483d709e2.webp'),
(45, 31, './galeria/91f388abe359a58d347e78c2181acc4a.webp'),
(46, 31, './galeria/14daa0828f328e0ca1c5df1125d5d25b.webp'),
(47, 24, './galeria/c12ed010d5a816045a8e5d10df1e6ae7.webp'),
(48, 32, './galeria/874fcb4b1fdf5d1a996ddb3c6634717d.jpeg'),
(49, 32, './galeria/ba7dbe88a18b115a7df899529f2a83e5.jpeg'),
(50, 33, './galeria/bb6bfb044f83746227872cbee81d37cb.webp'),
(51, 6, './galeria/ab0224c51f7e8d48be22c25a53d6f96a.webp'),
(52, 34, './galeria/c6a02d213ee3ed4a182eecd0cc35a4ac.webp'),
(53, 35, './galeria/b72118d943950533070b3235a68a61f6.webp'),
(54, 37, './galeria/621ef5b92cea8d5ef6ae3a91d6d6a9f0.webp'),
(55, 36, './galeria/38ec53530d87fef3688e196e63291be9.webp'),
(57, 38, './galeria/18bed92e1367b4970a18f98f34c562d2.webp'),
(58, 39, './galeria/425b42f68632fa9af3a167906eefe0f9.webp'),
(59, 39, './galeria/5b6d8fe2ad0f74bd4af88995a140dab7.webp'),
(60, 40, './galeria/8cf85619800f8e4d4dea9af69ee1a512.webp'),
(61, 41, './galeria/7cf16ad04446e5f37a38d9272362f63e.webp'),
(62, 41, './galeria/b9f3edf4d68e1d43942528f59e6cf1a4.webp'),
(63, 42, './galeria/e175be819615d529704948f6bdb8d76a.jpeg'),
(64, 42, './galeria/0aefb6cc95ece8fcac417dec1df23658.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(10) NOT NULL,
  `id_producto` int(5) DEFAULT NULL,
  `id_proveedor` int(10) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `costo_compra` decimal(7,2) DEFAULT NULL,
  `costo_operacion` decimal(7,2) DEFAULT NULL,
  `costo_venta` decimal(7,2) DEFAULT NULL,
  `cantiada` decimal(7,2) DEFAULT 0.00
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
(8, 'Copamex'),
(9, 'BIC'),
(10, 'BACO'),
(11, 'Estrella'),
(12, 'Rayter'),
(13, 'Logitech'),
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
(24, 'Epson'),
(25, 'COUGAR'),
(26, 'GAME FACTOR'),
(27, 'Otro'),
(28, 'Payaso'),
(29, 'Adata'),
(30, 'Post-It Brand');

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
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
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
(1, 3, 10, 100, '00140085', 'Gis Colores Surtidos Caja con 150 Piezas', 'Gises de colores varios, caja con 12 piezas', '1.00', 'CAJA', '162.00', '2.00', '4.00', 1),
(4, 3, 24, 101, '165156156', 'Lápiz con Goma Número 2 Hexagonal con 72 + 12', '• Lápiz Mirado Paper Mate #2 de madera 100% reciclada. • Más suave, más intenso, borrador que no mancha ni rompe el papel.\r\n• Banda roja para mostrar la calidad controlada.\r\n• Material no tóxico.', '10.00', 'CAJA', '331.00', '0.00', '60.00', 1),
(6, 1, 15, 102, '25612561', 'Papel Opalina Carta Blanco 100/H', 'Papel Opalina Tamaño Carta Blanco C/100 hojas', '10.00', 'PIEZA', '82.90', '0.00', '0.00', 1),
(8, 3, 17, 103, '1156156156', 'Bolígrafo de Gel Stick de 5 mm Colores Surtidos Bl', 'Bolígrafo Gel Stick 5mm Negro Blt Paper Mate 2066232', '5.00', 'PIEZA', '81.20', '0.00', '30.00', 1),
(10, 3, 17, 923995, '00730021', '\r\nBolígrafo Punto Mediano Stick Negro Caja con 12 ', 'Bolígrafo Punto Mediano Stick Negro Bic Dura+ Bic', '5.00', 'PIEZA', '49.00', '10.00', '30.00', 1),
(13, 4, 22, 108, '', '\r\nPegamento Lápiz Adhesivo Tubo con 42 g con 5 ', 'Producto prueba', '10.00', 'PAQUETE', '240.00', '1.00', '20.00', 1),
(14, 4, 22, 110, '', 'Pegamento Lápiz Adhesivo Tubo con 22 g Blíster con', 'Crayola 12 colores tamaño mediano', '10.00', 'PAQUETE', '78.30', '15.00', '20.00', 1),
(16, 14, 7, 843875487, '', 'Cuaderno Espiral de 160 Hojas Profesional de Raya', 'Un cuaderno Ferrari tiene una argolla doble tamaño profesional de pasta dura con 160 hojas. El interior tiene las guardas impresas de gran utilidad para los estudiantes que buscan algo que refleje la velocidad y elegnacia que su cuaderno les pueda ofrecer. ', '1.00', 'PIEZA', '225.00', '0.00', '10.00', 1),
(17, 3, 17, 1005, '1156156156', 'Bolígrafo Punto Mediano Stick Borrable', 'Pluma de color azul bic punta mediano', '1.00', 'CAJA', '241.00', '10.00', '50.00', 1),
(19, 14, 7, 180, '2542542424524', 'Cuaderno Espiral de 160 Hojas Profesional de Cuadro Grande Pasta Dura', 'Cuaderno tamaño profesional con doble arillo que incluye 160 hojas de 56 gr con sutil decorado en formato de cuadro grande. Utiliza el bolsillo de papel para guardar tus documentos importantes. Decora tus notas, cuadernos y accesorios con los stickers texturizados. Ideal para 5 materia. Disponible en 18 vanguardistas diseños.', '50.00', 'PIEZA', '217.00', '20.00', '80.00', 1),
(22, 4, 22, 55555, '', 'Pegamento Lápiz Adhesivo Tubo de 20 g Blíster con ', 'Pegamento Lápiz Adhesivo Tubo de 8 g con 30 Piezas', '1.00', 'PIEZA', '49.50', '0.00', '0.00', 1),
(23, 8, 15, 5390133, '', 'Multifuncional de Inyección de Tinta Continua', 'Epson EcoTank L6270\r\n\r\n•Tecnología de impresión: Inyección de tinta.\r\n\r\n• Impresión: Impresión a color.\r\n\r\n•Resolución máxima: 4800 x 1200 DPI.\r\n\r\n•Escaneando: Escaneo a color.\r\n\r\n•Resolución óptica de escáner: 1200 x 1200 DPI.\r\n\r\n•Funciones dúplex: Imprimir.\r\n\r\n• Tamaño máximo de papel ISO A-series: A4.\r\n\r\n• Wifi.\r\n\r\n• Impresión directa.\r\n\r\n• Color del producto: Negro.', '5.00', 'PIEZA', '7255.00', '0.00', '10.00', 1),
(24, 8, 24, 10002, '', 'Multifuncional de Inyección de Tinta Continua L3150', 'IDEAL PARA FAMILIAS, ESTUDIANTES, Y PEQUEÑOS NEGOCIOS\r\n\r\nLa multifunctional inalámbrica EcoTank L3150 te ofrece la revolucionariaimpresión sin cartuchos, con nuevo diseño de tanques frontales, botellas de tinta con llenado automático y codicadas para llenado fácil de cada color.\r\n\r\n• Con gran economía y tranquilidad en la impresión, la EcoTank L3150 te permite imprimir hasta 7.500 páginas a color o 4.500 páginas en negro con calidad profesional y alta velocidad.\r\n\r\n•Imprime cientos de proyectos sin interrupciones, con los juegos de botellas de tinta original Epson que equivalen a unos 35 juegos de cartuchos de tinta , ahorrando hasta 90% en tinta con las botellas de reemplazo de bajo costo.\r\n', '1.00', 'PIEZA', '4589.00', '180.00', '5.00', 1),
(25, 8, 13, 3140030, '', 'Mouse Inalámbrico M170', 'Mouse Inalámbrico M170 Rojo, Negro Logitech ', '1.00', 'PIEZA', '243.00', '40.00', '10.00', 1),
(26, 8, 13, 3140031, '', 'Audífonos Gamer de Diadema Rojo y Negro con Cable 3.5 mm de 2 m G332', '<b>OFERTA HOT SALE<b>\r\nAudifonos Diadema Gamer Negro con Rojo, Cable de 3.5 mm de 2 mts. G332 Logitech ', '1.00', 'PIEZA', '1824.00', '912.00', '5.00', 1),
(27, 1, 2, 60381, '', 'Caja de Papel Scribe Duplicador / 10 paquetes / 5000 hojas / Carta / Blanco / 75 gr', '<ul><li>Su diseño con blancura al 99 % te brinda un contraste perfecto para textos e imágenes.</li><li>Tendrás brillo ideal en tus trabajos ejecutivos, comunicados o trabajos semestrales.</li><li>Esta caja cuenta con 10 paquetes (resmas) de 500 hojas cada una en tamaño carta.</li><li>Es ideal para fotocopiadores e impresoras que requieran resultados profesionales.</li></ul>', '1.00', 'CAJA', '1229.00', '0.00', '10.00', 1),
(28, 6, 25, 2147483647, '', 'Silla Gamer COUGAR ARMOR ONE EVA Tipo Cuero 120Kg', '<div>\r\n        	¿Quieres disfrutar de largas sesiones de juego con absoluta comodidad? Entonces Armor One es lo que necesitas. Estable, ergonómico y personalizable (¡incluye reclinación de 180º y ajuste de altura!), Sentarse en él hace que jugar sea una experiencia de ensueño.<br><br>COMODIDAD INCOMPARABLE<br>COUGAR Armor One le brinda la comodidad que necesita para disfrutar a fondo de largas sesiones de juego. Totalmente ajustable y hecha de materiales de primera calidad, esta silla para juegos también presenta el diseño exclusivo de COUGAR que se ha convertido en un signo de la pasión por los juegos<br><br>DISEÑO DE ESPALDA ALTA QUE ABRAZA EL CUERPO<br>Dotado de un diseño ergonómico creado especialmente para jugadores, COUGAR Armor One ha sido creado para soportar cómodamente su cuerpo. Su estructura de espalda alta soportará adecuadamente su espalda baja, minimizando la tensión en su espalda.<br><br>CUERO DE PVC TRANSPIRABLE<br>COUGAR no ha escatimado en materiales de calidad en lo que respecta a la superficie de Armor ONE. El cuero de PVC transpirable es agradable al tacto y se mantendrá fresco mientras juegas.<br><br>ALMOHADA DE CABEZA Y LUMBAR<br>Para proporcionar soporte y comodidad adicionales, Armor One incluye dos almohadas cómodas para la cabeza y la región lumbar. ¡Céntrate en el juego!<br><br>DISEÑO AJUSTABLE<br>Armor One se adaptará a sus necesidades en todo momento a través de varias opciones de ajuste:<br><br>AJUSTE DE ALTURA DE ELEVACIÓN DEL PISTÓN<br>Ajuste fácilmente la altura del Armor ONE con el elevador de pistón de alta calidad.<br><br>RECLINACIÓN CONTINUA<br>Con Armor One no está restringido a pasos fijos cuando reclina su silla. En lugar de limitarse a unas pocas opciones, puede encontrar el punto exacto que maximiza su comodidad y permanecer allí.<br><br>180º RECLINADO<br>Armor One le permite reclinarse hasta 180º. Manténgase derecho mientras trabaja y acuéstese para descansar cuando haya terminado.<br><br>RESISTENCIA A LA INCLINACIÓN AJUSTABLE<br>La función de inclinación de Armor One le permite, al girar una perilla ubicada debajo de la silla, ajustar su comportamiento, controlando el nivel de resistencia cuando la inclina.<br><br>CALIDAD Y SEGURIDAD<br>Armor One es tan sólido como su nombre lo indica, y ha sido creado con los mejores componentes para garantizar no solo que durará mucho tiempo, sino que también podrá utilizar todas sus increíbles funciones de manera segura.<br><br>MARCO DE ACERO COMPLETO<br>Los huesos de Armor One están hechos de acero, no solo garantizan una durabilidad a largo plazo, sino que también brindan un fuerte soporte para su cuerpo.<br><br>MÁXIMA CALIDAD: CILINDRO DE ELEVACIÓN DE GAS CLASE 4<br>El corazón de cualquier silla de juego es su cilindro de elevación de gas. No hemos escatimado en calidad para este componente vital y decidimos usar un Cilindro de elevación de gas Clase 4 para garantizar una seguridad y confiabilidad incomparables. Con un funcionamiento suave y una resistencia increíble, es la mejor garantía de la calidad de ARMOR S ROYAL.<br><br>ESPECIFICACIONES<br>Material de Base: Acero<br>Superficie: Cuero de PVC transpirable<br>Direcciones de descanso de brazo: 2D<br>Límite de peso: 120kg\r\n        </div>', '1.00', 'PIEZA', '7500.00', '2181.00', '2.00', 1),
(29, 6, 27, 50027, '', 'Escritorio para Oficina Red Top FID0746R / Negro / Metal / Cristal', '<ul><li>Sus medidas de 98 cm de alto, 119 cm de ancho y 50 cm de profundidad lo hacen un mueble con tamaño ideal, sencillo de acomodar en todo tipo de espacios.</li><li>Su altura es ideal para que puedas trabajar en la silla de tu elección.</li><li>El estar hecho de vidrio en color negro lo hace un mueble elegante que combinará con tu más fino mobiliario.</li></ul>', '0.00', 'PIEZA', '2500.00', '1050.00', '1.00', 1),
(30, 6, 27, 90003, '', 'Escritorio para Oficina Office Depot Odyssey / Café con negro / MDF / Metal', '<ul><li>Su extraordinario diseño con divisiones de madera en su respaldo te brinda una imagen contemporánea para tu habitación o estudio.</li><li>Tiene superficie lisa para que coloques encima tus lapiceros, libros, carpetas, laptop o computadora.</li><li>La estructura metálica inferior color negro te brinda estabilidad para que siempre saques las mejores notas y tengas los apuntes más uniformes.</li><li>Está equipado con soportes inferiores antideslizantes, dibuja, realiza trazos, operaciones, estarás seguro de que tu escritorio se quedará en su lugar.</li></ul>', '1.00', 'PIEZA', '1969.00', '869.00', '1.00', 1),
(31, 6, 27, 1000022, '', 'Escritorio Minimalista para Oficina Urban Design 3 Repisas blanco Urban Design', 'Moderniza tu espacio de trabajo en casa, home office u oficina con este moderno escritorio minimalista para oficina que combina con todo tipo de decoración. Combina con todo tipo de decoración. Prácticas repisas en tres niveles. Organiza libros, documentos, fotos, impresora, artículos de oficina o lo que tú quieras. Sólida base metálica para mejor soporte. Repisas de madera aglomerada. Resistente y durable. Ideal oficina y hogar. Fácil de armar, no requiere herramientas especiales. Colores disponibles: blanco, marrón y chocolate.', '1.00', 'PIEZA', '1599.00', '399.00', '1.00', 1),
(32, 1, 8, 44792, '', 'Papel Bond Carta Facia Bond Premium / Paquete 500 hojas blancas', '<ul><li>Su paquete contiene 500 hojas bond de calidad superior en tamaño carta.</li><li>Te ofrece una blancura de 99% y gramaje a 75 gr.</li><li>Tiene certificación en Tecnología Colorlok para secado ultrarrápido, colores más intensos y negros más concentrados.</li><li>Su desempeño alcanza hasta las 170 páginas por minuto.</li><li>Es compatible con todos los equipos de impresión (láser, inkjet, offset digital), copiadoras y faxes.</li></ul>', '1.00', 'PIEZA', '139.00', '20.00', '50.00', 1),
(33, 1, 2, 100041627, '', 'Papel Bond Carta Scribe Copy Paper Plus / Paquete 500 hojas blancas', 'PAPEL COPY PAPER CTA RESMA 500', '1.00', 'PIEZA', '140.00', '30.00', '100.00', 1),
(34, 2, 11, 1690010, '', 'Papel Bond de Cuadro Grande', 'Papel Bond de 63 x 84 cm Cuadro Grande Estrella, Paquete con 100 pz', '1.00', 'PAQUETE', '350.00', '0.00', '1000.00', 1),
(35, 2, 11, 1690067, '', 'Papel Bond Cuadro Chico', 'Papel Bond de 63 x 84 cm Cuadro Chico Estrella 0130', '1.00', 'PAQUETE', '350.00', '0.00', '100.00', 1),
(36, 7, 28, 60075, '', 'Infladora Manual de Globos', 'Infladora Manual de Globos Payaso Varios Colores', '1.00', 'PIEZA', '38.90', '0.00', '10.00', 1),
(37, 7, 28, 60033, '', 'Globo Redondo Número 9 Bolsa con 100 Piezas ', 'Globo Redondo No. 9 Bol C/100 Pzas. Varios Colores', '1.00', 'PIEZA', '102.00', '0.00', '10.00', 1),
(38, 7, 28, 60078, '', 'Globo con Figura Corazón Rojo Cereza Bolsa con 50 Piezas', 'Globo con Figura Corazón Rojo Cereza Bol C/50 Pzas. ', '1.00', 'PIEZA', '76.40', '0.00', '1.00', 1),
(39, 3, 27, 2370020, '', 'Crayón Escolar Triangular Jumbo Bote con 28 Colores', '<div style=\"\">       \r\n    • Set de crayones de cera jumbo, con 28 colores diferentes, intensos y brillantes.<br><br>\r\n    • Ofrecen una sensación de suavidad al colorear, ideal para crear líneas gruesas y colorear superficies grandes.<br><br>\r\n    • Larga duración, excelente rendimiento, los Pelicrayones son resistentes a roturas y agua.<br><br>\r\n    • Ideales para que los peques (2-3 años) hagan sus primeros trazos y desarrollen su motricidad, gracias a su tamaño, grosor y diseño ergonómico.<br><br>\r\n    • No tóxicos, ¡pueden disfrutarlos con toda seguridad!<br><br>\r\n    • ¡Busca nuestras ediciones especiales! Hasta 48 tonos disponibles en colores básicos, pastel y metálicos, color mix y glitter<br><br>\r\n</div>', '1.00', 'PAQUETE', '109.00', '0.00', '10.00', 1),
(40, 3, 20, 6050008, '', 'Crayón Escolar Redondo Jumbo Bote con 28 Colores ', 'Crayón Escolar Redondo Jumbo Bte C/28 Colores Crayola ', '1.00', 'PIEZA', '131.00', '0.00', '10.00', 1),
(41, 8, 29, 6690072, '', 'Memoria USB de 32 GB UV220 Verde con Rosa', 'Memoria USB de 32 GB UV220 Verde/Rosa Adata', '1.00', 'PIEZA', '110.00', '0.00', '5.00', 1),
(42, 3, 30, 2234352, '', 'Notas Adhesivas 3M Post-It Super Sticky Marrakesh / Colores surtidos / 7.6 x 7.6 cm', '<ul><li>Cuentan con un adhesivo doblemente fuerte, lo que les permite poder quedarse adheridas en superficies verticales tales como paredes, puertas o ventanas.</li><li>Su adhesivo les permite reposicionarse para que las puedas usar una y otra vez.</li><li>Son ideales para pegar recordatorios en tu refrigerador, la pared de tu cuarto o inclusive en tu oficina.</li><li>Hechas con papel proveniente de bosques certificados, renovables y gestionados de forma responsable.</li></ul>', '1.00', 'PIEZA', '103.00', '35.00', '100.00', 1);

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, 'E', 'COMMERCE', NULL, 'admin@tienda.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'Tienda Virtual', NULL),
(314206372, 'Christian', 'Pioquinto', 'Hernandez', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Programmer', '5565241529');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_pedido`
--

CREATE TABLE `venta_pedido` (
  `id_venta_pedido` bigint(20) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `id_dir_entrega` int(5) DEFAULT NULL,
  `id_vendedor` int(5) DEFAULT NULL,
  `subtotal` decimal(7,2) DEFAULT NULL,
  `descuento` decimal(7,2) DEFAULT NULL,
  `iva` decimal(7,2) DEFAULT NULL,
  `total` decimal(7,2) DEFAULT NULL,
  `costo_envio` decimal(7,2) NOT NULL DEFAULT 0.00,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `forma_entrega` varchar(30) DEFAULT NULL,
  `forma_pago` varchar(30) DEFAULT NULL,
  `estatus_pago` varchar(30) DEFAULT NULL,
  `estatus_envio` varchar(30) DEFAULT NULL,
  `no_guia` text DEFAULT NULL,
  `estatus_venta` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_pedido`
--

INSERT INTO `venta_pedido` (`id_venta_pedido`, `id_usuario`, `id_dir_entrega`, `id_vendedor`, `subtotal`, `descuento`, `iva`, `total`, `costo_envio`, `create_at`, `update_at`, `forma_entrega`, `forma_pago`, `estatus_pago`, `estatus_envio`, `no_guia`, `estatus_venta`) VALUES
(22052404665371, 152957130787851, 3, 1, '251.16', '0.50', '47.84', '299.00', '150.00', '2022-05-25 03:15:00', '2022-05-25 03:15:00', 'ENVIO A DOMICILIO', 'Pago por Deposito/Transferenci', 'Esperando Pago', 'EN PREPRACION', NULL, 1),
(22052426800749, 152957130787851, 2, 1, '806.40', '21.00', '153.60', '960.00', '0.00', '2022-05-25 02:40:20', '2022-05-25 02:40:20', 'ENVIO A DOMICILIO', 'Pago por Deposito/Transferenci', 'Esperando Pago', 'EN PREPRACION', NULL, 1),
(22052486510922, 152957130787851, 2, 1, '17.22', '17.50', '3.28', '20.50', '150.00', '2022-05-25 02:39:10', '2022-05-25 02:39:10', 'ENVIO A DOMICILIO', 'Pago por Deposito/Transferenci', 'Esperando Pago', 'EN PREPRACION', NULL, 1),
(22052607175825, 152957130787851, 4, 1, '4683.84', '35.00', '892.16', '5576.00', '0.00', '2022-05-26 18:49:52', '2022-05-26 18:49:52', 'ENVIO A DOMICILIO', 'Pago en Sucursal', 'Esperando Pago', 'EN PREPRACION', NULL, 1);

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
  MODIFY `id_categoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_dir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id_ingreso` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  ADD CONSTRAINT `venta_pedido_ibfk_3` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_pedido_ibfk_4` FOREIGN KEY (`id_dir_entrega`) REFERENCES `direcciones` (`id_dir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
