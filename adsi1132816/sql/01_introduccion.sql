# iniciar linea de comandos de MySQL

C:\xampp1\mysql\bin
mysql -u root -p


#ver las bases de datos
show databases;

# Crear base de datos
create database nombrebasededatos;

# Usar una base de datos
use nombrebasededatos

# Conectarme a la base de datos
connect nombrebasededatos;

# Ver las tablas 
show tables;

#Crear tablas
 create tabla clientes(
 	-> id int auto_increment,
    -> documento bigint not null,
    -> nombres varchar(32) not null,
    -> telefono bigint null,
    -> direcin varchar(21) null,
    -> primary key(id));

 #mostrar columnas y filas de la tabla
describe nombreTabla;
#consultas
select * (enter)
->from nombre tabla;

#insertar datos tabla
INSERT INTO CLIENTES VALUES(
    -> default,75000001,'Jeremias Springfield', 8804321,'Villamaria-centro');