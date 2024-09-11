<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'boutique');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Erreur: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Créer un compte</h2>
    <form method="POST">
        <label>Nom: <input type="text" name="nom" required></label>
        <label>Email: <input type="email" name="email" required></label>
        <label>Mot de passe: <input type="password" name="password" required></label>
        <button type="submit">S'inscrire</button>
    </form>
    <?php include "footer.php" ?> 
</body>

</html>