create database instafood;

use instafood;

create table usuarios
(
	id_usuario int unsigned not null auto_increment primary key,
	usuario char(30) not null,
	contrasenia char(10) not null,
	nombre char(30) not null,
	apellidos char(30) not null, 
	dni char(9),
	fecha date,
	sexo char(6),
	telefono char(20),
	direccion char(30) not null,
	cp char(5) not null,
	localidad char(30) not null,
	provincia char(30) not null,
	email char(20),
	instapuntos char(5),
	privilegio tinyint not null
	
);

create table pedidos
(
	id_pedido int unsigned not null auto_increment primary key,
	id_usuario int unsigned not null,
	metodo char(20),
	coste_total float(6,2),
	fecha datetime not null
);

create table productos
(
	id_producto int unsigned not null auto_increment primary key,
	imagen_producto char(150),
	nombre char(30) not null,
	descripcion char(60) not null,
	precio float(6,2),
	tipo char(10)
);

create table pedido_productos
(
	id_pedido int unsigned not null,
	id_producto int unsigned not null,
	cantidad tinyint unsigned,
	
	primary key (id_pedido, id_producto)
);

insert into usuarios values
(null, 'SuperSergio','SuperYo','Sergio','Valentin','71111111X','1995-05-10','Hombre','667777888','A por','49011','Matricula','Valladolid','a@gmail.com','0', 2),
(null, 'SuperMiriam','SuperProfe','Miriam','Anton','71111111X','1990-05-10','Mujer','667777888','Casa','49011','Valladolid','Valladolid','aporel10@gmail.com','0', 1),
(null, 'SuperPaula','SuperPaula','Paula','Cantoral','71111111X','1995-05-10','Mujer','667777888','A por','49011','Zamora','Zamora','zamora@gmail.com','0', 2);

insert into productos values
(null, '../Imagenes/fresca/carne-pollo.jpg','CARNE DE POLLO','Carne de pollo fresca para comer','3.9','Fresca'),
(null, '../Imagenes/fresca/gulas.jpg','Gulas','Gulas del cantabrico','6.5','Fresca'),
(null, '../Imagenes/fresca/pan.jpg','Pan','Pan de leña','1.2','Fresca'),
(null, '../Imagenes/domicilio/durum.png','DURUM','Durum de ternera al estilo turco','4.5','Domicilio'),
(null, '../Imagenes/domicilio/tortilla.jpg','TORTILLA','Tortilla de patata con huevos caseros','5.45','Domicilio'),
(null, '../Imagenes/domicilio/pizza.jpeg','Pizza','Rica pizza a la italia, deliciosos ingredicentes','8.9','Domicilio');
