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
        $this->setData('packages', [
            [
                'id' => 1,
                'name' => 'Aventura Completa',
                'duration' => '5 dias',
                'price' => 'R$ 1.500',
                'description' => 'Passeios de barco, trilhas e observação de fauna',
                'includes' => ['Hospedagem', 'Refeições', 'Guia especializado', 'Transporte']
            ],
            [
                'id' => 2,
                'name' => 'Safari Fotográfico Premium',
                'duration' => '7 dias',
                'price' => 'R$ 3.500',
                'description' => 'Experiência premium com fotógrafos profissionais',
                'includes' => ['Hospedagem 5 estrelas', 'Refeições gourmet', 'Guia fotógrafo', 'Equipamento']
            ],
            [
                'id' => 3,
                'name' => 'Pesca Esportiva',
                'duration' => '4 dias',
                'price' => 'R$ 2.200',
                'description' => 'Pesca em locais privilegiados do Pantanal',
                'includes' => ['Hospedagem', 'Refeições', 'Barco e equipamento', 'Guia especializado']
            ],
            [
                'id' => 4,
                'name' => 'Ecoturismo Familiar',
                'duration' => '3 dias',
                'price' => 'R$ 900',
                'description' => 'Atividades para toda a família em contato com a natureza',
                'includes' => ['Hospedagem', 'Refeições', 'Atividades variadas', 'Seguro']
            ]
        ]);
        
        $this->render('pacotes-prontos', $this->data);
    }
    
    public function personalizados() {
        $this->setData('page_title', 'Pacotes Personalizados - Panturismo');
        $this->render('pacotes-personalizados', $this->data);
    }
}
?>
