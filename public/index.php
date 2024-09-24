<?php
namespace App\Public;

use App\Core\Router;

require dirname(__DIR__, 1). '/vendor/autoload.php';

// Point d'entrée principal
$page = $_GET['page'] ?? 'home/index'; // Par défaut 'home/index' si aucune page n'est spécifiée

// Appeler le routeur avec la page demandée
Router::route($page);
