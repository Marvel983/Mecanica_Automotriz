<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
    <form id="contact" action="" method="POST">
            <h3>Iniciar Sesión</h3>
            <h4>Mecanica Automotriz</h4>
            <fieldset>
                <input placeholder="Correo Electronico" name="correo" type="email">
            </fieldset>
            <fieldset>
                <input placeholder="Contraseña" name="contra" type="password">
            </fieldset>
            <fieldset>
                <button type="button"><a href="../html/index.php">Regresar</a></button>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit">Iniciar Sesión</button>
            </fieldset>
        </form>
        <?php
        include("../php/login_db.php");
        ?>
    </div>
</body>

</html>