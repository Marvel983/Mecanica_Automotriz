<?php
require_once("../php/methods.php");
require_once("../php/conex.php");
$id = $_GET['id'];
$obj = new métodosCrud();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Realizar Reporte</h3>
            <fieldset>
                <input placeholder="Descripción" name="descripción" type="text" required>
            </fieldset>

            <fieldset>
                <label for="date">Fecha</label>
                <input name="fecha" type="date" required id="date">
            </fieldset>
            <fieldset>
                <button name="Reporte" type="submit" id="contact-submit" data-submit="...Sending">Crear
                    Reporte</button>
            </fieldset>
        </form>
        <?php
        if (isset($_POST['Reporte'])) {
            $desc = trim($_POST['descripción']);
            $fecha = trim($_POST['fecha']);

            $arr = array(
                $desc,
                $fecha,
                $id
            );
            $obj->createReport($arr);

            echo "<script>
                window.location.href = '../html/reporte.php';
            </script>";
        }



        ?>
    </div>
</body>

</html>