<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../resources/css/admin_search.css">

</head>

<body>
    <header>
        <nav class="headerBar">
            <a href="index.php"><img class="logo" src="../../../resources/img/Logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="addBookButton"><a href="pages\admin_add.php">Añadir libro</a></button>
            <button id="loginButton"><a href="pages\admin_login.php">Inicia sesión</a></button>
        </nav>
    </header>
    <main>
        <img src="" alt="portada del libro buscado">
        <section>
            <button id="editButton"><a href="./admin_edit.php">Editar</a></button>
            <button id="deleteButton">Borrar</button>
        </section>
        <article>
            <h2>Titulo libro<h2>
                    <p>Descripción</p>
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