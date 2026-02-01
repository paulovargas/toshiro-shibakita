CREATE DATABASE IF NOT EXISTS meubanco;
USE meubanco;

CREATE TABLE IF NOT EXISTS dados (
    AlunoID INT,
    Nome VARCHAR(50),
    Sobrenome VARCHAR(50),
    Endereco VARCHAR(150),
    Cidade VARCHAR(50),
    Host VARCHAR(50)
);

INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES
(1, 'JOAO', 'SILVA', 'RUA A', 'SAO PAULO', 'init'),
(2, 'MARIA', 'SOUZA', 'RUA B', 'RIO', 'init');
