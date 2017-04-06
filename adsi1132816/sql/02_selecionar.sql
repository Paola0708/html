#seleccionar todos los registros 
select * from nombretabla;

#seleccionar una columna de la tabla
select nombrecolumna from nombretabla;

#Seleccionar made de una columna de la tabla
select nombrecolumna1, nombrecolumna2  from nombretabla;

#Seleccionar valores distintos (unicos)
select distinct nombrecampo from nombretabla; 

#Seleccionar con condicion
select * from nombretabla where nombrecampo = valor;

#Seleccionar con condicion varios valores (in)
select * from nombretabla where nombrecampo  in (valor1, valor2);

#seleccionar valores mayores a un valor de un campo
select * from nombretabla where id > valor;
select * from nombretabla where id < valor;

#Seleccionar todos menos un registro determinado 
select * from nombretabla where id<> valor;

#Selccionar varios registros con or(o)
select *
form nombretabla
where nombrecampo = valor1
or nombrecampo = valor2;

#seleccionar un registro con and(y)
select *
from nombretabla
where nombrecampo = valor1
and nombrecampo = valor2;

#seleccionar un registro con AND / OR
select *
from nombretabla
where nombrecampo1 = valor1 and nombrecampo2 = valor2
or nombrecampo1 = valor3 and nombrecampo2 valor4;

#Ordenar
select * 
from nomnbretabla
order by nombrecampo;

select *
from nombretabla
order by nombrecampo asc;

select *
from nombretabla
order by nombrecampo desc;

#limite de registros
select * from nombretabla limit numero;

#paginacion de registros
select * from nombretabla limit numeroregistros offset numeroinicia;

#buscar registeos (like)
select * from nombretabla
	where nombrecampo 
	like "%cadena%";


#buscar al inicio
select * from nombretabla
	where nombrecampo
	like 'cadena%';

#buscar - completando caracteres
select * from nombretabla
	where nombrecampo
	like "P_ol_ R_os";

#buscar con negacion
select * from nombretabla
	where nombrecampo
	not like '%paola%';

#multiples valores en una columna (IN)
select * from nombretabla
	where nombrecampo
	in(valor1, valor2, valor3);

#entre (inicial - final) (BETWWEEN)
SELECT * FROM nombretabla
	WHERE nombrecampo
	BETWEEN valor1 AND valor2;

#(negacion) entre (inicial - final) (not between)
SELECT * FROM nombretabla
	WHERE nombrecampo
	not BETWEEN valor1 AND valor2;


#alias (3 tablas relacionadas)
select c.nombres, a.nombre, a.precio
	from clientes as c, articulos as a, compras as compras
	where cm.cliente_id = c.id
	and cm.articulo_id = a.id;

#Sin alias (3 tablas relacionadas)

elect clientes.nombres, articulos.nombre, articulos.precio
	from clientes, articulos, compras
	where cm.cliente_id = c.id
	and cm.articulo_id = a.id;

#inner join
select c.nombres , a.nombre , a.precio 
	from clientes as c 
	inner join compras as cm 
	on c.id=cm.cliente_id 
	inner join articulos as a 
	on cm.articulo_id = a.id;

#left join
select c.nombres , a.nombre , a.precio 
	from clientes as c 
	left join compras as cm 
	on c.id=cm.cliente_id 
	left join articulos as a 
	on cm.articulo_id = a.id;

#right join
select c.nombres , a.nombre , a.precio 
	from clientes as c 
	right join compras as cm 
	on c.id=cm.cliente_id 
	right join articulos as a 
	on cm.articulo_id = a.id;

#join
select c.nombres , a.nombre , a.precio 
	from clientes as c 
	join compras as cm 
	on c.id=cm.cliente_id 
    join articulos as a 
	on cm.articulo_id = a.id;
	and c.id = 2;

#union (unir la consulta de 2 o mas tablas)
select campo1, campo2 from tabla1
union
select campo1, campo2 from tabla2;

select campo1, campo2 from tabla1
union all
select campo1, campo2 from tabla2;


# Mostrar valor maximo
select max(precio)
from articulos;
# Contar
select count(id)
from articulos;
# Sumar
select sum(precio)
from articulos;
# Promedio
select avg(precio)
from articulos;
# Redondear
select round(avg(precio)
from articulos;
Ocultar


