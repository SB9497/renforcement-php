<?php
namespace App\Controllers;

class LoginController {

    private $loginModel;

    public function __construct() {
        // Créer une instance du modèle
        $this->loginModel = new LoginModel('localhost', 'boutique', 'root', '');
    }

    public function login() {
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $elmail = $_POST['email'];
            $email = htmlspecialchars(filter_var($elmail, FILTER_SANITIZE_EMAIL));
            $motDePasse = $_POST['password'];
            $password = htmlspecialchars($motDePasse);

            // Récupérer l'utilisateur à partir du modèle
            $user = $this->loginModel->findUserByEmail($email);

            // Vérification si l'email existe
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                // Vérification du mot de passe
                if (password_verify($password, $user['mot_de_passe'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: index.php");
                    exit();
                } else {
                    // problème mot de passe
                    $message = "Identifiants invalides.";
                }
            } else {
                // problème email
                $message = "Identifiants invalides.";
            }
        }

        // Charger la vue et passer le message
        require dirname(__DIR__, 1). '/views/login/index.php';
    }
        // Méthode destructeur pour fermer la connexion à la base de données
         public function __destruct() {
            $this->loginModel = null;
         
            // Message optionnel pour confirmer la fermeture (pour debug)
            echo "Connexion à la base de données fermée.<br>";
        }
}
?>
