<?php
/**
 * Controlador da Página Home
 */

require_once APP_PATH . '/controllers/BaseController.php';

class HomeController extends BaseController {
    
    public function index() {
        $this->setData('page_title', 'Home - Panturismo');
        $this->setData('featured_packages', [
            [
                'id' => 1,
                'name' => 'Aventura no Pantanal',
                'description' => 'Explore a maior planície alagável do mundo',
                'price' => 'R$ 1.500',
                'image' => 'package1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Safari Fotográfico',
                'description' => 'Capture a beleza da fauna pantaneira',
                'price' => 'R$ 2.000',
                'image' => 'package2.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Pesca Esportiva',
                'description' => 'Viva a experiência da pesca no Pantanal',
                'price' => 'R$ 1.800',
                'image' => 'package3.jpg'
            ]
        ]);
        
        $this->render('home', $this->data);
    }
}
?>
