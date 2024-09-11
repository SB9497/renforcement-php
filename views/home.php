<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site De Vente De Voiture</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <figure class="logo" style="width:50px;">
                <img src="logoVoiture.png" style="width:100%;" alt="Logo Voiture">
            </figure>
            <ul>
                <li class="deroulant">
                    <a href="#"> &ensp;</a>
                    <ul class="nav">
                    <li><a href="?page=login">connexion</a></li>
                    <li><a href='?page=home'>d'accueil</a></li>
                    <li><a href='?page=contact'>Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Section des voitures -->
        <div class="voiture1">
            <section>
                <img src="/views/img1.jpg" alt="collection de voiture">
                <h3>Modele de voiture :</h3>
                <p>prix :</p>
                <p>information :</p>
                <p>couleur :</p>
                <p>kilometrage :</p>
            </section>
        </div>
        <div class="voiture1">
            <section>
                <img src="img1.jpg" alt="collection de voiture">
                <h3>Modele de voiture :</h3>
                <p>prix :</p>
                <p>information :</p>
                <p>couleur :</p>
                <p>kilometrage :</p>
            </section>
        </div>
    </main>
    
    <?php include "footer.php" ?>  

</body>
</html>
