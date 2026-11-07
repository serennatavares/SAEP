CREATE DATABASE loja_crud;
USE loja_crud;

CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    status_produto ENUM('Disponível', 'Indisponível')
);

INSERT INTO produto(nome, preco, quantidade, status_produto) VALUES 
('Caderno', 24.50, 50, 'Disponível');