CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    cpf varchar(255),
    nome varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE info (
    id int NOT NULL AUTO_INCREMENT,
    cpf varchar(255),
    genero char(1),
    ano_nascimento int(4),
    PRIMARY KEY (id)
);