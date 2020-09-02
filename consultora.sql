-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 02-09-2020 a las 05:10:22
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(40) NOT NULL,
  `admin_clave` varchar(32) NOT NULL,
  `admin_estado` int(1) NOT NULL DEFAULT 1,
  `admin_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_clave`, `admin_estado`, `admin_timestamp`) VALUES
(1, 'adm', '202cb962ac59075b964b07152d234b70', 1, '2020-03-05 23:57:02'),
(2, 'pablo', 'cc36a0c64a43edd2cecf16d116e3f64b', 1, '2020-03-06 00:56:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_descripcion` text NOT NULL,
  `banner_imagen` varchar(120) NOT NULL,
  `banner_status` int(1) NOT NULL DEFAULT 1,
  `banner_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_descripcion`, `banner_imagen`, `banner_status`, `banner_timestamp`) VALUES
(4, 'abc.com.py.py.py', '1583439572.jpg', 1, '2020-03-01 13:28:09'),
(6, 'prueba2', '1583439640.jpg', 1, '2020-03-01 13:32:39'),
(7, 'prueba3', '1583439666.jpg', 1, '2020-03-05 20:06:35'),
(8, 'yyy', '1583456870.JPG', 1, '2020-03-06 01:07:50'),
(9, 'Hola', '1589504908.jpg', 1, '2020-05-15 01:08:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_razon` varchar(120) NOT NULL,
  `cliente_ruc` varchar(20) NOT NULL,
  `cliente_nombre` varchar(40) NOT NULL,
  `cliente_apellido` varchar(40) NOT NULL,
  `cliente_sexo` varchar(2) NOT NULL,
  `cliente_email` varchar(30) NOT NULL,
  `cliente_telefono` varchar(10) NOT NULL,
  `cliente_direccion` varchar(40) NOT NULL,
  `cliente_cuota` varchar(11) NOT NULL,
  `cliente_status` int(1) NOT NULL DEFAULT 1,
  `cliente_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_razon`, `cliente_ruc`, `cliente_nombre`, `cliente_apellido`, `cliente_sexo`, `cliente_email`, `cliente_telefono`, `cliente_direccion`, `cliente_cuota`, `cliente_status`, `cliente_timestamp`) VALUES
(2, 'La caramella S.R,L', '80058056-4', 'Estela', 'Rivarola', 'F', 'estela@caramella.com', '0983363331', 'Avda Acceso sur', '250.000', 1, '2020-02-22 12:03:33'),
(3, 'Palo Santo SRL', '80024024-1', 'Pedro', 'Capurro', 'M', 'pedro@capuuro.com.py', '0985462478', 'Avda Mariscal Lopez 123', '300.000', 1, '2020-02-22 12:05:00'),
(4, 'Futuro S.A', '80088056-7', 'Rivaldo', 'López', 'M', 'riva@gmail.com', '0985717522', 'Alberto de Souza ', '100.000', 1, '2020-02-22 16:40:05'),
(7, 'All in S.A', '2641500-8', 'Alan', 'Benitez', 'M', 'alan_benitez@gmail.com', '0891514151', 'Santa Teresa', '600.000', 1, '2020-02-22 18:44:31'),
(8, 'Tu super', '1691500-8', 'Arsenio', 'Erico', 'M', 'arsenio@gmail.com.py', '0981601015', 'Lambare', '150000', 1, '2020-02-22 22:32:29'),
(9, 'No me olvides', '4002498-8', 'JUAN', 'Caballero', 'M', 'juan@gmail.com', '0985717700', 'San Lorenzo', '150.000', 0, '2020-02-26 19:43:57'),
(10, 'Prueba', '1.691.500', 'PRUEBA', 'Prueba', 'F', 'email@prueba123', '123456789', 'prueba', 'prueba', 1, '2020-03-01 12:21:43'),
(11, 'Fiweex Srl', '80088066-8', 'Alan ', 'Rivarola', 'M', 'alan_benitez@gmail.com', '0985717700', 'Ã‘emby', '150.000', 1, '2020-03-05 19:46:08'),
(12, 'J', 'J', '', '', '', '', 'J', '', '', 1, '2020-03-06 18:01:07'),
(13, 'J', 'J', '', '', '', '', 'J', '', '', 1, '2020-03-06 18:01:28'),
(14, 'J', 'J', '', '', '', '', 'J', '', '', 1, '2020-03-06 18:01:40'),
(15, 'J', 'J', '', '', '', '', 'J', '', '', 1, '2020-03-06 18:02:08'),
(16, 'J', 'J', '', '', '', '', 'J', '', '', 1, '2020-03-06 18:02:17'),
(17, 'J', 'J', '', '', '', '', 'JJ', '', '', 1, '2020-03-06 18:02:17'),
(19, 'fiweex sa', '8008806-9', 'Pedro Luis', 'Vera', '', 'carlos@gmail.com', '0985717700', 'San Antonio', '800.000', 1, '2020-03-22 01:01:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `consulta_id` int(11) NOT NULL,
  `consulta_nombre` varchar(60) NOT NULL,
  `consulta_apellido` varchar(20) NOT NULL,
  `consulta_celuar` varchar(10) NOT NULL,
  `consulta_email` varchar(40) NOT NULL,
  `consulta_mensaje` text NOT NULL,
  `consulta_status` int(1) NOT NULL DEFAULT 1,
  `consulta_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `contacto_id` int(11) NOT NULL,
  `contacto_nombre` varchar(20) NOT NULL,
  `contacto_email` varchar(20) NOT NULL,
  `contacto_telefono` varchar(20) NOT NULL,
  `contacto_mensaje` varchar(120) NOT NULL,
  `contacto_status` int(1) NOT NULL DEFAULT 1,
  `contacto_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `solicitud_id` int(11) NOT NULL,
  `solicitud_nombre` varchar(20) NOT NULL,
  `solicitud_apellido` varchar(20) NOT NULL,
  `solicitud_email` varchar(20) NOT NULL,
  `solicitud_telefono` varchar(20) NOT NULL,
  `solicitud_mensaje` varchar(120) NOT NULL,
  `solicitud_status` int(1) NOT NULL DEFAULT 1,
  `solicitud_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `suscripcion_id` int(11) NOT NULL,
  `suscripcion_email` varchar(30) NOT NULL,
  `suscripcion_status` int(1) NOT NULL DEFAULT 1,
  `suscripcion_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_nom_apell` varchar(120) NOT NULL,
  `team_cargo` varchar(12) NOT NULL,
  `team_descripcion` varchar(120) NOT NULL,
  `team_foto` varchar(120) NOT NULL,
  `team_status` int(1) NOT NULL DEFAULT 1,
  `team_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`consulta_id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`contacto_id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`solicitud_id`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`suscripcion_id`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `consulta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `contacto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `solicitud_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `suscripcion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
