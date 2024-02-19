<?php

class bookModel
{

    private $PDO;
    
    public function __construct()
            {
                require_once("C:\xampp\htdocs\php\Proyectos\Biblioteca\codeteca\config\Database.php");
                $con = new db();
                $this->PDO = $con->getConnection(); 
            }
        
    public function insertar($book)
            {
                // $stainent = $this->PDO->prepare("INSERT INTO books(name, createdAt) VALUES(:n, NOW);");
            }
}