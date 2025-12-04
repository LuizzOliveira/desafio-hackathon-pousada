INSERT INTO usuarios (nome, email, telefone, senha) VALUES 
('Administrador', 'admin@panturismo.com.br', '(67) 99999-9999', 'senha123');

-- Inserir Pacotes (Dados baseados no seu PacotesController.php)
INSERT INTO pacotes (nome, duracao, preco, descricao, imagem, ativo) VALUES 
('Aventura no Pantanal', 5, 1500.00, 'Explore a maior planície alagável do mundo com passeios de barco e trilhas.', 'package1.jpg', TRUE),
('Safari Fotográfico', 7, 2000.00, 'Capture a beleza da fauna pantaneira com guias especializados em fotografia.', 'package2.jpg', TRUE),
('Pesca Esportiva', 4, 1800.00, 'Viva a experiência da pesca no Pantanal em locais privilegiados.', 'package3.jpg', TRUE),
('Ecoturismo Familiar', 3, 900.00, 'Atividades seguras e divertidas para toda a família em contato com a natureza.', 'package4.jpg', TRUE);

-- Inserir Guias (Dados baseados no seu GuiaController.php)
INSERT INTO guias (nome, especialidade, experiencia, imagem, biografia, ativo) VALUES 
('Carlos Silva', 'Fotografia de Vida Selvagem', '15 anos', 'guide1.jpg', 'Especialista em encontrar as melhores luzes e ângulos para fotos de onças e aves.', TRUE),
('Ana Santos', 'Ecologia e Natureza', '12 anos', 'guide2.jpg', 'Bióloga apaixonada pela preservação e com vasto conhecimento sobre a flora local.', TRUE),
('Roberto Costa', 'Pesca Esportiva', '18 anos', 'guide3.jpg', 'Conhece cada curva do rio e as melhores técnicas para a pesca esportiva sustentável.', TRUE);

-- Inserir uma Reserva de Exemplo (Assumindo ID 1 para usuario e pacote)
INSERT INTO reservas (usuario_id, pacote_id, data_inicio, data_fim, numero_pessoas, preco_total, status) VALUES 
(1, 1, '2024-12-10', '2024-12-15', 2, 3000.00, 'confirmada');