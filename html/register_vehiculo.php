<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vehículo</title>
    <link rel="stylesheet" href="../css/register_vehiculo.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Registro Vehículo</h3>
            <h4>Mecánica Automotriz</h4>
            <fieldset>
                <input placeholder="Modelo" name="modelo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Tipo de vehículo" name="tipo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Placa" name="placa" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Dominio del vehículo" name="dominio" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Color del vehículo" name="color" type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Número de motor" name="motor" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Clase del vehículo" name="clase" type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Marca del vehículo" name="marca" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Año del vehículo" name="fecha" type="date" required autofocus>
            </fieldset>  
            <fieldset>
                <button type="button"><a href="../html/index.php">Regresar</a></button>
            </fieldset>
            <fieldset>
                <button name="register_vehículo" type="submit" id="contact-submit" data-submit="...Sending">Registrar</button>
            </fieldset>
        </form>
        <?php
        include("../php/register_vehículo_db.php");
        ?>
    </div>
</body>

</html>