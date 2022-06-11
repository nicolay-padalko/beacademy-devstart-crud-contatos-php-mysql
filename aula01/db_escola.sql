DROP TABLE tb_professor;
DROP TABLE tb_aluno;

CREATE
DATABASE db_escola;

USE
db_escola;

CREATE TABLE tb_professor
(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome  VARCHAR(100) NOT NULL,
    cpf   CHAR(11) UNIQUE     NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE tb_aluno
(
    nome      VARCHAR(100) NOT NULL,
    cpf       CHAR(11) UNIQUE    NOT NULL,
    email     VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR(30) UNIQUE  NOT NULL
);

INSERT INTO tb_professor
    (nome, email, cpf)
VALUES ('Nicolay', 'nico@gmai.com', '1232658903');

SELECT *
FROM db_escola.tb_professor;

INSERT INTO tb_professor
    (nome, email, cpf)
VALUES ('Joaquin', 'joaq@gmai.com', '45467658903');