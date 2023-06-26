<?php
session_start();

if (isset($_SESSION['user'])){
    header("Location: ../html/index.php");
}

if (isset($_SESSION['meca'])){
    header("Location: ../html/index_mecanico.php");
}

if (isset($_SESSION['admin'])){
    header("Location: ../html/admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
</head>

<body>
    <div class="container">
    <form id="contact" action="" method="POST">
            <h3>Iniciar Sesión</h3>
            <h4>Mecánica Automotriz</h4>
            <fieldset>
                <label>Correo Electrónico</label>
                <input name="correo" type="email">
            </fieldset>
            <fieldset>
                <label>Contraseña</label>
                <input name="contra" type="password">
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