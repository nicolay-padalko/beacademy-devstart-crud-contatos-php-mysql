CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category
(
    id          INT(11)      NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name        VARCHAR(30)  NOT NULL,
    description VARCHAR(100) NOT NULL
);

DROP TABLE tb_product;

CREATE TABLE tb_product
(
    id           INT(11)      NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name         VARCHAR(30)  NOT NULL,
    description  VARCHAR(100) NOT NULL,
    photo        VARCHAR(255) NOT NULL,
    value        FLOAT(5, 2)  NOT NULL,
    category_id INT(11)      NOT NULL,
    quantity     INT(5)       NOT NULL,
    created_at    DATETIME     NOT NULL
);

INSERT INTO tb_category (name, description)
VALUES ('Informática', 'Produtos de Informatica e acessórios para computador'),
       ('Escritório', ' Canetas, Cadernos, folhas , etc'),
       ('Eletrônicos', 'Produtos de Informática e acessórios para computador');

SELECT *
FROM tb_category;

INSERT INTO tb_product (name, description, photo, value, category_id, quantity, create_at)
VALUES ('mouse', 'ótico 400 dpi', 'https://d2cdo4blch85n8.cloudfront.net/wp-content/uploads/2019/07/Glorious-Model-O-Lightweight-Gaming-Mouse-Featured-image.jpg', 150.00, 1, 10, '2022-05-10 09:30:25' ),
('mouse', 'ótico 800 dpi', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F39b2749f-cb89-4156-bef6-9902cf1fa5e6_1.a59086a47727231af61afa8e83a1a9d8.jpeg&f=1&nofb=1', 250.00, 1, 40, '2021-05-10 09:30:25' ),
('mouse', 'ótico 3200 dpi', 'https://w3.ezcdn.com.br/microgem/fotos/zoom/3403fz4/mouse-gamer-xtrike-me-gm-206-1200dpi-4-botoes-led-7-cores-gm206.jpg', 100.00, 1, 30, '2022-02-10 09:30:25' );