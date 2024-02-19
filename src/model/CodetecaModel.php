<?php
namespace Model;
use Config\Database;

// es el encargado de conectarse a la base de datos 
class bookModel
{

    private $PDO;
    
    public function __construct()
            {
                // require_once("/config/Database.php");
                $connection = new Database();
                $this->PDO = $connection->connection(); 
            }
        
    
}