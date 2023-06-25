<?php
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 &&
        strlen($_POST['genero']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['tarjeta']) >= 1 && strlen($_POST['dui']) >= 1 && strlen($_POST['nacimiento']) >= 1 &&
        md5($_POST['contra']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $genero = trim($_POST['genero']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $tarjeta = trim($_POST['tarjeta']);
        $dui = trim($_POST['dui']);
        $nacimiento = trim($_POST['nacimiento']);
        $contra = md5($_POST['contra']);
        // vehiculo en lugar de id_cargo en tabla
        $consulta = "INSERT INTO cliente (nombre, apellido, correo, genero, direccion, telefono, tarjeta, dui, fecha_nac, contra)
            VALUES ('$nombre','$apellido','$correo','$genero','$direccion','$telefono','$tarjeta','$dui','$nacimiento','$contra')";

        $resultado = mysqli_query($connex, $consulta);

        if ($resultado) {
?>
            <script>
                alert("Te registraste correctamente");
                window.location.href = '../html/login.php';
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

<!--
     ?>
        <script>
            alert("todo piola");
        </script>
        ?>
-->