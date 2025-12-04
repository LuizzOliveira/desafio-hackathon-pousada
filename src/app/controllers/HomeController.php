<?php
/**
 * Controlador da Página Home
 */

require_once APP_PATH . '/controllers/BaseController.php';

class HomeController extends BaseController {
    
    public function index() {
        $this->setData('page_title', 'Home - Panturismo');
        
        // Conectar ao banco
        $pdo = Database::getConnection();
        
        // Buscar 3 pacotes para destaque
        $sql = "SELECT 
                    id, 
                    nome as name, 
                    descricao as description, 
                    CONCAT('R$ ', REPLACE(FORMAT(preco, 2), '.', ',')) as price, 
                    imagem as image 
                FROM pacotes 
                WHERE ativo = 1 
                LIMIT 3";
                
        $stmt = $pdo->query($sql);
        $destaques = $stmt->fetchAll();
        
        $this->setData('featured_packages', $destaques);
        $this->render('home', $this->data);
    }
}
?>