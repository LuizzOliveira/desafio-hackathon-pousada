<?php
/**
 * Controlador da Página Guia Turístico
 */

require_once APP_PATH . '/controllers/BaseController.php';

class GuiaController extends BaseController {
    
    public function index() {
        $this->setData('page_title', 'Guia Turístico - Panturismo');
        $this->setData('guides', [
            [
                'id' => 1,
                'name' => 'Carlos Silva',
                'specialty' => 'Fotografia de Vida Selvagem',
                'experience' => '15 anos',
                'image' => 'guide1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Ana Santos',
                'specialty' => 'Ecologia e Natureza',
                'experience' => '12 anos',
                'image' => 'guide2.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Roberto Costa',
                'specialty' => 'Pesca Esportiva',
                'experience' => '18 anos',
                'image' => 'guide3.jpg'
            ]
        ]);
        
        $this->render('guia', $this->data);
    }
}
?>
