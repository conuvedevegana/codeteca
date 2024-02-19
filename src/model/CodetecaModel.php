<!-- es el encargado de conectarse a la base de datos -->
<?php

class bookModel
{

    private $PDO;
    
    public function __construct()
            {
                require_once("/config/Database.php");
                $con = new Database();
                $this->PDO = $con->getConnection(); 
            }
        
    
}