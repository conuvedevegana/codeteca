<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../resources/css/admin_edit.css">

</head>

<body>
    <header>
        <nav class="headerBar">
            <a href="../../../index.php"><img class="logo" src="../../../resources/img/Logo.png" alt="logo de Codeteca"></a>
            <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
            <button id="loginButton" href="pages\admin_login.php">Salir</button>
        </nav>
    </header>

    <main>
        <aside>
            <div class="bookCoverEdit">
                <section class="uploadCoverEdit">
                    <label class="bookCoverEdit"> Portada del libro: </label>
                    <input type="file" name="bookCoverEdit" accept="image/*">
                </section>
                <section class="CoverButtons">
                    <button id=uploadCoverButton>Añadir foto</button>
                </section>
            </div>
        </aside>

        <div class="addDash">
            <section class="addBook">
                <h2>Editar libro</h2>
                <label>Titulo</label>
                <input id="searchBar" type="text" name="título" placeholder="Escribe el título"></input>
                <label>Autora</label>
                <input id="searchBar" type="text" name="Autora" placeholder="Escribe el nombre de la autora"></input>
                <label>Genero</label>
                <input id="searchBar" type="text" name="Genero" placeholder="Genero"></input>
                <label>ISBN</label>
                <input id="searchBar" type="text" name="ISBN" placeholder="ISBN"></input>
                <section class="bookDescriptionEdit">
                    <label>Descripcion: </label>
                    <textarea name="Description"></textarea>
                </section>
                <section class="editingButtons">
                    <button href="./admin_search.php" id=editButton>Guardar</button>
                    <button href="./admin_index.php" id=deleteButton>Cancelar</button>
                </section>
            </section>
        </div>
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