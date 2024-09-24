<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voiture</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Assurez-vous que ce chemin est correct -->
</head>
<body>
<header>
<div class="conteneur">
        <div class="recherche">
        <form method="GET" action="index.php">
            <input type="text" name="searchTerm" class="searchTerm" placeholder="Recherche">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
            </form>
        </div>
    </div>
</header>
<section id="cars" class="car-list">
    <h2>Voitures à vendre</h2>
    <div class="cars-container">
        <?php
        ini_set('display_errors', 1);
        
        include_once '../model/voiture.php';
        include_once '../model/Database.php'; 

        $searchTerm = isset($_GET['searchTerm']) ? $_GET['searchTerm'] : '';


        try {
            $pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // Si une recherche est effectuée, filtrer par marque
            if (!empty($searchTerm)) {
                $sql = "SELECT marque, modele, annee, prix, couleur, image_url FROM voiture WHERE marque LIKE :searchTerm";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['searchTerm' => '%' . $searchTerm . '%']);
            } else {
                // Sinon, afficher toutes les voitures
                $sql = "SELECT marque, modele, annee, prix, couleur, image_url FROM voiture";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            }
        
            // Afficher les résultats
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