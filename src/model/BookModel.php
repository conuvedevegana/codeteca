<?php
namespace Model;

use PDO;


class BookModel {
    private $db;   //propiedad privada $db que es una instancia de la clase PDO

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=biblioteca_codeteca', 'root', '');
    }

    public function getBooks() {
        $query = $this->db->query("SELECT * FROM books");
        return $query->fetchAll(PDO::FETCH_ASSOC);  //devuelve result como un array asociativo
    }
}





















// namespace Model;
// use PDO;
// // use Config\Database;
// // require_once __DIR__ . "/../../config/Database.php";


// // es el encargado de conectarse a la base de datos 
// class BookModel
// {

//     private $PDO;
    
//     public function __construct()
//             {
//                 // require_once("/config/Database.php");
//                 // $connection = new Database;
//                 // $this->PDO = $connection->connection(); 
//                 $this->db = new PDO('mysql:host=localhost;dbname=biblioteca_codeteca', 'root', '');
//             }
        
//         // public function getBooks()
//         // {
//         //         $books = $this->PDO->prepare("SELECT * FROM books ORDER BY id DESC");
//         //         return ($books->execute()) ? $books->fetchAll(PDO::FETCH_ASSOC) : false;
//         // }

//         public function getBookById($id) {
//             $query = $this->db->prepare("SELECT * FROM books WHERE id = :id");
//             $query->bindParam(':id', $id);
//             $query->execute();
//             return $query->fetch(PDO::FETCH_ASSOC);
//         }

// }

