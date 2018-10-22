-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-09-2018 a las 10:40:36
-- Versión del servidor: 10.1.26-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `correspondencia_cisp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cor_correspondencia`
--

CREATE TABLE `cor_correspondencia` (
  `id` int(11) NOT NULL,
  `nRadicado` varchar(30) NOT NULL,
  `receptor` varchar(35) NOT NULL,
  `nGuia` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `remitente` varchar(35) NOT NULL,
  `hora` time NOT NULL,
  `estado` int(1) NOT NULL,
  `firma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cor_correspondencia`
--

INSERT INTO `cor_correspondencia` (`id`, `nRadicado`, `receptor`, `nGuia`, `fecha`, `remitente`, `hora`, `estado`, `firma`) VALUES
(1, '00001', 'Sandra Milena Lopez', '017386', '2018-08-03', 'Boyaca Agropecuario', '09:37:52', 1, ''),
(2, '00002', 'Peter Alexander Montoya  ', '982422640', '2018-08-03', 'Felipe Lozano', '09:47:48', 1, ''),
(3, '00003', 'Santiago Correa', '980937173', '2018-08-03', 'Aura Constanza Montero', '10:29:18', 1, ''),
(4, '00004', 'Juan Diego Yepes', '975382828', '2018-08-03', 'Andres Ramirez', '10:32:08', 1, ''),
(5, '00005', 'Gonzalo Santana', '7215344373', '2018-08-03', 'Yenifer Gonzalez', '10:58:17', 1, ''),
(6, '00006', 'Cisp ', '26342243845022', '2018-08-03', 'Arl Sura', '13:39:22', 1, ''),
(7, '00007', 'Natalia Hoyos ', '982556786', '2018-08-03', 'Elizabeth Alzate', '13:41:47', 1, ''),
(8, '00008', 'Natalia Hoyos ', '982556757', '2018-08-03', 'Elizabeth Alzate', '13:44:48', 1, ''),
(9, '00009', 'Sara Giraldo', '982954313', '2018-08-03', 'Daniel Campo', '13:48:28', 1, ''),
(10, '00010', 'Cisp', '981541831', '2018-08-03', 'Vilma Tejada', '13:51:00', 1, ''),
(11, '00011', 'Santiago Correa', '176000489561', '2018-08-03', 'Hugo Dueñas', '14:53:32', 1, ''),
(12, '00012', 'Julieth Hernandez ', '096000232434', '2018-08-06', 'Rigoberto Rosero', '08:16:37', 1, ''),
(13, '00013', 'Luigi Grando ', '47092300066', '2018-08-06', 'Banco sudameris', '08:19:49', 1, ''),
(14, '00014', 'Cisp', '47092300081', '2018-08-06', 'Banco sudameris', '08:21:12', 1, ''),
(15, '00015', 'Cisp', '222249534295470', '2018-08-06', 'Une', '08:46:40', 1, ''),
(16, '00016', 'Cisp', '222249534295467', '2018-08-06', 'Une', '08:47:10', 1, ''),
(17, '00017', 'Lina Maria Piza', '206931380492', '2018-08-06', 'Colpatria', '08:54:06', 1, ''),
(18, '00018', 'Cisp', '222249534295469', '2018-08-06', 'Une', '08:55:07', 1, ''),
(19, '00019', 'Cisp', '222249534295468', '2018-08-06', 'Une', '08:55:48', 1, ''),
(20, '00020', 'Carlos Gil', '979761530', '2018-08-06', 'Juan Esteban Agudelo', '10:05:51', 1, ''),
(21, '00021', 'Cisp', '979696395', '2018-08-06', 'Alberto Romero', '10:07:26', 1, ''),
(22, '00022', 'Cisp', '974641166', '2018-08-06', 'Ximena Chanaga', '10:13:48', 1, ''),
(23, '00023', 'Angelica Salazar', '974774309', '2018-08-06', 'Ana Lizarazo', '10:14:59', 1, ''),
(24, '00024', 'Cisp', '981648359', '2018-08-06', 'Jhonatan Paniza', '10:15:33', 1, ''),
(25, '00025', 'Angelica Salazar', '982849401', '2018-08-06', 'Luz Dary Valle', '10:16:06', 1, ''),
(26, '00026', 'Ilda Bibiana Alvarez', '977410061', '2018-08-06', 'Laura Gineth Fuya', '10:16:57', 1, ''),
(27, '00027', 'Sara Giraldo', '979251459', '2018-08-06', 'Malkarina Rivero', '10:17:53', 1, ''),
(28, '00028', 'Katalina Santos', '982008224', '2018-08-06', 'Yajaira Aldana', '10:18:33', 1, ''),
(29, '00029', 'Gonzalo Santana', '975394017', '2018-08-06', 'Lorena Montoya', '10:28:35', 1, ''),
(30, '00030', 'Cisp', 'M1050209', '2018-08-06', 'Swiss Andina', '10:40:43', 1, ''),
(31, '00031', 'Cisp', 'M1050119', '2018-08-06', 'Swiss Andina', '10:41:09', 1, ''),
(32, '00032', 'Cisp', 'M1050184', '2018-08-06', 'Swiss Andina', '10:41:55', 1, ''),
(33, '00033', 'Carlos Gil', '999045668184', '2018-08-06', 'Jesus Antonio Ceballos', '11:23:01', 1, ''),
(34, '00034', 'Julieth Hernandez ', '999045642975', '2018-08-06', 'Viviana Hernandez', '11:25:01', 1, ''),
(35, '00035', 'Julieth Hernandez ', '091000931211', '2018-08-06', 'Rigoberto Rosero', '11:49:44', 1, ''),
(36, '00036', 'Natalia Cortes', '700020208147', '2018-08-06', 'Diana Carolina', '13:44:39', 1, ''),
(37, '00037', 'Cisp', '49348833270', '2018-08-08', 'Gobernacion de antioquia', '08:18:44', 1, ''),
(38, '00038', 'Cisp', '981764786', '2018-08-08', 'Eloquentem', '10:13:33', 1, ''),
(39, '00039', 'Natalia Hoyos ', '982380623', '2018-08-08', 'Elizabeth Alzate', '11:39:20', 1, ''),
(40, '00040', 'Natalia Hoyos ', '979101272', '2018-08-08', 'Ingrid Pabon', '11:40:04', 1, ''),
(41, '00041', 'Julieth Hernandez', '0910000930508', '2018-08-08', 'Dario Benavidez', '11:42:32', 1, ''),
(42, '00042', 'Carlos Gil', '999045671856', '2018-08-08', 'Diana Huertas', '11:48:05', 1, ''),
(43, '00043', 'Cisp', '2010940829', '2018-08-08', 'Propiedades y proyectos', '15:22:27', 1, ''),
(44, '00044', 'Cisp', 'M1050366, M1050367', '2018-08-08', 'Swiss Andina', '16:45:33', 1, ''),
(45, '00045', 'Wilfer Garcia', '983324083', '2018-08-09', 'Ana Lizarazo', '13:50:44', 1, ''),
(46, '00046', 'Cristian Perez', 'Sin guia', '2018-08-09', 'KPMG ADVISORY', '13:54:26', 1, ''),
(47, '00047', 'Cisp ', '9016292822', '2018-08-10', 'Bancolombia', '09:57:40', 1, ''),
(48, '00048', 'Katalina Santos', '982008365', '2018-08-10', 'Yajaira Aldana', '13:31:08', 1, ''),
(49, '00049', 'Angelica Salazar', '974608779', '2018-08-10', 'Luz Dary Valle', '13:31:55', 1, ''),
(50, '00050', 'Ilda Bibiana Alvarez', '979346764', '2018-08-10', 'Gea Ambiental', '13:32:39', 1, ''),
(51, '00051', 'Santiago Correa', 'Sin guia', '2018-08-10', 'Fredy Bayona', '13:40:58', 1, ''),
(52, '00052', 'Santiago Correa', '176000490830', '2018-08-10', 'Claudia Garcia', '13:42:34', 1, ''),
(53, '00053', 'Cisp ', '821988355', '2018-08-13', 'Comcel', '08:18:29', 1, ''),
(54, '00054', 'Cisp', '50035645', '2018-08-13', 'Banco Sudameris', '08:19:20', 1, ''),
(55, '00055', 'Santiago Correa', '983600468', '2018-08-13', 'Jose Julian Forero', '09:50:37', 1, ''),
(56, '00056', 'Gonzalo Santana', '982258316', '2018-08-13', 'Yenifer Gonzalez', '09:51:45', 1, ''),
(57, '00057', 'Sara Giraldo', '980876327', '2018-08-13', 'Viviana Vega', '09:52:31', 1, ''),
(58, '00058', 'Angelica Salazar', '979696429', '2018-08-13', 'Andres Ramirez', '09:53:02', 1, ''),
(59, '00059', 'Sara Giraldo', '977517601', '2018-08-13', 'Indira Garcia', '09:53:43', 1, ''),
(60, '00060', 'Cisp ', '979644597', '2018-08-13', 'Ingrid Pabon', '09:54:11', 1, ''),
(61, '00061', 'Yuliana Gonzalez', '976392348', '2018-08-13', 'Giovany Laiton', '10:15:12', 1, ''),
(62, '00062', 'Cisp ', 'M1050595', '2018-08-13', 'Swiss Andina', '10:30:53', 1, ''),
(63, '00063', 'Santiago Correa', '176000491127', '2018-08-13', 'Claudia Garcia', '11:46:05', 1, ''),
(64, '00064', 'Angelica Salazar', '976659898', '2018-08-14', 'Boris Polanco', '11:16:53', 1, ''),
(65, '00065', 'Gonzalo Santana', '981815531', '2018-08-14', 'Elena Soto', '11:17:28', 1, ''),
(66, '00066', 'Luisa Restrepo', '979873686', '2018-08-14', 'Jessica Cubillos', '11:18:11', 1, ''),
(67, '00067', 'Vanessa Rendon', '978572091', '2018-08-15', 'Angela Robalo', '10:27:16', 1, ''),
(68, '00068', 'Angelica Salazar', '974608799', '2018-08-15', 'Luz Dary Valle', '11:16:06', 1, ''),
(69, '00069', 'Santiago Correa', '977800464', '2018-08-15', 'Claudia Garcia', '11:16:47', 1, ''),
(70, '00070', 'Daniela Sanchez', '700020394844', '2018-08-15', 'Marisol Cruz', '11:35:20', 1, ''),
(71, '00071', 'Julio Castilla', '977681337', '2018-08-16', 'Monica Carrillo', '10:03:14', 1, ''),
(72, '00072', 'Sara Giraldo', '974641236', '2018-08-16', 'Ximena Jerez', '11:32:05', 1, ''),
(73, '00073', 'Ana Maria Morales', '980937376', '2018-08-16', 'Nubia Tarazona', '11:33:02', 1, ''),
(74, '00074', 'Sara Giraldo', '983054906', '2018-08-16', 'Sebastian Forero', '11:33:42', 1, ''),
(75, '00075', 'Sara Giraldo', '980258526', '2018-08-16', 'Julian Felipe Crespo', '11:34:28', 1, ''),
(76, '00076', 'Gonzalo Santana', '975000024', '2018-08-16', 'Jesus Rodriguez', '11:35:45', 1, ''),
(77, '00077', 'Paula Bedoya', '974608805', '2018-08-16', 'Luz Valle', '11:37:20', 1, ''),
(78, '00078', 'Santiago Correa', '700020432891', '2018-08-16', 'Karen Molano', '11:43:19', 1, ''),
(79, '00079', 'Angelica Salazar', '050035636', '2018-08-16', 'Osvaldo Mesa', '11:54:40', 1, ''),
(80, '00080', 'Natalia Hoyos ', '999045939803', '2018-08-17', 'Maria Emilia Vargas', '09:22:02', 1, ''),
(81, '00081', 'Angelica Salazar', '974608810', '2018-08-17', 'Luz Valle', '10:21:57', 1, ''),
(82, '00082', 'Catalina Hoyos', '982557053', '2018-08-17', 'Elizabeth Camargo', '10:22:55', 1, ''),
(83, '00083', 'Cisp ', '810643785', '2018-08-17', 'Comcel', '13:39:10', 1, ''),
(84, '00084', 'Cisp', '822127247', '2018-08-17', 'Comcel', '13:39:51', 1, ''),
(85, '00085', 'Alvaro Santos', '050035636', '2018-08-21', 'Ministerio De Agricultura', '08:10:21', 1, ''),
(86, '00086', 'Catalina Hoyos', '982380693', '2018-08-21', 'Elizabeth Alzate', '09:35:03', 1, ''),
(87, '00087', 'Santiago Correa', '700020482240', '2018-08-21', 'Fredy Bayona', '09:36:51', 1, ''),
(88, '00088', 'Santiago Correa', '700020490336', '2018-08-21', 'Pedro Moreno', '09:38:36', 1, ''),
(89, '00089', 'Santiago Correa', '700020481685', '2018-08-21', 'Jose Baron', '09:39:12', 1, ''),
(90, '00090', 'Sara Giraldo', '976556539', '2018-08-21', 'Indira Garcia', '09:49:28', 1, ''),
(91, '00091', 'Julieth Hernandez', '979762714', '2018-08-21', 'Rigoberto Rosero', '09:49:58', 1, ''),
(92, '00092', 'Natalia Hoyos ', '982380718', '2018-08-21', 'Elizabeth Alzate', '09:50:24', 1, ''),
(93, '00093', 'Catalina Hoyos', '982380721', '2018-08-21', 'Elizabeth Alzate', '09:50:51', 1, ''),
(94, '00094', 'Ana Maria Morales', '983109466', '2018-08-21', 'Lady Jojoa', '09:51:22', 1, ''),
(95, '00095', 'Angelica Salazar', '176000493300', '2018-08-21', 'Fredy Julian Mariño Suarez', '11:32:43', 1, ''),
(96, '00096', 'Catalina Hoyos', '983826908', '2018-08-21', 'Elizabeth Alzate', '13:12:01', 1, ''),
(97, '00097', 'Juan Diego Yepes', '50035645', '2018-08-22', 'F2X S.A.S', '10:49:22', 1, ''),
(98, '00098', 'Sara Giraldo', '980876553', '2018-08-22', 'Viviana Vega', '11:34:56', 1, ''),
(99, '00099', 'Ana Maria Morales', '999046010269', '2018-08-22', 'Jose Baron', '16:02:45', 1, ''),
(100, '00100', 'Angelica Salazar', '982536000', '2018-08-23', 'Boris Palencia', '14:19:55', 1, ''),
(101, '00101', 'Cisp', '982597269', '2018-08-23', 'Danny Castiblanco', '14:20:27', 1, ''),
(102, '00102', 'Cisp', '978747042', '2018-08-23', 'Stefanie Quintero ', '14:21:15', 1, ''),
(103, '00103', 'Ana Maria Morales', '979768972', '2018-08-23', 'Zulma Alejandra Puentes', '14:21:59', 1, ''),
(104, '00104', 'Luisa Restrepo', '975731642', '2018-08-23', 'Dacid Lozada', '14:22:34', 1, ''),
(105, '00105', 'Cisp', '983826992', '2018-08-23', 'Elizabeth Camargo', '14:23:10', 1, ''),
(106, '00106', 'Cisp', 'M1051066, M1051171', '2018-08-24', 'Swiss Andina', '09:05:07', 1, ''),
(107, '00107', 'Fabio Vanegas', '091000932558', '2018-08-24', 'Dario Benavidez', '10:54:02', 1, ''),
(108, '00108', 'Katalina Santos', '999046042196', '2018-08-24', 'Yubisa Herrera', '13:35:23', 1, ''),
(109, '00109', 'Natali Buitrago', '982490765', '2018-08-24', 'Vanessa Torres', '13:36:40', 1, ''),
(110, '00110', 'Katalina Santos', '982768701', '2018-08-24', 'Jhonatan Paniza', '13:38:22', 1, ''),
(111, '00111', 'Cisp', '983347440', '2018-08-24', 'Osvaldo Mesa', '13:39:22', 1, ''),
(112, '00112', 'Luisa Restrepo', 'Sin guia', '2018-08-24', 'Cpm Soluciones Integrales', '14:22:47', 1, ''),
(113, '00113', 'Cisp', '1231775', '2018-08-27', 'Telesentinel De Antioquia', '09:33:54', 1, ''),
(114, '00114', 'Sara Giraldo', '976556552', '2018-08-27', 'Indira Garcia', '10:22:34', 1, ''),
(115, '00115', 'Sara Giraldo', '982872809', '2018-08-27', 'Jhon Amaya', '10:23:11', 1, ''),
(116, '00116', 'Sara Giraldo', '984019179', '2018-08-27', 'Indira Garcia', '10:23:44', 1, ''),
(117, '00117', 'Julieth Hernandez', '983215982', '2018-08-27', 'Rigoberto Rosero', '10:24:28', 1, ''),
(118, '00118', 'Catalina Hoyos', '977148940', '2018-08-27', 'Rosana Cantillo', '10:25:08', 1, ''),
(119, '00119', 'Katalina Santos', '982008768', '2018-08-27', 'Maria Cristina Betancour', '10:25:48', 1, ''),
(120, '00120', 'Cisp', '980271886', '2018-08-27', 'Estevis Pertuz', '10:26:29', 1, ''),
(121, '00121', 'Natali Buitrago', '975460521', '2018-08-27', 'Juan Carlos Gil', '10:27:26', 1, ''),
(122, '00122', 'Natalia Dominguez', '983028968', '2018-08-27', 'Cisp', '10:41:36', 1, ''),
(123, '00123', 'Natalia Hoyos ', '999046076625', '2018-08-27', 'Maria Emilia Vargas', '13:15:15', 1, ''),
(124, '00124', 'Natalia Hoyos ', '999046122202', '2018-08-27', 'Maria Emilia Vargas', '13:15:49', 1, ''),
(125, '00125', 'Santiago Correa', '176000494190', '2018-08-27', 'Nancy Aguilar', '13:22:06', 1, ''),
(126, '00126', 'Catalina Hoyos', '982380756', '2018-08-27', 'Elizabeth Camargo', '13:39:33', 1, ''),
(127, '00127', 'Sara Giraldo', '981318744', '2018-08-27', 'Magalis Gutierrez', '13:41:17', 1, ''),
(128, '00128', 'Catalina Hoyos', '983827015', '2018-08-27', 'Elizabeth Camargo', '13:41:48', 1, ''),
(129, '00129', 'Julieth Hernandez', '975460523', '2018-08-27', 'Juan Carlos Gil', '13:45:24', 1, ''),
(130, '00130', 'Ana Maria Morales', '050036636', '2018-08-27', 'Diego Saba', '15:36:29', 1, ''),
(131, '00131', 'Santiago Correa', '176000494714', '2018-08-28', 'Aura Constanza Montero', '08:29:40', 1, ''),
(132, '00132', 'Luisa Restrepo', '193', '2018-08-29', 'Cpm Soluciones Integrales', '08:22:12', 1, ''),
(133, '00133', 'Cristian Perez', 'sin guia', '2018-08-29', 'Kpm Advisory Tax', '08:23:22', 1, ''),
(134, '00134', 'Cisp', '984019225', '2018-08-29', 'Yasmin Soraida Jimenez', '08:25:02', 1, ''),
(135, '00135', 'Catalina Hoyos', '982380767', '2018-08-29', 'Elizabeth Camargo', '10:07:20', 1, ''),
(136, '00136', 'Jose Ignacio Urrego', '981018351', '2018-08-29', 'Nubia Tarazona', '10:10:02', 1, ''),
(137, '00137', 'Sara Giraldo', '981015022', '2018-08-29', 'Malkarina Rivero', '11:08:46', 1, ''),
(138, '00138', 'Jose Ignacio Urrego', '976488516', '2018-08-29', 'Liliana Figueroa', '14:07:10', 1, ''),
(139, '00139', 'Paula Bedoya', '975383041', '2018-08-29', 'Andres Ramirez', '14:11:36', 1, ''),
(140, '00140', 'Mauricio Lopez ', '7215653937', '2018-08-29', 'Dionisio Hernandez', '14:13:20', 1, ''),
(141, '00141', 'Ilda Bibiana Alvarez', '979347929', '2018-08-29', 'Gea Ambiental', '14:15:23', 1, ''),
(142, '00142', 'Santiago Correa', '176000494874', '2018-08-29', 'Hugo Dueñas', '14:16:11', 1, ''),
(143, '00143', 'Natalia Hoyos ', '999046187051', '2018-08-29', 'Maria Emilia Vargas', '14:17:04', 1, ''),
(144, '00144', 'Santiago Correa', '981018390', '2018-08-30', 'Gelvert Moreno', '13:57:37', 1, ''),
(145, '00145', 'Catalina Hoyos', '982380774', '2018-08-30', 'Elizabeth Camargo', '13:58:45', 1, ''),
(146, '00146', 'Natalia Hoyos ', '999046248300', '2018-08-31', 'Maria Emilia Vargas', '09:59:12', 1, ''),
(147, '00147', 'Cisp', 'M1051617', '2018-08-31', 'Swiss Andina', '10:00:45', 1, ''),
(148, '00148', 'Carlos Gil', '999046221612', '2018-08-31', 'Jesus Antonio Ceballos', '10:46:26', 1, ''),
(149, '00149', 'Katalina Santos', '982009044', '2018-08-31', 'Karina Torrado', '10:52:06', 1, ''),
(150, '00150', 'Daniel Valencia', '982380784', '2018-08-31', 'Lorena Rojas', '10:54:12', 1, ''),
(151, '00151', 'Sara Giraldo', '981015047', '2018-08-31', 'Malkarina Rivero', '10:55:31', 1, ''),
(152, '00152', 'Ilda Bibiana Alvarez', '981157493', '2018-08-31', 'Eulises  Diaz', '10:59:04', 1, ''),
(153, '00153', 'Ivan Perez', '0003', '2018-08-31', 'Banco Sudameris', '11:38:43', 1, ''),
(154, '00154', 'Cisp', '47095000085', '2018-09-03', 'Banco Sudameris', '08:59:19', 1, ''),
(155, '00155', 'Cisp', '47095000067', '2018-09-03', 'Banco Sudameris', '09:00:29', 1, ''),
(156, '00156', 'Carlos Gil', '983090080', '2018-09-03', 'Diana Chaves', '09:01:50', 1, ''),
(157, '00157', 'Sara Giraldo', '981015063', '2018-09-03', 'Malkarina Rivero', '10:03:18', 1, ''),
(158, '00158', 'Sara Giraldo', '981281405', '2018-09-03', 'Magalis Gutierrez', '10:04:03', 1, ''),
(159, '00159', 'Santiago Correa', '983601526', '2018-09-03', 'Daniel Wilches', '10:04:56', 1, ''),
(160, '00160', 'Luisa Restrepo', '982397618', '2018-09-03', 'Maria Del Pilar Ortiz Valencia', '10:05:45', 1, ''),
(161, '00161', 'Daniel Sanchez', '983827199', '2018-09-03', 'Lorena Rojas', '10:06:41', 1, ''),
(162, '00162', 'Ana Maria Morales', '979959351', '2018-09-03', 'Diana Ceron', '10:08:58', 1, ''),
(163, '00163', 'Angelica Salazar', '981177986', '2018-09-03', 'Andres Ramirez', '10:09:35', 1, ''),
(164, '00164', 'Angelica Salazar', '974608868', '2018-09-03', 'Luz Dary Valle', '10:10:05', 1, ''),
(165, '00165', 'Paula Bedoya', '976556562', '2018-09-03', 'Indira Garcia', '10:10:33', 1, ''),
(166, '00166', 'Katalina Santos', '982769234', '2018-09-03', 'Jhonatan Paniza', '10:11:03', 1, ''),
(167, '00167', 'Monica Lopez', '983446555', '2018-09-03', 'Monica Carrillo', '10:12:00', 1, ''),
(168, '00168', 'Monica Lopez', '983649158', '2018-09-03', 'Olga Paiva', '10:12:56', 1, ''),
(169, '00169', 'Catalina Hoyos', '982380791', '2018-09-03', 'Elizabeth Alzate', '11:01:46', 1, ''),
(170, '00170', 'Yuliana Betancur', '7215653975', '2018-09-03', 'Dionisio Hernandez', '11:02:34', 1, ''),
(171, '00171', 'Mauricio Lopez', '978572140', '2018-09-03', 'Angela Robayo', '11:04:26', 1, ''),
(172, '00172', 'Katalina Santos', '976580722', '2018-09-03', 'Alvaro Cavadia', '11:06:50', 1, ''),
(173, '00173', 'Monica Lopez', '983649120', '2018-09-03', 'Carmen Guacaneme', '11:08:11', 1, ''),
(174, '00174', 'Catalina Hoyos', '983827187', '2018-09-03', 'Elizabeth Alzate', '11:09:33', 1, ''),
(175, '00175', 'Monica Lopez', '983649121', '2018-09-03', 'Olga Paiva', '11:10:08', 1, ''),
(176, '00176', 'Monica Lopez', '980003912', '2018-09-03', 'Cindy Hurtado', '11:20:05', 1, ''),
(177, '00177', 'Daniel Valencia', '983827208', '2018-09-03', 'Elizabeth Alzate', '11:20:49', 1, ''),
(178, '00178', 'Natalia Hoyos ', '999046313371', '2018-09-04', 'Maria Emilia Vargas', '08:34:05', 1, ''),
(179, '00179', 'Monica Lopez', '983649206', '2018-09-04', 'Andres Masmela', '10:23:48', 1, ''),
(180, '00180', 'Daniel Valencia', '983827246', '2018-09-04', 'Elizabeth Alzate', '11:54:21', 1, ''),
(181, '00181', 'Cisp', '26450143983083', '2018-09-04', 'Arl Sura', '14:04:16', 1, ''),
(182, '00182', 'Cisp', '980868141', '2018-09-04', 'Heidy Murcia', '14:05:23', 1, ''),
(183, '00183', 'Luisa Restrepo', '975731673', '2018-09-04', 'David Lozada', '14:06:13', 1, ''),
(184, '00184', 'Yuliana Betancur', '981723908', '2018-09-04', 'Heidy Murcia', '14:07:14', 1, ''),
(185, '00185', 'Carlos Gil', '980924963', '2018-09-04', 'Mauricio Timaran', '14:11:17', 1, ''),
(186, '00186', 'Natalia Cortes', '900007880613', '2018-09-04', 'Diana Carolina', '14:47:22', 1, ''),
(187, '00187', 'Fabio Vanegas', '700020694095', '2018-09-05', 'Juan Carlos Gil', '09:00:35', 1, ''),
(188, '00188', 'Cisp', '983028973', '2018-09-05', 'Jhon Tres Palacios', '10:28:04', 1, ''),
(189, '00189', 'Daniel Valencia', '983827256', '2018-09-05', 'Elizabeth Alzate', '10:28:52', 1, ''),
(190, '00190', 'Cisp', '12173', '2018-09-05', 'Divergraficas', '14:02:12', 1, ''),
(191, '00191', 'Lina Piza', '206931821878', '2018-09-06', 'Colpatria', '09:22:13', 1, ''),
(192, '00192', 'Daniel Valencia', '999046380490', '2018-09-06', 'Clara Margarita Castrillon', '09:23:56', 1, ''),
(193, '00193', 'Cisp', '983468941', '2018-09-06', 'Marien Aguirre', '10:11:00', 1, ''),
(194, '00194', 'Cisp', '983468941', '2018-09-06', 'Marien Aguirre', '10:11:02', 1, ''),
(195, '00195', 'Daniel Valencia', '982380829', '2018-09-06', 'Elizabeth Alzate', '10:11:34', 1, ''),
(196, '00196', 'Daniel Valencia', '983827313', '2018-09-06', 'Elizabeth Alzate', '10:12:01', 1, ''),
(197, '00197', 'Daniel Valencia', '983827297', '2018-09-06', 'Elizabeth Alzate', '10:12:59', 1, ''),
(198, '00198', 'Daniel Valencia', '983827331', '2018-09-06', 'Elizabeth Alzate', '10:14:06', 1, ''),
(199, '00199', 'Cisp', '36721901', '2018-09-07', 'Bancolombia', '08:51:19', 1, ''),
(200, '00200', 'Cisp', 'M1051926', '2018-09-07', 'Swiss Andina', '08:52:42', 1, ''),
(201, '00201', 'Natali Buitrago', '979769808', '2018-09-07', 'Darwin Acosta Tova', '10:07:27', 1, ''),
(202, '00202', 'Santiago Correa', '176000496980', '2018-09-07', 'Claudia Garcia', '14:08:42', 1, ''),
(203, '00203', 'Erika Guerra', '700020817362', '2018-09-07', 'Deisy Moreno Lopez', '14:55:58', 1, ''),
(204, '00204', 'Natalia Cortes', '700020817433', '2018-09-07', 'Deisy Moreno Lopez', '14:57:18', 1, ''),
(205, '00205', 'Paula Bedoya', '981318790', '2018-09-10', 'Magalis Gutierrez', '09:45:58', 1, ''),
(206, '00206', 'Santiago Correa', '984643216', '2018-09-10', 'Viviana Rodriguez', '09:46:45', 1, ''),
(207, '00207', 'Luisa Restrepo', '975731685', '2018-09-10', 'David Lozada', '09:47:25', 1, ''),
(208, '00208', 'Cisp', '982449085', '2018-09-10', 'Nayibe Lozano Garavito', '09:58:42', 1, ''),
(209, '00209', 'Monica Lopez', '976210758', '2018-09-10', 'Fredy Alexander Jimenez', '10:01:46', 1, ''),
(210, '00210', 'Natali Buitrago', 'Lo entregan personalmente', '2018-09-10', 'Multisagro', '14:35:44', 1, ''),
(211, '00211', 'Cisp', '000046499890', '2018-09-11', 'Fundacion Para La Investigacion', '09:14:25', 1, ''),
(212, '00212', 'Vanessa Rendon', '000046500676', '2018-09-11', 'Fundacion Para La Investigacion', '09:37:41', 1, ''),
(213, '00213', 'Daniel Valencia', '982380882', '2018-09-11', 'Elizabeth Alzate', '10:18:58', 1, ''),
(214, '00214', 'Ana Maria Morales', '983116307', '2018-09-11', 'Giovany Laiton', '10:19:52', 1, ''),
(215, '00215', 'Mauricio Lopez', '983468996', '2018-09-11', 'Marien Aguirre', '10:20:42', 1, ''),
(216, '00216', 'Fabio Vanegas', '091000933832', '2018-09-11', 'Hugo Caicedo', '11:25:19', 1, ''),
(217, '00217', 'Cisp', '974641371', '2018-09-11', 'Ximena Chanaga', '11:50:03', 1, ''),
(218, '00218', 'Gonzalo Santana', '975394210', '2018-09-11', 'Leidy Lorena', '11:50:44', 1, ''),
(219, '00219', 'Cisp', '26481544017526', '2018-09-11', 'Arl Sura', '11:59:50', 1, ''),
(220, '00220', 'Fabio Vanegas', '700020890408', '2018-09-11', 'Juan Carlos Gil', '14:01:14', 1, ''),
(221, '00221', 'Rene Gonzalez', '194', '2018-09-11', 'Cpm Soluciones Integrales', '14:30:25', 1, ''),
(222, '00222', 'Santiago Correa', '999046489352', '2018-09-12', 'Yefer Nova', '08:54:05', 1, ''),
(223, '00223', 'Santiago Correa', '99946496013', '2018-09-12', 'Fredy Bayona', '08:54:40', 1, ''),
(224, '00224', 'Cisp', '47087700107', '2018-09-12', 'Banco Sudameris', '10:13:23', 1, ''),
(225, '00225', 'Sara Giraldo', '983909147', '2018-09-12', 'Indira Garcia', '11:31:58', 1, ''),
(226, '00226', 'Angelica Salazar', '981178272', '2018-09-12', 'Luz Dary Valle', '11:32:43', 1, ''),
(227, '00227', 'Juan Diego Yepes', '2017084974', '2018-09-13', 'Logitechmobile', '13:39:29', 1, ''),
(228, '00228', 'Erika Guerra', '999046535671', '2018-09-13', 'Yubisa Herrera', '14:26:23', 1, ''),
(229, '00229', 'Angelica Salazar', '984043942', '2018-09-13', 'Andrea Perez', '14:27:22', 1, ''),
(230, '00230', 'Daniel Valencia', '984649455', '2018-09-13', 'Elizabeth Alzate', '14:27:55', 1, ''),
(231, '00231', 'Sara Giraldo', '984475907', '2018-09-13', 'Julian Felipe Crespo', '14:28:26', 1, ''),
(232, '00232', 'Sara Giraldo', '983790123', '2018-09-13', 'Rosiris Ganen Tamayo', '14:29:01', 1, ''),
(233, '00233', 'Ana Maria Morales', '979959377', '2018-09-13', 'Diana Carolina Romero', '14:29:43', 1, ''),
(234, '00234', 'Daniel Valencia', '982380889', '2018-09-13', 'Elizabeth Alzate', '14:30:12', 1, ''),
(235, '00235', 'Daniel Valencia', '984649394', '2018-09-13', 'Elizabeth Alzate', '14:30:45', 1, ''),
(236, '00236', 'Cisp', '9017669341', '2018-09-13', 'Une', '14:44:00', 1, ''),
(237, '00237', 'Cisp', 'M1052429, M1052280, M1052285, M1052284', '2018-09-14', 'Swiss Andina', '08:22:55', 1, ''),
(238, '00238', 'Luisa Restrepo', 'M1052508', '2018-09-14', 'Sw', '08:23:25', 1, ''),
(239, '00239', 'Santiago Correa', '176000499318', '2018-09-14', 'Jose Julian Forero', '10:49:04', 1, ''),
(240, '00240', 'Angelica Salazar', '983324124', '2018-09-14', 'Jeimmy Lorena Alfonso Garavito', '10:50:15', 1, ''),
(241, '00241', 'Cisp', '300001379110', '2018-09-14', 'Insoft S.a.s', '10:51:32', 1, ''),
(242, '00242', 'Gonzalo Santana', '984823540', '2018-09-14', 'Sandra Milena Ortiz', '13:38:03', 1, ''),
(243, '00243', 'Cisp', '984265231', '2018-09-14', 'Oscar Salgar Lozano', '13:38:55', 1, ''),
(244, '00244', 'Sara Giraldo', '983133406', '2018-09-14', 'Marisol Cruz', '13:39:22', 1, ''),
(245, '00245', 'Fabio Vanegas', '981018901', '2018-09-17', 'Fundacion Colombiana Agroecologia', '10:01:37', 1, ''),
(246, '00246', 'Katalina Santos', '982770179', '2018-09-17', 'Jhonatan Paniza', '10:02:10', 1, ''),
(247, '00247', 'Monica Lopez', '984904642', '2018-09-17', 'Alexander Vasquez Ruiz', '10:02:49', 1, ''),
(248, '00248', 'Monica Lopez', '984299220', '2018-09-17', 'Juan Carlos Aponte Silva', '10:03:37', 1, ''),
(249, '00249', 'Fabio Vanegas', '096000239710', '2018-09-17', 'Rigoberto Rosero', '10:18:21', 1, ''),
(250, '00250', 'Natali Buitrago', 'no tiene guia', '2018-09-17', 'Santiago Ruiz', '10:32:31', 1, ''),
(251, '00251', 'Sara Giraldo', '981015394', '2018-09-17', 'Malkarina Rivero', '10:38:55', 1, ''),
(252, '00252', 'Sara Giraldo', '979049095', '2018-09-17', 'Natalia Dominguez', '10:39:31', 1, ''),
(253, '00253', 'Cisp', '983029377', '2018-09-17', 'Federacion Agropecuaria De Cundinam', '10:46:30', 1, ''),
(254, '00254', 'Ilda Bibiana Alvarez', '981284606', '2018-09-17', 'Gea Ambiental', '10:47:24', 1, ''),
(255, '00255', 'Ana Maria Morales', '979959384', '2018-09-17', 'Diana Carolina Ceron', '10:48:02', 1, ''),
(256, '00256', 'Sara Giraldo', '982258873', '2018-09-17', 'Yenifer Gonzalez', '10:49:23', 1, ''),
(257, '00257', 'Angelica Salazar', '974608942', '2018-09-18', 'Luz Dary Valle', '13:38:00', 1, ''),
(258, '00258', 'Daniel Valencia', '982380957', '2018-09-18', 'Elizabeth Alzate', '13:38:30', 1, ''),
(259, '00259', 'Cisp', '36851903', '2018-09-18', 'Claro', '16:21:56', 1, ''),
(260, '00260', 'Cisp', '36689253', '2018-09-18', 'Claro', '16:22:29', 1, ''),
(261, '00261', 'Cisp', '12432, 12434,12433', '2018-09-20', 'Divergraficas', '10:27:44', 1, ''),
(262, '00262', 'Luisa Restrepo', '700021074146', '2018-09-20', 'Viviana Vega', '13:48:30', 1, ''),
(263, '00263', 'Cisp', '983029396', '2018-09-20', 'Equipo Base  De Santa Martha', '13:49:51', 1, ''),
(264, '00264', 'Daniela Sanchez', '979449833', '2018-09-20', 'Dinay Teheron', '13:51:34', 1, ''),
(265, '00265', 'Santiago Correa', '176000500522', '2018-09-20', 'Hugo Dueñas', '13:52:16', 1, ''),
(266, '00266', 'Fabio Vanegas', '975460709', '2018-09-20', 'Juan Carlos Gil', '13:52:49', 1, ''),
(267, '00267', 'Ana Maria Morales', '975760175', '2018-09-20', 'Jesus Rodriguez', '13:53:20', 1, ''),
(268, '00268', 'Natali Buitrago', '975460708', '2018-09-20', 'Juan Carlos Gil', '13:54:03', 1, ''),
(269, '00269', 'Cisp', '980352249', '2018-09-20', 'Melissa Ganem', '13:54:53', 1, ''),
(270, '00270', 'Katalina Santos', '983910848', '2018-09-20', 'Maria Cristina Betancour', '13:56:52', 1, ''),
(271, '00271', 'Santiago Correa', '978747233', '2018-09-20', 'Evelio Osorio', '13:57:32', 1, ''),
(272, '00272', 'Daniel Valencia', '984649660', '2018-09-20', 'Elizabeth Camargo', '13:58:27', 1, ''),
(273, '00273', 'Daniel Valencia', '982380932', '2018-09-20', 'Elizabeth Alzate', '13:58:55', 1, ''),
(274, '00274', 'Julieth Hernandez', '999046712387', '2018-09-21', 'Rigoberto Rosero', '10:30:58', 1, ''),
(275, '00275', 'Santiago Correa', '981976033', '2018-09-21', 'Marlina Negrete', '10:31:33', 1, ''),
(276, '00276', 'Mauricio Lopez', '981933114', '2018-09-21', 'Natalia  Romero', '10:32:08', 1, ''),
(277, '00277', 'Ilda Bibiana Alvarez', '985187722', '2018-09-21', 'Eloquentem', '10:32:36', 1, ''),
(278, '00278', 'Carlos Gil', '984753750', '2018-09-21', 'Jesus Antonio Ceballos', '10:33:01', 1, ''),
(279, '00279', 'Ana Maria Morales', '976567357', '2018-09-21', 'Aura Constanza Montero', '11:44:22', 1, ''),
(280, '00280', 'Carlos Gil', '999046733444', '2018-09-24', 'Diana Huertas', '08:58:16', 1, ''),
(281, '00281', 'Ilda Bibiana Alvarez', '981284998', '2018-09-24', 'Gea Ambiental', '09:34:46', 1, ''),
(282, '00282', 'Cisp', '979550942', '2018-09-24', 'Alejandro Contreras', '09:35:36', 1, ''),
(283, '00283', 'Daniel Valencia', '984070597', '2018-09-24', 'Elizabeth Alzate', '10:19:06', 1, ''),
(284, '00284', 'Daniel Valencia', '983122299', '2018-09-24', 'Lorena Rojas', '10:20:09', 1, ''),
(285, '00285', 'Yuliana Betancur', '7215654263', '2018-09-24', 'Dionisio Hernandez', '10:21:07', 1, ''),
(286, '00286', 'Cisp', 'M1052690', '2018-09-24', 'Swiss Andina', '10:30:46', 1, ''),
(287, '00287', 'Natalia Hoyos ', '999046773451', '2018-09-24', 'Maria Emilia Vargas', '11:15:52', 1, ''),
(288, '00288', 'Santiago Correa', '176000501277', '2018-09-24', 'Fredy Bayona', '11:38:04', 1, ''),
(289, '00289', 'Daniel Valencia', '985351262', '2018-09-25', 'Elizabeth Alzate', '09:24:37', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cor_radicado`
--

CREATE TABLE `cor_radicado` (
  `id` int(11) NOT NULL,
  `nradicado` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tipo` varchar(11) NOT NULL,
  `usuario` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cor_radicado`
--

INSERT INTO `cor_radicado` (`id`, `nradicado`, `fecha`, `hora`, `asunto`, `tipo`, `usuario`) VALUES
(1, '00001', '2018-09-10', '11:30:30', '00001', '2', '1'),
(2, '00002', '2018-09-10', '11:38:39', '1234', '1', '1'),
(3, '00003', '2018-09-10', '11:56:20', '0003', '1', '1'),
(4, '00004', '2018-09-10', '11:56:32', '0004', '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cor_receptor`
--

CREATE TABLE `cor_receptor` (
  `id` int(11) NOT NULL,
  `receptor` varchar(40) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cor_receptor`
--

INSERT INTO `cor_receptor` (`id`, `receptor`, `correo`) VALUES
(1, 'Angelica Salazar', 'amsalazar@cispcolombia.org'),
(2, 'Carlos Gil', 'cagil@cispcolombia.org'),
(3, 'Cisp', '-'),
(4, 'Gonzalo Santana', 'gsantana@cispcolombia.org'),
(5, 'Ilda Bibiana Alvarez', 'ialvarez@cispcolombia.org'),
(6, 'Juan Diego Yepes', 'jyepes@cispcolombia.org'),
(7, 'Juan Esteban Agudelo', '-'),
(8, 'Julieth Hernandez', 'jhernandez@cispcolombia.org'),
(9, 'Katalina Santos', 'ksantos@cispcolombia.org'),
(10, 'Lina Piza', 'lmpiza@cispcolombia.org'),
(11, 'Luigi Grando ', '-'),
(12, 'Natalia Cortes', 'ncortes@cispcolombia.org'),
(13, 'Natalia Hoyos ', 'nhoyos@cispcolombia.org'),
(14, 'Peter Alexander Montoya ', 'pamontoya@cispcolombia.org'),
(15, 'Sandra Milena Lopez', 'slopez@cispcolombia.org'),
(16, 'Santiago Correa', 'scorrea@cispcolombia.org'),
(17, 'Sara Giraldo', 'sgiraldo@cispcolombia.org'),
(18, 'Jeison Fernandez', 'soporte@cispcolombia.org'),
(19, 'Cristian Perez', 'cperez@cispcolombia.org'),
(20, 'Wilfer Garcia', 'whgarcia@cispcolombia.org'),
(21, 'Pruebas', 'jcospina@cispcolombia.org'),
(22, 'Daniela Sanchez', 'dsanchez@cispcolombia.org'),
(23, 'Vanessa Rendon', 'varendon@cispcolombia.org'),
(24, 'Luisa Restrepo', 'lrestrepo@cispcolombia.org'),
(25, 'Catalina Hoyos', 'choyos@cispcolombia.org'),
(26, 'Paula Bedoya', 'pabedoya@cispcolombia.org'),
(27, 'Ana Maria Morales', 'ammorales@cispcolombia.org'),
(28, 'Natali Buitrago', 'enbuitrago@cispcolombia.org'),
(29, 'Fabio Vanegas', 'flvanegas@cispcolombia.org'),
(30, 'Julio Castilla', 'jccastilla@cispcolombia.org'),
(31, 'Ivan Perez', 'idperez@cispcolombia.org'),
(32, 'Daniel Valencia', 'dvalencia@cispcolombia.org'),
(33, 'Rene Gonzalez', 'ragonzalez@cispcolombia.org'),
(34, 'Yuliana Betancur', 'yabetancur@cispcolombia.org'),
(35, 'Monica Lopez', 'mlopezp@cispcolombia.org'),
(36, 'Mauricio Lopez', 'mlbetancur@cispcolombia.org'),
(37, 'Jose Ignacio Urrego', 'jiurrego@cispcolombia.org'),
(38, 'Erika Guerra', 'eguerra@cispcolombia.org');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cor_settings`
--

CREATE TABLE `cor_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `val` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cor_settings`
--

INSERT INTO `cor_settings` (`id`, `name`, `val`) VALUES
(1, 'site_title', 'Invento - %page%'),
(2, 'site_logo', 'media/img/logo3x.png'),
(3, 'allow_userchange', 'y'),
(4, 'allow_namechange', 'n'),
(5, 'allow_emailchange', 'y'),
(6, 'installed', 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cor_users`
--

CREATE TABLE `cor_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `date_added` date DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cor_users`
--

INSERT INTO `cor_users` (`id`, `username`, `password`, `name`, `email`, `role`, `date_added`) VALUES
(1, 'Admin', '2531da937505f99df100a99240e0e38a', 'Admin', 'miilomontoya87@gmail.com', 1, '2017-04-01'),
(2, 'Camilo', '2531da937505f99df100a99240e0e38a', 'J.C.O', 'prueba@cispcolombia.org', 4, '2018-08-02'),
(3, 'Recepcion', '9953f4b13eac4d4b16195bee9b38c4c4', 'M.G', 'recepcion@cispcolombia.org', 2, '2018-08-02'),
(4, 'Linapiza', '2531da937505f99df100a99240e0e38a', 'L.M.P', 'radicados@cispcolombia.org', 3, '2018-08-29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cor_correspondencia`
--
ALTER TABLE `cor_correspondencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cor_radicado`
--
ALTER TABLE `cor_radicado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cor_receptor`
--
ALTER TABLE `cor_receptor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cor_settings`
--
ALTER TABLE `cor_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cor_users`
--
ALTER TABLE `cor_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cor_correspondencia`
--
ALTER TABLE `cor_correspondencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;
--
-- AUTO_INCREMENT de la tabla `cor_radicado`
--
ALTER TABLE `cor_radicado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cor_receptor`
--
ALTER TABLE `cor_receptor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `cor_settings`
--
ALTER TABLE `cor_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cor_users`
--
ALTER TABLE `cor_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
