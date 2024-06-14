-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2024 a las 17:48:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serviciosocial103`
--
CREATE DATABASE IF NOT EXISTS `serviciosocial103` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `serviciosocial103`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum103_ss`
--

CREATE TABLE `alum103_ss` (
  `id` int(5) UNSIGNED NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Edad` int(2) DEFAULT NULL,
  `Semestre` int(3) DEFAULT NULL,
  `Especialidad` varchar(20) DEFAULT NULL,
  `Turno` varchar(10) DEFAULT NULL,
  `Grupo` varchar(1) DEFAULT NULL,
  `Tiempo_serv` date DEFAULT NULL,
  `Tipo_trabajo` text DEFAULT NULL,
  `Fecha_ini_SS` date DEFAULT NULL,
  `Feacha_fin_SS` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alum103_ss`
--

INSERT INTO `alum103_ss` (`id`, `Nombre`, `Edad`, `Semestre`, `Especialidad`, `Turno`, `Grupo`, `Tiempo_serv`, `Tipo_trabajo`, `Fecha_ini_SS`, `Feacha_fin_SS`) VALUES
(1, 'Angel Manuel', 17, 4, 'Programacion', 'Vespertino', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(2, 'Esteban', 16, 4, 'Recursos Humanos', 'Ma?ana', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(3, 'Azul Nahomi', 16, 4, 'Clinicos', 'Vespertino', 'B', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(4, 'Maria Fernanda', 16, 4, 'Quimicos', 'Ma?ana', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(5, 'Sergio', 17, 4, 'Quimicos', 'Ma?ana', 'B', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(6, 'Tomas', 16, 4, 'Programacion', 'Ma?ana', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(7, 'Jesus', 16, 4, 'Clinicos', 'Vespertino', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(8, 'Rebullosa', 17, 4, 'Programacion', 'Vespertino', 'B', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(9, 'Carlos Juan', 16, 4, 'Recursos', 'Ma?ana', 'B', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(10, 'To?ito', 16, 4, 'Logistica', 'Vespertino', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(11, 'Eric Alejandro', 17, 4, 'Logistica', 'Vespertino', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15'),
(12, 'Jos? Gael Bautista Ramirez', 17, 4, 'Logistica', 'Vespertino', 'A', '2024-02-29', 'No asignado', '2024-09-15', '2025-07-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas103_ss`
--

CREATE TABLE `empresas103_ss` (
  `id` int(5) UNSIGNED NOT NULL,
  `Nombre_empresa` varchar(50) DEFAULT NULL,
  `Esp_requerida` varchar(20) DEFAULT NULL,
  `Horario_ini` datetime DEFAULT NULL,
  `Horario_fin` datetime DEFAULT NULL,
  `Domicilio` varchar(120) DEFAULT NULL,
  `Num_telefonico` int(10) DEFAULT NULL,
  `Correo_contacto` varchar(40) DEFAULT NULL,
  `Sitio_web` varchar(50) DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `Gerente` varchar(40) DEFAULT NULL,
  `Giro_comercial` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresas103_ss`
--

INSERT INTO `empresas103_ss` (`id`, `Nombre_empresa`, `Esp_requerida`, `Horario_ini`, `Horario_fin`, `Domicilio`, `Num_telefonico`, `Correo_contacto`, `Sitio_web`, `RFC`, `Gerente`, `Giro_comercial`) VALUES
(1, 'Empresa 1', 'Mineria', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa1.com', 'www.empresa1.com', 'ABC123456XYZ', 'Carlos Juan', 'Piedras preciosas'),
(2, 'Empresa 2', 'Programacion', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa2.com', 'www.empresa2.com', 'ABC123456XYZ', 'Alcala Guzman', 'Programar'),
(3, 'Empresa 3', 'Recursos clinicos', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa3.com', 'www.empresa3.com', 'ABC123456XYZ', 'Sergio Guzman', 'Estudios clinicos'),
(4, 'Empresa 4', 'Recursos Humanos', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa4.com', 'www.empresa4.com', 'ABC123456XYZ', 'Lorenzo Antonio', 'Busca empleos'),
(5, 'Empresa 5', 'Prototipos', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa5.com', 'www.empresa5.com', 'ABC123456XYZ', 'To?ito', 'Innovaciones'),
(6, 'Empresa 6', 'Logistica', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa6.com', 'www.empresa6.com', 'ABC123456XYZ', 'Jose Ricardo', 'Rutas eficientes'),
(7, 'Empresa 7', 'Hoteles', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa7.com', 'www.empresa7.com', 'ABC123456XYZ', 'Esteban', 'Hoteleria'),
(8, 'Empresa 8', 'Telefonia', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa8.com', 'www.empresa8.com', 'ABC123456XYZ', 'Pantoja', 'Fabricacion de telefonos'),
(9, 'Empresa 9', 'Dise?o de interiores', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa9.com', 'www.empresa9.com', 'ABC123456XYZ', 'Azul Nahomi', 'Dise?a interiores'),
(10, 'Empresa 10', 'Arquitectura', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa10.com', 'www.empresa10.com', 'ABC123456XYZ', 'Angel Rebullosa', 'Planos de edificios'),
(11, 'Empresa 11', 'estudios de animacio', '2022-01-01 00:00:00', '2022-12-30 00:00:00', 'Calle abc,Ciudad de Mexico', 12345678, 'contacto@empresa10.com', 'www.empresa11.com', 'ABC123456XYZ', 'Bautista Ramirez Jose Gael', 'Animacion de la serie One Piece');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alum103_ss`
--
ALTER TABLE `alum103_ss`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas103_ss`
--
ALTER TABLE `empresas103_ss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alum103_ss`
--
ALTER TABLE `alum103_ss`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empresas103_ss`
--
ALTER TABLE `empresas103_ss`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
