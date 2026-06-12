create database if not exists ingles;
use ingles;

create table if not exists ejercicios (
    idEjercicio int auto_increment,
    nombre varchar(255) not null,
    descripcion text not null,
);

create table if not exists palabras (
    idPalabra int auto_increment,
    idEjercicio int not null,
    palabraEspaniol varchar(255) not null,
    palabraIngles varchar(255) not null,
    constraint pk_palabras primary key (idPalabra),
    constraint fk_ejercicio foreign key (idEjercicio) references ejercicios(idEjercicio) on delete cascade
);

create table if not exists admin (
    idAdmin int auto_increment,
    nombre varchar(255) not null,
    email varchar(255) not null unique,
    constrasenia varchar(255) not null,
    constraint pk_admin primary key (idAdmin)
);

insert into ejercicios (nombre, descripcion, dificultad) values
('Colores basicos', 'Traduce del espanol al ingles una lista de colores comunes.', 'facil'),
('Animales', 'Relaciona nombres de animales en espanol con su traduccion al ingles.', 'facil'),
('Objetos de casa', 'Practica vocabulario de objetos cotidianos del hogar.', 'medio');

insert into palabras (idEjercicio, palabraEspaniol, palabraIngles) values
(1, 'rojo', 'red'),
(1, 'azul', 'blue'),
(1, 'verde', 'green'),
(1, 'amarillo', 'yellow'),
(1, 'negro', 'black'),
(2, 'perro', 'dog'),
(2, 'gato', 'cat'),
(2, 'pajaro', 'bird'),
(2, 'caballo', 'horse'),
(2, 'pez', 'fish'),
(3, 'mesa', 'table'),
(3, 'silla', 'chair'),
(3, 'puerta', 'door'),
(3, 'ventana', 'window'),
(3, 'cocina', 'kitchen');

insert into admin (nombre, email, constrasenia) values
('Administrador', 'admin@ingles.com', 'admin123');
