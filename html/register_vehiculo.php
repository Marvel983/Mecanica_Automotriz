<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vehiculo</title>
    <link rel="stylesheet" href="../css/register_vehiculo.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Registro Vehiculo</h3>
            <h4>Mecanica Automotriz</h4>
            <fieldset>
                <input placeholder="Modelo" name="modelo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Tipo de vehiculo" name="tipo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Placa" name="placa" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Dominio del vehiculo" name="dominio" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Color del vehiculo" name="color" type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Número de motor" name="motor" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Clase del vehiculo" name="clase" type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Marca del vehiculo" name="marca" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Año del vehiculo" name="fecha" type="text" required autofocus>
            </fieldset>  
            <fieldset>
                <button type="button"><a href="../html/index.php">Regresar</a></button>
            </fieldset>
            <fieldset>
                <button name="register_vehiculo" type="submit" id="contact-submit" data-submit="...Sending">Registrar</button>
            </fieldset>
        </form>
        <?php
        include("../php/register_vehiculo_db.php");
        ?>
    </div>
</body>

</html>