<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
                    <<li><a href="?page=login">connexion</a></li>
                    <li><a href='?page=home'>d'accueil</a></li>
                    <li><a href='?page=contact'>Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Connexion</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Se connecter">
            </div>
            <?php if (isset($message)) : ?>
                <div class="message"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
