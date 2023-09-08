create table usuario(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(200) NOT NULL,
    apellido varchar(200) NOT NULL,
    telefono varchar(15) NOT NULL,
    edad INT(3) NOT NULL
);

create table animal(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(200) NOT NULL,
    raza varchar(200) NOT NULL,
    sexo varchar(6) NOT NULL,
    color varchar(200) NOT NULL,
    edad INT(3) NOT NULL
);

create table adopcion(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    idAnimal int,
    idUsuario int,
    fecha DATE NOT NULL,
    motivo varchar(200) NOT NULL,
    FOREIGN KEY (idAnimal) REFERENCES animal(id),
    FOREIGN KEY (idUsuario) REFERENCES usuario(id)    
);

