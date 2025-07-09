-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2025 a las 18:46:13
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
(84350262, 'Cruz Sergio', 'Aguilar', 'Díaz', 32, 'M', 'cruz_aguilar1429@gmail.com', 29493748, 'San Lorenzo Tezonco ', 'Licenciatura'),
(320110450, 'Mónica Ixchel', 'Urzua', 'Cruz', 32, 'F', 'monica@hotmail.com', 551982022, 'Roma Norte', 'Licenciatura'),
(85869364, 'Libia ', 'Benitez', 'Fraustro', 44, 'F', 'libia@gmail.com', 555690151, 'Parque de los venados', 'Licenciatura'),
(319265691, 'Luis Manuel', 'Santiago', 'García', 32, 'M', 'luismanuel@gmail.com', 555690151, 'Renovacion ', 'Doctorado'),
(317138858, 'Vanessa', 'Roa', 'Díaz', 32, 'F', 'vanerd2704@gmail.com', 62067350, 'Manuel Capetillo 20 San isidro la paz', 'Doctorado'),
(33333333, 'Pedro', 'Pica', 'Piedra', 32, 'M', 'pedropicapiedra@gmail.com', 555555, 'En mi casa', 'Licenciatura'),
(12121242, 'Laura', 'Gómez', 'Santos', 33, 'F', 'laurags@gmail.com', 55871234, 'San Pedro', 'Licenciatura'),
(12121210, 'Emmanuelle', 'Ramírez', 'Domínguez', 44, 'M', 'emanuellerd@gmail.com', 32454567, 'Santa Mónica ', 'Licenciatura'),
(12121213, 'Maria del Rocío', 'Mendoza', 'Muzquiz', 32, 'F', 'mariadelrocio@gmail.com', 32454575, 'San Andrés ', 'Maestría'),
(12121245, 'Carlos', 'Hernández', 'Pérez', 21, 'M', 'carlos_hz@gmail.com', 55236789, 'Roma Norte', 'Licenciatura'),
(12121247, 'Diana', 'López', 'Vega', 44, 'F', 'dianalv@gmail.com', 56123478, 'Del Valle', 'Licenciatura'),
(12121249, 'Luis', 'Martínez', 'Jiménez', 33, 'M', 'luismj@gmail.com', 55367890, 'Santa Anita', 'Licenciatura'),
(12121251, 'Andrea', 'Cruz', 'Ramírez', 21, 'F', 'andrea_cruz@gmail.com', 55478901, 'Tláhuac', 'Licenciatura'),
(12121253, 'Miguel', 'Reyes', 'Ortiz', 44, 'M', 'miguelro@gmail.com', 55678923, 'Narvarte', 'Licenciatura'),
(12121255, 'Paula', 'Medina', 'García', 33, 'F', 'paulamed@gmail.com', 55781234, 'Mixcoac', 'Licenciatura'),
(12121257, 'Jorge', 'Sánchez', 'Cano', 21, 'M', 'jorgesancano@gmail.com', 55900123, 'Tacuba', 'Licenciatura'),
(12121259, 'Rebeca', 'Moreno', 'Flores', 44, 'F', 'rebecamf@gmail.com', 55233456, 'Xochimilco', 'Licenciatura'),
(12121261, 'Alan', 'Torres', 'Delgado', 33, 'M', 'alantd@gmail.com', 55012345, 'San Ángel', 'Maestría'),
(12121263, 'María', 'Rivas', 'Zapata', 21, 'F', 'mariarz@gmail.com', 55447788, 'La Merced', 'Maestría'),
(12121265, 'Diego', 'Navarro', 'Quiroz', 44, 'M', 'diegonq@gmail.com', 55889977, 'Centro Sur', 'Licenciatura'),
(12121267, 'Camila', 'Castro', 'Aguilar', 33, 'F', 'camilaca@gmail.com', 55334455, 'Los Olivos', 'Maestría'),
(12121269, 'Oscar', 'Vargas', 'Salas', 21, 'M', 'oscarvs@gmail.com', 55998877, 'Buenavista', 'Maestría'),
(12121270, 'Valeria', 'Silva', 'Luna', 44, 'F', 'valesl@gmail.com', 55112233, 'Reforma', 'Doctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_Carr` int(4) NOT NULL,
  `Carrera` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_Carr`, `Carrera`) VALUES
(32, 'Ingeniería en Computación'),
(44, 'Matemáticas'),
(33, 'Ingeniería Mecánica'),
(21, 'Ciencias de la Tierra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(2) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `clave`, `password`, `nombre`, `tipo`) VALUES
(1, 'vanerd27', 'contra123', 'Vanessa Roa Díaz', 'Usuario'),
(2, 'lm', 'vacio', 'Luis Manuel Santiago', 'Usuario'),
(3, 'libi', 'libi', 'Libia Benitez', 'Administra'),
(4, 'ixchel2', 'ixchel2', 'Mónica Ixchel Urzua', 'Admin'),
(5, 'pgsu', '1234', 'Pedro', 'Admin'),
(6, 'Franco', '123456', 'Franco', 'Administra'),
(7, 'Checo', 'password', 'Cruz', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`No_Cuenta`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_Carr`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
