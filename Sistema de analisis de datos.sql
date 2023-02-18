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
insert into persona (id, nombre) 
	values 	(1, "Alex"), (2,"Sara"), (3,"Laura"), 
			(4,"Maira"), (5,"Gustavo"), (6,"Umma");
select * from persona;

delete from residencia;
insert into residencia(id_r, dir_calle, dir_numero, dir_piso_depto) 
	values 	(1, "Cerrito", 176, "8 F"), (2, "Almafuerte", 457,"3 D"), (3, "Alberti", 2345,"4 E"), 
			(4, "Benito Lynch", 4803,"-"), (5, "Calabria", 1532,"2 B"), (6, "Cerrito", 421,"3 J"), 
            (7, "Carlos Alvear", 123,"-"), (8, "Edison", 243,"-"), (9, "Mario Bravo", 304,"-");
select * from residencia;

delete from localidad;
insert into localidad(id_l, c_postal, localidad, pcia) 
	values 	(1, 7600, "Mar de plata", "Buenos Aires"), (2, 234, "Mar de ajo", "Buenos Aires"), 
			(3, 987, "La plata", "Buenos Aires"), (4, 112, "Mar de las pompas", "La pampa"), 
            (5, 2359, "Bariloche", "Rio Negro"), (6, 3434, "Arroyito", "Cordoba");
select * from localidad;