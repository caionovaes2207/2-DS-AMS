-- ============================================
-- Catálogo de Discos/Músicas - Script do Banco
-- ============================================

CREATE DATABASE IF NOT EXISTS catalogo_discos
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE catalogo_discos;

CREATE TABLE IF NOT EXISTS discos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    artista VARCHAR(150) NOT NULL,
    ano_lancamento YEAR NOT NULL,
    genero VARCHAR(80) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Dados de exemplo
INSERT INTO discos (titulo, artista, ano_lancamento, genero) VALUES
('Legend', 'Bob Marley & The Wailers', 1984, 'Reggae'),
('Thriller', 'Michael Jackson', 1982, 'Pop'),
('Ok Computer', 'Radiohead', 1997, 'Rock Alternativo'),
('Acabou Chorare', 'Novos Baianos', 1972, 'MPB'),
('Racionais - Sobrevivendo no Inferno', 'Racionais MC\'s', 1997, 'Rap');
