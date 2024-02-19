<?php
namespace Controller;
use Model\BookModel;

class BookController{

    private $model;

    public function __construct()
    {
        $this->model = new BookModel;
    }

    //aqui pediremos que nos muestre la info de la base de datos
    public function getBooks()
    {
       return ($this->model->getBooks()) ? $this->model->getBooks() : "No hay books"; 
        
    }






}