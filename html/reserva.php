<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../css/reserva.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Reservación</h3>
            <h4>Mecanica Automotriz</h4>
            <fieldset>
                <label>Correo Electronico</label>
                <input name="nombre" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Razon</label>
                <textarea name="" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <label>Servicio</label>
                <input name="costo" type="text" required autofocus>
            </fieldset>
            <fieldset>
                <label>Fecha de reserva</label>
                <input name="fecha_reserva" type="date" required autofocus>
            </fieldset>
            <fieldset>
                <button type="button"><a href="../html/index.php">Regresar</a></button>
            </fieldset>
            <fieldset>
                <button name="register" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
            </fieldset>
        </form>
        <?php
        include("../php/reserva_db.php");
        ?>
    </div>
</body>

</html>