-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS davos;
USE davos;

-- Criação da tabela de estudantes
CREATE TABLE IF NOT EXISTS estudantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    ativo TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Exemplo de inserção de dados iniciais (opcional)
INSERT INTO estudantes (nome, descricao, ativo) VALUES
    ('João da Silva', 'Estudante dedicado', 1),
    ('Maria Souza', 'Bom desempenho acadêmico', 1),
    ('Pedro Almeida', 'Excelente em matemática', 0);
