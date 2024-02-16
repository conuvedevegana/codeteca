<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="resources\css\admin_index.css">
</head>

<body>
    <header>
        <nav class="headerBar">
            <a href="index.php"><img class="logo" src="resources\img\logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="addBookButton" href="pages\admin_add.php">Añadir libro</button>
            <button id="loginButton" href="pages\admin_login.php">Inicia sesión</button>
        </nav>
    </header>

    <main>
        <section class="booksPhotos">
            <ul class=booksTop>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\100_mujeres_que_cambiaron.jpg" alt="Portada de 100 Mujeres que cambiaron el mundo"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="./resources/img/asesinato_en_el_orient.jpg" alt="Portada de Asesinato en el Orient Express"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\cuando_dios_era_mujer.jpg" alt="Portada de Cuando Dios era mujer"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\vozdevieja.jpg" alt="Portada de Vozdevieja"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\respondona.jpg" alt="Portada de Respondona"></li>
            </ul>
            <ul class=booksMiddle>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\mujeres_raza_clase.jpg" alt="Portada de Mujeres raza clase"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\ghostgirl.jpg" alt="Portada de Ghostgirl"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\mirada_inquieta.jpg" alt="Portada de La mirada inquieta: cómo disfrutar del arte con tus propios ojos"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\tecnologia_ciencia.jpg" alt="Portada de Tecnologia,Ciencia y Naturaleza"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\todo_sobre_el_amor.jpg" alt="Portada de Todo sobre el amor"></li>
            </ul>
            <ul class=booksBottom>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\listas_guapas_limpias.jpg" alt="Portada de  Listas, guapas, limpias"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\el_color_purpura.jpg" alt="Portada de El color púrpura"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\cthulhu.jpg" alt="Portada de La llamada de Cthulhu"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\mujeres_que_corren.jpg" alt="Portada de Mujeres que corren con los lobos"></li>
                <li class="bookPhoto"><a href="pages\admin_search.php"><img src="resources\img\recetas_de_oro.jpg" alt="Portada de 1000 recetas de oro"></li>
            </ul>
        </section>
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