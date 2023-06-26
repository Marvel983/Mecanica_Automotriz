<?php

require_once('../php/conex.php');
require_once('../php/methods.php');

$obj = new métodosCrud();
$sql = "SELECT * FROM reporte";
$datos = $obj->showData($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Reportes</title>
    <link rel="stylesheet" href="../css/mec.css">
    <link rel="stylesheet" href="../css/alertify.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="../html/admin.php">Index</a></li>
                <li><a href="../html/reporte.php" class="active">Reporte</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="div1">
            <h2>Realice un reporte</h2>
            <table>
                <thead>
                    <td>ID Vehículo</td>
                    <td>Descripción</td>
                    <td>Fecha</td>
                    <td>Borrar</td>
                </thead>
                <?php
                if ($datos) {
                    foreach ($datos as $key) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $key['id_reporte']; ?>
                            </td>
                            <td>
                                <?php echo $key['descripción']; ?>
                            </td>
                            <td>
                                <?php echo $key['fecha']; ?>
                            </td>
                            <td>
                                <a id="iButt" name="iButt" onclick="del(<?php echo $key['id_reporte']; ?>)">
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
        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
        <script src="../js/j_query.js"></script>
        <script src="../js/alertify.js"></script>
        <script>
            function del(id) {
                alertify.confirm("¿Desea eliminar el reporte?",
                    function () {
                        window.location = "../php/delreport.php?id=" + id;
                    },
                    function () {
                        alertify.error('Cancelado');
                    });
            }
        </script>
</body>

</html>