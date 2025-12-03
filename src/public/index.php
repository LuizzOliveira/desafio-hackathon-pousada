<?php
/**
 * Panturismo - Sistema de Turismo no Pantanal
 * Arquivo Principal (Front Controller)
 */

// Definir o diretório raiz
define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('VIEWS_PATH', APP_PATH . '/views');
define('BASE_URL', 'http://localhost/panturismo/src');
define('ASSETS_PATH', BASE_URL . '/assets');


// Iniciar sessão
session_start();

// Incluir configurações
require_once APP_PATH . '/config.php';

// Incluir classes do MVC
require_once APP_PATH . '/controllers/HomeController.php';
require_once APP_PATH . '/controllers/SobreController.php';
require_once APP_PATH . '/controllers/GuiaController.php';
require_once APP_PATH . '/controllers/PacotesController.php';

// Roteamento simples
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Sanitizar entrada
$page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);
$action = preg_replace('/[^a-zA-Z0-9_-]/', '', $action);

// Roteador
switch ($page) {
    case 'sobre':
        $controller = new SobreController();
        break;
    case 'guia':
        $controller = new GuiaController();
        break;
    case 'pacotes':
        $controller = new PacotesController();
        break;
    default:
        $controller = new HomeController();
        break;
}

// Chamar ação do controlador
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    $controller->index();
}
?>
