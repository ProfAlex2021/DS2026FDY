-- Criando tabela
CREATE TABLE usuario(
    cod INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45),
    senha VARCHAR(45)
);
-- Cadastrando valores
INSERT
    INTO
        usuario (nome, senha)
    VALUES
        ('gabi', 'gabi123'),
        ('adm', '123');