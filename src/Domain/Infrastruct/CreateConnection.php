<?php
namespace Roberto\Aluraplay\Domain\Infrastruc;
require_once 'vendor/autoload.php';

use PDO;
use PDOException;

class CreateConncetion
{
    public static function createConection(): PDO
    {
        try{
            define('HOST', 'localhost');
            define('USER', 'root');
            define('PASS', '');
            define('DB', 'aulaplay');
            $conn = new PDO('mysql:host=' .HOST. ';dbname=' .DB, USER, PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "é sucesso!";
            return $conn;
        }catch(PDOException $e){
            echo 'ERROR' .$e->getMessage();
        }
    
    }
}