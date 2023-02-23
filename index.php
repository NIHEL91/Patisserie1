<?php
require 'vendor/autoload.php';

use Patisserie\App\controller\AppController;
use Patisserie\App\controller\UserController;
use Patisserie\App\controller\ProductController;
session_start();

if (!isset($_SESSION['role'])){
    $_SESSION['role'] = 'ROLE_ClIENT';
}

$entite = filter_input(INPUT_GET, 'entite', FILTER_SANITIZE_SPECIAL_CHARS);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
try {
    // test sur quelle entite on veut travailler
    switch ($entite) {
        case 'user':
            // appel du sous contrôleur de l'entite user
            //include 'app/controller/UserController.php';
            $controller = new UserController();
            $controller->execute($action);
            break;
           
        case 'product':
            // appel du sous controleur de l'entite article
            //include 'app/controller/WineController.php';
            $controller = new ProductController();
            $controller->execute($action);
            break;
        case 'commande':
            // appel du sous controleur de l'entite panier
            //include 'app/controller/caddyController.php';
            $controller = new CommandeController();
            $controller->execute($action);
            break;
        default:
            //include 'app/controller/AppController.php';
            $controller = new AppController();
            $controller->execute('home');
            break;
    }
} catch(Exception $except) {
    //include 'app/controller/AppController.php';
    $controller = new AppController();
    $controller->execute('error');

}


?>
