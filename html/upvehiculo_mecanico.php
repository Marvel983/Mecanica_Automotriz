<?php
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

$modelo = '';
$tipo = '';
$placa = '';
$dominio = '';
$color = '';
$num_motor = '';
$clase = '';
$marca = '';
$fecha = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM vehículo WHERE id_vehículo=$id";

    $result = mysqli_query($connex, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $modelo = $row['modelo'];
        $tipo = $row['tipo'];
        $placa = $row['placa'];
        $dominio = $row['dominio'];
        $color = $row['color'];
        $num_motor = $row['num_motor'];
        $clase = $row['clase'];
        $marca = $row['marca'];
        $fecha = $row['fecha'];


    }
}

if (isset($_POST['update'])) {
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $placa = $_POST['placa'];
    $dominio = $_POST['dominio'];
    $color = $_POST['color'];
    $num_motor = $_POST['num_motor'];
    $clase = $_POST['clase'];
    $marca = $_POST['marca'];
    $fecha = $_POST['fecha'];



    $consulta = "UPDATE vehículo set modelo = '$modelo', tipo = '$tipo',placa = '$placa',
    dominio = '$dominio',color = '$color',num_motor = '$num_motor',clase = '$clase',marca = '$marca',fecha = '$fecha' WHERE id_vehículo=$id";
    mysqli_query($connex, $consulta);
    $_SESSION['message'] = 'Actualizado';
    $_SESSION['message_type'] = 'warning';
    header('Location: vehiculo_mecanico.php');
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../css/register_vehiculo.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="upvehiculo_mecanico.php?id=<?php echo $_GET['id_vehículo']; ?>" method="POST">
            <h3>Actualizar Vehiculo</h3>
            <h4>Mecanica Automotriz</h4>

            <fieldset>
                <label>Modelo del vehículo</label>
                <input name="modelo" type="text" required autofocus value="<?php echo $modelo; ?>"
                  >
            </fieldset>
            <fieldset>
                <label>Tipo de vehiculo</label>
                <input name="tipo" type="text" required autofocus value="<?php echo $tipo; ?>"
                    >
            </fieldset>
            <fieldset>
                <label>Placa del vehículo</label>
                <input name="placa" type="text" required autofocus value="<?php echo $placa; ?>"
               >
            </fieldset>
            <fieldset>
                <label>Dominio del vehículo</label>
                <input name="dominio" type="text" required autofocus value="<?php echo $dominio; ?>"
                    >
            </fieldset>
            <fieldset>
                <label>Color del vehículo</label>
                <input name="color" type="text" required autofocus value="<?php echo $color; ?>"
                    >
            </fieldset>
            <fieldset>
                <label>Número de motor</label>
                <input name="num_motor" type="text" required autofocus value="<?php echo $num_motor; ?>"
             >
            </fieldset>
            <fieldset>
                <label>Clase del vehiculo</label>
                <input name="clase" type="text" required autofocus value="<?php echo $clase; ?>"
                  >
            </fieldset>
            <fieldset>
                <label>Marca del vehículo</label>
                <input name="marca" type="text" required autofocus value="<?php echo $marca; ?>"
              >
            </fieldset>
            <fieldset>
                <label>Año del vehículo</label>
                <input name="fecha" type="date" required autofocus value="<?php echo $fecha; ?>"
          >
            </fieldset>
            <fieldset>
                <button type="button"><a href="../html/vehiculo_mecanico.php">Regresar</a></button>
            </fieldset>
            <fieldset>
                
                <button name="update" type="submit" id="contact-submit" data-submit="...Sending">Actualizar
                    vehículo</button>
            </fieldset>
        </form>
    </div>
</body>

</html>