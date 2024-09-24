<?php
namespace App\Controllers;

class DashboardController {

    public function __construct() {}

    public function index() {
        // Inclure la vue pour le tableau de bord
        require dirname(__DIR__, 1) . '/views/dashboard/index.php';
    }

    public function settings() {
        // Inclure la vue pour les paramètres
        require dirname(__DIR__, 1) . '/views/dashboard/settings.php';
    }
}
