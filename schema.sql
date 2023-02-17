drop database municipalidad;
create database municipalidad;
use municipalidad;

create table persona(
	id int,
    nombre varchar(40)
);

create table residencia(
	id_r int,
	dir_calle varchar(40),
    dir_numero int,
    dir_piso_depto varchar(10)
);

create table localidad(
	id_l int,
	c_postal varchar(10),
    localidad varchar(40),
    pcia varchar(40)
);

delete from persona;
insert into persona (id, nombre) values (1, "Alex");
select * from persona;

delete from residencia;
insert into residencia(id_r, dir_calle, dir_numero, dir_piso_depto) values (1, "cerrito", 176, "8 F");
select * from residencia;

delete from localidad;
insert into localidad(id_l, c_postal, localidad, pcia) values (1, 7600, "Mar de plata", "Buenos Aires");
select * from localidad;