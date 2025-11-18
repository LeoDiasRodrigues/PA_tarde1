create database login_usuario;

use login_usuario;

create table login (
id int not null auto_increment primary key,
usuario varchar(100),
senha varchar(100)
) DEFAULT CHARSET utf8;

select * from login