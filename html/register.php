<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Registro</h3>
            <h4>Mecanica Automotriz</h4>
            <fieldset>
                <input placeholder="Nombres" name="nombre" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Apellidos" name="apellido" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Correo" name="correo" type="email" required>
            </fieldset>
            <fieldset>
                <input placeholder="Genero" name="genero" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Direccion" name="direccion" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Numero de telefono" name="telefono" type="tel" required>
            </fieldset>
            <fieldset>
                <input placeholder="Tarjeta de circulacion" name="tarjeta" type="number" required autofocus>
            </fieldset>

            <fieldset>
                <input placeholder="Dui" name="dui" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Fecha de nacimiento" name="nacimiento" type="date" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Password" type="password" name="contra"  tabindex="1" required autofocus>
            </fieldset>                                                                                                                                                                 
            <fieldset>
                <button name="register" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
        <?php
        include("../php/register_db.php");
        ?>
    </div>
</body>

</html>