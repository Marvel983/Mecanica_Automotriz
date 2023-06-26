<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Registro</h3>
            <h4>Mecanica Automotriz</h4>
            <fieldset>
                <label>Nombres</label>
                <input name="nombre" type="text" required>
            </fieldset>
            <fieldset>
                <label>Apellidos</label>
                <input name="apellido" type="text" required>
            </fieldset>
            <fieldset>
                <label>Correo Electronico</label>
                <input name="correo" type="email" required>
            </fieldset>
            <fieldset>
                <label>Genero</label>
                <input name="genero" type="text" required>
            </fieldset>
            <fieldset>
                <label>Dirección</label>
                <input name="direccion" type="text" required>
            </fieldset>
            <fieldset>
                <label>Número de teléfono</label>
                <input name="telefono" type="tel" required>
            </fieldset>
            <fieldset>
                <label>Tarjeta de circulación</label>
                <input name="tarjeta" type="text" required>
            </fieldset>
            <fieldset>
                <label>Dui</label>
                <input name="dui" type="text" required>
            </fieldset>
            <fieldset>
                <label>Fecha de nacimiento</label>
                <input name="nacimiento" type="date" required>
            </fieldset>
            <fieldset>
                <label>Contraseña</label>
                <input type="password" name="contra" required>
            </fieldset>
            <fieldset>
                <button value="register" name="register" type="submit" id="contact-submit" data-submit="...Sending">Registrarse</button>
            </fieldset>
        </form>
        <?php
        include("../php/register_db.php");
        ?>
    </div>
</body>

</html>