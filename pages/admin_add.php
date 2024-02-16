<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<header>
    <nav class="headerBar">
        <img class="logo" alt="logo de Codeteca" href="index.php"></img>
        <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
        <button id="addBookButton" href="pages\admin_add.php">Añadir libro</button>
        <button id="loginButton" href="pages\admin_login.php">Inicia sesión</button>
    </nav>
</header>

<body>
    <main class="main">
        <section class="Add-book">
            <h2>Agregar libro</h2>
            <label>Titulo</label>
            <input id="searchBar" type="text" name="título" placeholder="Escribe el título"></input>
            <label>Autor</label>
            <input id="searchBar" type="text" name="Autor" placeholder="Escribe el nombre del autor"></input>
            <label>ISBN</label>
            <input id="searchBar" type="text" name="ISBN" placeholder="ISBN"></input>
            <section class="book-description">
                <label>Descripcion: </label>
                <textarea name="Description">
              </textarea>
            </section>
            <section class="book-cover">
                <input id="Imagen" type="file" name="book-cover" alt="Imagen"></input>
            </section>
            <section class="actions">
                <button>Salvar</button>
                <button>Cancelar</button>
                <button>Publicar</button>
            </section>
    </main>
</body>
<footer>
    <p>Todos los derechos reservados</p>
    <section class="socialMedia">
        <ul>
            <li><a href="https://www.facebook.com" class="fa-brands fa-facebook"><i aria-label="Enlace a facebook"></i></a></li>
            <li><a href="https://www.instagram.com" class="fa-brands fa-instagram"><i aria-label="Enlace a instagram"></i></a></li>
            <li><a href="https://www.twitter.com" class="fa-brands fa-twitter"><i aria-label="Enlace a X"></i></a></li>
            <ul>
    </section>
</footer>

</html>