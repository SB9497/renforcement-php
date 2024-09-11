<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
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
        <h1>Contactez-nous</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </main>

    <?php include "footer.php"; ?>

</body>
</html>
