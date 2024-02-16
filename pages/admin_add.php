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
        <img class="logo" alt="logo de Codeteca" href=""></img>
        <input id="searchBar" type="text" name="searchBar" placeholder="Escribe el título o autora"></input>
        <button id="addBookButton"><a href="#">Añadir libro</a></button>
        <button id="loginButton"><a href="#">Inicia sesión</a></button>
    </nav>
</header>

<body>
    <main class="main">
        <section class="Add-book">
            <h2>Agregar libro</h2>
            <p>Titulo</p>
            <input id="searchBar" type="text" name="título" placeholder="Escribe el título"></input>
            <p> Autor</p>
            <input id="searchBar" type="text" name="Autor" placeholder="Escribe el nombre del autor"></input>
            <section class="book-description">
                <p>Description</p>
                <p>Dentro de toda mujer alienta una vida secreta, una fuerza poderosa llena de buenos instintos,
                    creatividad y sabiduría. Es la Mujer Salvaje, una especie en peligro de extinción debido a los
                    contantes esfuerzos de la sociedad por "civilizar" a las mujeres y constreñirlas a rígidos papeles
                    que anulan su esencia instintiva.
                    En este libro, Clarissa Pinkola Estes revela ricos mitos interculturales, cuentos de hadas e
                    historias (muchas de ellas relativas a su propia familia) para contribuir a que las mujeres
                    recuperen su fuerza y su salud, atributos visionarios de esta esencia instintiva.
                    Mediante los relatos y los comentarios de la autora, examinamos el amor y comprendemos a la Mujer
                    Salvaje. Estes ha creado una psicología femenina en un sentido más verdadero, el que lleva al
                    conocimiento del alma.</p>
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