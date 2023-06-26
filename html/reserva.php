<?php

require_once('../php/conex.php');
require_once('../php/methods.php');

$obj = new métodosCrud();
$sql = "SELECT * FROM reserva";
$datos = $obj->showDataRes($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Mecánicos</title>
    <link rel="stylesheet" href="../css/mec.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="../html/admin.php">Index</a></li>
                <li><a href="../html/reserva.php" class="active">Reserva</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="div1">
            <h2>Realice su reserva</h2>
            <table>
                <thead>
                    <td>Razón</td>
                    <td>Costo</td>
                    <td>Fecha de reserva</td>
                    <td>Borrar</td>
                </thead>
                <?php
                if ($datos) {
                    foreach ($datos as $key) {
                        ?>
                        <tr>

                            <td>
                                <?php echo $key['razón']; ?>
                            </td>
                            <td>
                                <?php echo $key['Costo']; ?>
                            </td>
                            <td>
                                <?php echo $key['fecha_res']; ?>
                            </td> 
                            <td>

                            <td>
                                <form method="POST">
                                <button id="iButt" type="submit" name="iButt">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <input type="text" name="ide" id="idInput" value="<?php echo $key['id_reserva']; ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<h4>No se encontraron datos en la Base de datos</h4>";
                }
                ?>
            </table>
        </div>
        <div id="div2">
            <h2>Reservar</h2>
            <div class="container">
                <form id="contact" action="" method="post">

                    <fieldset>
                        <input placeholder="Razón" name="razón" type="text" required>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Costo" name="Costo" type="text" required>
                    </fieldset>

                    <fieldset>
                        <label for="date">Fecha de reserva</label>
                        <input name="fecha_res" type="date" required id="date">
                    </fieldset>

                    <fieldset>


                    

                    <fieldset>
                        <button name="Reservar" type="submit" id="contact-submit" data-submit="...Sending">Crear Reserva</button>
                    </fieldset>
                </form>

                <?php

$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

if (isset($_POST['Reservar'])) {
    if (strlen($_POST['razón']) >= 1 && strlen($_POST['Costo']) >= 1 && strlen($_POST['fecha_res']) >= 1) {
        $razón = trim($_POST['razón']);
        $Costo = trim($_POST['Costo']);
        $fecha_res = trim($_POST['fecha_res']);


        $consulta = "INSERT INTO reserva (razón,Costo,fecha_res) 
            VALUES ('$razón','$Costo','$fecha_res')";

        $resultado = mysqli_query($connex, $consulta);
        if ($resultado) {
        ?>
            <script>
                alert("Lo registraste correctamente");
                window.location.href = '../html/reserva.php';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Ocurrio un error");
            </script>
        <?php
        }
    }
}

               /* if (isset($_POST['Reservar'])) {
                    $razón = trim($_POST['razon']);
                    $Costo = trim($_POST['Costo']);
                    $fecha_res = trim($_POST['fecha']);




                    $arr = array(
                        $razon,
                        $Costo,
                        $fecha,

                    );

                    $obj->insertDataRes($arr);

                    echo "<script>
                            window.location.href = '../html/reserva.php';
                    </script>";

                }*/ ?>

                <?php
                if (isset($_POST['iButt'])) {
                    $id = $_POST['ide'];

                    $obj->deleteDataRes($id);
                }
                ?>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../css/reserva.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
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



    </div>
</body>

</html> -->

 <?php
        include("../php/reserva_db.php");
         ?> 