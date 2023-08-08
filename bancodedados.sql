CREATE DATABASE BANCO;
USE BANCO;
CREATE TABLE CADASTRO (
    NomeCliente VARCHAR (80) NOT NULL,
    RG CHAR (9) PRIMARY KEY,
    EmailCliente VARCHAR (80) NOT NULL,
    DataNascimento DATE,
    NumeroCelular CHAR (9),
    Profissao VARCHAR (15),
    Senha VARCHAR (20),
    

 )