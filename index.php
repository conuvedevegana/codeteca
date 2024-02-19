<?php

    use Controller\BookController;

    require_once __DIR__ . '/vendor/autoload.php';
    
    $controller = new BookController;
    print_r($controller->getBooks());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./resources/css/index.css"/>

</head>

<body>
    <header>
        <nav class="headerBar">
            <a href="index.php"><img class="logo" src="resources\img\logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="loginButton"><a href="./src/view/pages/admin_login.php">Inicia sesión</a></button>
        </nav>
    </header>

    <main>
        <img class="banner" alt="lomos de libros de diferentes colores en una estantería" src="resources\img\banner.jpg">
        <section class="booksPhotos">
            <ul class=booksTop>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\100_mujeres_que_cambiaron.jpg" alt="Portada de 100 Mujeres que cambiaron el mundo"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="./resources/img/asesinato_en_el_orient.jpg" alt="Portada de Asesinato en el Orient Express"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\cuando_dios_era_mujer.jpg" alt="Portada de Cuando Dios era mujer"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\vozdevieja.jpg" alt="Portada de Vozdevieja"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\respondona.jpg" alt="Portada de Respondona"></a></li>
            </ul>
            <ul class=booksBottom>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\mujeres_raza_clase.jpg" alt="Portada de Mujeres raza clase"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\ghostgirl.jpg" alt="Portada de Ghostgirl"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\mirada_inquieta.jpg" alt="Portada de La mirada inquieta: cómo disfrutar del arte con tus propios ojos"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\tecnologia_ciencia.jpg" alt="Portada de Tecnologia,Ciencia y Naturaleza"></a></li>
                <li class="bookPhoto"><a href="./src/view/pages/book_info.php"><img src="resources\img\todo_sobre_el_amor.jpg" alt="Portada de Todo sobre el amor"></a></li>
            </ul>
        </section>
    </main>
    <footer>
        <p>Todos los derechos reservados.</p>
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