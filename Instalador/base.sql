-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2017 a las 20:04:47
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id_cancion` int(11) NOT NULL,
  `nombre_cancion` varchar(45) NOT NULL,
  `autores` varchar(45) NOT NULL,
  `ao_publicacion` int(11) DEFAULT NULL,
  `id_genero` varchar(45) NOT NULL,
  `enlace_youtube` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canciones`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `comentario` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nombre`, `comentario`) VALUES
(1, 'julia', 'paquita no me echa cuenta\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_musical`
--

CREATE TABLE `genero_musical` (
  `tipo_cancion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacen`
--

CREATE TABLE `hacen` (
  `canciones_id_cancion` int(11) NOT NULL,
  `usuarios_cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id_peticion` int(11) NOT NULL,
  `nombre_cancion` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id_peticion`, `nombre_cancion`, `autor`) VALUES
(1, 'dragosteia', 'dintei');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(9) NOT NULL,
  `ruta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tema`, `ruta`) VALUES
(1, 'C:xampphtdocsRebollo_Ordo-ez_Miguel_Proyecto_IAWes'),
(2, 'C:xampphtdocsRebollo_Ordo-ez_Miguel_Proyecto_IAWes'),
(3, 'C:xampphtdocsRebollo_Ordo-ez_Miguel_Proyecto_IAWes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `tema` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `nombre_sesion` varchar(50) DEFAULT NULL,
  `deejay` varchar(50) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `enlace_video` varchar(50) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_cancion`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `genero_musical`
--
ALTER TABLE `genero_musical`
  ADD PRIMARY KEY (`tipo_cancion`);

--
-- Indices de la tabla `hacen`
--
ALTER TABLE `hacen`
  ADD KEY `fk_table1_canciones1_idx` (`canciones_id_cancion`),
  ADD KEY `fk_hacen_usuarios1_idx` (`usuarios_cod_usuario`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id_peticion`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_cancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hacen`
--
ALTER TABLE `hacen`
  ADD CONSTRAINT `fk_hacen_usuarios1` FOREIGN KEY (`usuarios_cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_canciones1` FOREIGN KEY (`canciones_id_cancion`) REFERENCES `canciones` (`id_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
