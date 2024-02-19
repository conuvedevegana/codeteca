<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../resources/css/book_info.css">
    <link rel="stylesheet" href="./.resources\css\styles.css">
    <link rel="stylesheet" href="resources\css\header.css">
    <link rel="stylesheet" href="resources\css\footer.css">
</head>

<body>

    <header>
        <nav class="headerBar">
            <a href="index.php"><img class="logo" src="../resources/img/logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="backButton"><a href="index.php">Volver</a></button>
            <button id="loginButton"><a href="pages\admin_login.php">Inicia sesión</a></button>
        </nav>
    </header>
    <main>
        <img id="img-book" src="../resources/img/cthulhu.jpg" alt="portada del libro buscado">
        <article id="description">
            <h2>La llamada de Cthulhu</h2>
            <p><strong>Autor: H.P. Lovecraft</strong></p>
            <p><strong>Género: Clásicos ilustrados</strong></p>
            <p><strong>ISBN: -978-8415618683</strong></p>
            <section>
                <p id="coment-book">H. P. Lovecraft ha pasado a la historia de la literatura como uno de los grandes innovadores del relato fantástico y de terror del siglo XX. <br>
                    Niño prodigio empezó a leer y escribir su primer cuento a muy temprana edad. <br>
                    Ya en la adolescencia era de solitaria vida nocturna y vivió atormentado. <br>
                    "Es un escritor de culto que con sus obras de auténtico terror produce adición entre sus lectores. <br>
                    Esta obra es una de las más emblemáticas que atrapa hasta el final y propició el nacimiento de los llamados Mitos de Cthulhu. <br>
                    «La emoción más antigua y más intensa de la humanidad es el miedo, y el más antiguo y más intenso de los miedos es el miedo a lo desconocido».</p>
            </section>
        </article>
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