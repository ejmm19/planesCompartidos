-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2015 a las 05:15:28
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planescompartidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre`) VALUES
(1, 'Lic. Ciencias Sociales'),
(2, 'Lic. Artistica y Musica'),
(3, 'Lic. Educación Física Recreación y Deporte'),
(4, 'Lic. Informática y Medios Audio Visuales'),
(5, 'Lic. Ingles'),
(6, 'Lic. Ciencias Naturales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandeclase`
--

CREATE TABLE IF NOT EXISTS `plandeclase` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `grado` int(2) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plandeclase`
--

INSERT INTO `plandeclase` (`id`, `idusuario`, `idarea`, `grado`, `url`) VALUES
(1, 7, 4, 11, 'fo-article-121199.pdf'),
(2, 4, 3, 10, 'fo-article-121199_2.pdf'),
(4, 2, 4, 7, 'Volante de Pago.pdf'),
(5, 10, 4, 7, 'doc.pdf'),
(6, 10, 3, 9, 'plandeclase.PRACTICA DOCENTE FACEDU.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `area` varchar(100) NOT NULL,
  `grado` varchar(2) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `asignatura` varchar(100) NOT NULL,
  `archivomasdescargado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE IF NOT EXISTS `recursos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `docenten` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `nombres`, `apellidos`, `docenten`, `img`) VALUES
(1, 'admin', '12345', 'admin', 'Gustavo ', 'Vega', 'informatica', ''),
(2, 'maria06', '12345', 'user', 'maria', 'ospina', 'sociales', './perfil/economia-verde81.jpg'),
(4, 'sair', '12345', 'user', 'Sair de jesus', 'Sanchez Valderrama', 'informatica', './perfil/b83920df37391426691a91d4334ef8af.jpg'),
(5, 'fulanito', '12345', 'user', 'fulanito', 'ochoa', 'informatica', '../perfil/default.png'),
(6, 'jose', '12345', 'user', 'jose joaquin', 'Negrete', 'Ed. fisica', './perfil/default.png'),
(7, 'martina', '12345', 'user', 'Marta Cecilia', 'la peligrosa', 'ingles', './perfil/default.png'),
(10, 'guillermo', '123456789', 'user', 'guillermo', 'Martinez', 'sociales', './perfil/red-crab-98275.png'),
(11, 'eric', '12345', 'user', 'Eric ', 'Martinez Muentes', 'sociales', './perfil/mundo-500.jpg'),
(12, 'sair', '12345', 'user', 'sair', 'sanchez', 'musica', './perfil/b83920df37391426691a91d4334ef8af.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plandeclase`
--
ALTER TABLE `plandeclase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idarea` (`idarea`);

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `plandeclase`
--
ALTER TABLE `plandeclase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `plandeclase`
--
ALTER TABLE `plandeclase`
  ADD CONSTRAINT `plandeclase_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `plandeclase_ibfk_2` FOREIGN KEY (`idarea`) REFERENCES `area` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
