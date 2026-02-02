create database site;

use site;

create table login(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (150) NOT NULL,
email VARCHAR (150) NOT NULL,
senha VARCHAR (150) NOT NULL,
data_nasc date NOT NULL,
cpf VARCHAR (150) NOT NULL
)


