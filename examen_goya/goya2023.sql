-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2023 a las 11:23:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `goya2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cod_cate` int(11) NOT NULL,
  `nom_cate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cod_cate`, `nom_cate`) VALUES
(1, 'Mejor película'),
(2, 'Mejor dirección'),
(3, 'Mejor dirección novel'),
(4, 'Mejor guion original'),
(5, 'Mejor guion adaptado'),
(6, 'Mejor música original'),
(7, 'Mejor canción original'),
(8, 'Mejor actor protagonista'),
(9, 'Mejor actriz protagonista'),
(10, 'Mejor actor de reparto'),
(11, 'Mejor actriz de reparto'),
(12, 'Mejor actor revelación'),
(13, 'Mejor actriz revelación'),
(14, 'Mejor dirección de producción'),
(15, 'Mejor dirección de fotografía'),
(16, 'Mejor montaje'),
(17, 'Mejor dirección de arte'),
(18, 'Mejor diseño de vestuario'),
(19, 'Mejor maquillaje y peluquería'),
(20, 'Mejor sonido'),
(21, 'Mejores efectos especiales'),
(22, 'Mejor película de animación'),
(23, 'Mejor película documental'),
(24, 'Mejor película iberoamericana'),
(25, 'Mejor película europea'),
(26, 'Mejor cortometraje de ficción'),
(27, 'Mejor cortometraje documental'),
(28, 'Mejor cortometraje de animación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nominaciones`
--

CREATE TABLE `nominaciones` (
  `cod_nomi` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `nom_nomi` varchar(200) NOT NULL,
  `pelicula` int(11) NOT NULL,
  `ganador` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nominaciones`
--

INSERT INTO `nominaciones` (`cod_nomi`, `categoria`, `nom_nomi`, `pelicula`, `ganador`) VALUES
(1, 1, 'María Zamora Morcillo, Sergi Moreno, Stefan Schmitz, Tono Folguera', 4, 0),
(2, 1, 'Anne-Laure Labadie, Eduardo Villanueva, Ibon Cormenzana, Ignasi Estapé, Jean Labadie, Nacho Lavilla, Rodrigo Sorogoyen, Sandra Tapia, Thomas Pibarot', 9, 1),
(3, 1, 'Manu Calvo, Marisa Fernández Armenteros, Nahikari Ipiña', 14, 0),
(4, 1, 'Alex Lafuente, Valérie Delpierre', 29, 0),
(5, 1, 'Alberto Félez, Domingo Corral, Gervasio Iglesias, José Antonio Félez', 45, 0),
(6, 2, 'Carla Simón', 4, 0),
(7, 2, 'Rodrigo Sorogoyen', 9, 1),
(8, 2, 'Pilar Palomero', 29, 0),
(9, 2, 'Carlos Vermut', 43, 0),
(10, 2, 'Alberto Rodríguez', 45, 0),
(11, 3, 'Carlota Pereda', 12, 0),
(12, 3, 'Alauda Ruiz de Azúa', 14, 1),
(13, 3, 'Elena López Riera', 18, 0),
(14, 3, 'Juan Diego Botto', 20, 0),
(15, 3, 'Mikel Gurrea', 51, 0),
(16, 4, 'Arnau Vilaró, Carla Simón', 4, 0),
(17, 4, 'Isabel Peña, Rodrigo Sorogoyen', 9, 0),
(18, 4, 'Alauda Ruiz de Azúa', 14, 0),
(19, 4, 'Carlos Vermut', 43, 0),
(20, 4, 'Alberto Rodríguez, Rafael Cobos', 45, 0),
(21, 5, 'Carlota Pereda', 12, 0),
(22, 5, 'Paul Urkijo Alijo', 24, 0),
(23, 5, 'Guillem Clua, Oriol Paulo', 40, 0),
(24, 5, 'David Muñoz, Félix Viscarret', 46, 0),
(25, 5, 'Fran Araújo, Isa Campo, Isaki Lacuesta', 54, 0),
(26, 6, 'Olivier Arson', 9, 0),
(27, 6, 'Aránzazu Calleja, Maite Arroitajauregi Mursego', 24, 0),
(28, 6, 'Iván Palomares', 37, 0),
(29, 6, 'Fernando Velázquez', 40, 0),
(30, 6, 'Julio de la Rosa', 45, 0),
(31, 7, 'En los márgenes - Compositores: Eduardo Cruz, María Rozalén', 20, 0),
(32, 7, 'Izena duena bada - Compositores: Aránzazu Calleja, Maite Arroitajauregi Mursego, Paul Urkijo Alijo', 24, 0),
(33, 7, 'Un paraíso en el sur - Compositores: Paloma Peñarrubia Ruiz,Vanesa Benítez Zamora', 34, 0),
(34, 7, 'Sintiéndolo mucho - Compositores: Joaquín Sabina,Leiva', 49, 0),
(35, 7, 'Batalla - Compositores: Joseba Beristain', 56, 0),
(36, 8, 'Denis Ménochet', 9, 0),
(37, 8, 'Luis Tosar', 20, 0),
(38, 8, 'Nacho Sánchez', 43, 0),
(39, 8, 'Javier Gutiérrez', 45, 0),
(40, 8, 'Miguel Herrán', 45, 0),
(41, 9, 'Marina Foïs', 9, 0),
(42, 9, 'Laia Costa', 14, 0),
(43, 9, 'Anna Castillo', 22, 0),
(44, 9, 'Bárbara Lennie', 40, 0),
(45, 9, 'Vicky Luengo', 51, 0),
(46, 10, 'Diego Anido', 9, 0),
(47, 10, 'Luis Zahera', 9, 0),
(48, 10, 'Ramón Barea', 14, 0),
(49, 10, 'Fernando Tejero', 45, 0),
(50, 10, 'Jesús Carroza', 45, 0),
(51, 11, 'Marie Colomb', 9, 0),
(52, 11, 'Carmen Machi', 12, 0),
(53, 11, 'Susi Sánchez', 14, 0),
(54, 11, 'Penélope Cruz', 20, 0),
(55, 11, 'Ángela Cervantes', 29, 0),
(56, 12, 'Albert Bosch', 4, 0),
(57, 12, 'Jordi Pujol Dolcet', 4, 0),
(58, 12, 'Mikel Bustamante', 14, 0),
(59, 12, 'Christian Checa', 20, 0),
(60, 12, 'Telmo Irureta', 25, 0),
(61, 13, 'Anna Otín', 4, 0),
(62, 13, 'Laura Galán', 12, 0),
(63, 13, 'Luna Pamies', 18, 0),
(64, 13, 'Valèria Sorolla', 25, 0),
(65, 13, 'Zoe Stein', 43, 0),
(66, 14, 'Elisa Sirvent', 4, 0),
(67, 14, 'Carmen Sánchez de la Vega', 9, 0),
(68, 14, 'Sara García', 12, 0),
(69, 14, 'María José Díez', 14, 0),
(70, 14, 'Manuela Ocón Aburto', 45, 0),
(71, 15, 'Daniela Cajías', 4, 0),
(72, 15, 'Álex de Pablo', 9, 0),
(73, 15, 'Jon D. Domínguez', 14, 0),
(74, 15, 'Arnau Valls Colomer', 15, 0),
(75, 15, 'Álex Catalán', 45, 0),
(76, 16, 'Ana Pfaff', 4, 0),
(77, 16, 'Alberto del Campo', 9, 0),
(78, 16, 'Andrés Gil', 14, 0),
(79, 16, 'José M. G. Moyano', 45, 0),
(80, 16, 'Fernando Franco, Sergi Díes', 54, 0),
(81, 17, 'Mónica Bernuy', 4, 0),
(82, 17, 'José Tirado', 9, 0),
(83, 17, 'Melanie Antón', 31, 0),
(84, 17, 'Sylvia Steinbrecht', 40, 0),
(85, 17, 'Pepe Domínguez del Olmo', 45, 0),
(86, 18, 'Paola Torres', 9, 0),
(87, 18, 'Nerea Torrijos', 24, 0),
(88, 18, 'Suevia Sampelayo', 31, 0),
(89, 18, 'Alberto Valcárcel', 40, 0),
(90, 18, 'Cristina Rodríguez', 42, 0),
(91, 18, 'Fernando García', 45, 0),
(92, 19, 'Irene Pedrosa, Jesús Gil', 9, 0),
(93, 19, 'Paloma Lozano, Nacho Díaz', 12, 0),
(94, 19, 'Sarai Rodríguez, Raquel González, Óscar del Monte', 31, 0),
(95, 19, 'Montse Sanfeliu, Carolina Atxukarro, Pablo Perona', 40, 0),
(96, 19, 'Yolanda Piña, Félix Terrero', 45, 0),
(97, 20, 'Eva Valiño, Thomas Giorgi, Alejandro Castillo', 4, 0),
(98, 20, 'Aitor Berenguer, Fabiola Ordoyo, Yasmina Praderas', 9, 0),
(99, 20, 'Asier González, Eva de la Fuente López, Roberto Fernández', 14, 0),
(100, 20, 'Daniel de Zayas, Miguel Huete, Pelayo Gutiérrez, Valeria Arcieri', 45, 0),
(101, 20, 'Amanda Villavieja, Eva Valiño, Marc Orts, Alejandro Castillo', 54, 0),
(102, 21, 'Mariano García Marty, Jordi Costa', 1, 0),
(103, 21, 'Óscar Abades, Ana Rubio', 9, 0),
(104, 21, 'Jon Serrano, David Heras', 24, 0),
(105, 21, 'Lluís Rivera, Laura Pedro', 42, 0),
(106, 21, 'Esther Ballesteros, Ana Rubio', 45, 0),
(107, 22, 'Hugo Castro, Jone Unanua', 11, 0),
(108, 22, 'Adriana Malfatti Chen, Jason Kaminsky, Julio Soto Gúrpide, Karl Richards, Peter Rogers, Rocco Pucillo', 23, 0),
(109, 22, 'Carlos Juárez, Diogo Carvalho, Emmanuel Quillet, Martine Vidalenc, Nuno Beato, Xosé Zapata', 39, 0),
(110, 22, 'Álvaro Augustin, Edmon Roch, Ghislain Barrois, Javier Ugarte, Marc Sabé, Nicolás Matji', 52, 0),
(111, 22, 'Chelo Loureiro, Iván Miñambres, Nicolás Schmerkin', 56, 0),
(112, 23, 'Guillermo Rojas', 3, 0),
(113, 23, 'Isabel Coixet', 19, 0),
(114, 23, 'Gaizka Urresti', 35, 0),
(115, 23, 'Alberto Aranda Velasco, Bernat Saumell, Dani de la Orden, Kike Maíllo, Toni Carrizosa', 48, 0),
(116, 23, 'Fernando León de Aranoa, Francisco Cordero, Patricia de Muns, Ricardo Coeto, Sergi Reitg', 49, 0),
(117, 24, 'Chile', 2, 0),
(118, 24, 'Argentina', 7, 0),
(119, 24, 'Colombia', 28, 0),
(120, 24, 'México', 47, 0),
(121, 24, 'Bolivia', 57, 0),
(122, 25, 'Reino Unido', 10, 0),
(123, 25, 'Italia', 21, 0),
(124, 25, 'Noruega', 30, 0),
(125, 25, 'Francia', 36, 0),
(126, 25, 'Bélgica', 55, 0),
(127, 26, 'León Siminiani', 8, 0),
(128, 26, 'Jaime Olías', 13, 0),
(129, 26, 'Estibaliz Urresola Solaguren', 16, 0),
(130, 26, 'Pedro Díaz', 26, 0),
(131, 26, 'Eva Libertad, Nuria Muñoz Ortín', 50, 0),
(132, 27, 'Robert Muñoz Rupérez', 17, 0),
(133, 27, 'Adán Aliaga', 27, 0),
(134, 27, 'Amaia Remírez García, Raúl de la Fuente', 41, 0),
(135, 27, 'Nerea Barros', 44, 0),
(136, 27, 'Rafa Arroyo', 53, 0),
(137, 28, 'Carlos Fernández de Vigo, Lorena Ares', 5, 0),
(138, 28, 'Carmen Córdoba González', 6, 0),
(139, 28, 'Omar Al Abdul Razzak Martínez, Shira Ukrainitz', 32, 0),
(140, 28, 'Alicia Núñez Puerto', 33, 0),
(141, 28, 'Pablo Polledri', 38, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `cod_peli` int(11) NOT NULL,
  `nom_peli` varchar(50) NOT NULL,
  `cartel` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`cod_peli`, `nom_peli`, `cartel`) VALUES
(1, '13 exorcismos', '13_EXORCISMOS_TEASER_ONLINE_AAFF_small-100x142.jpg'),
(2, '1976', 'cartel_1976-100x142.jpg'),
(3, 'A las mujeres de España. María Lejárraga', 'CARTEL_MAIL-100x142.jpg'),
(4, 'Alcarràs', 'alcarras-100x142.jpg'),
(5, 'Amanece la noche más larga', 'CARTEL-AMANECE-LA-NOCHE-MAS-LARGA-100x142.jpg'),
(6, 'Amarradas', 'CARTEL-AMARRADAS-100x142.jpg'),
(7, 'Argentina, 1985', 'Argentina__1985_-_Poster-100x142.jpg'),
(8, 'Arquitectura Emocional 1959', 'ARQUITECTUA_EMOCIONAL_Cartel-100x142.jpeg'),
(9, 'As bestas', 'AsBestas_AAFF_RGB_70X100_150ppp_1127_bajapx-100x142.jpg'),
(10, 'Belfast', 'BLF_DIGITALONESHEET_Esp-100x142.jpg'),
(11, 'Black is Beltza II: Ainhoa', 'BBII_POSTER_GR01_V4-100x142.jpg'),
(12, 'Cerdita', 'CERDITA-Poster-100x142.jpg'),
(13, 'Chaval', 'CHAVAL_POSTER-100x142.png'),
(14, 'Cinco lobitos', 'CARTEL_DEF_70X100_5LOBITOS-100x142.jpg'),
(15, 'Competencia oficial', 'CARTEL_C.O.-100x142.jpeg'),
(16, 'Cuerdas', 'PosterCUERDAS_actJUL22_curtas-100x142.jpg'),
(17, 'Dancing with Rosa', '320x457-cartel-Dancing-with-rosa-presmiosgoya.com_-100x142.png'),
(18, 'El agua', 'elagua-100x142.jpg'),
(19, 'El sostre groc (El techo amarillo)', 'ElSostregroc-100x142.jpg'),
(20, 'En los márgenes', 'ENLOSMARGENES_AF_FINAL-100x142.jpg'),
(21, 'Fue la mano de Dios', 'cartel_manodios-100x142.jpeg'),
(22, 'Girasoles silvestres', 'Girasoles-silvestres_POSTER_-100x142.jpg'),
(23, 'Inspector Sun y la maldición de la viuda negra', 'INSPECTOR_SUN_POSTER_A_ESP_DELIVERY_low-100x142.jpg'),
(24, 'Irati', 'CARTEL-IRATI-def-def-def-copia-100x142.jpg'),
(25, 'La consagración de la primavera', 'LaConsagracionDeLaPrimavera_70x100_Final_02_page-0001-100x14.jpg'),
(26, 'La entrega', 'POSTER_OFICIAL_LA_ENTREGA-100x142.jpg'),
(27, 'La gàbia', 'Cartel_LaGavia_web-100x142.jpg'),
(28, 'La jauría', 'lajauria-100x142.jpeg'),
(29, 'La Maternal', 'Cartel-LaMaternal-vertical-100x142.jpg'),
(30, 'La peor persona del mundo', 'peorpersonaok-100x142.jpg'),
(31, 'La Piedad', 'Unknown-100x142.jpeg'),
(32, 'La Prima Cosa', 'LPC_poster_festivales_800px-100x142.jpg'),
(33, 'La primavera siempre vuelve', 'La_primavera_siempre_vuelve_Cartel_con_laureles_GOYA-100x14.jpeg'),
(34, 'La vida chipén', 'cartel-100x142.jpg'),
(35, 'Labordeta, un hombre sin más', 'LABORDETA_Cartel-100x142.jpg'),
(36, 'Las ilusiones perdidas', 'lasilusiones-100x142.jpg'),
(37, 'Las niñas de cristal', 'POSTER_LNDC-100x142.png'),
(38, 'Loop', '02_cartel_loop_800px_goya_72ppi-100x142.jpg'),
(39, 'Los demonios de barro (Os demos de barro)', 'Poster_Vertical_LOS_DEMONIOS_DE_BARRO_ES_GAL-100x142.jpg'),
(40, 'Los renglones torcidos de Dios', 'Los_Renglones_-100x142.jpeg'),
(41, 'Maldita. A Love Song to Sarajevo', 'MALDITA_Cartel-GOYA-v6-ALTA-100x142.jpg'),
(42, 'Malnazidos', 'AAFF_MLNZ_POSTER_25_01_2022-100x142.jpg'),
(43, 'Mantícora', 'MANT_TEASER_ESTRENO-100x142.jpg'),
(44, 'Memoria', 'CARTEL-MEMORIA-100x142.jpg'),
(45, 'Modelo 77', 'MODELO_77-CMYK_680x980_Final-100x142.jpg'),
(46, 'No mires a los ojos', 'NO_MIRES_AF_REDES-100x142.jpg'),
(47, 'Noche de fuego', 'cartel_definitivo_ok-100x142.jpg'),
(48, 'Oswald. El falsificador', 'Oswald-El-Falsificardor-MagaZinema-100x142.jpg'),
(49, 'Sintiéndolo mucho', 'sintiendolo_cartel-100x142.jpg'),
(50, 'Sorda', 'CARTEL-SORDA-100x142.jpg'),
(51, 'Suro', 'Suro_70x100_5MB-100x142.jpg'),
(52, 'Tadeo Jones 3. La tabla esmeralda', 'Poster_Oficial_Definitivo_70x100-100x142.jpg'),
(53, 'Trazos del alma', 'Cartel-Trazos-del-Alma-V2-Laureles-20221109-100x142.jpg'),
(54, 'Un año, una noche', 'UAUN-oficial_2008px-100x142.jpg'),
(55, 'Un pequeño mundo', 'unpequenomundo-100x142.jpg'),
(56, 'Unicorn Wars', 'UW_CARTEL_OFICIAL_800px-100x142.jpg'),
(57, 'Utama', 'utama-100x142.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cod_cate`);

--
-- Indices de la tabla `nominaciones`
--
ALTER TABLE `nominaciones`
  ADD PRIMARY KEY (`cod_nomi`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `pelicula` (`pelicula`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`cod_peli`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nominaciones`
--
ALTER TABLE `nominaciones`
  ADD CONSTRAINT `nominaciones_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`cod_cate`),
  ADD CONSTRAINT `nominaciones_ibfk_2` FOREIGN KEY (`pelicula`) REFERENCES `peliculas` (`cod_peli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
