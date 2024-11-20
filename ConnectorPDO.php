<?php
class ConnectorPDO {
    private $pdo;

    public function __construct($host = '10.20.5.70:3306', $db = 'Formulaire', $user = 'root', $pass = 'admin1234', $charset = 'utf8mb4') {
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $this->pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);

        try {
            if (empty($options)) {
            $this->pdo = new PDO($dsn, $user, $pass);
            } else {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
            }
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection() {
        return $this->pdo;
        
    }
}
?>
