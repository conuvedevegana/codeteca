<?php
namespace Config;

//aqui en este archivo haremos la conexion con la base de datos

use PDO;
use PDOException;

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "biblioteca_codeteca";

    public function connection(){
        {
        try {
            $PDO = new PDO("mysql:host={$this->host}; dbname={$this->dbName}; user={$this->user}; password={$this->password}");
            return $PDO;
        } catch (PDOException $e) {
            echo 'Error al conectar a la base de datos: ' . $e->getMessage();
        }
    }
    } 
}
