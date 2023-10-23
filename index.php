<html>
    <head></head>
    <body>
        <h1>Vitajte v rezervacnom systeme MTF.</h1>
        <a href="register.php" type="button">Registracia</a>
        <a href="login.php" type="button">Prihlasenie</a>

        <?php
        echo $_SESSION['username'];
        ?>
    </body>
</html>