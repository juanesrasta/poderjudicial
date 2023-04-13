-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2017 a las 20:03:33
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `analisisit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alfabetismo`
--

CREATE TABLE IF NOT EXISTS `alfabetismo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rango` varchar(10) NOT NULL,
  `alfabeta` varchar(15) NOT NULL,
  `poblacion` varchar(15) NOT NULL,
  `anyo` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_tecnologia`
--

CREATE TABLE IF NOT EXISTS `categorias_tecnologia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censos_tecnologia`
--

CREATE TABLE IF NOT EXISTS `censos_tecnologia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `cifra` varchar(15) NOT NULL,
  `anyo` varchar(12) NOT NULL,
  `total` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exportven`
--

CREATE TABLE IF NOT EXISTS `exportven` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_expo` int(11) NOT NULL,
  `cifra` varchar(15) NOT NULL,
  `anyo` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importven`
--

CREATE TABLE IF NOT EXISTS `importven` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cifra` varchar(15) NOT NULL,
  `anyo` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_portuario`
--

CREATE TABLE IF NOT EXISTS `mov_portuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teus` varchar(9) NOT NULL,
  `anyo` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pib`
--

CREATE TABLE IF NOT EXISTS `pib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cifra` varchar(15) NOT NULL,
  `anyo` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion_ven`
--

CREATE TABLE IF NOT EXISTS `poblacion_ven` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) NOT NULL,
  `poblacion` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_exportaciones`
--

CREATE TABLE IF NOT EXISTS `tipo_exportaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
