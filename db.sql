CREATE DATABASE loja_teste;
USE loja_teste;

CREATE TABLE funcionarios (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    peso DECIMAL(10,2) NOT NULL,
    id_funcionario INT,
    FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id_funcionario)
);

INSERT INTO funcionarios (nome, email, cpf, senha) VALUES
('Serenna', 'serenna@gmail.com', '12446744940', '123456'),
('Lucas', 'lucas@gmail.com', '12446944940', '123456'),
('Tord', 'tord@gmail.com', '67696967670', '123456');

INSERT INTO produtos (nome, peso, id_funcionario) VALUES
('Mouse', 0.150, 1),
('Teclado', 0.800, 2),
('Mangá', 0.900, 3);