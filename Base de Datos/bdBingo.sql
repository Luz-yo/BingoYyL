CREATE DATABASE Bingo;

CREATE TABLE usuarios (
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
usuario varchar(40),
password varchar(40),
create_at date
);

INSERT INTO usuarios (usuario, password, create_at ) 
VALUES
('ye','6423','1998-09-19'),
('Luz','123456789','2020-09-1');  


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
idUsuario int
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
