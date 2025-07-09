-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2025 a las 23:51:10
-- Versión del servidor: 5.7.17
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `No_Cuenta` int(9) NOT NULL,
  `Nombres` varchar(35) NOT NULL,
  `APaterno` varchar(30) NOT NULL,
  `AMaterno` varchar(30) DEFAULT NULL,
  `ID` int(2) NOT NULL,
  `S` char(1) NOT NULL,
  `Correro` varchar(50) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Domicilio` text NOT NULL,
  `Grado` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`No_Cuenta`, `Nombres`, `APaterno`, `AMaterno`, `ID`, `S`, `Correro`, `Telefono`, `Domicilio`, `Grado`) VALUES
(84350262, 'Cruz Sergio', 'Aguilar', 'Díaz', 32, 'M', 'cruz_aguilar1429@gmail.com', 29493748, 'San Lorenzo Tezonco ', 'Licenciatura '),
(320110450, 'Mónica Ixchel', 'Urzua', 'Cruz', 32, 'F', 'monica@hotmail.com', 551982022, '', ''),
(85869364, 'Libia ', 'Benitez', 'Fraustro', 44, 'F', 'libia@gmail.com', 555690151, 'Parque de los venados', 'Doctorado'),
(319265691, 'Luis Manuel', 'Santiago', 'García', 32, 'M', 'luis@hotmail.com', 71239845, 'Calle Luna 456', 'Licenciatura'),
(317138858, 'Vanessa', 'Roa', 'Díaz', 32, 'F', 'vanerd2704@gmail.com', 62067350, 'Manuel Capetillo 20 San isidro la paz', 'Maestria'),
(33333333, 'Pedro', 'Pica', 'Piedra', 32, 'M', 'pedropicapiedra@gmail.com', 555555, 'En mi casa', 'Licenciatura '),
(84350261, 'Juan', 'Escutia', 'Díaz', 32, 'M', 'juan1429@gmail.com', 29493745, 'San Lorenzo Tezonco ', 'Licenciatura '),
(319265692, 'Pablo', 'Marmol', 'Morza', 33, 'M', 'pmorsa@gmail.com', 29493755, 'Piedradura ', 'Doctorado '),
(318265692, 'Bruno', 'Diaz', 'Obregon', 21, 'M', 'batman@gmail.com', 39493755, 'Gotam', 'Licenciatura'),
(317265692, 'Frida', 'Oh', 'Khalo', 33, 'F', 'Fruda@gmail.com', 49493755, 'Piedradura ', 'Doctorado '),
(316265692, 'Pablo', 'Pica', 'Zo', 21, 'M', 'pmorsa@gmail.com', 59493755, 'Coyoacan ', 'Doctorado '),
(915263871, 'Carlos', 'Ramírez', 'López', 21, 'M', 'c.ramirez@gmail.com', 65412378, 'Av. Las Rosas 123', 'Doctorado'),
(823746592, 'Luis', 'Fernández', 'Gómez', 32, 'M', 'luisfgz@hotmail.com', 71239845, 'Calle Luna 456', 'Licenciatura'),
(739182645, 'María', 'García', 'Torres', 28, 'F', 'm.garcia@gmail.com', 79854312, 'Pasaje Sol 789', 'Maestría'),
(681234579, 'Ana', 'Hernández', 'Mendoza', 35, 'F', 'ana.mendoza@yahoo.com', 85634122, 'Av. Central 1010', 'Doctorado'),
(734829165, 'Diego', 'Martínez', 'Salazar', 30, 'M', 'd.martinez@gmail.com', 74591238, 'Jr. Cipreses 210', 'Maestría'),
(629384716, 'Lucía', 'Pérez', 'Chávez', 27, 'F', 'lucia.pch@hotmail.com', 76982344, 'Av. Los Álamos 555', 'Licenciatura'),
(598172345, 'Javier', 'Ortiz', 'Ramírez', 41, 'M', 'j.ortiz@yahoo.com', 79451326, 'Calle Norte 142', 'Doctorado'),
(847162390, 'Valeria', 'Ramos', 'Zúñiga', 29, 'F', 'valeria.rz@gmail.com', 78341296, 'Pasaje Primavera 98', 'Maestría'),
(752390184, 'Fernando', 'López', 'Guzmán', 36, 'M', 'fernando.lopez@outlook.com', 76543218, 'Jr. Lima 880', 'Licenciatura'),
(912345870, 'Camila', 'Vega', 'Paredes', 33, 'F', 'camila.vega@gmail.com', 79861234, 'Av. Las Palmas 67', 'Doctorado'),
(803476512, 'Sofía', 'Navarro', 'Ibáñez', 25, 'F', 'sofia.navarro@hotmail.com', 78934127, 'Calle Jardín 300', 'Maestría');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(9) NOT NULL,
  `carrera` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`) VALUES
(44, 'Matematicas '),
(21, 'Civil'),
(32, 'Computacion'),
(33, 'Electronica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`No_Cuenta`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
