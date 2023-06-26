<?php

require_once('../php/conex.php');
require_once('../php/methods.php');

$obj = new métodosCrud();
$sql = "SELECT * FROM vehículo";
$datos = $obj->showDataVehi($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Vehículos</title>
    <link rel="stylesheet" href="../css/vehiculo.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="../html/index.php">Index</a></li>
                <li><a href="../html/vehiculo.php" class="active">Vehículos</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="div1">
            <h2>Vehículos</h2>
            <table>
                <thead>
                    <td>Modelo</td>
                    <td>Tipo</td>
                    <td>Placa</td>
                    <td>Dominio</td>
                    <td>Color</td>
                    <td>Numero de motor</td>
                    <td>clase</td>
                    <td>marca</td>
                    <td>fecha</td>
                    <td>Borrar</td>
                </thead>
                <?php
                if ($datos) {
                    foreach ($datos as $key) {
                ?>
                        <tr>
                            <td>
                                <?php echo $key['modelo']; ?>
                            </td>
                            <td>
                                <?php echo $key['tipo']; ?>
                            </td>
                            <td>
                                <?php echo $key['placa']; ?>
                            </td>
                            <td>
                                <?php echo $key['dominio']; ?>
                            </td>
                            <td>
                                <?php echo $key['color']; ?>
                            </td>
                            <td>
                                <?php echo $key['num_motor']; ?>
                            </td>
                            <td>
                                <?php echo $key['clase']; ?>
                            </td>
                            <td>
                                <?php echo $key['marca']; ?>
                            </td>
                            <td>
                                <?php echo $key['fecha']; ?>
                            </td>
                
                            <td>
                                <form method="POST">
                                    <button id="iButt" type="submit" name="iButt">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <input type="text" name="ide" id="idInput" value="<?php echo $key['id_vehículo']; ?>">
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
            <h2>Agregar Vehículo</h2>
            <div class="container">
                <form id="contact" action="" method="post">
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
                        <input name="fecha" type="number" required autofocus>
                    </fieldset>
                    <fieldset>
                        <button name="vehíForm" type="submit" id="contact-submit" data-submit="...Sending">Agregar
                            Vehículo</button>
                    </fieldset>
                </form>
               <?php
               $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
                if (isset($_POST['vehíForm'])) {
                    if (strlen($_POST['modelo']) >= 1 && strlen($_POST['tipo']) >= 1 && strlen($_POST['placa']) >= 1 && strlen($_POST['dominio']) >= 1 && strlen($_POST['color']) >= 1 && strlen($_POST['motor']) >= 1 && strlen($_POST['clase']) >= 1 && strlen($_POST['marca']) >= 1 && strlen($_POST['fecha']) >= 1) {
                        $modelo = trim($_POST['modelo']);
                        $tipo = trim($_POST['tipo']);
                        $placa = trim($_POST['placa']);
                        $dominio = trim($_POST['dominio']);
                        $color = trim($_POST['color']);
                        $motor = trim($_POST['motor']);
                        $clase = trim($_POST['clase']);
                        $marca = trim($_POST['marca']);
                        $fecha = trim($_POST['fecha']);
                
                        $consulta = "INSERT INTO vehículo(modelo,tipo,placa,dominio,color,num_motor,clase,marca,fecha) 
                            VALUES ('$modelo','$tipo','$placa','$dominio','$color','$motor','$clase','$marca','$fecha')";
                
                        $resultado = mysqli_query($connex, $consulta);
                        if ($resultado) {
                        ?>
                            <script>
                                alert("Lo registraste correctamente");
                                window.location.href = '../html/vehiculo.php';
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

               /*
                if (isset($_POST['vehíForm'])) {
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
                        $fecha,
                    );

                    $obj->insertDataVehi($arr);

                    echo "<script>
                            window.location.href = '../html/vehiculo.php';
                    </script>";
                } */?>

                <?php
                if (isset($_POST['iButt'])) {
                    $id = $_POST['ide'];

                    $obj->deleteDataVehi($id);
                }
                ?>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
</body>

</html>