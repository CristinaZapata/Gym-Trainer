-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2015 a las 05:20:34
-- Versión del servidor: 5.6.27-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gymtrainer2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `imc` float NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE IF NOT EXISTS `rutina` (
  `id_rutina` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`id_rutina`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rutina`
--

INSERT INTO `rutina` (`id_rutina`, `email`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'roses.les@gmail.com', '2015-11-16', '2015-12-02'),
(2, 'roses.les@gmail.com', '2015-12-03', '2015-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ultima_sesion` date DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `id_perfil` (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `nombre`, `apellido`, `password`, `ultima_sesion`, `id_perfil`) VALUES
('pablohrdz@gmail.com', 'Pablo', 'hernandez', 'hola', NULL, NULL),
('roses.les@gmail.com', 'Les', 'Rosales', 'hola123', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `imagen` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id_video`, `url`, `categoria`, `imagen`, `titulo`) VALUES
(1, 'http://www.youtube.com/embed/-sICMHs301M?v=-sICMHs301M', 'Pierna', 'images/pruebas/-sICMHs301M.jpg', 'Quema 300 calorías en 30 minutos'),
(2, 'http://www.youtube.com/embed/k-sn0QRYNAs?v=k-sn0QRYNAs', 'Pierna', 'images/pruebas/k-sn0QRYNAs.jpg', 'Bikini Abs Workout, Bikini series'),
(3, 'http://www.youtube.com/embed/T_HuY63HOJI?v=T_HuY63HOJI', 'Pierna', 'images/pruebas/T_HuY63HOJI.jpg', 'Body Rock |Day 25 Upper Body Blast'),
(4, 'http://www.youtube.com/embed/idAnNSCsH2I?v=idAnNSCsH2I', 'Pierna', 'images/pruebas/idAnNSCsH2I.jpg', 'BodyRock Total Body Extreme Cardio Hit'),
(5, 'http://www.youtube.com/embed/hxjKZcOT17E?v=hxjKZcOT17E', 'Abdomen', 'images/pruebas/hxjKZcOT17E.jpg', '10 minute Ab Workout: Get a six pack!'),
(6, 'http://www.youtube.com/embed/ZJ8Zdj0OPMI?v=ZJ8Zdj0OPMI', 'Abdomen', 'images/pruebas/ZJ8Zdj0OPMI.jpg', 'Six-Pack abs workout - Level 1'),
(7, 'http://www.youtube.com/embed/LebPal5gKrc?v=LebPal5gKrc', 'Abdomen', 'images/pruebas/LebPal5gKrc.jpg', 'The seven best Ab Exercises'),
(8, 'http://www.youtube.com/embed/FH8Cuwkx7j8?v=FH8Cuwkx7j8', 'Abdomen', 'images/pruebas/FH8Cuwkx7j8.jpg', '20 Minute Ab Workout For Women & Men'),
(9, 'http://www.youtube.com/embed/hAGfBjvIRFI?v=hAGfBjvIRFI', 'Brazo', 'images/pruebas/hAGfBjvIRFI.jpg', 'How to get toned arms'),
(10, 'http://www.youtube.com/embed/oUychjqfO8I?v=oUychjqfO8I', 'Brazo', 'images/pruebas/oUychjqfO8I.jpg', 'Tank Top Arms Workout - Shoulders & Arms'),
(11, 'http://www.youtube.com/embed/4pcaD3wInqM?v=4pcaD3wInqM', 'Brazo', 'images/pruebas/4pcaD3wInqM.jpg', 'Get Madonna''s Arms 10 Minute Workout'),
(12, 'http://www.youtube.com/embed/zU9ig8oaU6E?v=zU9ig8oaU6E', 'Brazo', 'images/pruebas/zU9ig8oaU6E.jpg', 'Toned Arms Workout');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos_preferidos`
--

CREATE TABLE IF NOT EXISTS `videos_preferidos` (
  `id_usuario` varchar(150) NOT NULL,
  `id_video` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`,`id_video`),
  KEY `id_video` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos_rutina`
--

CREATE TABLE IF NOT EXISTS `videos_rutina` (
  `id_video` int(11) NOT NULL,
  `id_rutina` int(11) NOT NULL,
  PRIMARY KEY (`id_video`,`id_rutina`),
  KEY `id_rutina` (`id_rutina`),
  KEY `id_video` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `videos_preferidos`
--
ALTER TABLE `videos_preferidos`
  ADD CONSTRAINT `videos_preferidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`email`),
  ADD CONSTRAINT `videos_preferidos_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);

--
-- Filtros para la tabla `videos_rutina`
--
ALTER TABLE `videos_rutina`
  ADD CONSTRAINT `videos_rutina_ibfk_1` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`),
  ADD CONSTRAINT `videos_rutina_ibfk_2` FOREIGN KEY (`id_rutina`) REFERENCES `rutina` (`id_rutina`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
