-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Temps de generació: 29-11-2013 a les 19:12:27
-- Versió del servidor: 5.5.32
-- Versió de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `eproject`
--
CREATE DATABASE IF NOT EXISTS `eproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eproject`;

-- --------------------------------------------------------

--
-- Estructura de la taula `clients`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `comandes`
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
-- Estructura de la taula `detallcomandes`
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
-- Estructura de la taula `productes`
--

CREATE TABLE IF NOT EXISTS `productes` (
  `idProducte` int(11) NOT NULL AUTO_INCREMENT,
  `nomProducte` varchar(25) NOT NULL,
  `idProveidor` int(11) NOT NULL,
  `preusUnitat` int(11) NOT NULL,
  `unitatEnExistencia` int(11) NOT NULL,
  `unitatsEnComanda` int(11) NOT NULL,
  PRIMARY KEY (`idProducte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `proveidors`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
