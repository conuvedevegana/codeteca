<?php
namespace Model;
use Config\Database;

// es el encargado de conectarse a la base de datos 
class BookModel
{

    private $PDO;
    
    public function __construct()
            {
                // require_once("/config/Database.php");
                $connection = new Database;
                $this->PDO = $connection->connection(); 
            }
        
        public function getBooks()
        {
                $books = $this->PDO->prepare("SELECT * FROM books ORDER BY id DESC");
                return ($books->execute()) ? $books->fetchAll(PDO::FETCH_ASSOC) : false;
        }
}