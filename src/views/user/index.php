<!-- views/user.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site De Vente De Voiture</title>
    <link rel="stylesheet" href="style.css">
    <?php include "header.php"; ?>  
</head>
<body>
    <header>
        <nav>
            <figure class="logo" style="width:50px;">
                <img src="logoVoiture.png" style="width:100%;" alt="">
            </figure>
            <ul>
                <li class="deroulant">
                    <a href="index.php?page=home">Accueil</a>
                </li>
                <li class="deroulant">
                    <a href="#"> &ensp;</a>
                    <ul class="nav">
                        <li><a href="index.php?page=login">Connexion</a></li>
                        <li><a href="index.php?page=home">Retour à l'accueil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Section des voitures -->
        <div class="voiture1">
            <h1>Bienvenue</h1>
            <?php foreach ($voitures as $voiture): ?>
                <section>
                    <img src="voitures.png" alt="collection de voiture">
                    <h3>Modèle de voiture : <?php echo htmlspecialchars($voiture['modele']); ?></h3>
                    <p>Prix : <?php echo htmlspecialchars($voiture['prix']); ?></p>
                    <p>Information : <?php echo htmlspecialchars($voiture['information']); ?></p>
                    <p>Couleur : <?php echo htmlspecialchars($voiture['couleur']); ?></p>
                    <p>Kilométrage : <?php echo htmlspecialchars($voiture['kilometrage']); ?></p>
                </section>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include "footer.php"; ?>  
</body>
</html>
