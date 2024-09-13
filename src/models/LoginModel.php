<?php

class LoginModel {
    private $connexion;

    public function __construct($host, $dbname,String $user,String $pass) {
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Échec de la connexion à la base de données : " . $e->getMessage());
        }
    }

    public function findUserByEmail($email) {

        $sql = $this ->connexion->prepare ("SELECT * FROM utilisateurs WHERE email = :email");
        $stmt = $this->connexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
