CREATE DATABASE hosp;

USE hosp;

CREATE TABLE paciente (
    id_paciente INT PRIMARY KEY AUTO_INCREMENT,
    nombre_pac VARCHAR(250) NOT NULL,
    ap_paterno_pac VARCHAR(250) NOT NULL,
    ap_materno_pac VARCHAR(250) NOT NULL,
    fecha_nac DATE NOT NULL,
    telefono_pac VARCHAR(10) NOT NULL,
    calle_pac VARCHAR(250) NOT NULL,
    numero_calle_pac VARCHAR(10) NOT NULL,
    colonia_pac VARCHAR(250) NOT NULL,
    municipio_pac VARCHAR(250) NOT NULL,
    estado_pac VARCHAR(250) NOT NULL
);

CREATE TABLE doctor (
    id_doc INT PRIMARY KEY AUTO_INCREMENT,
    nombre_doc VARCHAR(250) NOT NULL,
    ap_paterno_doc VARCHAR(250) NOT NULL,
    ap_materno_doc VARCHAR(250) NOT NULL,
    especialidad VARCHAR(250) NOT NULL,
    telefono_doc VARCHAR(10) NOT NULL,
    calle_doc VARCHAR(250) NOT NULL,
    numero_calle_doc VARCHAR(10) NOT NULL,
    colonia_doc VARCHAR(250) NOT NULL,
    municipio_doc VARCHAR(250) NOT NULL,
    estado_doc VARCHAR(250) NOT NULL
);

CREATE TABLE cita (
    id_cita INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT NOT NULL,
    id_doc INT NOT NULL,
    fecha_hora DATETIME NOT NULL,
    FOREIGN KEY (id_paciente) REFERENCES paciente (id_paciente),
    FOREIGN KEY (id_doc) REFERENCES doctor (id_doc)
);

CREATE TABLE historial (
    id_historial INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT NOT NULL,
    fecha_hist DATE NOT NULL,
    diagnóstico VARCHAR(250) NOT NULL,
    tratamiento VARCHAR(250) NOT NULL,
    FOREIGN KEY (id_paciente) REFERENCES paciente (id_paciente)
);

CREATE TABLE receta (
    id_receta INT PRIMARY KEY AUTO_INCREMENT,
    id_historial INT NOT NULL,
    medicamento VARCHAR(250) NOT NULL,
    instrucciones VARCHAR(250) NOT NULL,
    dosis VARCHAR(250) NOT NULL,
    FOREIGN KEY (id_historial) REFERENCES historial (id_historial)
);

-- Insertar 50 registros en la tabla paciente

INSERT INTO paciente (nombre_pac, ap_paterno_pac, ap_materno_pac, fecha_nac, telefono_pac, calle_pac, numero_calle_pac, colonia_pac, municipio_pac, estado_pac)
VALUES 
('Juan', 'Perez', 'Lopez', '1980-01-01', '1234567890', 'Reforma', '1', 'Centro', 'CDMX', 'Ciudad de México'),
('Maria', 'Gomez', 'Hernandez', '1981-02-02', '1234567891', 'Insurgentes', '2', 'Roma', 'CDMX', 'Ciudad de México'),
('Carlos', 'Lopez', 'Martinez', '1982-03-03', '1234567892', 'Juarez', '3', 'Del Valle', 'CDMX', 'Ciudad de México'),
('Ana', 'Martinez', 'Garcia', '1983-04-04', '1234567893', 'Hidalgo', '4', 'Polanco', 'CDMX', 'Ciudad de México'),
('Luis', 'Garcia', 'Ramirez', '1984-05-05', '1234567894', 'Morelos', '5', 'Coyoacan', 'CDMX', 'Ciudad de México'),
('Laura', 'Rodriguez', 'Hernandez', '1985-06-06', '1234567895', 'Zaragoza', '6', 'Narvarte', 'CDMX', 'Ciudad de México'),
('Jose', 'Hernandez', 'Fernandez', '1986-07-07', '1234567896', 'Madero', '7', 'Portales', 'CDMX', 'Ciudad de México'),
('Marta', 'Fernandez', 'Sanchez', '1987-08-08', '1234567897', 'Allende', '8', 'Tlalpan', 'CDMX', 'Ciudad de México'),
('Pedro', 'Sanchez', 'Diaz', '1988-09-09', '1234567898', 'Juarez', '9', 'Iztapalapa', 'CDMX', 'Ciudad de México'),
('Lucia', 'Ramirez', 'Gonzalez', '1989-10-10', '1234567899', 'Hidalgo', '10', 'Xochimilco', 'CDMX', 'Ciudad de México'),
('Sofia', 'Torres', 'Perez', '1990-11-11', '1234567800', 'Morelos', '11', 'Milpa Alta', 'CDMX', 'Ciudad de México'),
('Miguel', 'Diaz', 'Jimenez', '1991-12-12', '1234567801', 'Zaragoza', '12', 'Benito Juarez', 'CDMX', 'Ciudad de México'),
('Elena', 'Morales', 'Cruz', '1992-01-13', '1234567802', 'Madero', '13', 'Venustiano Carranza', 'CDMX', 'Ciudad de México'),
('Jorge', 'Vargas', 'Romero', '1993-02-14', '1234567803', 'Allende', '14', 'Coyoacan', 'CDMX', 'Ciudad de México'),
('Raquel', 'Castro', 'Hernandez', '1994-03-15', '1234567804', 'Reforma', '15', 'Iztacalco', 'CDMX', 'Ciudad de México'),
('Alberto', 'Mendoza', 'Ramirez', '1995-04-16', '1234567805', 'Insurgentes', '16', 'Tlahuac', 'CDMX', 'Ciudad de México'),
('Patricia', 'Romero', 'Diaz', '1996-05-17', '1234567806', 'Juarez', '17', 'Azcapotzalco', 'CDMX', 'Ciudad de México'),
('Fernando', 'Suarez', 'Lopez', '1997-06-18', '1234567807', 'Hidalgo', '18', 'Cuajimalpa', 'CDMX', 'Ciudad de México'),
('Isabel', 'Ortega', 'Perez', '1998-07-19', '1234567808', 'Morelos', '19', 'Magdalena Contreras', 'CDMX', 'Ciudad de México'),
('Rafael', 'Ramos', 'Garcia', '1999-08-20', '1234567809', 'Zaragoza', '20', 'Alvaro Obregon', 'CDMX', 'Ciudad de México'),
('Teresa', 'Gil', 'Martinez', '2000-09-21', '1234567810', 'Madero', '21', 'Cuauhtemoc', 'CDMX', 'Ciudad de México'),
('Andres', 'Flores', 'Gomez', '2001-10-22', '1234567811', 'Allende', '22', 'Miguel Hidalgo', 'CDMX', 'Ciudad de México'),
('Cristina', 'Herrera', 'Hernandez', '2002-11-23', '1234567812', 'Reforma', '23', 'Venustiano Carranza', 'CDMX', 'Ciudad de México'),
('Victor', 'Marquez', 'Ramirez', '2003-12-24', '1234567813', 'Insurgentes', '24', 'Iztapalapa', 'CDMX', 'Ciudad de México'),
('Rosa', 'Cruz', 'Diaz', '2004-01-25', '1234567814', 'Juarez', '25', 'Xochimilco', 'CDMX', 'Ciudad de México'),
('Manuel', 'Reyes', 'Lopez', '2005-02-26', '1234567815', 'Hidalgo', '26', 'Milpa Alta', 'CDMX', 'Ciudad de México'),
('Gloria', 'Ruiz', 'Perez', '2006-03-27', '1234567816', 'Morelos', '27', 'Magdalena Contreras', 'CDMX', 'Ciudad de México'),
('Francisco', 'Ortiz', 'Garcia', '2007-04-28', '1234567817', 'Zaragoza', '28', 'Cuajimalpa', 'CDMX', 'Ciudad de México'),
('Silvia', 'Jimenez', 'Martinez', '2008-05-29', '1234567818', 'Madero', '29', 'Iztacalco', 'CDMX', 'Ciudad de México'),
('Antonio', 'Navarro', 'Ramirez', '2009-06-30', '1234567819', 'Allende', '30', 'Azcapotzalco', 'CDMX', 'Ciudad de México'),
('Gabriela', 'Alvarez', 'Lopez', '2010-01-01', '1234567820', 'Reforma', '31', 'Tlalpan', 'CDMX', 'Ciudad de México'),
('Diego', 'Vega', 'Martinez', '2011-02-02', '1234567821', 'Insurgentes', '32', 'Roma', 'CDMX', 'Ciudad de México'),
('Claudia', 'Mendez', 'Hernandez', '2012-03-03', '1234567822', 'Juarez', '33', 'Narvarte', 'CDMX', 'Ciudad de México'),
('Enrique', 'Rivas', 'Garcia', '2013-04-04', '1234567823', 'Hidalgo', '34', 'Polanco', 'CDMX', 'Ciudad de México'),
('Paula', 'Romero', 'Sanchez', '2014-05-05', '1234567824', 'Morelos', '35', 'Coyoacan', 'CDMX', 'Ciudad de México'),
('Hector', 'Villanueva', 'Diaz', '2015-06-06', '1234567825', 'Zaragoza', '36', 'Portales', 'CDMX', 'Ciudad de México'),
('Monica', 'Solis', 'Fernandez', '2016-07-07', '1234567826', 'Madero', '37', 'Iztapalapa', 'CDMX', 'Ciudad de México'),
('Victor', 'Herrera', 'Perez', '2017-08-08', '1234567827', 'Allende', '38', 'Xochimilco', 'CDMX', 'Ciudad de México'),
('Natalia', 'Esquivel', 'Lopez', '2018-09-09', '1234567828', 'Juarez', '39', 'Azcapotzalco', 'CDMX', 'Ciudad de México'),
('Samuel', 'Quintana', 'Gonzalez', '2019-10-10', '1234567829', 'Hidalgo', '40', 'Cuauhtemoc', 'CDMX', 'Ciudad de México'),
('Vanessa', 'Bautista', 'Garcia', '2020-11-11', '1234567830', 'Morelos', '41', 'Tlahuac', 'CDMX', 'Ciudad de México'),
('David', 'Castillo', 'Hernandez', '2021-12-12', '1234567831', 'Zaragoza', '42', 'Magdalena Contreras', 'CDMX', 'Ciudad de México'),
('Araceli', 'Campos', 'Martinez', '2022-01-13', '1234567832', 'Madero', '43', 'Venustiano Carranza', 'CDMX', 'Ciudad de México'),
('Sebastian', 'Ortega', 'Ramirez', '2023-02-14', '1234567833', 'Allende', '44', 'Benito Juarez', 'CDMX', 'Ciudad de México'),
('Yolanda', 'Moreno', 'Diaz', '2024-03-15', '1234567834', 'Reforma', '45', 'Miguel Hidalgo', 'CDMX', 'Ciudad de México'),
('Esteban', 'Rangel', 'Hernandez', '2025-04-16', '1234567835', 'Insurgentes', '46', 'Iztacalco', 'CDMX', 'Ciudad de México'),
('Regina', 'Garza', 'Perez', '2026-05-17', '1234567836', 'Juarez', '47', 'Coyoacan', 'CDMX', 'Ciudad de México'),
('Oscar', 'Reyes', 'Lopez', '2027-06-18', '1234567837', 'Hidalgo', '48', 'Narvarte', 'CDMX', 'Ciudad de México'),
('Irene', 'Cortes', 'Martinez', '2028-07-19', '1234567838', 'Morelos', '49', 'Del Valle', 'CDMX', 'Ciudad de México'),
('Francisca', 'Zavala', 'Garcia', '2029-08-20', '1234567839', 'Zaragoza', '50', 'Polanco', 'CDMX', 'Ciudad de México');

-- Insertar 50 registros en la tabla doctor
INSERT INTO doctor (nombre_doc, ap_paterno_doc, ap_materno_doc, especialidad, telefono_doc, calle_doc, numero_calle_doc, colonia_doc, municipio_doc, estado_doc)
VALUES 
('Alejandro', 'Mendez', 'Lopez', 'Cardiologia', '2234567890', 'Av. Principal', '123', 'Centro', 'Puebla', 'Puebla'),
('Beatriz', 'Santos', 'Garcia', 'Pediatria', '2234567891', 'Calle Reforma', '45', 'La Paz', 'Puebla', 'Puebla'),
('Carlos', 'Diaz', 'Hernandez', 'Dermatologia', '2234567892', 'Av. Juarez', '789', 'Chapultepec', 'Cholula', 'Puebla'),
('Daniela', 'Morales', 'Cruz', 'Neurologia', '2234567893', 'Calle Independencia', '12', 'San Miguel', 'Atlixco', 'Puebla'),
('Eduardo', 'Vargas', 'Ramirez', 'Ginecologia', '2234567894', 'Av. 5 de Mayo', '78', 'El Carmen', 'Huejotzingo', 'Puebla'),
('Fernanda', 'Castro', 'Martinez', 'Oncologia', '2234567895', 'Calle Hidalgo', '32', 'Santa Maria', 'Tehuacan', 'Puebla'),
('Guillermo', 'Mendoza', 'Flores', 'Psiquiatria', '2234567896', 'Av. Las Torres', '56', 'Del Valle', 'Puebla', 'Puebla'),
('Helena', 'Romero', 'Sanchez', 'Urologia', '2234567897', 'Calle Morelos', '89', 'Los Arcos', 'Cholula', 'Puebla'),
('Ignacio', 'Suarez', 'Rojas', 'Oftalmologia', '2234567898', 'Av. Reforma', '23', 'La Libertad', 'Atlixco', 'Puebla'),
('Julieta', 'Ortega', 'Jimenez', 'Endocrinologia', '2234567899', 'Calle 16 de Septiembre', '67', 'El Vergel', 'Tehuacan', 'Puebla'),
('Kevin', 'Ramos', 'Perez', 'Reumatologia', '2234567800', 'Av. Juarez', '90', 'San Pedro', 'Huejotzingo', 'Puebla'),
('Laura', 'Gil', 'Gonzalez', 'Neumologia', '2234567801', 'Calle Benito Juarez', '34', 'San Juan', 'Puebla', 'Puebla'),
('Manuel', 'Flores', 'Hernandez', 'Gastroenterologia', '2234567802', 'Av. Zaragoza', '123', 'La Paz', 'Cholula', 'Puebla'),
('Natalia', 'Herrera', 'Ramirez', 'Nefrologia', '2234567803', 'Calle 5 de Febrero', '45', 'Santa Rosa', 'Atlixco', 'Puebla'),
('Oscar', 'Marquez', 'Castro', 'Hematologia', '2234567804', 'Av. Independencia', '78', 'San Mateo', 'Tehuacan', 'Puebla'),
('Patricia', 'Cruz', 'Lopez', 'Infectologia', '2234567805', 'Calle Hidalgo', '32', 'Santa Clara', 'Puebla', 'Puebla'),
('Ricardo', 'Reyes', 'Mendez', 'Rehabilitacion', '2234567806', 'Av. Las Palmas', '56', 'Los Angeles', 'Cholula', 'Puebla'),
('Silvia', 'Ruiz', 'Gomez', 'Medicina Interna', '2234567807', 'Calle Morelos', '89', 'Los Olivos', 'Atlixco', 'Puebla'),
('Tomas', 'Ortiz', 'Garcia', 'Geriatria', '2234567808', 'Av. Juarez', '23', 'La Purisima', 'Tehuacan', 'Puebla'),
('Ursula', 'Jimenez', 'Perez', 'Cirugia General', '2234567809', 'Calle Reforma', '67', 'Santa Ana', 'Huejotzingo', 'Puebla'),
('Victor', 'Navarro', 'Lopez', 'Cirugia Plastica', '2234567810', 'Av. 5 de Mayo', '101', 'El Paraíso', 'Puebla', 'Puebla'),
('Wendy', 'Santos', 'Martinez', 'Cirugia Cardiovascular', '2234567811', 'Calle 2 de Abril', '12', 'Santa Teresa', 'Atlixco', 'Puebla'),
('Xavier', 'Molina', 'Gonzalez', 'Cirugia Pediatrica', '2234567812', 'Calle Libertad', '34', 'El Mirador', 'Tehuacan', 'Puebla'),
('Yolanda', 'Iglesias', 'Pérez', 'Cirugia Oncologica', '2234567813', 'Av. Juarez', '56', 'Centro', 'Huejotzingo', 'Puebla'),
('Zacarias', 'Vega', 'Serrano', 'Cirugia Toracica', '2234567814', 'Calle Morelos', '78', 'Lomas de San Felipe', 'Cholula', 'Puebla'),
('Andrea', 'Campos', 'Gonzalez', 'Cirugia Vascular', '2234567815', 'Av. Principal', '90', 'Los Angeles', 'Tehuacan', 'Puebla'),
('Bruno', 'Soto', 'Rojas', 'Anestesiologia', '2234567816', 'Calle Hidalgo', '34', 'San Felipe', 'Puebla', 'Puebla'),
('Claudia', 'Pena', 'Diaz', 'Radiologia', '2234567817', 'Calle 16 de Septiembre', '56', 'Vega de la Loma', 'Cholula', 'Puebla'),
('Diego', 'Cabrera', 'Serrano', 'Patologia', '2234567818', 'Av. Zaragoza', '23', 'La Esperanza', 'Tehuacan', 'Puebla'),
('Elena', 'Rojas', 'Lopez', 'Medicina Nuclear', '2234567819', 'Calle Juarez', '45', 'Valles Altos', 'Atlixco', 'Puebla'),
('Fabian', 'Guerrero', 'Martinez', 'Medicina Familiar', '2234567820', 'Calle Reforma', '78', 'Las Margaritas', 'Huejotzingo', 'Puebla'),
('Gabriela', 'Mendez', 'Flores', 'Medicina del Trabajo', '2234567821', 'Calle Hidalgo', '12', 'San Juan', 'Cholula', 'Puebla'),
('Hector', 'Vargas', 'Gonzalez', 'Medicina Preventiva', '2234567822', 'Av. Principal', '56', 'La Soledad', 'Atlixco', 'Puebla'),
('Irene', 'Serrano', 'Perez', 'Medicina del Deporte', '2234567823', 'Calle Morelos', '34', 'Las Palmas', 'Tehuacan', 'Puebla'),
('Jorge', 'Ramos', 'Martinez', 'Medicina Legal', '2234567824', 'Calle Independencia', '67', 'El Mirador', 'Huejotzingo', 'Puebla'),
('Karla', 'Cortes', 'Luna', 'Medicina Forense', '2234567825', 'Av. Las Palmas', '90', 'Las Flores', 'Cholula', 'Puebla'),
('Luis', 'Luna', 'Mora', 'Medicina Estetica', '2234567826', 'Calle Reforma', '12', 'El Carmen', 'Atlixco', 'Puebla'),
('Monica', 'Mora', 'Serrano', 'Medicina del Dolor', '2234567827', 'Calle Benito Juarez', '45', 'El Rosario', 'Tehuacan', 'Puebla'),
('Nicolas', 'Paredes', 'Diaz', 'Medicina Paliativa', '2234567828', 'Av. Reforma', '56', 'Lomas de Chapultepec', 'Huejotzingo', 'Puebla'),
('Olivia', 'Serrano', 'Lopez', 'Medicina del Sueño', '2234567829', 'Calle Hidalgo', '67', 'La Loma', 'Puebla', 'Puebla'),
('Pablo', 'Ramos', 'Garcia', 'Medicina del Adolescente', '2234567830', 'Calle Independencia', '34', 'Colinas de San José', 'Cholula', 'Puebla'),
('Quetzal', 'Cortes', 'Mendoza', 'Medicina del Adulto Mayor', '2234567831', 'Av. 5 de Febrero', '23', 'San Andrés', 'Atlixco', 'Puebla'),
('Roberto', 'Luna', 'Serrano', 'Medicina del Viajero', '2234567832', 'Calle 16 de Septiembre', '56', 'Vega Alta', 'Tehuacan', 'Puebla'),
('Sandra', 'Mora', 'Cortes', 'Medicina del Trabajo', '2234567833', 'Av. Las Torres', '90', 'El Valle', 'Puebla', 'Puebla'),
('Tomas', 'Paredes', 'Lopez', 'Medicina del Deporte', '2234567834', 'Calle Reforma', '45', 'Los Olivos', 'Huejotzingo', 'Puebla'),
('Ursula', 'Serrano', 'Gomez', 'Medicina del Adolescente', '2234567835', 'Calle Juarez', '23', 'Lomas de Chapultepec', 'Cholula', 'Puebla'),
('Victor', 'Ramos', 'Martinez', 'Medicina del Adulto Mayor', '2234567836', 'Av. Independencia', '67', 'El Castillo', 'Tehuacan', 'Puebla'),
('Wendy', 'Cortes', 'Diaz', 'Medicina del Viajero', '2234567837', 'Calle Hidalgo', '12', 'Colonia San Juan', 'Huejotzingo', 'Puebla'),
('Xavier', 'Lopez', 'Gonzalez', 'Medicina del Trabajo', '2234567838', 'Av. 5 de Mayo', '34', 'Las Palmas', 'Cholula', 'Puebla'),
('Yolanda', 'Martinez', 'Mora', 'Medicina del Deporte', '2234567839', 'Calle Reforma', '56', 'San Felipe', 'Puebla', 'Puebla');

-- Insertar 50 registros en la tabla cita

INSERT INTO cita (id_paciente, id_doc, fecha_hora)
VALUES
(3, 1, '2024-01-01 08:30:00'),
(12, 4, '2024-01-02 10:00:00'),
(7, 3, '2024-01-03 11:15:00'),
(9, 2, '2024-01-03 15:30:00'),
(5, 5, '2024-01-04 09:45:00'),
(18, 1, '2024-01-05 14:00:00'),
(20, 2, '2024-01-06 16:30:00'),
(15, 3, '2024-01-07 13:15:00'),
(4, 4, '2024-01-08 10:00:00'),
(8, 5, '2024-01-09 12:45:00'),
(2, 1, '2024-01-10 09:30:00'),
(11, 3, '2024-01-11 08:00:00'),
(14, 2, '2024-01-12 11:30:00'),
(19, 5, '2024-01-13 10:15:00'),
(6, 4, '2024-01-14 15:45:00'),
(17, 1, '2024-01-15 09:00:00'),
(13, 3, '2024-01-16 10:30:00'),
(10, 2, '2024-01-17 13:45:00'),
(16, 5, '2024-01-18 16:00:00'),
(1, 4, '2024-01-19 12:00:00'),
(25, 1, '2024-01-20 14:30:00'),
(22, 3, '2024-01-21 08:15:00'),
(26, 2, '2024-01-22 11:00:00'),
(30, 5, '2024-01-23 15:00:00'),
(28, 4, '2024-01-24 13:30:00'),
(21, 1, '2024-01-25 09:00:00'),
(27, 3, '2024-01-26 08:45:00'),
(23, 2, '2024-01-27 10:15:00'),
(24, 5, '2024-01-28 12:30:00'),
(29, 4, '2024-01-29 15:45:00'),
(31, 1, '2024-01-30 16:30:00'),
(32, 3, '2024-02-01 09:00:00'),
(33, 2, '2024-02-02 11:15:00'),
(34, 5, '2024-02-03 13:00:00'),
(35, 4, '2024-02-04 10:45:00'),
(36, 1, '2024-02-05 09:30:00'),
(37, 3, '2024-02-06 14:15:00'),
(38, 2, '2024-02-07 16:00:00'),
(39, 5, '2024-02-08 12:15:00'),
(40, 4, '2024-02-09 08:30:00'),
(41, 1, '2024-02-10 09:45:00'),
(42, 3, '2024-02-11 11:30:00'),
(43, 2, '2024-02-12 13:45:00'),
(44, 5, '2024-02-13 16:00:00'),
(45, 4, '2024-02-14 15:30:00'),
(46, 1, '2024-02-15 08:15:00'),
(47, 3, '2024-02-16 10:00:00'),
(48, 2, '2024-02-17 13:15:00'),
(49, 5, '2024-02-18 16:30:00'),
(50, 4, '2024-02-19 11:45:00');

-- Insertar 50 registros en la tabla historial

INSERT INTO historial (id_paciente, fecha_hist, diagnóstico, tratamiento)
VALUES
(1, '2023-01-10', 'Hipertensión', 'Dieta y ejercicio'),
(2, '2023-02-15', 'Diabetes', 'Insulina'),
(3, '2023-03-20', 'Gastritis', 'Antiácidos'),
(4, '2023-04-05', 'Migraña', 'Analgésicos'),
(5, '2023-05-10', 'Ansiedad', 'Terapia psicológica'),
(6, '2023-06-15', 'Artritis', 'Fisioterapia'),
(7, '2023-07-25', 'Asma', 'Broncodilatadores'),
(8, '2023-08-10', 'Anemia', 'Suplementos de hierro'),
(9, '2023-09-20', 'Dolor lumbar', 'Rehabilitación'),
(10, '2023-10-05', 'Hipotiroidismo', 'Levotiroxina'),
(11, '2023-11-15', 'Depresión', 'Antidepresivos'),
(12, '2023-12-01', 'Colitis', 'Dieta baja en grasas'),
(13, '2024-01-10', 'Insuficiencia renal', 'Diálisis'),
(14, '2024-02-15', 'Alergia', 'Antihistamínicos'),
(15, '2024-03-01', 'Esguince', 'Rehabilitación física'),
(16, '2024-04-05', 'Cistitis', 'Antibióticos'),
(17, '2024-05-15', 'Neumonía', 'Antibióticos'),
(18, '2024-06-01', 'Bronquitis', 'Inhaladores'),
(19, '2024-07-10', 'Glaucoma', 'Tratamiento quirúrgico'),
(20, '2024-08-15', 'Esclerosis múltiple', 'Terapia física'),
(21, '2024-09-05', 'Parkinson', 'Medicamentos'),
(22, '2024-10-10', 'Diabetes tipo 2', 'Metformina'),
(23, '2024-11-01', 'Esquizofrenia', 'Antipsicóticos'),
(24, '2024-12-10', 'Varicela', 'Tratamiento sintomático'),
(25, '2023-01-10', 'Amigdalitis', 'Antibióticos'),
(26, '2023-02-15', 'Hepatitis', 'Reposo y dieta'),
(27, '2023-03-10', 'Lupus', 'Inmunosupresores'),
(28, '2023-04-20', 'Hipertrofia ventricular', 'Tratamiento quirúrgico'),
(29, '2023-05-15', 'Trombosis', 'Anticoagulantes'),
(30, '2023-06-25', 'Psoriasis', 'Cremas tópicas'),
(31, '2023-07-10', 'Hipotiroidismo', 'Levotiroxina'),
(32, '2023-08-05', 'Dermatitis', 'Cremas hidratantes'),
(33, '2023-09-20', 'Asma', 'Broncodilatadores'),
(34, '2023-10-10', 'Cáncer de colon', 'Quimioterapia'),
(35, '2023-11-05', 'Anemia', 'Suplementos de hierro'),
(36, '2023-12-20', 'Migraña', 'Analgésicos'),
(37, '2024-01-05', 'Hipertensión', 'Dieta y ejercicio'),
(38, '2024-02-15', 'Obesidad', 'Bajar peso'),
(39, '2024-03-01', 'Diabetes', 'Insulina'),
(40, '2024-04-15', 'Asma', 'Broncodilatadores'),
(41, '2024-05-05', 'Colitis', 'Dieta especial'),
(42, '2024-06-10', 'Insuficiencia renal', 'Diálisis'),
(43, '2024-07-20', 'Gastritis', 'Antiácidos'),
(44, '2024-08-15', 'Amigdalitis', 'Antibióticos'),
(45, '2024-09-05', 'Esclerosis múltiple', 'Rehabilitación'),
(46, '2024-10-10', 'Bronquitis', 'Tratamiento especial'),
(47, '2024-11-20', 'Anemia', 'Vitaminas'),
(48, '2024-12-01', 'Alergia', 'Antihistamínicos'),
(49, '2023-01-10', 'Lupus', 'Inmunosupresores'),
(50, '2023-02-15', 'Cáncer', 'Quimioterapia');

-- Insertar 50 registros en la tabla receta
INSERT INTO receta (id_historial, medicamento, instrucciones, dosis)
VALUES
(1, 'Paracetamol', 'Tomar 1 tableta cada 8 horas', '500 mg'),
(2, 'Ibuprofeno', 'Tomar 1 tableta cada 12 horas', '400 mg'),
(3, 'Amoxicilina', 'Tomar 1 cápsula cada 8 horas', '500 mg'),
(4, 'Omeprazol', 'Tomar 1 cápsula en ayunas', '20 mg'),
(5, 'Atenolol', 'Tomar 1 tableta en la mañana', '50 mg'),
(6, 'Loratadina', 'Tomar 1 tableta al día', '10 mg'),
(7, 'Ranitidina', 'Tomar 1 tableta antes de las comidas', '150 mg'),
(8, 'Metformina', 'Tomar 1 tableta al desayuno y 1 al almuerzo', '500 mg'),
(9, 'Ciprofloxacino', 'Tomar 1 tableta cada 12 horas', '500 mg'),
(10, 'Prednisona', 'Tomar 1 tableta al día', '20 mg'),
(11, 'Furosemida', 'Tomar 1 tableta en la mañana', '40 mg'),
(12, 'Doxiciclina', 'Tomar 1 tableta cada 12 horas', '100 mg'),
(13, 'Diclofenaco', 'Tomar 1 tableta cada 8 horas', '50 mg'),
(14, 'Enalapril', 'Tomar 1 tableta por la mañana', '5 mg'),
(15, 'Salbutamol', 'Inhalar 2 puffs cada 4 horas si es necesario', '100 mcg'),
(16, 'Levofloxacino', 'Tomar 1 tableta cada 24 horas', '500 mg'),
(17, 'Lorazepam', 'Tomar 1 tableta antes de dormir', '1 mg'),
(18, 'Tamsulosina', 'Tomar 1 cápsula al día', '0.4 mg'),
(19, 'Alprazolam', 'Tomar 1 tableta antes de dormir', '0.5 mg'),
(20, 'Moxifloxacino', 'Tomar 1 tableta cada 12 horas', '400 mg'),
(21, 'Carbamazepina', 'Tomar 1 tableta en la mañana y 1 en la noche', '200 mg'),
(22, 'Glibenclamida', 'Tomar 1 tableta en la mañana', '5 mg'),
(23, 'Simvastatina', 'Tomar 1 tableta antes de dormir', '20 mg'),
(24, 'Amlodipino', 'Tomar 1 tableta por la mañana', '5 mg'),
(25, 'Fexofenadina', 'Tomar 1 tableta al día', '180 mg'),
(26, 'Espironolactona', 'Tomar 1 tableta al día', '25 mg'),
(27, 'Betametasona', 'Aplicar 1 aplicación cada 48 horas', '1 ml'),
(28, 'Lisinopril', 'Tomar 1 tableta en la mañana', '10 mg'),
(29, 'Bupropión', 'Tomar 1 tableta por la mañana', '150 mg'),
(30, 'Clemastina', 'Tomar 1 tableta al día', '1 mg'),
(31, 'Clonazepam', 'Tomar 1 tableta antes de dormir', '0.5 mg'),
(32, 'Sildenafil', 'Tomar 1 tableta 1 hora antes de la actividad sexual', '50 mg'),
(33, 'Bromhexina', 'Tomar 1 tableta cada 8 horas', '8 mg'),
(34, 'Captopril', 'Tomar 1 tableta 3 veces al día', '25 mg'),
(35, 'Rifampicina', 'Tomar 1 cápsula cada 24 horas', '10 mg'),
(36, 'Ticlopidina', 'Tomar 1 tableta dos veces al día', '250 mg'),
(37, 'Mebendazol', 'Tomar 1 tableta cada 12 horas', '100 mg'),
(38, 'Cefalexina', 'Tomar 1 cápsula cada 8 horas', '500 mg'),
(39, 'Fluconazol', 'Tomar 1 tableta al día', '150 mg'),
(40, 'Zolpidem', 'Tomar 1 tableta antes de dormir', '10 mg'),
(41, 'Atorvastatina', 'Tomar 1 tableta antes de dormir', '10 mg'),
(42, 'Acarbosa', 'Tomar 1 tableta con las comidas principales', '50 mg'),
(43, 'Valsartán', 'Tomar 1 tableta por la mañana', '80 mg'),
(44, 'Tramadol', 'Tomar 1 tableta cada 6 horas', '50 mg'),
(45, 'Claritromicina', 'Tomar 1 cápsula cada 12 horas', '500 mg'),
(46, 'Tizanidina', 'Tomar 1 tableta por la noche', '4 mg'),
(47, 'Gabapentina', 'Tomar 1 tableta cada 8 horas', '300 mg'),
(48, 'Candesartán', 'Tomar 1 tableta por la mañana', '8 mg'),
(49, 'Dapagliflozina', 'Tomar 1 tableta al día', '10 mg'),
(50, 'Losartán', 'Tomar 1 tableta por la mañana', '50 mg');
