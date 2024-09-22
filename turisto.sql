create database if not exists turisto;
use turisto;

create table if not exists user(
	id_user int not null,
    email varchar(50) not null,
    password varchar(200) not null,
    name varchar(20) not null,
    name2 varchar(20),
    surname varchar(20) not null,
    nationality varchar(30),
    phone varchar(20),
    access varchar(10) not null,
    banned boolean not null
);

insert into user values(1, 'user0@mail', '123qwe', 'Jorge', '', 'Paz', 'Ecuatoriano', 1122334455, 'usuario', false);