CREATE DATABASE Bingo;

CREATE TABLE usuarios (
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
usuario varchar(40),
password varchar(40),
create_at date
);

INSERT INTO usuarios (usuario, password, create_at ) 
VALUES
('ye','6423','1998-09-19'); 

CREATE TABLE balotas (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    letra varchar(1),
    color varchar(10),
    estado boolean
);

INSERT INTO  balotas(id,letra,color,estado) 
VALUES (1 ,'B','green','0'),
(2 ,'B','green','0'),
(3 ,'B','green','0'),
(4 ,'B','green','0'),
(5 ,'B','green','0'),
(6 ,'B','green','0'),
(7 ,'B','green','0'),
(8 ,'B','green','0'),
(9 ,'B','green','0'),
(10 ,'B','green','0'),
(11 ,'B','green','0'),
(12 ,'B','green','0'),
(13 ,'B','green','0'),
(14 ,'B','green','0'),
(15 ,'B','green','0'),
(16 ,'I','red','0'),
(17 ,'I','red','0'),
(18 ,'I','red','0'),
(19 ,'I','red','0'),
(20 ,'I','red','0'),
(21 ,'I','red','0'),
(22 ,'I','red','0'),
(23 ,'I','red','0'),
(24 ,'I','red','0'),
(25 ,'I','red','0'),
(26 ,'I','red','0'),
(27 ,'I','red','0'),
(28 ,'I','red','0'),
(29 ,'I','red','0'),
(30 ,'I','red','0'),
(31 ,'N','purple','0'),
(32 ,'N','purple','0'),
(33 ,'N','purple','0'),
(34 ,'N','purple','0'),
(35 ,'N','purple','0'),
(36 ,'N','purple','0'),
(37 ,'N','purple','0'),
(38 ,'N','purple','0'),
(39 ,'N','purple','0'),
(40 ,'N','purple','0'),
(41 ,'N','purple','0'),
(42 ,'N','purple','0'),
(43 ,'N','purple','0'),
(44 ,'N','purple','0'),
(45 ,'N','purple','0'),
(46 ,'G','blue','0'),
(47 ,'G','blue','0'),
(48 ,'G','blue','0'),
(49 ,'G','blue','0'),
(50 ,'G','pblue','0'),
(51 ,'G','blue','0'),
(52 ,'G','blue','0'),
(53 ,'G','blue','0'),
(54 ,'G','blue','0'),
(55 ,'G','blue','0'),
(56 ,'G','blue','0'),
(57 ,'G','blue','0'),
(58 ,'G','blue','0'),
(59 ,'G','blue','0'),
(60 ,'G','blue','0'),
(61 ,'0','yellow','0'),
(62 ,'0','yellow','0'),
(63 ,'0','yellow','0'),
(64 ,'0','yellow','0'),
(65 ,'0','yellow','0'),
(66 ,'0','yellow','0'),
(67 ,'0','yellow','0'),
(68 ,'0','yellow','0'),
(69 ,'0','yellow','0'),
(70 ,'0','yellow','0'),
(71 ,'0','yellow','0'),
(72 ,'0','yellow','0'),
(73 ,'0','yellow','0'),
(74 ,'0','yellow','0'),
(75 ,'0','yellow','0');


CREATE TABLE tablas(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	idUsuario int, 
    create_at date
);

CREATE TABLE balotas_tablas(
	idBalota int,
    idTabla int,
    estado boolean
);

CREATE TABLE tipos_bingo(
    id int PRIMARY KEY,
    nombre varchar(40)
);


INSERT INTO tipos_bingo (id, nombre)
VALUES (1 , 'En X'),
 (2 , 'En L'),
 (3 , 'Llena'),
 (4 , 'CuatroEsquinas'),
 (5 , 'En T'),
 (6 , 'En Z'); 

CREATE TABLE bingo(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre varchar(100),
estado varchar(50),
create_at date
);

CREATE TABLE tipos_activos_bingo(
idBingo int,
idTipo int,
estado boolean
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

CREATE TABLE tablas_usuario(
idTabla int,
idUsuario int 
);

ALTER TABLE tablas_usuario
ADD CONSTRAINT FK_tablasUsuario
FOREIGN KEY(idTabla) REFERENCES tablas(id),
ADD FOREIGN KEY(idUsuario) REFERENCES  usuarios(id);

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

ALTER TABLE tipos_activos_bingo
ADD CONSTRAINT FK_tiposAcBingo
FOREIGN KEY (idBingo) REFERENCES bingo(id),
ADD FOREIGN KEY (idTipo) REFERENCES tipos_bingo(id); 


ALTER TABLE tablas
ADD  CONSTRAINT FK_Usuario
FOREIGN KEY (idUsuario) REFERENCES usuarios(id); 

ALTER TABLE balotas_tablas
ADD CONSTRAINT FK_Balota
FOREIGN KEY (idBalota) REFERENCES balotas(id),
ADD FOREIGN KEY (idTabla) REFERENCES tablas(id); 