-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 17:26:30
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
  `ID` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `contrasenia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_registro`
--

INSERT INTO `tbl_registro` (`ID`, `usuario`, `nombre`, `apellido`, `correo`, `contrasenia`) VALUES
(1, '', 'karen', 'chavarro', 'klchavarro9@misena.edu.co', '222222'),
(2, 'karen chavarro', 'karen', 'chavarro', 'klchavarro9@misena.edu.co', '222222'),
(3, 'karen chavarro', 'karen', 'chavarro', 'karch@gmail.com', 'luchis2000000000'),
(4, 'lucia', 'lucia', 'vergara', 'luci@gmail.com', ''),
(5, 'marcela guu', 'marcela', 'gonzales', 'march@gmail.com', '111'),
(6, 'perez', 'karen', 'chavarro', 'chavez@gmail.com', '123'),
(7, 'karen chavarro', 'lucia', 'vergara', 'karch1@gmail.com', 'karennnnnn'),
(8, 'karen chavarro', 'marcela', 'chavarro', 'klchavarro9@misena.edu.co', 'dasdfghjbj');

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
  `ID` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tipo_servicio` varchar(100) NOT NULL,
  `titulo_servicio` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`ID`, `foto`, `tipo_servicio`, `titulo_servicio`, `descripcion`) VALUES
(34, 'uploads/WIN_20230603_12_35_47_Pro.jpg', 'mantenimiento', 'Fontaneria', 'kjhgfds');

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
  `ID` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `numero_documento` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `link_whatsapp` varchar(100) NOT NULL,
  `documento_verificacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_trabajador`
--

INSERT INTO `tbl_trabajador` (`ID`, `nombre`, `apellido`, `tipo_documento`, `numero_documento`, `fecha_nacimiento`, `telefono`, `correo`, `link_whatsapp`, `documento_verificacion`) VALUES
(7, 'karen', 'hernandez', 'Cedula de ciudadania', '098765', '2023-06-01', '8765rew', 'march@gmail.com', '987654ew', 'GFPI-F-135_Guia_de_Aprendizaje Manua del Usuario (1).pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_agendar`
--
ALTER TABLE `tbl_agendar`
  ADD PRIMARY KEY (`ID`);

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
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_tiposervicio`
--
ALTER TABLE `tbl_tiposervicio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_trabajador`
--
ALTER TABLE `tbl_trabajador`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_agendar`
--
ALTER TABLE `tbl_agendar`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_registro`
--
ALTER TABLE `tbl_registro`
  MODIFY `ID` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tbl_tiposervicio`
--
ALTER TABLE `tbl_tiposervicio`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_trabajador`
--
ALTER TABLE `tbl_trabajador`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
