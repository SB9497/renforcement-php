<?php
namespace App\Controllers;

class ContactController {
    
    public function __construct() {}

    public function contact() {
        // Inclure la vue de la page de contact
        require dirname(__DIR__, 1). '/views/contact/index.php';
    }
}
?>
