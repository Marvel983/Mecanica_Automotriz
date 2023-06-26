<?php

require_once('../php/conex.php');
require_once('../php/methods.php');

$obj = new métodosCrud();
$sql = "SELECT * FROM vehículo";
$datos = $obj->showDataMecvehi($sql);

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
                <li><a href="../html/index_mecanico.php">Index</a></li>
                <li><a href="../html/mecvehiculo.php" class="active">Mecánicos</a></li>
                <li><a href="../php/logOut.php"><i class="fa-solid fa-right-from-bracket"> Salir</i></a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="div1">
            <h2>Mecánicos</h2>
            <table>
                <thead>
                <td>Id</td>
                    <td>modelo</td>
                    <td>tipo</td>
                    <td>placa</td>
                    <td>dominio</td>
                    <td>color</td>
                    <td>motor</td>
                    <td>clase</td>
                    <td>marca</td>
                    <td>fecha</td>
                </thead>
                <?php
                if ($datos) {
                    foreach ($datos as $key) {
                ?>
                        <tr>
                        <td>
                                <?php echo $row['modelo']; ?>
                            </td>
                            <td>
                                <?php echo $row['tipo']; ?>
                            </td>
                            <td>
                                <?php echo $row['placa']; ?>
                            </td>
                            <td>
                                <?php echo $row['dominio']; ?>
                            </td>
                            <td>
                                <?php echo $row['color']; ?>
                            </td>
                            <td>
                                <?php echo $row['num_motor']; ?>
                            </td>
                            <td>
                                <?php echo $row['clase']; ?>
                            </td>
                            <td>
                                <?php echo $row['marca']; ?>
                            </td>
                            <td>
                                <?php echo $row['fecha']; ?>
                            </td>
                            <td>
                                <a id="iButt" name="iButt" onclick="del(<?php echo $key['id_vehículo']; ?>)">
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
            <h2>Agregar</h2>
            <div class="container">
                <form id="contact" action="" method="post">
                    <fieldset>
                        <input placeholder="modelo" name="modelo" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="tipo" name="tipo" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="placa" name="placa" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="dominio" name="dominio" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="color" name="color" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="motor" name="motor" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="clase" name="clase" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="marca" name="marca" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="fecha" name="fecha" type="text" required>
                    </fieldset>
                  
                    <fieldset>
                        <button name="mecvehiculo" type="submit" id="contact-submit" data-submit="...Sending">Agregar
                            Mecánico</button>
                    </fieldset>
                </form>
                <?php
                if (isset($_POST['mecvehiculo'])) {
                    $modelo = trim($_POST['modelo']);
                    $tipo = trim($_POST['tipo']);
                    $placa = trim($_POST['placa']);
                    $dominio = trim($_POST['dominio']);
                    $color = trim($_POST['color']);
                    $motor = trim($_POST['motor']);
                    $clase = trim($_POST['clase']);
                    $marca = trim($_POST['marca']);
                    $fecha = trim($_POST['fecha']);

                    $arr = array(
                        $modelo,
                        $tipo,
                        $placa,
                        $dominio,
                        $color,
                        $motor,
                        $clase,
                        $marca,
                        $fecha
                    );

                    $obj->insertDataMecvehi($arr);

                    echo "<script>
                            window.location.href = '../html/mecvehiculo.php';
                    </script>";

                } ?>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
        <script src="../js/j_query.js"></script>
        <script src="../js/alertify.js"></script>
        <script>
            function deleteDataMecvehi(id) {
                alertify.confirm("¿Desea eliminar el mecánico?",
                    function () {
                        window.location = "../php/delmecvehiculo.php?id=" + id;
                        alertify.success('Mecánico eliminado');
                    },
                    function () {
                        alertify.error('Cancelado');
                    });
            }
        </script>
</body>

</html>