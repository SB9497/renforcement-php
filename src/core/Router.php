<?php 

namespace App\Core;

class Router {

    public static function route($path) {
        // Découper le chemin en segments
        $segments = explode("/", trim($path, '/'));
        
        // Récupérer le premier segment comme contrôleur
        $controller_folder = ucfirst(array_shift($segments)); // Exemple : 'car' devient 'Car'
        
        // Créer le nom complet du contrôleur
        $controller_name = "App\\Controllers\\" . $controller_folder . 'Controller'; // Ex: App\Controllers\CarController

        // Vérifier si le contrôleur existe avant d'instancier
        if (class_exists($controller_name)) {
            $controller = new $controller_name(); // Créer une instance du contrôleur
            
            // Récupérer l'action/méthode à appeler (exemple : 'index')
            $action = array_shift($segments) ?? 'index'; // Si aucune action n'est fournie, utiliser 'index'

            // Vérifier si la méthode existe dans le contrôleur
            if (method_exists($controller, $action)) {
                call_user_func_array([$controller, $action], $segments); // Appeler la méthode avec des arguments restants
            } else {
                // Si la méthode n'existe pas
                http_response_code(404);
                echo "Erreur 404: Méthode non trouvée.";
            }
        } else {
            // Si le contrôleur n'existe pas
            http_response_code(404);
            echo "Erreur 404: Contrôleur non trouvé.";
        }
    }
}
