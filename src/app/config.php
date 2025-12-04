<?php
/**
 * Configurações Globais do Panturismo
 */

// Informações do Site
define('SITE_NAME', 'Panturismo');
define('SITE_DESCRIPTION', 'Pacotes de turismo com tudo que há de melhor no Pantanal');
define('SITE_URL', 'http://localhost/desafio-hackathon-pousada/src/public');
// Configurações de Banco de Dados (para uso futuro)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'panturismo');

// Configurações de Timezone
date_default_timezone_set('America/Sao_Paulo');

// Função auxiliar para gerar URLs
function url($page = '', $action = '', $params = []) {
    $url = SITE_URL . '/index.php';
    if ($page) {
        $url .= '?page=' . $page;
        if ($action) {
            $url .= '&action=' . $action;
        }
    }
    foreach ($params as $key => $value) {
        $url .= '&' . $key . '=' . urlencode($value);
    }
    return $url;
}

// Função para incluir view
function render($view, $data = []) {
    extract($data);
    include VIEWS_PATH . '/' . $view . '.php';
}
?>
