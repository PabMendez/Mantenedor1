CREATE DATABASE IF NOT EXISTS mantenedor;
USE mantenedor;

CREATE TABLE cliente(

id INT(255) auto_increment not null,
rut VARCHAR(12),
nombres VARCHAR(50),
apellidoP VARCHAR(50),
apellidoM VARCHAR(50),
direccion VARCHAR(50),
email VARCHAR(50),
fono VARCHAR(20),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;
