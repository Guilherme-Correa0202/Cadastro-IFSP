-- Deleta banco de dados:
    DROP DATABASE IF EXISTS IFSP;

-- Cria database:
    CREATE DATABASE IF NOT EXISTS IFSP;

-- Usa o database
USE IFSP;

-- Cria tabela
CREATE TABLE Cidade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    estado VARCHAR(2)
);

CREATE TABLE Cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES Cidade(id)
);







-- Insere informações:
INSERT INTO Cidade (nome, estado) VALUES
('São Paulo', 'SP'),
('Campinas', 'SP'),
('Ribeirão Preto', 'SP'),
('Santos', 'SP'),
('Sorocaba', 'SP');

-- seleciona informações
SELECT * FROM Cidade WHERE estado = 'SP';

INSERT INTO Cliente (nome, cidade_id) VALUES
('João Silva', 1),
('Maria Oliveira', 2),
('Carlos Pereira', 3),
('Ana Souza', 4),
('Pedro Santos', 5);

SELECT * FROM Cliente WHERE cidade_id = 1;

-- Atualiza informações
UPDATE Cidade SET nome = 'Bauru' WHERE id = 1;
SELECT * FROM Cidade where id=1;
UPDATE Cliente SET nome = 'Cássio Stersi' WHERE id = 1;
SELECT * FROM Cliente where id=1;

UPDATE Cliente SET cidade_id = 1 WHERE cidade_id = 4;
DELETE FROM Cidade WHERE id = 4;
DELETE FROM Cliente WHERE id = 1;
drop database IFSP;