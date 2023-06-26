<?php
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="../css/vehiculo_mecanico.css">
</head>

<body>
    <div class="contenedor">
        <h1>Vehiculo</h1>

        <header class="header">
            <div class="container">
                <nav class="menu">
                    <a href="AdminIn.php" class="btn btn__nuevo">Regresar</a>
                </nav>
            </div>

        </header>
        <div class="section">
            <form action="" class="nuevo" method="post">
                <a href="newvehiculo_mecanico.php" class="btn btn__nuevo">Nuevo</a>
            </form>
            <table class="tabla">
                <tr class="head">
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
                </tr>

                <?php
                $consulta = "SELECT * FROM vehículo";
                $resultado = mysqli_query($connex, $consulta);

                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        
                            <td>
                                <?php echo $row['id_vehículo']; ?>
                            </td>
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
                       
                        <td></td>
                        <td></td>

                        <td>
                            <div class="eliminar">
                                <a href="../html/devehiculo_mecanico.php?id_vehículo=<?php echo $row['id_vehículo'] ?>">
                                    Eliminar
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="actualizar">
                                <a href="../html/upvehiculo_mecanico.php?id_vehículo=<?php echo $row['id_vehículo'] ?>" class="btn btn-secondary">
                                    Actualizar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    </div>
</body>

</html>