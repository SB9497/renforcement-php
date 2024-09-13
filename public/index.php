<?php
namespace App\Public;

use App\Core\Router;

require dirname(__DIR__, 1). '/vendor/autoload.php';

// Point d'entrée
$page = $_GET['page'] ?? 'home/index'; // Récupérer la page demandée

Router::route($page);
