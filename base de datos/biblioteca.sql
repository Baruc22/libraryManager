-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2021 a las 00:14:46
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` varchar(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `contraseña`) VALUES
('admin1', 'admin1 name', 'admin1'),
('MCHE_PW01', 'Hugo Enrique Martínez Cortés', 'programweb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `numero_paginas` int(11) NOT NULL,
  `seccion` varchar(3) NOT NULL,
  `genero` varchar(3) NOT NULL,
  `anio_edicion` year(4) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`codigo`, `nombre`, `autor`, `editorial`, `numero_paginas`, `seccion`, `genero`, `anio_edicion`, `estado`) VALUES
('AFPAAAOS00', 'ANATOMIA Y FISIOLOGIA DEL PARAMEDICO', 'AMERICAN ACADEMY OF ORTHOPAEDIC SURGEONS', 'Trillas', 384, '600', '615', 2002, 'LIBRE'),
('ALSUCHER00', 'ALGEBRA SUPERIOR', 'CARDENAS, HUMBERTO LLUIS, EMILIO RAGGI,', 'Trillas', 323, '500', '511', 1973, 'LIBRE'),
('ALSUCHER01', 'ALGEBRA SUPERIOR', 'CARDENAS, HUMBERTO LLUIS, EMILIO RAGGI,', 'Trillas', 323, '500', '511', 1973, 'LIBRE'),
('ANDEBRDA00', 'Angeles y Demonios', 'Brown,Dan', 'Planeta', 821, '800', '875', 2006, 'LIBRE'),
('ANDEBRDA01', 'Angeles y Demonios', 'Brown,Dan', 'Planeta', 821, '800', '875', 2006, 'LIBRE'),
('ANFSLEOL00', 'ANATOMIA, FISIOLOGIA Y SALUD', 'LESUR, LUIS ORTEGA', 'Trillas', 320, '600', '612', 2005, 'LIBRE'),
('BANIZGMO00', 'Baile en la nieve', 'Zgustova,Monika', 'Galaxia Gutenberg', 255, '200', '201', 2000, 'LIBRE'),
('CADIBELR00', 'CALCULO DIFERENCIAL', 'BENITEZ LOPEZ, RENE', 'Trillas', 244, '500', '515', 2014, 'LIBRE'),
('CADIBELR01', 'CALCULO DIFERENCIAL', 'BENITEZ LOPEZ, RENE', 'Trillas', 244, '500', '515', 2014, 'LIBRE'),
('CAINBELR00', 'CALCULO INTEGRAL', 'BENITEZ LOPEZ, RENE', 'Trillas', 266, '500', '515', 2012, 'LIBRE'),
('CASOGAMA00', 'Cien Años de Soledad', 'Garcia,Marquez', 'Debolsillo', 567, '800', '809', 2000, 'LIBRE'),
('CASOGAMA01', 'Cien Años de Soledad', 'Garcia,Marquez', 'Debolsillo', 567, '800', '809', 2000, 'LIBRE'),
('CGHLCAAJ00', 'El canto gregoriano, historia, liturgia, formas...', 'Juan Carlos Asensio', 'Alianza Musica', 557, '700', '782', 2003, 'LIBRE'),
('COPIAGPE00', 'COMO PREVENIR EL INFARTO', 'AGUILAR PARADA, EUGENIO', 'Trillas', 200, '600', '615', 2010, 'LIBRE'),
('COPIAGPE01', 'COMO PREVENIR EL INFARTO', 'AGUILAR PARADA, EUGENIO', 'Trillas', 200, '600', '615', 2010, 'LIBRE'),
('CROAGAJO00', 'Croata', 'Garcia,Jorge', 'Bolsillo', 409, '600', '612', 2002, 'LIBRE'),
('ECDLMOLO00', 'El cazador de lobos', 'Molinos,Lorenzo', 'Aleman', 455, '400', '412', 1995, 'LIBRE'),
('ECDVBRDA00', 'El Codigo Da Vinci', 'Brown,Dan', 'Planeta', 723, '800', '876', 2005, 'LIBRE'),
('ECDVBRDA01', 'El Codigo Da Vinci', 'Brown,Dan', 'Planeta', 723, '800', '876', 2005, 'LIBRE'),
('ECORGAMA00', 'El Coronel', 'Garcia,Marquez', 'Debolsillo', 330, '200', '222', 1998, 'LIBRE'),
('ECORGAMA01', 'El Coronel', 'Garcia,Marquez', 'Debolsillo', 330, '200', '222', 1998, 'LIBRE'),
('ESDAGIEM00', 'El sueño del alfarero', 'Gil,Emilio', 'Juanes', 211, '300', '325', 1987, 'LIBRE'),
('ESPEBRDA00', 'El Simbolo Perdido', 'Brown,Dan', 'Planeta', 941, '800', '873', 2009, 'LIBRE'),
('ESPEBRDA01', 'El Simbolo Perdido', 'Brown,Dan', 'Planeta', 941, '800', '873', 2009, 'LIBRE'),
('GUERRUJE00', 'Guerra', 'Rul,Jesus', 'Catalan', 531, '500', '569', 1989, 'LIBRE'),
('HACUALJU00', 'Hambre y cuchillos', 'Alcaeda,Juan', 'Rumania', 123, '600', '652', 2003, 'LIBRE'),
('HAMNRICR00', 'Había mucha neblina', 'Rivera,Cristina', 'Literatura Random House', 521, '100', '102', 1996, 'LIBRE'),
('HEEPSORA00', 'HEMATOLOGIA PARA ESTUDIANTES Y PRACTICANTES ', 'SOOD, RAMNIK', 'Trillas', 636, '600', '615', 2007, 'LIBRE'),
('HEEPSORA01', 'HEMATOLOGIA PARA ESTUDIANTES Y PRACTICANTES ', 'SOOD, RAMNIK', 'Trillas', 636, '600', '615', 2007, 'LIBRE'),
('HME2SARU00', 'Historia de la música española 2', 'Samuel Rubio ', 'Alianza Musica', 496, '700', '781', 1983, 'LIBRE'),
('INCOORRO00', 'Inconscientia', 'Ortea,Rocio', 'Narrativa', 700, '100', '123', 2003, 'LIBRE'),
('INFEBRDA00', 'Inferno', 'Brown,Dan', 'Planeta', 841, '800', '874', 2007, 'LIBRE'),
('INFEBRDA01', 'Inferno', 'Brown,Dan', 'Planeta', 841, '800', '874', 2007, 'LIBRE'),
('LHIIMIEN00', 'La Historia Interminable', 'Michael Ende', 'La Esfera de los Libros', 496, '700', '885', 1979, 'LIBRE'),
('MAINROPC00', 'MANUAL DE INMUNOLOGIA', 'RODRIGUEZ PADILLA, CRISTINA', 'Trillas', 286, '600', '615', 2015, 'LIBRE'),
('MAINROPC01', 'MANUAL DE INMUNOLOGIA', 'RODRIGUEZ PADILLA, CRISTINA', 'Trillas', 286, '600', '615', 2015, 'LIBRE'),
('MCESROST00', 'La música en las catedrales españolas del Siglo de Oro', 'Robert Stevenson ', 'Alianza Musica', 600, '700', '784', 1996, 'LIBRE'),
('MMPTGAMA00', 'Memoria de mis Putas Tristes', 'Garcia,Marquez', 'Debolsillo', 300, '200', '258', 2000, 'LIBRE'),
('NOSEGAMA00', 'Noticia de un Secuestro', 'Garcia,Marquez', 'Debolsillo', 279, '200', '251', 1996, 'LIBRE'),
('NOSEGAMA01', 'Noticia de un Secuestro', 'Garcia,Marquez', 'Debolsillo', 279, '200', '251', 1996, 'LIBRE'),
('OPAZGAMA00', 'Ojos de Perro Azul', 'Garcia,Marquez', 'Debolsillo', 367, '300', '369', 1987, 'LIBRE'),
('OPAZGAMA01', 'Ojos de Perro Azul', 'Garcia,Marquez', 'Debolsillo', 367, '300', '369', 1987, 'LIBRE'),
('POCLRUSA00', 'La polifonía clásica', 'Samuel Rubio', 'Biblioteca \"la ciudad de Dios\"', 216, '700', '780', 1989, 'LIBRE'),
('POCLRUSA01', 'La polifonía clásica', 'Samuel Rubio', 'Biblioteca \"la ciudad de Dios\"', 216, '700', '780', 1989, 'LIBRE'),
('RayuCoJu00', 'Rayuela', 'Cortazar, Julio', 'Ediciones Categra', 756, '800', '808', 1963, 'LIBRE'),
('RENAGAMA00', 'Relato de un Naufrago', 'Garcia,Marquez', 'Debolsillo', 603, '700', '798', 1979, 'LIBRE'),
('RENAGAMA01', 'Relato de un Naufrago', 'Garcia,Marquez', 'Debolsillo', 603, '700', '798', 1979, 'LIBRE'),
('SAVIHECE00', 'Salmos de vísperas', 'Esteban Hernández Castelló', 'Obra social de Caja de Avila', 95, '700', '787', 2003, 'LIBRE'),
('SAVIHECE01', 'Salmos de vísperas', 'Esteban Hernández Castelló', 'Obra social de Caja de Avila', 95, '700', '787', 2003, 'LIBRE'),
('SOLECAMI00', 'Solenoide', 'Cartarescu,Mircea', 'Impedimenta', 400, '300', '308', 1997, 'LIBRE'),
('TRDEPEJA00', 'Tres Deseos', 'Pearce,Jackson', 'Molino', 678, '500', '555', 2010, 'LIBRE'),
('TRDEPEJA01', 'Tres Deseos', 'Pearce,Jackson', 'Molino', 678, '500', '555', 2010, 'LIBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `numero_pedido` int(20) UNSIGNED NOT NULL,
  `codigo_usuario` varchar(10) NOT NULL,
  `codigo_libro` varchar(10) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `fecha_limite_devolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`numero_pedido`, `codigo_usuario`, `codigo_libro`, `fecha_salida`, `fecha_devolucion`, `fecha_limite_devolucion`) VALUES
(4, 'JUALOPGU06', 'BANIZGMO00', '2021-02-04', '2021-02-10', '2021-02-10'),
(5, 'MARHERCR07', 'HAMNRICR00', '2021-02-04', '2021-02-10', '2021-02-11'),
(6, 'LUIFLOMO08', 'SOLECAMI00', '2021-02-04', '2021-02-10', '2021-02-10'),
(7, 'MANARARU09', 'CROAGAJO00', '2021-02-04', NULL, '2021-02-11'),
(8, 'ARMDIACR10', 'GUERRUJE00', '2021-02-04', '2021-02-10', '2021-02-11'),
(9, 'ANALOPGO11', 'INCOORRO00', '2021-02-05', '2021-02-10', '2021-02-10'),
(10, 'MARHERRO12', 'ECDLMOLO00', '2021-02-05', NULL, '2021-02-11'),
(11, 'LUIFLOMO13', 'HACUALJU00', '2021-02-05', '2021-02-10', '2021-02-10'),
(12, 'MANARORU14', 'ESDAGIEM00', '2021-02-05', '2021-02-10', '2021-02-10'),
(13, 'ADRDIACR15', 'MMPTGAMA00', '2021-02-05', NULL, '2021-02-12'),
(14, 'ARIDIAFL20', 'ECORGAMA00', '2021-02-06', NULL, '2021-02-13'),
(15, 'SAMARANA19', 'NOSEGAMA00', '2021-02-06', '2021-02-10', '2021-02-10'),
(16, 'JORCISMO18', 'OPAZGAMA00', '2021-02-06', NULL, '2021-02-13'),
(17, 'BARHERCR17', 'CASOGAMA00', '2021-02-06', NULL, '2021-02-13'),
(18, 'JUARUIGU16', 'RENAGAMA00', '2021-02-06', '2021-02-10', '2021-02-10'),
(19, 'OSVDURCR25', 'ECDVBRDA00', '2021-02-06', NULL, '2021-02-11'),
(20, 'ALEARARO24', 'ANDEBRDA00', '2021-02-07', NULL, '2021-02-11'),
(21, 'LUZFERMO23', 'INFEBRDA00', '2021-02-07', '2021-02-10', '2021-02-10'),
(22, 'MARHERCA22', 'ESPEBRDA00', '2021-02-07', NULL, '2021-02-11'),
(23, 'JUALOPGA21', 'TRDEPEJA00', '2021-02-07', NULL, '2021-02-10'),
(24, 'Admreysa01', 'AFPAAAOS00', '2021-02-10', NULL, '2021-02-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `poblacion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `curp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre`, `apellido_materno`, `apellido_paterno`, `direccion`, `fecha_nacimiento`, `poblacion`, `telefono`, `curp`) VALUES
('Admreysa01', 'ADRIANA MARCELA', 'SANCHEZ', 'REY', 'PinoSuarez #1', '2000-02-03', 'Oaxaca, Centro', '9511542569', 'ADRRS00001'),
('ADRDIACR15', 'Adriana', 'Diaz', 'Cruz', 'lion#24', '2000-05-14', 'Oaxaca', '2211134567', 'ARADIC888GAFSD'),
('Aleaboac02', 'ALEJANDRO', 'ACEVEDO', 'ABONDANO', 'Emiliano Zapata #3', '2000-02-07', 'Huajuapan de Leon, Oaxaca', '9531254523', 'ACEABOALE00002'),
('ALEARARO24', 'Alejandro', 'Aragon', 'Rodriguez', 'Flores#12', '1997-06-15', 'Puebla', '5298741254', 'MAARK549JITES'),
('Alecarva03', 'ALEXANDER', 'VARGAS', 'CARVAJAL', 'Benito Juarez #45', '1998-02-04', 'Huajuapan de Leon, Oaxaca', '9851253626', 'CARVARALE00003'),
('ANALOPGO11', 'Ana', 'Lopez', 'Gomez', 'Lima#33', '2003-04-24', 'Uruapan', '9531234545', 'JULG555HYETE'),
('ARIDIAFL20', 'Ariel', 'Diaz', 'Flores', 'Pomelos#21', '2001-05-14', 'Oaxaca', '5550134567', 'ARADIC777GAFSD'),
('ARMDIACR10', 'Armando', 'Diaz', 'Cruz', 'lomas#21', '2003-05-14', 'Oaxaca', '2220134567', 'ARADIC090GAFSD'),
('BARHERCR17', 'Barbara', 'Hernadez', 'Cruzada', 'Primero#47', '2000-08-20', 'Huajuapan', '9531234567', 'MAHC008FAXCS'),
('Caegomro05', 'CAMILO ENRIQUE', 'RODRIGUEZ', 'GOMEZ', 'Vicente Guerrero #23', '1997-09-16', 'Etla, Oaxaca', '9851298789', 'RODGOMCAM00005'),
('Camvilar04', 'CAMILO', 'ARISTIZABA', 'VILLAMIZAR', 'Benito Juarez #46', '1999-05-04', 'Oaxaca, centro', '9633256231', 'ARIVILCAM00004'),
('JORCISMO18', 'Jorge', 'Cisneros', 'Morales', 'minario#5', '2001-05-16', 'Oaxaca', '9554256123', 'LUFLM208LDFGJ'),
('JUALOPGA21', 'Juan', 'Lopez', 'Garcia', 'Rey#33', '2002-07-24', 'Oaxaca', '9531234895', 'JULG220HYETE'),
('JUALOPGU06', 'Juan', 'Lopez', 'Guevara', 'Limas #33', '2002-04-24', 'Oaxaca', '9531234562', 'JULG000HYETE'),
('JUARUIGU16', 'Juan', 'Ruiz', 'Guevara', 'Limon#33', '2003-04-24', 'Oaxaca', '9531237894', 'JULG000PLOAR'),
('LUIFLOMO08', 'Luis', 'Flores', 'Morales', 'mina#45', '2001-05-23', 'Oaxaca', '9537456123', 'LUFLM221LDFGJ'),
('LUIFLOMO13', 'Luisa', 'Flores', 'Mora', 'minas#45', '2000-07-23', 'Tuxtla', '9537456789', 'LUFLM451LDFGJ'),
('LUZFERMO23', 'Luz', 'Feria', 'Morales', 'Rios#45', '2004-05-23', 'Oaxaca', '9537456951', 'LUFLM800LDFGJ'),
('MANARARU09', 'Manuel', 'Aragon', 'Ruiz', 'Flores#23', '1998-06-15', 'Puebla', '4529874561', 'MAARR562JITES'),
('MANARORU14', 'Manuela', 'Aron', 'Rusa', 'Flor#3', '1999-07-15', 'Puebla', '2229874561', 'MAARP856JITES'),
('MARHERCA22', 'Mario', 'Hernadez', 'Casas', 'Primaria#44', '2000-06-26', 'Huajuapan', '9531237894', 'MAHC564HJRTS'),
('MARHERCR07', 'Maria', 'Hernadez', 'Cruz', 'PrimeroMayo#4', '2000-01-26', 'Huajuapan de Leon', '9531234567', 'MAHC008HJRTS'),
('MARHERRO12', 'Mariana', 'Hernadez', 'Rosario', 'Mayo#4', '2000-07-26', 'Leon', '9531234867', 'MAHR708HJRTS'),
('OSVDURCR25', 'Osvaldo', 'Duran', 'Cruz', 'Junio#21', '2000-05-24', 'Oaxaca', '7770134567', 'ARADIC665GAFSD'),
('SAMARANA19', 'Samuel', 'Aragon', 'Narvaez', 'Reyes#23', '1999-09-15', 'Mexico', '4529852364', 'MAARK451JITES');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`numero_pedido`),
  ADD UNIQUE KEY `numero_pedido` (`numero_pedido`),
  ADD KEY `fk_usuario_codigo` (`codigo_usuario`),
  ADD KEY `fk_libro_codigo` (`codigo_libro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `numero_pedido` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_libro_codigo` FOREIGN KEY (`codigo_libro`) REFERENCES `libro` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_codigo` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuario` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
