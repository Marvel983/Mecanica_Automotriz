<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo Cliente</title>
    <link rel="stylesheet" href="../css/register_vehiculo.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Registro del vehículo</h3>
            <h4>Mecanica Automotriz</h4>
            <fieldset>
                <label>Modelo del vehículo</label>
                <input name="modelo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Tipo de vehiculo</label>
                <input name="tipo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Placa del vehículo</label>
                <input name="placa" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Dominio del vehículo</label>
                <input name="dominio" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Color del vehículo</label>
                <input name="color" type="text" required>
            </fieldset>
            <fieldset>
                <label>Número de motor</label>
                <input name="motor" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Clase del vehiculo</label>
                <input name="clase" type="text" required>
            </fieldset>
            <fieldset>
                <label>Marca del vehículo</label>
                <input name="marca" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Año del vehículo</label>
                <input name="fecha" type="date" required autofocus>
            </fieldset>
            <fieldset>
                <button type="button"><a href="../html/vehiculo_mecanico.php">Regresar</a></button>
            </fieldset>
            <fieldset>
                <button name="register_vehiculo" type="submit" id="contact-submit" data-submit="...Sending">Registrar
                    vehículo</button>
            </fieldset>
        </form>
        <?php
        include("../php/newvehiculo_mecanico.php");
        ?>
    </div>
    </div>
</body>

</html>