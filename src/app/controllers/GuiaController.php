<?php
/**
 * Controlador da Página Guia Turístico
 */

require_once APP_PATH . '/controllers/BaseController.php';

class GuiaController extends BaseController {
    
    public function index() {
        $this->setData('page_title', 'Guia Turístico - Panturismo');
        
        // Conectar ao banco
        $pdo = Database::getConnection();
        
        // Buscar guias ativos
        $sql = "SELECT 
                    id, 
                    nome as name, 
                    especialidade as specialty, 
                    experiencia as experience, 
                    imagem as image 
                FROM guias 
                WHERE ativo = 1";
                
        $stmt = $pdo->query($sql);
        $guias = $stmt->fetchAll();
        
        $this->setData('guides', $guias);
        $this->render('guia', $this->data);
    }
}
?>