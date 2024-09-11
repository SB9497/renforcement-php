<?php
require_once 'models/LoginModel.php';

class LoginController {
    private $loginModel;

    public function __construct() {
        // Créer une instance du modèle
        $this->loginModel = new LoginModel('localhost', 'boutique', 'root', '');
    }

    public function login() {
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Récupérer l'utilisateur à partir du modèle
            $user = $this->loginModel->findUserByEmail($email);

            if ($user) {
                if (password_verify($password, $user['mot_de_passe'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: index.php");
                    exit();
                } else {
                    $message = "Mot de passe incorrect.";
                }
            } else {
                $message = "Email non trouvé.";
            }
        }

        // Charger la vue et passer le message
        require 'views/login.php';
    }
}
?>
