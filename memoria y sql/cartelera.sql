-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2018 a las 14:01:37
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartelera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

CREATE TABLE `cine` (
  `id_Cine` int(10) NOT NULL,
  `nombre_Cine` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `direcion_Cine` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `municipio_Cine` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cine`
--

INSERT INTO `cine` (`id_Cine`, `nombre_Cine`, `direcion_Cine`, `municipio_Cine`) VALUES
(1, 'Cinesa La Moraleja', 'Av. Europa, 13-15, C.C. Moraleja Green', 'Alcobendas'),
(2, 'Kinépolis', 'Calle Edgar Neville s/n, Ciudad de la Imagen', 'Pozuelo de Alarcón'),
(3, 'Cinesa Heron City Las Rozas', 'Juan Ramon Jiménez, 3, salida 19 N VI', 'Las Rozas'),
(4, 'Princesa', 'Calle de la Princesa, 3', 'Madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_Pelicula` int(11) NOT NULL,
  `titulo_Pelicula` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `director_Pelicula` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `interprete_Pelicula` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_Pelicula` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `duracion_Pelicula` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `sinopsis_Pelicula` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_Pelicula`, `titulo_Pelicula`, `director_Pelicula`, `interprete_Pelicula`, `categoria_Pelicula`, `duracion_Pelicula`, `sinopsis_Pelicula`) VALUES
(1, '300', 'Zack Snyder', 'Gerard Butler, Lena Headey, Dominic West, Davis Wenham,   Vincent Regan, Michael Fassbender, Tom Wisdom, Andrew Pleavin, Andrew Tiernan, Rodrigo Santoro', 'Bélica ,Histórica o biográfica', '117 min', '\n				El Rey Leónidas y 300 espartanos lucharon hasta la muerte contra Jerjes y su gran ejército persa en la antigua Batalla de las Termópilas. Su valor y \nsacrificio consiguió que toda Grecia se uniera en contra del enemigo persa, desafiando al destino y fundando las bases de la democracia.\n			'),
(2, '300', 'Zack Snyder', 'Gerard Butler, Lena Headey, Dominic West, Davis Wenham,   Vincent Regan, Michael Fassbender, Tom Wisdom, Andrew Pleavin, Andrew Tiernan, Rodrigo Santoro', 'Bélica ,Histórica o biográfica', '117 min', '\n				El Rey Leónidas y 300 espartanos lucharon hasta la muerte contra Jerjes y su gran ejército persa en la antigua Batalla de las Termópilas. Su valor y \nsacrificio consiguió que toda Grecia se uniera en contra del enemigo persa, desafiando al destino y fundando las bases de la democracia.\n			'),
(3, 'En busca de la felicidad', 'Gabriele Muccino', 'Will Smith, Jaden Smith, Thandie Newton, Brian Howe, James Karen, Dan Castellaneta,   Kurt Fuller, Takayo Fischer', 'Drama', '117 min', '\n				Chris Gardner es un padre en apuros. A pesar de su valía, su situación económica empeora cada día y su mujer le abandona incapaz de soportar \nesa situación de precariedad. Chris se queda solo en compañía de su hijo de cinco años, un niño en el que se apoyará para salir del bache y con \nel que tendrá que compartir la etapa más dura de su vida pero a la vez la más enriquecedora. Sin techo bajo el que vivir, Chris y su hijo comienzan \nun largo peregrinar por casas de acogida o estaciones de autobús.\n			'),
(4, 'En busca de la felicidad', 'Gabriele Muccino', 'Will Smith, Jaden Smith, Thandie Newton, Brian Howe, James Karen, Dan Castellaneta,   Kurt Fuller, Takayo Fischer', 'Drama', '117 min', '\n				Chris Gardner es un padre en apuros. A pesar de su valía, su situación económica empeora cada día y su mujer le abandona incapaz de soportar \nesa situación de precariedad. Chris se queda solo en compañía de su hijo de cinco años, un niño en el que se apoyará para salir del bache y con \nel que tendrá que compartir la etapa más dura de su vida pero a la vez la más enriquecedora. Sin techo bajo el que vivir, Chris y su hijo comienzan \nun largo peregrinar por casas de acogida o estaciones de autobús.\n			'),
(5, 'Las Hermanas Bolena', 'Justin Chadwick', 'Natalie Portman, Scarlett Johansson, Eric Bana, David Morrisey, Kristin Scott Thomas, Mark Rylance, Jim Sturgess, Ana Torrent', 'Drama', '', '\n				Para sir Tomás Bolena, sus dos hijas, Ana y su hermana menor María, son dos valiosas piezas de mercancía a las \nque hay que tutelar con sumo cuidado para que obtengan el máximo provecho social y económico para la familia.\n			'),
(6, 'Caramel', 'Nadine Labaki', 'Nadine Labaki, Yasmine Al Masri, Joanna Moukarzel, Gisèle Aouad, Adel Karam,  Siham Haddad, Aziza Semaan, Fatme Safa, Dimitri Stancofski, Fadia Stella, Ismail Antar', 'Drama', '', '\n				En Beirut, cinco mujeres coinciden habitualmente en un salón de belleza, un microcosmos lleno de colorido y sensualidad en el que varias \ngeneraciones se encuentran, hablan y se hacen confidencias.\n			'),
(7, 'AzulOscuro CasiNegro', 'Daniel Sánche Arévalo', 'Quim Gutiérrez, Marta Etura, Raúl Arévalo,    Antonio de la Torre, Héctor Colomé, Eva Pallarés', 'Drama', '', '\n				Desde que su padre sufriera un infarto cerebral, Jorge se hace cargo de su trabajo. Al tiempo que trabaja, intenta realizar estudios universitarios \ny cuidar a su padre. Cuando conoce a Paula, amiga de su hermano, Jorge empieza a sentirse menos responsable y enfrentarse a sus deseos.\n			');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id_Sesion` int(11) NOT NULL,
  `horas_Sesion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dia_Sesion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_Cine` int(10) NOT NULL,
  `id_Pelicula` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id_Sesion`, `horas_Sesion`, `dia_Sesion`, `id_Cine`, `id_Pelicula`) VALUES
(2, '22:40', 'lunes', 1, 1),
(3, '22:40', 'martes', 1, 1),
(4, '22:40', 'miercoles', 1, 1),
(5, '22:40', 'jueves', 1, 1),
(6, '01:05', 'viernes', 1, 1),
(7, '01:05', 'sabado', 1, 1),
(8, '01:05', 'visp. fest.', 1, 1),
(9, '16:30 / 19:30 / 22:00', 'lunes', 2, 1),
(10, '16:30 / 19:30 / 22:00', 'martes', 2, 1),
(11, '16:30 / 19:30 / 22:00', 'miercoles', 2, 1),
(12, '16:30 / 19:30 / 22:00', 'jueves', 2, 1),
(13, '00:30', 'viernes', 2, 1),
(14, '00:30', 'sabado', 2, 1),
(15, '01:05', 'visp. fest.', 2, 1),
(16, '16:30 / 19:30 / 22:00', 'jueves', 2, 2),
(17, '00:30', 'viernes', 2, 2),
(18, '00:30', 'sabado', 2, 2),
(19, '01:05', 'visp. fest.', 2, 2),
(20, '20:15 / 22:40', 'lunes', 3, 1),
(21, '20:15 / 22:40', 'martes', 3, 1),
(22, '20:15 / 22:40', 'miercoles', 3, 1),
(23, '16:05', 'jueves', 4, 1),
(24, '00:45', 'viernes', 4, 1),
(25, '00:45', 'sabado', 4, 1),
(26, '16:05', 'jueves', 4, 2),
(27, '00:45', 'viernes', 4, 2),
(28, '00:45', 'sabado', 4, 2),
(29, '00:45', 'viernes', 4, 3),
(30, '00:45', 'sabado', 4, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cine`
--
ALTER TABLE `cine`
  ADD PRIMARY KEY (`id_Cine`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_Pelicula`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id_Sesion`),
  ADD KEY `id_Cine` (`id_Cine`),
  ADD KEY `id_Pelicula` (`id_Pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cine`
--
ALTER TABLE `cine`
  MODIFY `id_Cine` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_Pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id_Sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `sesion_ibfk_1` FOREIGN KEY (`id_Cine`) REFERENCES `cine` (`id_Cine`),
  ADD CONSTRAINT `sesion_ibfk_2` FOREIGN KEY (`id_Pelicula`) REFERENCES `pelicula` (`id_Pelicula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
