<?php
namespace Controller;

use Model\BookModel;

class BookController {
    public function getBooks() {
        $bookModel = new BookModel();
        return $bookModel->getBooks();
    }
}




























// namespace Controller;
// use Model\BookModel;

// class BookController{

//     private $model;

//     public function __construct()
//     {
//         $this->model = new BookModel;
//     }

//     // Aquí pediremos que nos muestre la información de la base de datos
//     // public function getBooks()
//     // {
//     //    return ($this->model->getBooks()) ? $this->model->getBooks() : "No hay libros"; 
//     // }

//     public function getBookById($id)
//     {
//         $bookModel = new BookModel();
//         return $bookModel->getBookById($id);
//     }
// }





