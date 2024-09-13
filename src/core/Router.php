<?php 

namespace App\Core;


class Router {

    public static function  route($path) {
        // separer le chemin en segments
        // ex ['home', 'index']
        $segments = explode("/", trim($path, '/'));
        $controller_folder = ucfirst(array_shift($segments)); // Home

        $controller_name = "App\\Controllers\\".$controller_folder.'Controller';
        
        $action = array_shift($segments);

        $controller = new $controller_name();
        $controller->$action();
    } 
}