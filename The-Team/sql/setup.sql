DROP DATABASE IF EXISTS fcbarcelona;

CREATE DATABASE fcbarcelona;
USE fcbarcelona;

CREATE TABLE jugadores (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100),      
    categoria VARCHAR(50),    
    imagen VARCHAR(255) ,      
    nuevo BOOLEAN DEFAULT 0   
);

INSERT INTO jugadores (nombre, categoria, imagen, nuevo) VALUES
('TER STEGEN', 'Porteros', 'sql/Jugadores/p1.jpg', 0),
('PEÑA', 'Porteros', 'sql/Jugadores/p2.jpg', 1),
('SZCZESNY', 'Porteros', 'sql/Jugadores/p3.jpg', 0),
('CUBARSÍ', 'Defensas', 'sql/Jugadores/d1.jpg', 0),
('BALDE', 'Defensas', 'sql/Jugadores/d2.jpg', 0),
('ARAUJO', 'Defensas', 'sql/Jugadores/d3.jpg', 1),
('MARTINEZ', 'Defensas', 'sql/Jugadores/d4.jpg', 0),
('CHRISTENSE', 'Defensas', 'sql/Jugadores/d5.jpg', 1),
('KOUNDE', 'Defensas', 'sql/Jugadores/d6.jpg', 0),
('GARCÍA', 'Defensas', 'sql/Jugadores/d7.jpg', 0);

INSERT INTO jugadores (nombre, categoria, imagen, nuevo) VALUES
('GAVI ', 'Centrocampistas', 'sql/Jugadores/c1.jpg', 1),
('PEDRI', 'Centrocampistas', 'sql/Jugadores/c2.jpg', 0),
('TORRE', 'Centrocampistas', 'sql/Jugadores/c3.jpg', 0),
('LÓPEZ', 'Centrocampistas', 'sql/Jugadores/c4.jpg', 0),
('CASADÓ', 'Centrocampistas', 'sql/Jugadores/c5.jpg', 0),
('OLMO', 'Centrocampistas', 'sql/Jugadores/c6.jpg', 1),
('DE JONG', 'Centrocampistas', 'sql/Jugadores/c7.jpg', 0);

INSERT INTO jugadores (nombre, categoria, imagen, nuevo) VALUES
('TORRES ', 'Delanteros', 'sql/Jugadores/g1.jpg', 0),
('LEWANDOWSKI ', 'Delanteros', 'sql/Jugadores/g2.jpg', 1),
('FATI', 'Delanteros', 'sql/Jugadores/g3.jpg', 0),
('RAPHINA', 'Delanteros', 'sql/Jugadores/g4.jpg', 0),
('VÍCTOR', 'Delanteros', 'sql/Jugadores/g5.jpg', 0),
('LAMINE YAMAL', 'Delanteros', 'sql/Jugadores/g6.jpg', 0),
('HANSI FLICK', 'Cuerpo Técnico', 'sql/Jugadores/t1.jpg', 0);