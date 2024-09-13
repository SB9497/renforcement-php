<?php
namespace App\Controllers;

class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function index() {
        
        $voitures = $this->userModel->getAllVoitures();
        require dirname(__DIR__,1) . '/views/user.php';
    }
}
