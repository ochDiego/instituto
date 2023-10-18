-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2023 a las 01:57:20
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instituto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `usuario_id`, `fecha`, `estado`) VALUES
(1, 'Diego', 'Ochoa', 33743380, '2643171768', 1, '2023-09-10 10:23:53', 1),
(4, 'Cristian', 'Rivero', 32083839, '2645452967', 8, '2023-09-15 00:11:58', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`, `descripcion`, `duracion`, `estado`) VALUES
(1, 'Tecnicatura Superior en Desarrollo de Software', NULL, '3 años', 1),
(2, 'Tecnicatura Superior en Gestión de Energías Renovables', NULL, '3 años', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo_lectivo`
--

CREATE TABLE `ciclo_lectivo` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_ciclo`
--

CREATE TABLE `inscripcion_ciclo` (
  `id` int(11) NOT NULL,
  `ciclo_lectivo_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_materia`
--

CREATE TABLE `inscripcion_materia` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_mesa`
--

CREATE TABLE `inscripcion_mesa` (
  `id` int(11) NOT NULL,
  `mesa_examen_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `parent_id`, `estado`) VALUES
(1, 'Comprensión y Producción de Textos', NULL, 1),
(2, 'Matemática I', NULL, 1),
(3, 'Inglés Técnico', NULL, 1),
(4, 'Sistema de Información I', NULL, 1),
(5, 'Programación I', NULL, 1),
(6, 'Procesamiento de Datos', NULL, 1),
(7, 'Contexto Socio-Económico y Productivo', NULL, 1),
(8, 'Ambiente Empresarial', NULL, 1),
(9, 'Sistema operativo y Redes I', NULL, 1),
(10, 'Programación II', NULL, 1),
(11, 'Práctica Profesionalizante I', NULL, 1),
(12, 'Marco Jurídico', NULL, 1),
(13, 'Matemática II', NULL, 1),
(14, 'Sistemas Administrativos', NULL, 1),
(15, 'Programación III', NULL, 1),
(16, 'Base de Datos I', NULL, 1),
(17, 'Práctica Profesionalizante II', NULL, 1),
(18, 'Matemática III', NULL, 1),
(19, 'Desarrollo de Software I', NULL, 1),
(20, 'Sistema de Información II', NULL, 1),
(21, 'Práctica Profesionalizante III', NULL, 1),
(22, 'Base de Datos II', NULL, 1),
(23, 'Sistema Operativo y Redes II', NULL, 1),
(24, 'Práctica Profesionalizante IV', NULL, 1),
(25, 'Desarrollo de Software II', NULL, 1),
(26, 'Ética y Deontología Profesional', NULL, 1),
(27, 'Práctica Profesionalizante V', NULL, 1),
(28, 'Matemática Aplicada', NULL, 1),
(29, 'Energías Renovables', NULL, 1),
(30, 'Física Aplicada', NULL, 1),
(31, 'Electrotecnia General', NULL, 1),
(32, 'Química Aplicada', NULL, 1),
(33, 'Energía Solar Térmica', NULL, 1),
(34, 'Instalaciones Eléctricas', NULL, 1),
(35, 'Tecnología de la Representación Gráfica', NULL, 1),
(36, 'Informática Aplicada', NULL, 1),
(37, 'Energía Solar Fotovoltáica', NULL, 1),
(38, 'Energía de la Biomasa', NULL, 1),
(39, 'Energía Eólica', NULL, 1),
(40, 'Energía Minihidráulica y Geotérmica', NULL, 1),
(41, 'Uso Racional de la Energía', NULL, 1),
(42, 'Gestión de Seguridad, Salud Ocupacional y M. Ambiente', NULL, 1),
(43, 'Gestión de la Operación de Centrales de Energías Renov.', NULL, 1),
(44, 'Arquitectura Bioclimática', NULL, 1),
(45, 'Gestión de Proyectos de Inversión', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_carrera`
--

CREATE TABLE `materia_carrera` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `periodo` varchar(30) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia_carrera`
--

INSERT INTO `materia_carrera` (`id`, `materia_id`, `carrera_id`, `periodo`, `estado`) VALUES
(1, 1, 1, 'Primer Año', 1),
(2, 2, 1, 'Primer Año', 1),
(3, 3, 1, 'Primer Año', 1),
(4, 4, 1, 'Primer Año', 1),
(5, 4, 1, 'Primer Año', 1),
(6, 5, 1, 'Primer Año', 1),
(7, 6, 1, 'Primer Año', 1),
(8, 7, 1, 'Primer Año', 1),
(9, 8, 1, 'Primer Año', 1),
(10, 9, 1, 'Primer Año', 1),
(11, 10, 1, 'Primer Año', 1),
(12, 11, 1, 'Primer Año', 1),
(13, 12, 1, 'Segundo Año', 1),
(14, 13, 1, 'Segundo Año', 1),
(15, 14, 1, 'Segundo Año', 1),
(16, 15, 1, 'Segundo Año', 1),
(17, 16, 1, 'Segundo Año', 1),
(18, 17, 1, 'Segundo Año', 1),
(19, 18, 1, 'Segundo Año', 1),
(20, 19, 1, 'Segundo Año', 1),
(21, 4, 1, 'Segundo Año', 1),
(22, 21, 1, 'Segundo Año', 1),
(23, 22, 1, 'Tercer Año', 1),
(24, 23, 1, 'Tercer Año', 1),
(25, 24, 1, 'Tercer Año', 1),
(26, 25, 1, 'Tercer Año', 1),
(27, 26, 1, 'Tercer Año', 1),
(28, 27, 1, 'Tercer Año', 1),
(29, 1, 2, 'Primer Año', 1),
(30, 28, 2, 'Primer Año', 1),
(31, 29, 2, 'Primer Año', 1),
(32, 30, 2, 'Primer Año', 1),
(33, 31, 2, 'Primer Año', 1),
(34, 32, 2, 'Primer Año', 1),
(35, 7, 2, 'Primer Año', 1),
(36, 33, 2, 'Primer Año', 1),
(37, 3, 2, 'Primer Año', 1),
(38, 34, 2, 'Primer Año', 1),
(39, 11, 2, 'Primer Año', 1),
(40, 12, 2, 'Segundo Año', 1),
(41, 35, 2, 'Segundo Año', 1),
(42, 36, 2, 'Segundo Año', 1),
(43, 37, 2, 'Segundo Año', 1),
(44, 38, 2, 'Segundo Año', 1),
(45, 39, 2, 'Segundo Año', 1),
(46, 40, 2, 'Segundo Año', 1),
(47, 41, 2, 'Segundo Año', 1),
(48, 17, 2, 'Segundo Año', 1),
(49, 21, 2, 'Segundo Año', 1),
(50, 42, 2, 'Tercer Año', 1),
(51, 43, 2, 'Tercer Año', 1),
(52, 24, 2, 'Tercer Año', 1),
(53, 44, 2, 'Tercer Año', 1),
(54, 26, 2, 'Tercer Año', 1),
(55, 27, 2, 'Tercer Año', 1),
(56, 45, 2, 'Tercer Año', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_nota`
--

CREATE TABLE `materia_nota` (
  `id` int(11) NOT NULL,
  `parcial_1` float(4,2) DEFAULT NULL,
  `recuperatorio_1` float(4,2) DEFAULT NULL,
  `parcial_2` float(4,2) DEFAULT NULL,
  `recuperatorio_2` float(4,2) DEFAULT NULL,
  `extraordinario` float(4,2) DEFAULT NULL,
  `materia_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `condicion_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_plan`
--

CREATE TABLE `materia_plan` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `plan_estudio_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_profesor`
--

CREATE TABLE `materia_profesor` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa_examen`
--

CREATE TABLE `mesa_examen` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `materia_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `ciclo_lectivo_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_examen`
--

CREATE TABLE `nota_examen` (
  `id` int(11) NOT NULL,
  `nota` float(4,2) DEFAULT NULL,
  `inscripcion_mesa_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudio`
--

CREATE TABLE `plan_estudio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `año` varchar(45) DEFAULT NULL,
  `carga_horaria` varchar(45) DEFAULT NULL,
  `despliegue` varchar(45) DEFAULT NULL,
  `correlatividades` varchar(60) DEFAULT NULL,
  `formato` varchar(60) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `estado`) VALUES
(1, 'Administrativo', 1),
(2, 'Administrador', 1),
(3, 'Profesor', 1),
(4, 'Alumno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tribunal_mesa`
--

CREATE TABLE `tribunal_mesa` (
  `id` int(11) NOT NULL,
  `mesa_examen_id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `rol_id`, `fecha`, `estado`) VALUES
(1, 'one.diego@gmail.com', '$2y$10$upfXkxrPEIfxiXXToHeleumR5JmxTo99Ubl0uCG28tweP/36Nmvpu', 1, '2023-09-10 11:45:32', 1),
(2, 'emanuel.pelaitay85@gmail.com', '$2y$10$SlmThtzVq0QFFQPfBBURcuXOjc/7PwcxuXs2yxuhNP9a/nuzy6I4S', 4, '2023-09-06 20:51:53', 1),
(3, 'carlospqu@gmail.com', '$2y$10$wKuu8PhTrX74A5HuXMVesOpOLsN0ktEYwAR21pl6ArvwRoso4hJZi', 4, '2023-09-06 20:59:14', 1),
(8, 'cristianrivero102@gmail.com', '$2y$10$.Ya2c3qlg18T6vhjJ6uCk.ZxBnczT1BQ5MTTGXxRriWaD3D9Eucxe', 4, '2023-09-15 00:11:59', 1),
(9, 'lucianoriveros247@gmail.com', '$2y$10$Wl/UPYsJSFvrda7EyZDjoefumLv74YrUp3d05Q6zLU1THfZYnISn6', 4, '2023-09-15 00:13:36', 1),
(10, 'marcelosole18@gmail.com', '$2y$10$v8cZgmVxnu/05F1ZnvARhOsKxUzM3.qEhcSFAqHvq16gF8zoaUW3y', 4, '2023-09-15 00:16:17', 1),
(11, 'maxi.saraspe1223@gmail.com', '$2y$10$HAud2d1n4le8/OXrFLBmSeoDkaNlDDc0DBFNO8AVkYNNkJfbHL/ae', 4, '2023-09-15 00:18:41', 1),
(12, 'lm7375142@gmail.com', '$2y$10$f42EZYHNd6UwJTrFduzVSuEsJH21fTxRbDf7JAMOUbI88OLhd9P/2', 4, '2023-09-15 00:21:21', 1),
(13, 'mariasoledadguardia4@gmail.com', '$2y$10$Xoi8WpUnEgPHwx2oGHOkSeGUMuTsyqikAUs1c/COFtBPJiJLHcaM.', 4, '2023-09-15 00:24:06', 1),
(14, 'salinasalejandra900@gmail.com', '$2y$10$Z1T2Dv5EX.GgcatGU.Y0.O0PptlgkqPA04rVAX9a6ICfW0VPTyYIS', 4, '2023-09-17 22:25:07', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciclo_lectivo`
--
ALTER TABLE `ciclo_lectivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion_ciclo`
--
ALTER TABLE `inscripcion_ciclo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciclo_lectivo_id` (`ciclo_lectivo_id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indices de la tabla `inscripcion_materia`
--
ALTER TABLE `inscripcion_materia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indices de la tabla `inscripcion_mesa`
--
ALTER TABLE `inscripcion_mesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesa_examen_id` (`mesa_examen_id`),
  ADD KEY `alumno_id` (`alumno_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia_carrera`
--
ALTER TABLE `materia_carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `carrera_id` (`carrera_id`);

--
-- Indices de la tabla `materia_nota`
--
ALTER TABLE `materia_nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `condicion_id` (`condicion_id`);

--
-- Indices de la tabla `materia_plan`
--
ALTER TABLE `materia_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `plan_estudio_id` (`plan_estudio_id`);

--
-- Indices de la tabla `materia_profesor`
--
ALTER TABLE `materia_profesor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- Indices de la tabla `mesa_examen`
--
ALTER TABLE `mesa_examen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `profesor_id` (`profesor_id`),
  ADD KEY `ciclo_lectivo_id` (`ciclo_lectivo_id`),
  ADD KEY `carrera_id` (`carrera_id`);

--
-- Indices de la tabla `nota_examen`
--
ALTER TABLE `nota_examen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcion_mesa_id` (`inscripcion_mesa_id`);

--
-- Indices de la tabla `plan_estudio`
--
ALTER TABLE `plan_estudio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tribunal_mesa`
--
ALTER TABLE `tribunal_mesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesa_examen_id` (`mesa_examen_id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ciclo_lectivo`
--
ALTER TABLE `ciclo_lectivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_ciclo`
--
ALTER TABLE `inscripcion_ciclo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_materia`
--
ALTER TABLE `inscripcion_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_mesa`
--
ALTER TABLE `inscripcion_mesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `materia_carrera`
--
ALTER TABLE `materia_carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `materia_nota`
--
ALTER TABLE `materia_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia_plan`
--
ALTER TABLE `materia_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia_profesor`
--
ALTER TABLE `materia_profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesa_examen`
--
ALTER TABLE `mesa_examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nota_examen`
--
ALTER TABLE `nota_examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_estudio`
--
ALTER TABLE `plan_estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tribunal_mesa`
--
ALTER TABLE `tribunal_mesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion_ciclo`
--
ALTER TABLE `inscripcion_ciclo`
  ADD CONSTRAINT `inscripcion_ciclo_ibfk_1` FOREIGN KEY (`ciclo_lectivo_id`) REFERENCES `ciclo_lectivo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ciclo_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion_materia`
--
ALTER TABLE `inscripcion_materia`
  ADD CONSTRAINT `inscripcion_materia_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_materia_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion_mesa`
--
ALTER TABLE `inscripcion_mesa`
  ADD CONSTRAINT `inscripcion_mesa_ibfk_1` FOREIGN KEY (`mesa_examen_id`) REFERENCES `mesa_examen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_mesa_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_carrera`
--
ALTER TABLE `materia_carrera`
  ADD CONSTRAINT `materia_carrera_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_carrera_ibfk_2` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_nota`
--
ALTER TABLE `materia_nota`
  ADD CONSTRAINT `materia_nota_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_nota_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_nota_ibfk_3` FOREIGN KEY (`condicion_id`) REFERENCES `condicion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_plan`
--
ALTER TABLE `materia_plan`
  ADD CONSTRAINT `materia_plan_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_plan_ibfk_2` FOREIGN KEY (`plan_estudio_id`) REFERENCES `plan_estudio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_profesor`
--
ALTER TABLE `materia_profesor`
  ADD CONSTRAINT `materia_profesor_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_profesor_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mesa_examen`
--
ALTER TABLE `mesa_examen`
  ADD CONSTRAINT `mesa_examen_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesa_examen_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesa_examen_ibfk_3` FOREIGN KEY (`ciclo_lectivo_id`) REFERENCES `ciclo_lectivo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesa_examen_ibfk_4` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nota_examen`
--
ALTER TABLE `nota_examen`
  ADD CONSTRAINT `nota_examen_ibfk_1` FOREIGN KEY (`inscripcion_mesa_id`) REFERENCES `inscripcion_mesa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tribunal_mesa`
--
ALTER TABLE `tribunal_mesa`
  ADD CONSTRAINT `tribunal_mesa_ibfk_1` FOREIGN KEY (`mesa_examen_id`) REFERENCES `mesa_examen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tribunal_mesa_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
