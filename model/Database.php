<?php
// model/Database.php

class Database {
    private static $instance = null;
    private $pdo;

    // Constructeur privé pour empêcher l'instanciation externe
    private function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    // Méthode pour obtenir l'instance unique de la classe
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Méthode pour obtenir la connexion PDO
    public function getConnection() {
        return $this->pdo;
    }
}
?>
