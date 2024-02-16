<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="resources\css\admin_edit.css">
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
        <section class="bookDetails">
            <h2 class="bookTitle"></h2>
            <h3 class="bookAuthor"></h3>
            <section class="bookDescription">
                <label>Descripcion: </label>
                <textarea name="Description">
                </textarea>
            </section>
        </section>
        <section class="editingButtons">
            <button id=saveButton>Guardar</button>
            <button id=cancelButton>Cancelar</button>
        </section>
        <section class="uploadCover">
            <label class="bookCover"> Portada del libro: </label>
            <input type="file" name="bookCover" accept="image/*">
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