-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 18:45:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_agendar`
--

CREATE TABLE `tbl_agendar` (
  `agendar_id` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `disponibilidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_agendar`
--

INSERT INTO `tbl_agendar` (`agendar_id`, `fecha`, `direccion`, `telefono`, `descripcion`, `disponibilidad`) VALUES
(1, '2023-06-22', ' k casa 10 ', '23456789', 'asdfghjkklñ', 'usuario'),
(2, '2023-06-22', ' k casa 10 ', '23456789', 'asdfghjkklñ', 'trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

CREATE TABLE `tbl_comentarios` (
  `ID` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `correo` int(11) NOT NULL,
  `comentarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_registro`
--

CREATE TABLE `tbl_registro` (
  `ID` int(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasenia` varchar(255) DEFAULT NULL,
  `rol` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_registro`
--

INSERT INTO `tbl_registro` (`ID`, `usuario`, `nombre`, `apellido`, `correo`, `contrasenia`, `rol`) VALUES
(1, '', 'karen', 'chavarro', 'klchavarro9@misena.edu.co', '222222', ''),
(2, 'karen chavarro', 'karen', 'chavarro', 'klchavarro9@misena.edu.co', '222222', ''),
(3, 'karen chavarro', 'karen', 'chavarro', 'karch@gmail.com', 'luchis2000000000', ''),
(4, 'lucia', 'lucia', 'vergara', 'luci@gmail.com', '', ''),
(5, 'marcela guu', 'marcela', 'gonzales', 'march@gmail.com', '111', ''),
(6, 'perez', 'karen', 'chavarro', 'chavez@gmail.com', '123', ''),
(7, 'karen chavarro', 'lucia', 'vergara', 'karch1@gmail.com', 'karennnnnn', ''),
(8, 'karen chavarro', 'marcela', 'chavarro', 'klchavarro9@misena.edu.co', 'dasdfghjbj', ''),
(9, 'fernanda', 'fer', 'sddd', 'sdd@gmail.com', 'dfd', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `ID` int(100) NOT NULL,
  `rolUsuario` varchar(80) NOT NULL,
  `rolTrabajador` varchar(80) NOT NULL,
  `rolAdministrador` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `servicios_id` int(11) NOT NULL,
  `numero_documento` varchar(80) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `tipo_servicio` varchar(80) NOT NULL,
  `nombre_servicio` varchar(80) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`servicios_id`, `numero_documento`, `foto`, `tipo_servicio`, `nombre_servicio`, `descripcion`) VALUES
(1, '12345678', 'uploads/ACTIVITY LEARNING 5TH (1).pdf', 'mantenimiento', '', 'zxcxvfbghjmk'),
(2, '12345678', 'uploads/logo todero sin fondo (1).png', 'mantenimiento', '', 'dfghjkl'),
(3, '09876543', 'uploads/logo todero sin fondo (1).png', 'reparacion', 'Electricidad', 'sdfgyhujikl'),
(4, '09876543', 'uploads/logo todero sin fondo (1).png', 'mantenimiento', 'Electricidad', 'sdfgyhujikl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tiposervicio`
--

CREATE TABLE `tbl_tiposervicio` (
  `ID` int(100) NOT NULL,
  `mantenimeinto` varchar(100) NOT NULL,
  `reparacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_trabajador`
--

CREATE TABLE `tbl_trabajador` (
  `trabajador_id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `tipo_documento` varchar(100) DEFAULT NULL,
  `numero_documento` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(80) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `link_whatsapp` varchar(100) DEFAULT NULL,
  `documento_verificacion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_trabajador`
--

INSERT INTO `tbl_trabajador` (`trabajador_id`, `nombre`, `apellido`, `tipo_documento`, `numero_documento`, `fecha_nacimiento`, `telefono`, `correo`, `link_whatsapp`, `documento_verificacion`) VALUES
(1, 'oikuyjhgf', 'kiuyhgtrf', 'DNI', '09876543', '2023-06-04', '9876543', 'march@gmail.com', 'fghjk', 'ACTIVITY LEARNING GUIDE 5TH.pdf'),
(2, 'jairo', 'montes', 'DNI', '567890', '2023-06-07', '213456789', 'chvarro@gmail.com', 'sdfghjkl', 'dfghyujk'),
(3, 'jairo', 'montes', 'DNI', '567890', '2023-06-07', '213456789', 'chvarro@gmail.com', 'sdfghjkl', 'dfghyujk'),
(4, 'karen', 'vergara', 'Cedula de ciudadania', '12345678', '2023-06-06', '12345678', 'march@gmail.com', '876rew', 'job application.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_agendar`
--
ALTER TABLE `tbl_agendar`
  ADD PRIMARY KEY (`agendar_id`);

--
-- Indices de la tabla `tbl_registro`
--
ALTER TABLE `tbl_registro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`servicios_id`);

--
-- Indices de la tabla `tbl_tiposervicio`
--
ALTER TABLE `tbl_tiposervicio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_trabajador`
--
ALTER TABLE `tbl_trabajador`
  ADD PRIMARY KEY (`trabajador_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_agendar`
--
ALTER TABLE `tbl_agendar`
  MODIFY `agendar_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_registro`
--
ALTER TABLE `tbl_registro`
  MODIFY `ID` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `servicios_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_tiposervicio`
--
ALTER TABLE `tbl_tiposervicio`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_trabajador`
--
ALTER TABLE `tbl_trabajador`
  MODIFY `trabajador_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
