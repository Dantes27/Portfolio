-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2022 a las 00:17:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cobatab_p11`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_academicas`
--

CREATE TABLE `act_academicas` (
  `id_act_academicas` int(11) NOT NULL,
  `titulo_alb` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `act_academicas`
--

INSERT INTO `act_academicas` (`id_act_academicas`, `titulo_alb`, `descripcion`, `imagen`) VALUES
(1, 'Dia Del Estudiante', '', 'vendors/images/act_academicas/act_academicas1.jpg'),
(2, 'Banda De Guerra', '', 'vendors/images/act_academicas/bandadeguerra.jpg'),
(3, 'Dia De Muertos', '', 'vendors/images/act_academicas/act_academicas3.jpg'),
(5, 'Eventos Especiales', '', 'vendors/images/act_academicas/act_academicas5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumnos` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `url_pdf` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumnos`, `titulo`, `url_pdf`) VALUES
(1, 'Ver Mis Calificaciones', 'http://187.189.147.227:7070/WebSGII/'),
(2, 'Calendario Escolar', 'vendors/docs/cobatab_docs/CalendarioEscolar2021-2022.pdf'),
(3, 'Reglamento Cobatab', 'vendors/docs/cobatab_docs/Reglamento_Cobatab.pdf'),
(4, 'Himno Cobatab', 'vendors/docs/cobatab_docs/Himno_Cobatab.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones_series`
--

CREATE TABLE `capacitaciones_series` (
  `id_capacitaciones_series` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `banner_url` varchar(100) NOT NULL,
  `imagen_url` varchar(100) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capacitaciones_series`
--

INSERT INTO `capacitaciones_series` (`id_capacitaciones_series`, `nombre`, `titulo`, `tipo`, `banner_url`, `imagen_url`, `mision`, `vision`) VALUES
(1, 'Administración', 'Capacitación De Administración', 'capacitacion', 'vendors/images/banners/banner_inicio_2.jpg', '', 'En administración de empresas, podemos definir la misión como el propósito de la empresa. La misión de una empresa suele empezar con un verbo infinitivo como, por ejemplo, fabricar, crear, diseñar, capacitar, transportar, educar, etc. La misión limita las directrices generales de la empresa y su razón de ser.', 'La visión en administración, es la planeación estratégica que se plantea para la compañía, lo que permite establecer los objetivos a corto, mediano y largo plazo, que trazarán el camino a seguir para llevar la empresa a la meta planteada.'),
(2, 'Contabilidad', 'Capacitación De Contabilidad', 'capacitacion', 'vendors/images/banners/banner_inicio_2.jpg', '', 'La misión del Contador General es suministrar a la Gerencia información financiera confiable, útil y oportuna para la toma de decisiones y el control gerencial”. Por supuesto que debe cumplir con los deberes formales y obligaciones tributarias.', 'La visión marca una meta final hacia donde quiere llegar la organización en el futuro. Por su parte, la misión es el camino a través del cual los miembros de la empresa u organización harán realidad esa visión a través de los objetivos del día a día.'),
(3, 'Informática', 'Capacitación De Informatica', 'capacitacion', 'vendors/images/banners/banner_inicio_2.jpg', '', 'Diseñar, planificar, implementar, gestionar, administrar y asegurar las infraestructuras y servicios basados en Tecnologías de la Información y las Comunicaciones (TIC) prestados a la comunidad universitaria en los ámbitos de la docencia, la investigación y la gestión administrativa.', 'Brindar soluciones en tecnología informática; para contribuir al desarrollo integral de las empresas e instituciones, brindando soporte técnico eficiente y oportuno.'),
(4, 'Turismo', 'Capacitación De Turismo', 'capacitacion', 'vendors/images/banners/banner_inicio_2.jpg', '', 'Planear, promover y fortalecer el desarrollo de la actividad turística, contribuyendo a la diversificación de la oferta turística, la promoción de los destinos turísticos y el desarrollo regional del Estado a través del impulso a la inversión privada y la generación de nuevos empleos en el sector turístico, asegurando en coordinación con las dependencias y entidades correspondientes, los municipios y la iniciativa privada, la innovación del sector, la calidad de los servicios turísticos, la competitividad y el aprovechamiento sustentable de los recursos turísticos, protegiendo nuestra naturaleza, riqueza e historia.', 'Realizar con eficiencia las gestiones necesarias para detonar la inversión, la diversidad de servicios turísticos y la generación de empleos, contando con una oferta de destinos turísticos competitivos para impulsar el desarrollo regional y promover a Tamaulipas como un destino turístico competitivo.'),
(5, 'Diseño', 'Capacitación De Diseño', 'capacitacion', 'vendors/images/banners/banner_inicio_2.jpg', '', 'La Carrera de Diseño Gráfico tiene como misión la formación completa e integral de profesionales creativos y capaces de resolver, de manera eficiente, los problemas de la gestión gráfica y la comunicación publicitaria, socialmente responsables, comprometidos y plenamente identificados con el medio en el que se desenvuelven y con su realidad social.', 'Convertir a la carrera de Diseño Gráfico en un referente crítico y analítico de los problemas que se presentan en la ciudad de Guayaquil y en el país, en el ámbito de la comunicación visual, icónica y textual, conscientes de la identidad cultural, del país y la región.'),
(6, 'Económico Administrativo', 'Serie De Económico Administrativo', 'serie', 'vendors/images/banners/banner_inicio_2.jpg', '', 'La División de Economía y Sociedad tiene la responsabilidad social de preparar profesionales en los campos disciplinares de su competencia altamente capacitados y competitivos, formando recursos humanos de excelencia; así mismo, hacer investigación pertinente y de vanguardia cuyos resultados sean aprovechados en políticas públicas que ayuden a solucionar los problemas sociales y económicos de su entorno, el estado y el país.', 'La División de Economía y Sociedad es consultada cuando se requiere información, opinión y propuestas de solución a problemas socioeconómicos, y colabora con instancias públicas, privadas y sociales en la toma de decisiones para resolver esos problemas, por su compromiso social y la sólida preparación de sus académicos; además, representa un soporte fundamental en la articulación del trabajo y la toma de decisiones de estudiantes, profesores, jefes de departamento y las autoridades de la Rectoría y la Administración Central de la Universidad de Guadalajara.'),
(7, 'Físico Matemático', 'Serie De Físico Matemático', 'serie', 'vendors/images/banners/banner_inicio_2.jpg', '', 'Posicionarse como líder en la difusión, la enseñanza y la investigación de la Matemática, la Física y la Estadística en la Patagonia Austral.', 'Contribuir a la formación de profesionales entregando una enseñanza en sintonía con el modelo educativo de la Universidad.  Incentivar, desarrollar y fortalecer la aplicación de las disciplinas propias del Departamento de Matemática y Física en temáticas relacionadas con la problemática de la Zona Austral.'),
(8, 'Químico Biólogo', 'Serie De Químico Biólogo', 'serie', 'vendors/images/banners/banner_inicio_2.jpg', '', 'El Programa Educativo de Químico Biólogo Clínico tiene como misión formar de manera integral profesionales, con visión científica, en las áreas de las Ciencias Químico Biológicas y de la Química Clínica, altamente competentes, creativos, que coadyuven en la solución de problemas de la sociedad y de los sectores productivos, asimismo que contribuyan apoyando la investigación y el desarrollo sustentable en el estado de Sonora, en México o en otros países.', 'El programa de Químico Biólogo Clínico mantendrá la acreditación nacional vigente y será acreditado a nivel internacional, consolidándose como uno de los mejores Programas Educativos de la Química Clínica a nivel nacional.'),
(9, 'Humanidades', 'Serie De Humanidades', 'serie', 'vendors/images/banners/banner_inicio_2.jpg', '', 'Institución democrática, inclusiva, solidaria, con sentido de pertenencia, reconocida por su liderazgo en la formación de profesionales éticos y competentes y por el desarrollo de la investigación y la extensión, a nivel local, nacional e internacional.', 'Formar profesionales competentes  y contribuir con el desarrollo sostenible mediante la generación de conocimientos y la interacción con el contexto socio-cultural local, nacional e internacional.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `titulo`, `descripcion`, `imagen`) VALUES
(2, 'Inauguración Tapitas Que Dan Vida', '', 'vendors/images/carousel/carousel_2.jpg'),
(3, 'Entrega De Reconocimientos A Profesores', '', 'vendors/images/carousel/carousel_3.jpg'),
(4, 'Participación Banda De Guerra', '', 'vendors/images/carousel/carousel_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conocenos`
--

CREATE TABLE `conocenos` (
  `id_conocenos` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `banner` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `mision` varchar(500) NOT NULL,
  `vision` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conocenos`
--

INSERT INTO `conocenos` (`id_conocenos`, `titulo`, `descripcion`, `banner`, `imagen`, `mision`, `vision`) VALUES
(1, 'Conócenos', 'En el Colegio de Bachilleres de Tabasco iniciamos una nueva etapa de la mano con el Presidente de la República el Lic. Andrés Manuel López Obrador y el Gobernador Constitucional del Estado, Lic. Adán Augusto López Hernández, juntos y con su apoyo construiremos un mejor futuro.', 'vendors/images/banners/banner_inicio_2.jpg', 'vendors/images/cobachito/cobachito.jpg', 'Ofertar a los jóvenes y adultos, educación media superior que garantice un eficiente trayecto escolar, mediante una oferta educativa pertinente, con un alto sentido de inclusión, equidad, igualdad y excelencia; que detone sus conocimientos, competencias y habilidades laborales e interpersonales, favoreciendo su desarrollo humano, valores y un entorno sostenible.', 'Ser una institución de nivel medio superior reconocida por su liderazgo en el desarrollo de conocimientos, competencias y habilidades para la vida, mediante procesos educativos innovadores, logrado con el trabajo armonizado de la comunidad bachiller, los padres de familia, los gobiernos y la sociedad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_fotos` int(11) NOT NULL,
  `foto_album_id` int(11) NOT NULL,
  `foto_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_fotos`, `foto_album_id`, `foto_url`) VALUES
(10, 2, 'vendors/images/act_academicas/act_academicas3.jpg'),
(29, 2, 'vendors/images/act_academicas/act_academicas2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_alumnos`
--

CREATE TABLE `horarios_alumnos` (
  `id_horarios_alumnos` int(11) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `grado_grupo` varchar(30) NOT NULL,
  `horario_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios_alumnos`
--

INSERT INTO `horarios_alumnos` (`id_horarios_alumnos`, `turno`, `grado_grupo`, `horario_pdf`) VALUES
(1, 'matutino', '1ro ', '0'),
(2, 'matutino', '2do \"B\"', 'vendors/docs/horarios/2b matutino.pdf'),
(3, 'matutino', '2do \"C\"', 'vendors/docs/horarios/2c matutino.pdf'),
(4, 'matutino', '2do \"D\"', 'vendors/docs/horarios/2d matutino.pdf'),
(5, 'matutino', '2do \"E\"', 'vendors/docs/horarios/2e matutino.pdf'),
(6, 'matutino', '4to \"A\"', 'vendors/docs/horarios/4a matutino.pdf'),
(7, 'matutino', '4to \"B\"', 'vendors/docs/horarios/4b matutino.pdf'),
(8, 'matutino', '4to \"C\"', 'vendors/docs/horarios/4c matutino.pdf'),
(9, 'matutino', '4to \"D\"', 'vendors/docs/horarios/4d matutino.pdf'),
(10, 'matutino', '4to \"E\"', '0'),
(11, 'matutino', '6to \"A\"', 'vendors/docs/horarios/6a matutino.pdf'),
(12, 'matutino', '6to \"B\"', 'vendors/docs/horarios/6b matutino.pdf'),
(13, 'matutino', '6to \"C\"', 'vendors/docs/horarios/6c matutino.pdf'),
(14, 'matutino', '6to \"D\"', 'vendors/docs/horarios/6d matutino.pdf'),
(15, 'vespertino', '2do \"A\"', '0'),
(16, 'vespertino', '2do \"B\"', '0'),
(17, 'vespertino', '4to \"A\"', '0'),
(18, 'vespertino', '4to \"B\"', '0'),
(19, 'vespertino', '6to \"A\"', '0'),
(20, 'vespertino', '6to \"B\"', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie8_panel`
--

CREATE TABLE `ie8_panel` (
  `id_ie8_panel` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `nombre_plantel` varchar(50) NOT NULL,
  `img_preloader` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ie8_panel`
--

INSERT INTO `ie8_panel` (`id_ie8_panel`, `logo`, `nombre_plantel`, `img_preloader`) VALUES
(1, 'vendors/images/ie8_panel/logo-default-237x35.png', 'Plantel 11', 'vendors/images/ie8_panel/preloader.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `descripcion`, `fecha`, `imagen`) VALUES
(10, 'Campeón te', 'Juan Pablo Herrera Cordero EstuduaJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte Escolarnte Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarJuan Pablo Herrera Cordero EstuduaJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte Escolarnte Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarJuan Pablo Herrera Cordero EstuduaJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte Escolarnte Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarvJuan Pablo Herrera Cordero EstuduaJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte EscolarJuan Pablo Herrera Cordero Estuduante Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte Escolarnte Del Plantel No.11, Logra Medalla de                  Bronce Para Mexico en el Mundial U18, Llevado a cabo en Normandía, Francia, 2022, Como Integrante De La                  Selección Nacional De Taekwondo De La Federación De Deporte Escolar', '2025-01-29', 'vendors/images/noticias/noticia_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios_reconocimientos`
--

CREATE TABLE `premios_reconocimientos` (
  `id_premios_reconocimientos` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `premios_reconocimientos`
--

INSERT INTO `premios_reconocimientos` (`id_premios_reconocimientos`, `titulo`, `fecha`, `imagen`) VALUES
(1, 'Reconocimiento Tapitas', '2022-06-09', 'vendors/images/reconocimientos-premios/deskapp-logo-white.png'),
(2, 'Premio Ajedrez', '2022-06-30', 'vendors/images/reconocimientos-premios/deskapp-logo-white.png'),
(3, 'Reconocimiento Cumputacion', '2022-03-12', 'vendors/images/reconocimientos-premios/deskapp-logo-white.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rd_sociales`
--

CREATE TABLE `rd_sociales` (
  `id_rd_sociales` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rd_sociales`
--

INSERT INTO `rd_sociales` (`id_rd_sociales`, `icon`, `link`) VALUES
(1, '<i class=\"fa-solid fa-envelope\"></i>', 'mailto:cobatabplantel11@hotmail.com'),
(2, '<i class=\"fa-brands fa-facebook-f\"></i>', 'https://www.facebook.com/profile.php?id=100063801382413'),
(3, '<i class=\"fa-brands fa-tiktok\"></i>', 'https://www.tiktok.com/@cobatabplantel11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `foto_perfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`, `foto_perfil`) VALUES
(7, 'Abraham Alayon Morales', 'ghostluck2704@gmail.com', '$2y$10$ZALWztfaMvaJUpemAlGMruXOWOYGrzZsdl4rmtAzp/ZGb4X0NZcHq', 0, 'verified', 'vendors/images/perfil_adm/noticia_1.jpg'),
(19, 'Cobatab P11', 'cobatab.plantel11@gmail.com', '$2y$10$sJh3r76eeNOaUtJxa6505.X8V00n9TrPgr0uOc8ilDisXEPGlwk8e', 0, 'verified', 'vendors/images/perfil_adm/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_videos` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id_videos`, `titulo`, `video`) VALUES
(1, 'Dia Del Amor Y la Amistad', 'vendors/videos/dia_amor_amistad.mp4'),
(2, 'Tapitas Conclución', 'vendors/videos/tapitas.mp4'),
(3, 'Inauguración Tapitas', 'vendors/videos/tapitas_2.mp4'),
(4, 'Graduación 2021', 'vendors/videos/graduacion_2021.mp4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `act_academicas`
--
ALTER TABLE `act_academicas`
  ADD PRIMARY KEY (`id_act_academicas`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumnos`);

--
-- Indices de la tabla `capacitaciones_series`
--
ALTER TABLE `capacitaciones_series`
  ADD PRIMARY KEY (`id_capacitaciones_series`);

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indices de la tabla `conocenos`
--
ALTER TABLE `conocenos`
  ADD PRIMARY KEY (`id_conocenos`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `foto_album_id` (`foto_album_id`);

--
-- Indices de la tabla `horarios_alumnos`
--
ALTER TABLE `horarios_alumnos`
  ADD PRIMARY KEY (`id_horarios_alumnos`);

--
-- Indices de la tabla `ie8_panel`
--
ALTER TABLE `ie8_panel`
  ADD PRIMARY KEY (`id_ie8_panel`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `premios_reconocimientos`
--
ALTER TABLE `premios_reconocimientos`
  ADD PRIMARY KEY (`id_premios_reconocimientos`);

--
-- Indices de la tabla `rd_sociales`
--
ALTER TABLE `rd_sociales`
  ADD PRIMARY KEY (`id_rd_sociales`);

--
-- Indices de la tabla `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_videos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `act_academicas`
--
ALTER TABLE `act_academicas`
  MODIFY `id_act_academicas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `capacitaciones_series`
--
ALTER TABLE `capacitaciones_series`
  MODIFY `id_capacitaciones_series` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `conocenos`
--
ALTER TABLE `conocenos`
  MODIFY `id_conocenos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `horarios_alumnos`
--
ALTER TABLE `horarios_alumnos`
  MODIFY `id_horarios_alumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ie8_panel`
--
ALTER TABLE `ie8_panel`
  MODIFY `id_ie8_panel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `premios_reconocimientos`
--
ALTER TABLE `premios_reconocimientos`
  MODIFY `id_premios_reconocimientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rd_sociales`
--
ALTER TABLE `rd_sociales`
  MODIFY `id_rd_sociales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_videos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`foto_album_id`) REFERENCES `act_academicas` (`id_act_academicas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
