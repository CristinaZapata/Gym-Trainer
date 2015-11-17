-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2015 at 10:57 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `GymTrainer`
--

-- --------------------------------------------------------

--
-- Table structure for table `Perfil`
--

CREATE TABLE `Perfil` (
  `id_perfil` int(11) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `imc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Rutina`
--

CREATE TABLE `Rutina` (
  `id_rutina` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `USUARIO`
--

CREATE TABLE `USUARIO` (
  `email` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ultima_sesion` date DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  `id_rutina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Video`
--

CREATE TABLE `Video` (
  `id_video` int(11) NOT NULL,
  `url` text NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `imagen` text NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `VIDEOS_PREFERIDOS`
--

CREATE TABLE `VIDEOS_PREFERIDOS` (
  `id_usuario` varchar(150) NOT NULL,
  `id_video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `VIDEOS_RUTINA`
--

CREATE TABLE `VIDEOS_RUTINA` (
  `id_video` int(11) NOT NULL,
  `id_rutina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Perfil`
--
ALTER TABLE `Perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `Rutina`
--
ALTER TABLE `Rutina`
  ADD PRIMARY KEY (`id_rutina`);

--
-- Indexes for table `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_rutina` (`id_rutina`);

--
-- Indexes for table `Video`
--
ALTER TABLE `Video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `VIDEOS_PREFERIDOS`
--
ALTER TABLE `VIDEOS_PREFERIDOS`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`,`id_video`),
  ADD KEY `id_video` (`id_video`);

--
-- Indexes for table `VIDEOS_RUTINA`
--
ALTER TABLE `VIDEOS_RUTINA`
  ADD PRIMARY KEY (`id_video`),
  ADD UNIQUE KEY `id_video` (`id_video`,`id_rutina`),
  ADD KEY `id_rutina` (`id_rutina`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Perfil`
--
ALTER TABLE `Perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Rutina`
--
ALTER TABLE `Rutina`
  MODIFY `id_rutina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Video`
--
ALTER TABLE `Video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `Perfil` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_rutina`) REFERENCES `Rutina` (`id_rutina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `VIDEOS_PREFERIDOS`
--
ALTER TABLE `VIDEOS_PREFERIDOS`
  ADD CONSTRAINT `videos_preferidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`email`),
  ADD CONSTRAINT `videos_preferidos_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `Video` (`id_video`);

--
-- Constraints for table `VIDEOS_RUTINA`
--
ALTER TABLE `VIDEOS_RUTINA`
  ADD CONSTRAINT `videos_rutina_ibfk_1` FOREIGN KEY (`id_video`) REFERENCES `Video` (`id_video`),
  ADD CONSTRAINT `videos_rutina_ibfk_2` FOREIGN KEY (`id_rutina`) REFERENCES `Rutina` (`id_rutina`);
