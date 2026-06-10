create table if not exists ejercicios (
    idEjercicio int auto_increment,
    nombre varchar(255) not null,
    descripcion text not null,
    dificultad enum('facil', 'medio', 'dificil') not null,
    constraint chk_dificultad check (dificultad in ('facil', 'medio', 'dificil')),
    constraint pk_ejercicios primary key (idEjercicio)
);

create table if not exists palabras (
    idPalabra int auto_increment,
    idEjercicio int not null,
    palabraEspaniol varchar(255) not null,
    palabraIngles varchar(255) not null,
    constraint pk_palabras primary key (idPalabra)
    constraint fk_ejercicio foreign key (idEjercicio) references ejercicios(idEjercicio) on delete cascade
);

create table if not exists admin (
    idAdmin int auto_increment,
    nombre varchar(255) not null,
    email varchar(255) not null unique,
    constrasenia varchar(255) not null,
    constraint pk_admin primary key (idAdmin)
);

/*Consultas usadas si lo hago aqui me entero mejor*/

select palabras.palabraEspaniol from ejercicios inner join palabras on ejercicios.idEjercicio = palabras.idEjercicio;