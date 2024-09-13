<?php
namespace App\Controllers;

class HomeController {

    public function __construct() {}

    public function index() {
        // Inclure la vue pour l'accueil
        require dirname(__DIR__, 1). '/views/home/index.php';
    }
}
?>
