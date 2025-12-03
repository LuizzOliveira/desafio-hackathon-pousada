<?php
/**
 * Classe Base para Controladores
 */

class BaseController {
    protected $data = [];

    public function __construct() {
        // Inicializar dados padrão
        $this->data['site_name'] = SITE_NAME;
        $this->data['site_description'] = SITE_DESCRIPTION;
    }

    /**
     * Renderizar uma view
     */
    protected function render($view, $data = []) {
        $this->data = array_merge($this->data, $data);
        extract($this->data);
        include VIEWS_PATH . '/pages/' . $view . '.php';
    }

    /**
     * Redirecionar para outra página
     */
    protected function redirect($page, $action = '') {
        $url = url($page, $action);
        header('Location: ' . $url);
        exit;
    }

    /**
     * Definir dados para a view
     */
    protected function setData($key, $value) {
        $this->data[$key] = $value;
    }
}
?>
