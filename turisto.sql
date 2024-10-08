create database if not exists turisto;
use turisto;

create table if not exists user_type(
    id_user_type int not null auto_increment primary key,
    type varchar(15) not null
);

create table if not exists user(
	id_user int not null auto_increment primary key,
    email varchar(40) not null,
    password varchar(60) not null,
    name varchar(25) not null, 
    surname varchar(25) not null,
    nationality varchar(25),
    phone varchar(20),
    access int not null,
    banned boolean not null,
    foreign Key (access) references user_type (id_user_type)
);

create table if not exists package(
    id_package int not null auto_increment primary key,
    country_destination varchar(50) not null,
    city_destination varchar(100),
    passengers int(2) not null,
    transfer boolean default false,
    luggage varchar(10),
    lodging boolean default false
);


insert into user_type (type)
values
    ('usuario'),
    ('asesor'),
    ('administrador');