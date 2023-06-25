<?php

require_once('../php/conex.php');
require_once('../php/methods.php');

$obj = new métodosCrud();
$sql = "SELECT * FROM mecánico";
$datos = $obj->showData($sql);

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
                <li><a href="../html/mec.php" class="active">Mecánicos</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="div1">
            <h2>Mecánicos</h2>
            <table>
                <thead>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Rol</td>
                    <td>DUI</td>
                    <td>Teléfono</td>
                    <td>Dirección</td>
                    <td>Nacido</td>
                    <td>Genero</td>
                    <td>Pago</td>
                    <td>Taller</td>
                    <td>Borrar</td>
                </thead>
                <?php
                if ($datos) {
                    foreach ($datos as $key) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $key['nombre']; ?>
                            </td>
                            <td>
                                <?php echo $key['apellido']; ?>
                            </td>
                            <td>
                                <?php echo $key['rol']; ?>
                            </td>
                            <td>
                                <?php echo $key['dui']; ?>
                            </td>
                            <td>
                                <?php echo $key['teléfono']; ?>
                            </td>
                            <td>
                                <?php echo $key['dirección']; ?>
                            </td>
                            <td>
                                <?php echo $key['fechaNacido']; ?>
                            </td>
                            <td>
                                <?php echo $key['genero']; ?>
                            </td>
                            <td>
                                <?php echo $key['remuneración']; ?>
                            </td>
                            <td>
                                <?php echo $key['id_taller']; ?>
                            </td>
                            <td>
                                <form method="POST">
                                <button id="iButt" type="submit" name="iButt">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <input type="text" name="ide" id="idInput" value="<?php echo $key['id_mecánico']; ?>">
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
            <h2>Agregar</h2>
            <div class="container">
                <form id="contact" action="" method="post">
                    <fieldset>
                        <input placeholder="Nombres" name="nombre" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Apellidos" name="apellido" type="text" required>
                    </fieldset>
                    <fieldset>
                        <select name="rol">
                            <option value="" selected disabled>Rol</option>
                            <option value="Pintor">Pintor</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Dui" name="dui" type="text" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Numero de teléfono" name="teléfono" type="tel" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Dirección" name="dirección" type="text" required>
                    </fieldset>
                    <fieldset>
                        <label for="date">Fecha de Nacido</label>
                        <input placeholder="Fecha de nacimiento" name="nacimiento" type="date" required id="date">
                    </fieldset>
                    <fieldset>
                        <select name="genero">
                            <option value="" selected disabled>Genero</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Pago" name="pago" type="text" required>
                    </fieldset>
                    <fieldset>
                        <select name="taller">
                            <option value="" selected disabled>Taller</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <button name="mecaForm" type="submit" id="contact-submit" data-submit="...Sending">Agregar
                            Mecánico</button>
                    </fieldset>
                </form>
                <?php
                if (isset($_POST['mecaForm'])) {
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $rol = trim($_POST['rol']);
                    $DUI = trim($_POST['dui']);
                    $tel = trim($_POST['teléfono']);
                    $Dir = trim($_POST['dirección']);
                    $fecha = trim($_POST['nacimiento']);
                    $genero = trim($_POST['genero']);
                    $pago = trim($_POST['pago']);
                    $taller = trim($_POST['taller']);

                    $arr = array(
                        $nombre,
                        $apellido,
                        $rol,
                        $DUI,
                        $tel,
                        $Dir,
                        $fecha,
                        $genero,
                        $pago,
                        $taller
                    );

                    $obj->insertData($arr);

                    echo "<script>
                            window.location.href = '../html/mec.php';
                    </script>";

                } ?>

                <?php
                if (isset($_POST['iButt'])) {
                    $id = $_POST['ide'];

                    $obj->deleteData($id);
                }
                ?>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
</body>

</html>