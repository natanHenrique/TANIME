

mysql -u root

CREATE DATABASE banco;

USE banco;

CREATE TABLE genero(
    id_genero INT(11) NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(100),
    PRIMARY KEY (id_genero)
);

INSERT INTO genero(descricao) VALUES('Acao'),('Fantasia'),('Comedia'),('Romance');

CREATE TABLE anime(
    id_anime INT(11) NOT NULL AUTO_INCREMENT,
    titulo_An VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    descr_An VARCHAR(500) NOT NULL,
    link VARCHAR(500) NOT NULL,
    verMais VARCHAR(500) NOT NULL,
    eps_An VARCHAR(100) NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    id_genero INT(11) NOT NULL,
    PRIMARY KEY (id_anime),
    FOREIGN KEY (id_genero) REFERENCES genero (id_genero)
);

CREATE TABLE noticia (
    id_news INT(11) NOT NULL AUTO_INCREMENT,
    titulo_News VARCHAR(100) NOT NULL,
    fonte VARCHAR(100) NOT NULL,
    descr_News VARCHAR(500) NOT NULL,
    imagem_News VARCHAR(100) NOT NULL,
    ver VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_news)
);

CREATE TABLE loginAdm (
    id_login INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_login)
);

INSERT INTO loginAdm( nome, senha) VALUES('adm', md5('adm'));

/*Comandos para a avaliação dos conteudos*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";


CREATE TABLE `avaliacos` (
  `id` int(11) NOT NULL,
  `qnt_estrela` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `avaliacos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `avaliacos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


/*COMANDOS PARA As TABELAS*/

SHOW TABLES;

/* Para a exclusão*/

DROP TABLE anime;

DROP TABLE manga;

DROP TABLE genero;

DROP TABLE loginAdm;

DROP TABLE `avaliacos`;

/* Mostrar os conteudos dentro das tabelas*/

SELECT * FROM anime;

SELECT * FROM manga;

SELECT * FROM genero;

SELECT * FROM loginAdm;

SELECT * FROM `avaliacos`;
