-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2014 a las 17:53:32
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eproject`
--
CREATE DATABASE `eproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eproject`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomCompanyia` varchar(25) NOT NULL,
  `nomContacte` varchar(25) NOT NULL,
  `adreca` varchar(25) NOT NULL,
  `ciutat` varchar(25) NOT NULL,
  `codPostal` int(11) NOT NULL,
  `pais` varchar(25) NOT NULL,
  `telf` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`idClient`, `nomCompanyia`, `nomContacte`, `adreca`, `ciutat`, `codPostal`, `pais`, `telf`, `fax`) VALUES
(1, 'ReloadGame', 'Samuel Valero', 'Almogavers', 'Granollers', 8401, 'EspaÃ±a', 658412589, 935412547);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comandes`
--

CREATE TABLE IF NOT EXISTS `comandes` (
  `idComanda` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `dataComanda` date NOT NULL,
  `dataEntrega` date NOT NULL,
  `dataEnviament` date NOT NULL,
  `formaEnviament` varchar(25) NOT NULL,
  `destinatari` varchar(25) NOT NULL,
  `adrecaDestinatari` varchar(25) NOT NULL,
  `ciutatDestinatari` varchar(25) NOT NULL,
  `codPostalDestinatari` int(11) NOT NULL,
  `paisDestinatari` varchar(25) NOT NULL,
  PRIMARY KEY (`idComanda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallcomandes`
--

CREATE TABLE IF NOT EXISTS `detallcomandes` (
  `idComanda` int(11) NOT NULL,
  `idProducte` int(11) NOT NULL,
  `preuUnitat` int(11) NOT NULL,
  `Quantitat` int(11) NOT NULL,
  `Descompte` int(11) NOT NULL,
  PRIMARY KEY (`idComanda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productes`
--

CREATE TABLE IF NOT EXISTS `productes` (
  `idProducte` int(11) NOT NULL AUTO_INCREMENT,
  `nomProducte` varchar(25) NOT NULL,
  `idProveidor` int(11) NOT NULL,
  `preusUnitat` int(11) NOT NULL,
  `unitatEnExistencia` int(11) NOT NULL,
  `unitatsEnComanda` int(11) NOT NULL,
  PRIMARY KEY (`idProducte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `productes`
--

INSERT INTO `productes` (`idProducte`, `nomProducte`, `idProveidor`, `preusUnitat`, `unitatEnExistencia`, `unitatsEnComanda`) VALUES
(4, 'micro sd', 2, 20, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveidors`
--

CREATE TABLE IF NOT EXISTS `proveidors` (
  `idProveidor` int(11) NOT NULL AUTO_INCREMENT,
  `nomCompanyia` varchar(25) NOT NULL,
  `nomContacte` varchar(25) NOT NULL,
  `adreca` varchar(25) NOT NULL,
  `ciutat` varchar(25) NOT NULL,
  `codPostal` int(11) NOT NULL,
  `pais` varchar(25) NOT NULL,
  `telf` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`idProveidor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `proveidors`
--

INSERT INTO `proveidors` (`idProveidor`, `nomCompanyia`, `nomContacte`, `adreca`, `ciutat`, `codPostal`, `pais`, `telf`, `fax`, `website`) VALUES
(2, 'ReloadGame', 'Samuel Valero', 'Almogavers', 'granollers', 8401, 'EspaÃ±a', 658412589, 935412547, 'www.reloadgame.com'),
(4, 'marioSL', 'mario', 'vallbona', 'granollers', 8401, 'espaÃ±a', 654789214, 954184751, 'www.asdasd.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `nom` varchar(50) NOT NULL,
  `cognom` varchar(50) NOT NULL,
  `usuari` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`nom`, `cognom`, `usuari`, `password`) VALUES
('mario', 'sanchez', 'msl', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
