<?php

class Logout {
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Méthode pour déconnecter l'utilisateur
    public function deconnexion() {
        // Vérifier si une session existe
        if (isset($_SESSION['utilisateur'])) {
            // Détruire toutes les variables de session
            $_SESSION = [];

            // Détruire la session
            session_destroy();

            echo "Déconnexion réussie.<br>";
        } else {
            echo "Aucune session active à déconnecter.<br>";
        }
    }

    // Méthode pour rediriger après la déconnexion
    public function redirection($url) {
        header("Location: $url");
        exit();
    }
}


// Créer une instance de Logout
$logout = new Logout();

// Déconnecter l'utilisateur
$logout->deconnexion();

// Rediriger l'utilisateur vers la page d'accueil après la déconnexion
$logout->redirection('index.php');

?>

<?php include "footer.php" ?> 