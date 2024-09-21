<?php
// controllerVoiture.php

class controllervoiture
{
    public function voiture()
    {
        // Inclure le modèle Voiture et la classe Singleton Database
        include_once '../model/voiture.php'; 
        include_once '../model/Database.php';

        try {
            // Obtenir l'instance unique de la connexion à la base de données
            $db = Database::getInstance();
            $pdo = $db->getConnection();

            // Préparation de la requête SQL pour récupérer les voitures
            $vts = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
            $sql = $vts->prepare ("SELECT marque, modele, annee, prix, couleur, image_url FROM voiture");
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            
            // Boucler sur les résultats et appeler la méthode afficher() pour chaque voiture
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Créer un objet Voiture pour chaque ligne récupérée
                $voiture = new Voiture($row['marque'], $row['modele'], $row['prix'], $row['couleur'], $row['annee'], $row['image_url']);
                
                // Appeler la méthode afficher() pour afficher les informations de la voiture
                $voiture->afficher();
            }
        } catch (PDOException $e) {
            // Gérer l'erreur si la connexion échoue ou si la requête échoue
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
?>
