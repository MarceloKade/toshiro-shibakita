CREATE DATABASE IF NOT EXISTS meubanco;
USE meubanco;

CREATE TABLE IF NOT EXISTS dados (
    AlunoID INT NOT NULL,
    Nome VARCHAR(50) NOT NULL,
    Sobrenome VARCHAR(50) NOT NULL,
    Endereco VARCHAR(150),
    Cidade VARCHAR(50),
    Host VARCHAR(50),
    PRIMARY KEY (AlunoID)
);
