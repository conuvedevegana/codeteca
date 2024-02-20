<?php
namespace Model;
use PDO;
use Config\Database;
require_once __DIR__ . "/../../config/Database.php";


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

        public function getBookById($id)
        {
            $stmt = $this->PDO->prepare("SELECT * FROM books WHERE id = :id");
            $stmt->bindParam(':id', $id);
            return ($stmt->execute()) ? $stmt->fetch(PDO::FETCH_ASSOC) : false;
        }

}