<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="resources\css\book_search.css">
    <link rel="stylesheet" href="resources\css\styles.css">
    <link rel="stylesheet" href="resources\css\header.css">
    <link rel="stylesheet" href="resources\css\footer.css">
</head>

<body>

    <header>
        <nav class="headerBar">
            <a href="index.php"><img class="logo" src="resources\img\logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="backButton"><a href="index.php">Volver</a></button>
            <button id="loginButton"><a href="pages\admin_login.php">Inicia sesión</a></button>
        </nav>
    </header>
    <main>
        <!-- aquí aparecerá el/los libro/s buscados en la navbar -->
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