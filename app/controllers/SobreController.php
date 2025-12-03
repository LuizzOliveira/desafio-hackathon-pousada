<?php
/**
 * Controlador da Página Sobre
 */

require_once APP_PATH . '/controllers/BaseController.php';

class SobreController extends BaseController {
    
    public function index() {
        $this->setData('page_title', 'Sobre - Panturismo');
        $this->setData('company_info', [
            'founded' => '2015',
            'experience' => '10+ anos',
            'customers' => '5000+',
            'guides' => '50+'
        ]);
        
        $this->render('sobre', $this->data);
    }
}
?>
