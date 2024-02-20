<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../resources/css/admin_login.css"/>
</head>
<body>
    <header>
        <nav class="headerBar">
            <img class="logo" src="../../../resources/img/Logo.png" alt="logo de Codeteca"></a>
            <a class="backButton" href="../../../index.php">Volver</a>
        </nav>
    </header>

    <main>
        <div class="containerLogin">
            <div class="inputLogin">
                <form action="admin_login.php" method="POST">
                    <input type="text" name="username" placeholder="Nombre de usuaria" required>
                    <input type="password" name="password" placeholder="Contraseña">
                    <button type="submit" class="loginButton">Entrar</button>
                </form>
            </div>
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

<?php
use Config\db;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once '../../../config/Database.php'; 

    $db = new db();
    $connection = $db->connection();

    
    $username = $_POST['username'];

    $sql = "SELECT * FROM users WHERE Role = 'Admin' AND Name = '$username'";
    $result = $connection->query($sql);

    if ($result->rowCount() == 1) {
    
        $_SESSION['loggedin'] = true;
        header("Location: admin_index.php");
        exit;
    } else {
        echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
    }
}
?>