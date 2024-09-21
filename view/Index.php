<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voiture</title>
    <link rel="stylesheet" href="../css/Voiture.css"> <!-- Assurez-vous que ce chemin est correct -->
</head>
<body>
<header>
    <div class="conteneur">
        <div class="recherche">
            <input type="text" class="searchTerm" placeholder="Recherche">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</header>
<section id="cars" class="car-list">
    <h2>Voitures à vendre</h2>
    <div class="cars-container">
        <?php
        ini_set('display_errors', 1);
        
        include_once '../model/voiture.php'; 

        try {
            // Connexion à la base de données via Singleton
            $pdo = Database::getInstance()->getConnection(); // Utilisation du Singleton
        
            // Requête SQL pour récupérer les voitures
            $sql = "SELECT marque, modele, annee, prix, couleur, image_url FROM voiture";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            // Boucler sur les résultats
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $voiture = new Voiture($row['marque'], $row['modele'], $row['prix'], $row['couleur'], $row['annee'], $row['image_url']);
                $voiture->afficher();
            }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
        ?>
    </div>
</section>
</body>
</html>
