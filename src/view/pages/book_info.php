<?php
// Incluir el controlador y el modelo necesarios
require_once "../../controller/BookController.php";

// Verificar si se proporcionó un ID de libro en la URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $bookController = new Controller\BookController();
    $book = $bookController->getBookById($_GET['id']);
    if($book) {
        // Aquí muestras la información del libro en tu página
        echo "<h2>{$book['title']}</h2>";
        echo "<p>Autor: {$book['author']}</p>";
        // Continúa mostrando la información que necesites
    } else {
        echo "Libro no encontrado";
    }
} else {
    echo "ID de libro no especificado en la URL";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../resources/css/book_info.css" />

</head>

<body>

    <header>
        <nav class="headerBar">
            <a href="index.php"><img class="logo" src="../../../resources/img/Logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="backButton"><a href="index.php">Volver</a></button>
            <button id="loginButton"><a href="pages\admin_login.php">Inicia sesión</a></button>
        </nav>
    </header>
    <main>
        <img id="img-book" src="" alt="portada del libro buscado">
        <aside id="description">
            <h2 id="titleBookInfo">TITULO</h2>
            <p id="authorBookInfo"><strong>TAMY</strong></p>
            <p id="genreBookInfo"><strong>CAROLINA</strong></p>
            <p id="isbnBookInfo"><strong>GABY</strong></p>
            <section>
                <p id="descriptionBookInfo">HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH</p>
            </section>
        </aside>
    </main>
    <footer>
        <p>Todos los derechos reservados</p>
        <section class="socialMedia">
            <ul>
                <li><a href="https://www.facebook.com" class="fa-brands fa-facebook"><i aria-label="Enlace a facebook"></i></a></li>
                <li><a href="https://www.instagram.com" class="fa-brands fa-instagram"><i aria-label="Enlace a instagram"></i></a></li>
                <li><a href="https://www.twitter.com" class="fa-brands fa-twitter"><i aria-label="Enlace a X"></i></a></li>
            </ul>
        </section>
    </footer>
</body>

</html>