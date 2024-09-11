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
                    <a href="index.html#Accueil">Accueil</a>
                </li>
                <li class="deroulant">
                    <a href="#"> &ensp;</a>
                    <ul class="nav">
                        <li><a href="login.php">connexion</a></li>
                        <li><a href="index.php">d'accueil</a></li>

                    </ul>
                </li>

            </ul>
        </nav>
    </header>

    <main>
        <!-- Section des voitures -->
        <div class="voiture1">
            <h1>bienvenue</h1>
            <img src="voitures.png" alt="collection de voiture">
            <section>
            <img src="voitures.png" alt="collection de voiture">
            <h3>Modele de voiture :</h3>
            <p>prix :</p>
            <p>information :</p>
            <p>couleur :</p>
            <p>kilometrage :</p>
            </section>

            <section>
            <img src="voitures.png" alt="collection de voiture">
            <h3>Modele de voiture :</h3>
            <p>prix :</p>
            <p>information :</p>
            <p>couleur :</p>
            <p>kilometrage :</p>
            </section>

            <section>
            <img src="voitures.png" alt="collection de voiture">
            <h3>Modele de voiture :</h3>
            <p>prix :</p>
            <p>information :</p>
            <p>couleur :</p>
            <p>kilometrage :</p>
            </section>
        </div>
    <main>
    <?php include "footer.php"; ?>  



</body>
</html>
