CREATE DATABASE BANCO;
USE BANCO;
CREATE TABLE CADASTRO (
    NomeCliente VARCHAR (80) NOT NULL,
    RG CHAR (9) PRIMARY KEY,
    EmailCliente VARCHAR (80) NOT NULL,
    DataNascimento DATE,
    NumeroCelular CHAR (9),
    Profissao VARCHAR (15),
    Senha VARCHAR (20)
 );

 INSERT INTO CADASTRO VALUES(
    "Rodrigo Doratiotto",
    "395959731",
    "rodrigo.reis@outlook.com",
    "1998-02-14",
    "958844751",
    "Dev Jr",
    "Umasenhaboa"
 );

  INSERT INTO CADASTRO VALUES(
    "Walace Francoo",
    "537417436",
    "wallace.franco@outlook.com",
    "2001-02-01",
    "966374540",
    "Dev Jr",
    "Umasenhaboa2"
 );