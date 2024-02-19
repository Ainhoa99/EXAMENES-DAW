-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2023 a las 12:28:24
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
-- Base de datos: `juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreCategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Accion'),
(2, 'Aventura'),
(3, 'Deportes'),
(4, 'Conducción'),
(5, 'Plataformas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `year` varchar(8) NOT NULL,
  `studio` varchar(64) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `titulo`, `year`, `studio`, `poster`, `synopsis`, `id_categoria`) VALUES
(1, 'Twin Blades ', '2011', 'Press Start Studio', 'Twin Blades.jpg', 'mezcla un mundo medieval con el estilo manga.', 1),
(2, 'Gravity Crash ', '2009', 'SCEA', 'Gravity Crash.jpg', 'Vaqueros pew pew 2.', 1),
(3, 'Angry Birds ', '2011', 'Clickgamer', 'Angry Birds.jpg', 'divertido y desenfadado juego puzzle, donde nuestra misión será la de ayudar a unos dulces\n        pajaritos a vengarse de los cerdos por el secuestro de sus huevos.', 1),
(4, 'Bakemonogatari ', '2012', 'Bandai Namco', 'Bakemonogatari.jpg', 'un juego de aventura desarrollado por Gunstar Studio ', 2),
(5, 'Rewrite', '2020', 'Prototype', 'Rewrite.jpg', 'una novela visual protagonizada por un joven estudiante, llamado Kotarou Tennouji,', 3),
(6, 'Lets Golf!', '2018', 'PlayGround', 'Lets Golf!.jpg', 'Deportes, Golf', 3),
(7, 'Blood Bowl', '2018', 'Digital Bros', 'Blood Bowl.jpg', 'juego deportivo que enfrenta a humanos y orcos en un deporte similar al fútbol americano.', 3),
(8, 'Super Mario Maker', '2015', 'Captain toad ', 'mario.jpg', 'juego de plataformas protagonizado por Mario.', 1),
(9, 'Pokemon Pupura', '2022', 'game Freak ', 'pokemon_purpura.jpg', 'los juego obtiene criaturas conocidas como pokemons.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `juegos_id_categoria_foreign` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
