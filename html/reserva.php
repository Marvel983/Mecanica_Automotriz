<?php
session_start();
require_once('../php/conex.php');
require_once('../php/methods.php');


$id = $_SESSION['user'][0];

$obj = new métodosCrud();
$sql = "SELECT * FROM reserva where id_cliente = '$id'";
$datos = $obj->showDataRes($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Mecánicos</title>
    <link rel="stylesheet" href="../css/mec.css">
    <link rel="stylesheet" href="../css/alertify.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
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
                                <a id="iButt" name="iButt" onclick="del(<?php echo $key['id_reserva']; ?>)">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
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
                        <button name="Reservar" type="submit" id="contact-submit" data-submit="...Sending">Crear
                            Reserva</button>
                    </fieldset>
                </form>

                <?php

                $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

                if (isset($_POST['Reservar'])) {
                    if (strlen($_POST['razón']) >= 1 && strlen($_POST['Costo']) >= 1 && strlen($_POST['fecha_res']) >= 1) {
                        $razón = trim($_POST['razón']);
                        $Costo = trim($_POST['Costo']);
                        $fecha_res = trim($_POST['fecha_res']);


                        $consulta = "INSERT INTO reserva (razón,Costo,fecha_res,id_cliente) 
            VALUES ('$razón','$Costo','$fecha_res', '$id')";

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

                ?>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
        <script src="../js/j_query.js"></script>
        <script src="../js/alertify.js"></script>
        <script>
            function del(id) {
                alertify.confirm("¿Desea eliminar al reserva?",
                    function () {
                        window.location = "../php/reserva_db.php?id=" + id;
                        alertify.success('Mecánico eliminado');
                    },
                    function () {
                        alertify.error('Cancelado');
                    });
            }
        </script>
</body>

</html>