-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2023 a las 02:24:15
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fisioasir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `Id_Cita` int(11) NOT NULL,
  `Dia_Cita` varchar(20) NOT NULL,
  `Hora_Cita` varchar(50) NOT NULL,
  `Personal_Cita` varchar(50) NOT NULL,
  `Usuario_Cita` varchar(50) NOT NULL,
  `motivo_cita` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`Id_Cita`, `Dia_Cita`, `Hora_Cita`, `Personal_Cita`, `Usuario_Cita`, `motivo_cita`) VALUES
(1, '2022-11-30', '', '', 'Alegarr180', 'ioiasodjjdoaisasjiosdjo'),
(2, '2022-12-20', '', '2', 'Alegarr180', 'Hasmksdsmak'),
(3, '2023-01-11', '', 'Dr.Ogas', 'Alegarr180', 'asd'),
(4, '2023-01-11', '', 'Dr.Ogas', 'Alegarr180', 'asd'),
(5, '2023-01-11', '', 'Dr.Ogas', 'Alegarr180', 'asd'),
(6, '2023-01-11', '', 'Dr.Ogas', 'Alegarr180', 'asd'),
(7, '2022-12-28', '', 'Dr.Ogas', 'Alegarr180', 'asd'),
(8, '2023-01-06', '', 'Ldo.Indo', 'Alegarr180', 'OTRO NUEVA'),
(9, '', '', 'Ldo.Indo', 'Alegarr180', 'NUEVO MOTIVO'),
(10, '2023-01-10', '', 'Ldo.Indo', 'Alberto', 'Ahora me duele la pata'),
(11, '2023-01-07', '', 'Dr.Ogas', 'user', 'Test'),
(12, '2023-01-18', '08:00', 'Espc.Victor', 'user', 'tres'),
(13, '2023-01-18', '08:00', 'Dr.Ogas', 'user', 'asd'),
(14, '2023-01-03', '08:00', 'Dr.Ogas', 'user', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(11) NOT NULL,
  `USERNAME_CLIENTE` varchar(150) DEFAULT NULL,
  `PASS_CLIENTE` varchar(500) DEFAULT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO1` varchar(50) NOT NULL,
  `APELLIDO2` varchar(50) NOT NULL,
  `DNI_CLIENTE` varchar(20) NOT NULL,
  `FECHANAC_CLIENTE` varchar(20) NOT NULL,
  `DIRECCION` varchar(50) NOT NULL,
  `SEXO` enum('Hombre','Mujer','Otro') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `USERNAME_CLIENTE`, `PASS_CLIENTE`, `NOMBRE`, `APELLIDO1`, `APELLIDO2`, `DNI_CLIENTE`, `FECHANAC_CLIENTE`, `DIRECCION`, `SEXO`) VALUES
(3, 'Alegarr180', '1234', 'Alejandro', 'Garres', 'Pelaz', '71321112K', '14/09/2002', 'C/ Hierbabuena, 13 1ºD 47009', ''),
(4, '$usuario', '$password', '$nombre', '$apellido_uno', '$apellido_dos', '$dni', '$fecha', '$direccion', ''),
(5, 'Fernando', '1234', 'Fernando', 'Santos', 'De Frutos', '1234567G', '2023-11-01', 'C/ Pepe, 24 1ºD', 'Hombre'),
(6, 'test', '', '', 'test', '', '', '', '', 'Hombre'),
(9, 'user', 'pass', '', '', '', '', '', '', 'Hombre'),
(10, 'ultimo', 'ultimo', '', '', '', '', '', '', 'Hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ID_Personal` int(10) NOT NULL,
  `Nombre_Personal` varchar(50) NOT NULL,
  `Apellido1_Personal` varchar(50) NOT NULL,
  `Apellido2_Personal` varchar(50) NOT NULL,
  `Fecha_Personal` date NOT NULL,
  `DNI_Personal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`Id_Cita`),
  ADD KEY `Personal_Cita` (`Personal_Cita`),
  ADD KEY `Usuario_Cita` (`Usuario_Cita`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`),
  ADD KEY `Id_Usuario` (`ID_CLIENTE`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ID_Personal`),
  ADD KEY `ID_Personal` (`ID_Personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `Id_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
