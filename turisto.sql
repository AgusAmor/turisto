create database if not exists turisto;
use turisto;

create table if not exists user(
	id_user int not null auto_increment primary key,
    email varchar(40) not null,
    password varchar(60) not null,
    name varchar(25) not null, 
    surname varchar(25) not null,
    nationality varchar(25),
    phone varchar(20),
    access varchar(10) not null,
    banned boolean not null
);

insert into user values(1, 'sistema@turistosas.com', '$2y$10$1hjlIzcoyW0AxnT.4xPKmuqPUFbzx4bRbcM4udATCn3yA6iYbgeCS', 'Agustin', 'Amor', 'Argentina', 1157731233, 'admin', false);