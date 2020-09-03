CREATE DATABASE Bingo;

CREATE TABLE usuarios (
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
usuario varchar(40),
password varchar(40),
create_at date
);

INSERT INTO usuarios (usuario, password, create_at ) 
VALUES
('Yefry','6423','1998-09-19'),
('Luz','123456789','2020-09-1');  

CREATE TABLE balotas (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT
);

INSERT INTO  balotas(id) 
VALUES 
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75) ;

CREATE TABLE balotas_bingo(
	idBingo int,
	idBalota int,
	estado boolean default false
);


CREATE TABLE tipos_bingo(
    id int PRIMARY KEY,
    nombre varchar(40)
);


INSERT INTO tipos_bingo (id, nombre)
VALUES 
 (1 , 'Linea B'),
 (2 , 'Linea I'),
 (3 , 'Linea N'),
 (4 , 'Linea G'),
 (5 , 'Linea O'),
 (6 , 'Tabla llena'); 

CREATE TABLE bingo(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre varchar(100),
estado varchar(50),
create_at date,
idUsuario int,
idTipo int
);


CREATE TABLE Ganadores_bingo(
idBingo int,
idUsuario int,
create_at date
);


CREATE TABLE jugadores_bingo(
idBingo int,
idUsuario int
);

ALTER TABLE bingo
ADD CONSTRAINT FK_usuarioCreado
FOREIGN KEY(idUsuario) REFERENCES usuarios(id);

ALTER TABLE bingo
ADD CONSTRAINT FK_tipoJuego
FOREIGN KEY(idTipo) REFERENCES tipos_bingo(id);

ALTER TABLE tipos_activos_bingo
ADD CONSTRAINT FK_tiposActivos
FOREIGN KEY(idBingo) REFERENCES bingo(id),
ADD FOREIGN KEY(idTipo) REFERENCES  tipos_bingo(id);

ALTER TABLE Ganadores_bingo
ADD CONSTRAINT FK_ganadorBingo
FOREIGN KEY (idBingo) REFERENCES bingo(id),
ADD FOREIGN KEY (idUsuario) REFERENCES usuarios(id);  


ALTER TABLE jugadores_bingo
ADD CONSTRAINT FK_jugadoresBingo
FOREIGN KEY (idBingo) REFERENCES bingo(id),
ADD FOREIGN KEY (idUsuario) REFERENCES usuarios(id); 


ALTER TABLE balotas_bingo
ADD CONSTRAINT FK_balotasBingo
FOREIGN KEY (idBingo) REFERENCES bingo(id),
ADD FOREIGN KEY (idBalota) REFERENCES balotas(id); 
