-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS desafio_livros DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Seleciona o banco
USE desafio_livros;

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    senha VARCHAR(255) NOT NULL -- recomenda-se criptografar a senha com password_hash
);

-- Tabela de livros
CREATE TABLE IF NOT EXISTS livro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(25) NOT NULL,
    autor VARCHAR(20) NOT NULL,
    ano DATE NOT NULL,
    isbn VARCHAR(13) NOT NULL
);
