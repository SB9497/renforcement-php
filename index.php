<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/ContactController.php';

// Point d'entrée
$page = $_GET['page'] ?? 'home'; // Récupérer la page demandée

if ($page == 'login') {
    $controller = new LoginController();
    $controller->login();
} elseif ($page == 'contact') {
    $controller = new ContactController();
    $controller->contact();
} else {
    $controller = new HomeController();
    $controller->index();
}

