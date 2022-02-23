-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2022 a las 02:10:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18323861_residencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `idActividades` int(11) NOT NULL,
  `Actividad` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Archivo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`idActividades`, `Actividad`, `Archivo`) VALUES
(1, 'DOCENCIA', NULL),
(2, 'INVESTIGACIÓN Y DESARROLLO TECNOLÓGICO', NULL),
(3, 'VINCULACIÓN', NULL),
(4, 'GESTIÓN ACADÉMICA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `idCarrera` int(11) NOT NULL,
  `Carrera` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `idDatos` int(11) DEFAULT NULL,
  `Matricula_idMatricula` int(11) NOT NULL,
  `Personal_idPersonal` int(11) NOT NULL,
  `Carreras_idCarrera` int(11) NOT NULL,
  `Actividades_idActividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_estudios`
--

CREATE TABLE `grado_estudios` (
  `idEstudios` int(11) NOT NULL,
  `Estudio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado_estudios`
--

INSERT INTO `grado_estudios` (`idEstudios`, `Estudio`) VALUES
(1, 'preparatoria'),
(2, 'universidad'),
(3, 'doctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idMatricula` int(11) NOT NULL,
  `Profecion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idPersonal` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Rol_idRol` int(11) NOT NULL,
  `Grado_Estudios_idEstudios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idPersonal`, `Nombre`, `Apellido`, `Password`, `Telefono`, `Correo`, `Direccion`, `Rol_idRol`, `Grado_Estudios_idEstudios`) VALUES
(1, 'kevin', 'flores', '123', '5580939092', 'floresarmenta@hotmail.com', 'ayacuitlalpan', 1, 1),
(2, 'pierce', 'flores', '456', '6347547458', 'pierce@gmail.com', 'pirul', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `Rol` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Rol`) VALUES
(1, 'administrador'),
(2, 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_actividad`
--

CREATE TABLE `sub_actividad` (
  `idSub_Actividad` int(11) NOT NULL,
  `sub_Actividad` varchar(455) DEFAULT NULL,
  `Archivo` varchar(45) DEFAULT NULL,
  `Actividades_idActividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sub_actividad`
--

INSERT INTO `sub_actividad` (`idSub_Actividad`, `sub_Actividad`, `Archivo`, `Actividades_idActividades`) VALUES
(1, 'PROMOCIÓN DEL APRENDIZAJE', NULL, 1),
(2, 'APOYO A LA DOCENCIA', NULL, 1),
(3, 'ASESORÍA DE TITULACIÓN', NULL, 1),
(4, 'LIBROS Y CAPÍTULOS DE LIBRO', NULL, 2),
(5, 'Artículos con más de 3 docentes de la misma institución se asignará el 50%\r\nde la puntuación de cada producto para cada participante.', NULL, 2),
(6, 'PRODUCTOS DE INVESTIGACIÓN', NULL, 2),
(7, 'DESARROLLO DE PROYECTOS', NULL, 2),
(8, 'VINCULACIÓN PARA EL APRENDIZAJE', NULL, 3),
(9, 'EDUCACIÓN CONTINUA Y SERVICIOS TECNOLÓGICOS', NULL, 3),
(10, 'PARTICIPACIÓN EN INSTANCIAS DE VINCULACIÓN CON EL ENTORNO', NULL, 3),
(11, 'TRANSFERENCIA DE TECNOLOGÍA', NULL, 3),
(12, 'COMISIONES ACADÉMICAS', NULL, 4),
(13, 'DESARROLLO CURRICULAR', NULL, 4),
(14, 'CONSOLIDACIÓN DE LA INFRAESTRUCTURA Y FORTALECIMIENTO DE LA INSTITUCIÓN', NULL, 4),
(15, 'OBRA EDITORIAL\r\n', NULL, 4),
(16, 'SUPERACIÓN DOCENTE Y PROFESIONAL', NULL, 4),
(17, 'NOMBRAMIENTOS DE APOYO A LA DOCENCIA EN EL PERIODO A EVALUAR', NULL, 4),
(18, 'FORMACIÓN PROFESIONAL ', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_sub_actividades`
--

CREATE TABLE `sub_sub_actividades` (
  `idSub_sub_Actividades` int(11) NOT NULL,
  `Sub_sub_Actividad` varchar(455) DEFAULT NULL,
  `Archivo` varchar(45) DEFAULT NULL,
  `Sub_Actividad_idSub_Actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sub_sub_actividades`
--

INSERT INTO `sub_sub_actividades` (`idSub_sub_Actividades`, `Sub_sub_Actividad`, `Archivo`, `Sub_Actividad_idSub_Actividad`) VALUES
(1, 'Asignaturas diferentes por año del plan de estudios a nivel licenciatura autorizados por el TecNM.\r\n', NULL, 1),
(2, 'Horas frente a grupo por concepto de impartición de asignaturas del plan de\r\nestudios escolarizado a nivel licenciatura autorizados por el TecNM.', NULL, 1),
(3, 'Horas frente a grupo por concepto de impartición de asignaturas del plan de estudios no escolarizado a distancia y mixta, a nivel licenciatura autorizados por el TecNM.', NULL, 1),
(4, 'Impartir asignaturas en posgrados autorizados por el TecNM.', NULL, 1),
(5, 'Elaboración de material didáctico', NULL, 2),
(6, 'Asesorías', NULL, 2),
(7, 'Asesoría para titulación integral en licenciatura en programas impartidos en la institución y autorizados por el TecNM.', NULL, 3),
(8, 'Asesor o Asesora de tesis terminada, en programas de posgrado impartidos en la institución y autorizados por el TecNM.', NULL, 3),
(9, 'Libro producto de investigación o afín a los programas de estudio vigentes del TecNM o a las líneas de investigación registradas ante TecNM.', NULL, 4),
(10, 'Capítulo de libro producto de investigación.', NULL, 4),
(11, 'Citas en libros de publicaciones del autor en el periodo de evaluación.', NULL, 4),
(12, 'Artículos de revistas que se encuentren en la base de datos de la JCR (Journal Citation Report), indexadas en el padrón de revistas CONACYT o en Emerging Sources Citation Index publicados en el periodo de evaluación.', NULL, 5),
(13, 'Artículos de revista indexada/arbitrada publicados en el periodo de evaluación', NULL, 5),
(14, 'Artículos de revista de divulgación publicados en el periodo de evaluación.', NULL, 5),
(15, 'Artículos de congreso y/o simposium arbitrado en el periodo de evaluación.', NULL, 5),
(16, 'Artículos de congreso y/o simposium no arbitrado.', NULL, 5),
(17, 'Prototipo derivado de una investigación.', NULL, 6),
(18, 'Paquete tecnológico dirigido a empresas o dependencias producto de una investigación registrada.', NULL, 6),
(19, 'Desarrollo de software producto de una investigación.', NULL, 6),
(20, 'Optimización de procesos industriales.', NULL, 6),
(21, 'Prototipo para la industria por convenio, con instructivo de operación.', NULL, 6),
(22, 'Proyectos con financiamiento.', NULL, 7),
(23, 'Proyectos internos.', NULL, 7),
(24, 'Responsable de visitas o prácticas en empresa relacionadas con el programa académico.', NULL, 8),
(25, 'Realización de proyecto de desarrollo comunitario con duración de al\r\nmenos 60 horas.', NULL, 8),
(26, 'Participación en actividades de difusión de la ciencia y la tecnología convocados por externos.', NULL, 8),
(27, 'Estancia o estadía en Empresas, Instituciones de Educación Superior o Centros de Investigación, relacionada con su profesión o su función institucional.', NULL, 8),
(28, 'Impartir cursos, diplomados y similares de formación o actualización concertados por la institución y dirigidos a empresa o instituciones de educación media superior o superior no pertenecientes al TecNM.', NULL, 9),
(29, 'Prestación de servicios tecnológicos externos a organizaciones del sector industrial, empresarial o educativo.', NULL, 9),
(30, 'Asesoría en incubación de empresas', NULL, 9),
(31, 'Propiedad intelectual No incluye el registro de signos distintivos.', NULL, 9),
(32, 'Miembro activo de organismos profesionales o empresariales externos nacionales e internacionales relacionados con su profesión y funciones institucionales.', NULL, 10),
(33, 'Miembro del Sistema Nacional de Investigadores', NULL, 10),
(34, 'Conferencias dictadas en eventos académicos, de calidad o de desarrollo compatibles con su profesión o función institucional (a nivel superior) no convocadas por la institución de adscripción', NULL, 10),
(35, 'Cuerpos Académicos y Perfil Deseable', NULL, 10),
(36, 'Licenciamiento de la patente o del modelo de utilidad', NULL, 11),
(37, 'Participación como miembro en comités académicos', NULL, 12),
(38, 'Coordinación o colaboración en eventos académicos, de calidad o de innovación dentro de la institución, con zona de influencia.', NULL, 12),
(39, 'Impartición de cursos de actualización, capacitación y diplomados para docentes dentro del TecNM.', NULL, 12),
(40, 'Participar como profesor(a) de educación a distancia dentro del Programa Nacional de Formación y Actualización Docente del TecNM.', NULL, 12),
(41, 'Participar como jurado en eventos académicos.', NULL, 12),
(42, 'Participación en comités para la evaluación de propuestas de proyectos de investigación, por ejemplo: PRODEP, CONACYT, comités internos de investigación y organismos estatales de investigación.', NULL, 12),
(43, 'Participación en comités editoriales y comités revisores de publicaciones de divulgación científica y tecnológica arbitrada', NULL, 12),
(44, 'Participación en auditorías (Gestión de calidad ISO 9001, ISO 14001, OHSAS, ISO 50001)', NULL, 12),
(45, 'Participación en la elaboración de planes de estudio y/o seguimiento curricular a nivel nacional.', NULL, 13),
(46, 'Desarrollo de Programas de Estudio por unidad de aprendizaje (únicamente los programas de los planes de estudio actualizados y en operación) de licenciatura y posgrado convocados por TecNM.', NULL, 13),
(47, 'Colaborador en la elaboración de estudios de factibilidad para la apertura de una carrera a nivel licenciatura o posgrado.', NULL, 13),
(48, 'Colaborador en el diseño del módulo de Especialidad de una carrera a nivel licenciatura o posgrado.', NULL, 13),
(49, 'Trabajos de mantenimiento preventivo y/o correctivo a equipo especializado de laboratorios y equipo de cómputo con duración mínima de 40 horas.', NULL, 14),
(50, 'Ensamble, instalación y montaje de maquinaria y equipo nuevo y \r\nespecializado con duración mínima de 40 horas.', NULL, 14),
(51, 'Elaboración de software (con una duración mínima de 80hrs) con manuales del usuario y técnico para necesidades propias de la institución o comisiones otorgadas por el TecNM o la DITD.', NULL, 14),
(52, 'Gestión de recursos para el fortalecimiento o divulgación del programa educativo.', NULL, 14),
(53, 'Certificaciones obtenidas por la institución vigentes en el periodo a evaluar.', NULL, 14),
(54, 'Docente laborando en programa acreditado o PNPC.', NULL, 14),
(55, '4.4.1 Reedición de libro con contenido afín a los programas vigentes del TecNM (Editado y Publicado, no se considera reimpresión).', NULL, 15),
(56, 'Traducción de libro Técnico-Científico afín a los programas vigentes del TecNM. (Editado y Publicado).', NULL, 15),
(57, 'Cursos de formación docente o actualización profesional (presencial o semipresencial) con duración mínima de 30 horas.', NULL, 16),
(58, 'Cursos de formación docente o actualización profesional en plataformas virtuales.', NULL, 16),
(59, 'Diplomados afines a su formación profesional con constancia de acreditación (con duración mínima de 120 horas).', NULL, 16),
(60, 'Diplomados de formación docente con constancia de acreditación (con duración mínima de 120 horas).', NULL, 16),
(61, 'Presidente de Academia, de Consejo o de Claustro Doctoral.', NULL, 17),
(62, 'Secretario de Academia, de Consejo o de Claustro Doctoral.', NULL, 17),
(63, 'Estudios de posgrado', NULL, 18),
(64, 'Certificación externa de competencias relacionadas con su profesión o su función en la institución.', NULL, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_sub_sub_actividades`
--

CREATE TABLE `sub_sub_sub_actividades` (
  `idSub_sub_sub_Actividades` int(11) NOT NULL,
  `Actividad` varchar(455) DEFAULT NULL,
  `Archivo` varchar(45) DEFAULT NULL,
  `Sub_sub_Actividades_idSub_sub_Actividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sub_sub_sub_actividades`
--

INSERT INTO `sub_sub_sub_actividades` (`idSub_sub_sub_Actividades`, `Actividad`, `Archivo`, `Sub_sub_Actividades_idSub_sub_Actividades`) VALUES
(1, 'Elaboración de manuales de prácticas (relacionados al proceso de enseñanza aprendizaje exclusivamente para asignaturas que impliquen el uso de laboratorios).', NULL, 5),
(2, 'Participación en el diseño y desarrollo de un curso para educación a distancia a invitación de la Dirección General del TecNM.', NULL, 5),
(3, 'Diseño y desarrollo de un curso en línea para la plataforma oficial del TecNM.', NULL, 5),
(4, 'Asesoría a estudiantes en asignaturas de planes de estudio autorizados por el TecNM y que sean distintas a las materias que imparte en el semestre de la asesoría o en talleres impartidos afines a los programas de estudio, con una duración mínima de 20 horas y grupo con mínimo de 5 estudiantes.', NULL, 6),
(5, 'Asesoría a estudiantes en id18323861_residencia profesionales.', NULL, 6),
(6, 'Tutorías a estudiantes (dentro del Programa Institucional de Tutorías)', NULL, 6),
(7, 'Asesoría de estudiantes en Eventos Académicos de Nivel Superior.', NULL, 6),
(8, 'Impartir curso propedéutico (Licenciatura y Posgrado).', NULL, 6),
(9, 'Proyecto de Investigación y/o Desarrollo Tecnológico, Proyecto Integrador, Proyecto Productivo, Proyecto de Innovación Tecnológica, Proyecto de Emprendedurismo, Proyecto Integral de Educación Dual, Estancia, Tesis o Tesina.', NULL, 7),
(10, 'Especialización.', NULL, 8),
(11, 'Maestría o doctorado.', NULL, 8),
(12, 'Estancia o estadía Nacional con duración de 30 a 100 horas de trabajo.', NULL, 27),
(13, 'Estancia o estadía Nacional con duración mínima de 1 mes y al menos 160 horas de trabajo.', NULL, 27),
(14, 'Estancia o estadía internacional con duración mínima de 2 semanas.', NULL, 27),
(15, 'Estancia o estadía nacional o internacional con duración de 4 a 6 meses y al menos 500 horas de duración.', NULL, 27),
(16, 'Proyecto pre-incubado.', NULL, 30),
(17, 'Proyecto incubado y en operación.', NULL, 30),
(18, 'En caso de patente', NULL, 31),
(19, 'En caso de modelo de utilidad o diseño industrial.', NULL, 31),
(20, 'En caso de software con registro ante INDAUTOR o software desarrollado para la Dirección de Institutos Tecnológicos Descentralizados o TecNM.', NULL, 31),
(21, 'En caso de textos educativos (manuales, antologías, monografías, entre otros) con registro de derechos de autor del docente que lo elaboró.', NULL, 31),
(22, 'Candidato', NULL, 33),
(23, 'Nivel I', NULL, 33),
(24, 'Nivel II', NULL, 33),
(25, 'Nivel III', NULL, 33),
(26, 'Evento Nacional por conferencia', NULL, 34),
(27, 'Evento Internacional por conferencia', NULL, 34),
(28, 'Presentación Nacional o Internacional en modalidad de poster o presentación virtual', NULL, 34),
(29, 'Participación en Cuerpo Académico en Formación', NULL, 35),
(30, 'Participación en Cuerpo Académico en Consolidación', NULL, 35),
(31, 'Participación en Cuerpo Académico Consolidado', NULL, 35),
(32, 'Perfil Deseable (PRODEP)', NULL, 35),
(33, 'Convocados por parte de TecNM o Dirección de Institutos Tecnológicos Descentralizados.', NULL, 37),
(34, 'Convocados por la institución o asociaciones académicas externas.', NULL, 37),
(35, 'Local (Solo de la institución).', NULL, 38),
(36, 'Estatal (Local y al menos 2 instituciones del mismo estado).', NULL, 38),
(37, 'Nacional (Local y al menos una institución de 2 estados diferentes) .', NULL, 38),
(38, 'Internacional (Local y al menos 3 organismos de diferentes países).', NULL, 38),
(39, 'Por hora (Duración mínima de 20 horas).', NULL, 39),
(40, 'Por diplomado oficial del TecNM', NULL, 39),
(41, 'Local por evento', NULL, 41),
(42, 'Estatal/Regional por evento', NULL, 41),
(43, 'Nacional por evento', NULL, 41),
(44, 'Internacional por evento', NULL, 41),
(45, 'Local o regional', NULL, 42),
(46, 'Estatal', NULL, 42),
(47, 'Nacional', NULL, 42),
(48, 'Internacional', NULL, 42),
(49, 'Estatal o Nacional', NULL, 43),
(50, 'Internacional', NULL, 43),
(51, 'Participación en auditoría interna en la institución', NULL, 44),
(52, 'Participación en auditoría interna fuera de la institución', NULL, 44),
(53, 'Participación como líder en auditoría en la institución', NULL, 44),
(54, 'Participación como líder en auditoría fuera de la institución', NULL, 44),
(55, 'ISO 9001 Sistema de Gestión para la Calidad.', NULL, 53),
(56, 'ISO 14001 Sistema de Gestión Ambiental.', NULL, 53),
(57, 'ISO 50001 Sistema de Gestión de Energía.', NULL, 53),
(58, 'ISO 26001 Responsabilidad Social.', NULL, 53),
(59, 'Doctorado.', NULL, 63),
(60, 'Maestría.', NULL, 63),
(61, 'Especialización a nivel posgrado (duración mínima de 12 meses).', NULL, 63);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_sub_sub_sub_actividades`
--

CREATE TABLE `sub_sub_sub_sub_actividades` (
  `idSub_sub_sub_sub_Actividades` int(11) NOT NULL,
  `Actividad` varchar(455) DEFAULT NULL,
  `Archivo` varchar(45) DEFAULT NULL,
  `Sub_sub_sub_Actividades_idSub_sub_sub_Actividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sub_sub_sub_sub_actividades`
--

INSERT INTO `sub_sub_sub_sub_actividades` (`idSub_sub_sub_sub_Actividades`, `Actividad`, `Archivo`, `Sub_sub_sub_Actividades_idSub_sub_sub_Actividades`) VALUES
(1, 'Local', NULL, 7),
(2, 'Estatal/Regional', NULL, 7),
(3, 'Nacional', NULL, 7),
(4, 'Internacional', NULL, 7),
(5, 'En etapa de revisión de fondo.', NULL, 18),
(6, 'En caso de patente aceptada.', NULL, 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`idActividades`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD KEY `fk_table1_Matricula` (`Matricula_idMatricula`),
  ADD KEY `fk_table1_Personal1` (`Personal_idPersonal`),
  ADD KEY `fk_table1_Carreras1` (`Carreras_idCarrera`),
  ADD KEY `fk_Datos_Actividades1` (`Actividades_idActividades`);

--
-- Indices de la tabla `grado_estudios`
--
ALTER TABLE `grado_estudios`
  ADD PRIMARY KEY (`idEstudios`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMatricula`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idPersonal`),
  ADD KEY `fk_Personal_Rol1` (`Rol_idRol`),
  ADD KEY `fk_Personal_Grado_Estudios1` (`Grado_Estudios_idEstudios`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sub_actividad`
--
ALTER TABLE `sub_actividad`
  ADD PRIMARY KEY (`idSub_Actividad`),
  ADD KEY `fk_Sub_Actividad_Actividades1` (`Actividades_idActividades`);

--
-- Indices de la tabla `sub_sub_actividades`
--
ALTER TABLE `sub_sub_actividades`
  ADD PRIMARY KEY (`idSub_sub_Actividades`),
  ADD KEY `fk_Sub_sub_Actividades_Sub_Actividad1` (`Sub_Actividad_idSub_Actividad`);

--
-- Indices de la tabla `sub_sub_sub_actividades`
--
ALTER TABLE `sub_sub_sub_actividades`
  ADD PRIMARY KEY (`idSub_sub_sub_Actividades`),
  ADD KEY `fk_Sub_sub_sub_Actividades_Sub_sub_Actividades1` (`Sub_sub_Actividades_idSub_sub_Actividades`);

--
-- Indices de la tabla `sub_sub_sub_sub_actividades`
--
ALTER TABLE `sub_sub_sub_sub_actividades`
  ADD PRIMARY KEY (`idSub_sub_sub_sub_Actividades`),
  ADD KEY `fk_Sub_sub_sub_sub_Actividades_Sub_sub_sub_Actividades1` (`Sub_sub_sub_Actividades_idSub_sub_sub_Actividades`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos`
--
ALTER TABLE `datos`
  ADD CONSTRAINT `fk_Datos_Actividades1` FOREIGN KEY (`Actividades_idActividades`) REFERENCES `actividades` (`idActividades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_Carreras1` FOREIGN KEY (`Carreras_idCarrera`) REFERENCES `carreras` (`idCarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_Matricula` FOREIGN KEY (`Matricula_idMatricula`) REFERENCES `matricula` (`idMatricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_Personal1` FOREIGN KEY (`Personal_idPersonal`) REFERENCES `personal` (`idPersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_Personal_Grado_Estudios1` FOREIGN KEY (`Grado_Estudios_idEstudios`) REFERENCES `grado_estudios` (`idEstudios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Personal_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sub_actividad`
--
ALTER TABLE `sub_actividad`
  ADD CONSTRAINT `fk_Sub_Actividad_Actividades1` FOREIGN KEY (`Actividades_idActividades`) REFERENCES `actividades` (`idActividades`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sub_sub_actividades`
--
ALTER TABLE `sub_sub_actividades`
  ADD CONSTRAINT `fk_Sub_sub_Actividades_Sub_Actividad1` FOREIGN KEY (`Sub_Actividad_idSub_Actividad`) REFERENCES `sub_actividad` (`idSub_Actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sub_sub_sub_actividades`
--
ALTER TABLE `sub_sub_sub_actividades`
  ADD CONSTRAINT `fk_Sub_sub_sub_Actividades_Sub_sub_Actividades1` FOREIGN KEY (`Sub_sub_Actividades_idSub_sub_Actividades`) REFERENCES `sub_sub_actividades` (`idSub_sub_Actividades`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sub_sub_sub_sub_actividades`
--
ALTER TABLE `sub_sub_sub_sub_actividades`
  ADD CONSTRAINT `fk_Sub_sub_sub_sub_Actividades_Sub_sub_sub_Actividades1` FOREIGN KEY (`Sub_sub_sub_Actividades_idSub_sub_sub_Actividades`) REFERENCES `sub_sub_sub_actividades` (`idSub_sub_sub_Actividades`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
