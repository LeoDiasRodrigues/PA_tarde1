create database aula_php;

use aula_php;

create table usuario (
id int not null auto_increment primary key,
usuario varchar(100),
senha varchar(100)
) DEFAULT CHARSET utf8