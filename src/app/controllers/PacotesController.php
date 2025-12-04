<?php
/**
 * Controlador da Página Pacotes
 */

require_once APP_PATH . '/controllers/BaseController.php';

class PacotesController extends BaseController {
    
    public function index() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'prontos';
        
        if ($action === 'personalizados') {
            $this->personalizados();
        } else {
            $this->prontos();
        }
    }
    
    public function prontos() {
        $this->setData('page_title', 'Pacotes Prontos - Panturismo');
        
        // Conectar ao banco
        $pdo = Database::getConnection();
        
        // Buscar pacotes ativos
        // Traduzimos as colunas (nome -> name) para a View entender
        $sql = "SELECT 
                    id, 
                    nome as name, 
                    CONCAT(duracao, ' dias') as duration, 
                    CONCAT('R$ ', REPLACE(FORMAT(preco, 2), '.', ',')) as price, 
                    descricao as description,
                    imagem as image
                FROM pacotes 
                WHERE ativo = 1";
                
        $stmt = $pdo->query($sql);
        $pacotes = $stmt->fetchAll();

        // Adicionar itens inclusos (simulado, pois não criamos tabela para isso)
        foreach ($pacotes as &$pacote) {
            $pacote['includes'] = ['Hospedagem', 'Refeições', 'Guia', 'Transporte'];
        }
        
        $this->setData('packages', $pacotes);
        $this->render('pacotes-prontos', $this->data);
    }
    
    public function personalizados() {
        $this->setData('page_title', 'Pacotes Personalizados - Panturismo');
        $this->render('pacotes-personalizados', $this->data);
    }
}
?>