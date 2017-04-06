#Crear una tabla
create table nombretabla(
	campo1 tipo(longitud) restrccion,
	campo2 tipo restrccion,
	#nombre varchar(32) not null
);


#Restricciones (NOT NULL)
create table nombretabla(
	nombre varchar(32) not null
);

#Restricciones (UNIQUE)
create table nombretabla(
	correo varchar(32) unique
);
#alterar tabla (UNIQUE)
alter table nombretabla add unique(campo);

#Restricciones (PRIMARY KEY)
create table nombretabla(
	id int auto-increment,
	primary key(id)
);

#Alterar la tabla (llave primaria)
alter table nombretabla add primary key(id);

#Alterar la tabla (Eliminar llave primaria)
alter table nombretabla drop primary key;

#Restricciones (FOREIGN KEY)
create table nombretabla(
	tablaensingular_id int,
	foreign key(tablaensingular_id)
	references tabla.campollaveprimaria
);

#Alterar la tabla (llave foreana)
alter table nombretabla
 add foreign key(tablaensingular_id)
 references tabla.campollaveprimaria;

 #Alterar la tabla (Eliminar llave foreana)
alter table nombretabla drop foreign key(tablaensingular_id);

#restricciones (CHECK)
create table nombretabla(
	edad int,
	check (edad >=18)
);

#Alterar tabla (CHECK)
alter table nombretabla add check (edad>=18);

#restricciones (DEFAULT)
create table nombretabla(
	ciudad varchar(32) default 'Manizales'
);

#Alterar la tabla (default)
alter table nombretabla
alter ciudad set default 'Manizales';

# Crear un Indices
create index  nombreindice on nombretabla(campo); 

#Eliminar un Indice
drop index nombretabla.nombreindice;

#eliminar base de datos}
drop database nombrebasedatos;

#eliminar tabla
drop table nombretabla;

#vaciar todos los datos de una tabla
truncate table nombretabla;

#arterar una tabla(campo(columna))
arter table nombretabla add nombrecolumna tipodato after otrocolumna;

#Eliminar una columna de la tabla
alter table nombretabla drop column nombrecolumna;

#cambiar de nombre una columna
alter table nombretabla remane nombrenuevo;

#auto incremento 
create table nombretabla(
	id int auto_increment
);

#Definar donde inicia el incremento
alter table nombretabla auto_increment = 1000;

#crear vista
create view clientescompra 
	 as select c.nombres as cliente , a.nombre as articulo , a.precio
     from clientes as c
     join compras as cm
     on cm.cliente_id = c.id
     join articulos as a
     on cm.articulo_id = a.id;

#consultar una vista 
select * from nombretabla;

#eliminar la vista
drop view nombrevista;

#consulta agrsiva
select c.nombres as cliente,
count(a.id) as totalarticulos,
sum(a.precio) as totalcompra
from clientes as c
join compras as cm
on cm.cliente_id = c.id
join articulos as a
on cm.articulo_id = a.id
and c.id = 2;

