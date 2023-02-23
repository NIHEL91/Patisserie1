<?php
namespace Patisserie\App\dao;

use PDO;
use PDOException;
use Exception;
use Patisserie\App\entities\Product;
use Patisserie\App\entities\User;

class Dao {
    private ?PDO $dbconnect;
    public function __construct()
    {
         try{
            $this->dbconnect = new PDO('mysql:host=localhost;dbname=gateaux;charset=UTF8', 'root', '');
        } catch(PDOException $pdoExcept){
            //var_dump($pdoExcept->getMessage()); die();
            throw new Exception('Application non disponible actuellement');
        }
    }
}