<?php
class Database {
    private static $instance = null;
    
    // Método estático para pegar a conexão
    public static function getConnection() {
        if (self::$instance === null) {
            try {
                // Cria a conexão usando as constantes do config.php
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                
                self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);
                
            } catch (PDOException $e) {
                // Em produção, é melhor logar o erro em vez de mostrar na tela
                die("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>