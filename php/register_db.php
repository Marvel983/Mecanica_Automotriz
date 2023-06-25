<?php
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 &&
        strlen($_POST['genero']) >= 1 && strlen($_POST['dirección']) >= 1 && strlen($_POST['teléfono']) >= 1 &&
        strlen($_POST['tarjeta']) >= 1 && strlen($_POST['dui']) >= 1 && strlen($_POST['nacimiento']) >= 1 &&
        md5($_POST['contra']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $genero = trim($_POST['genero']);
        $dirección = trim($_POST['dirección']);
        $teléfono = trim($_POST['teléfono']);
        $tarjeta = trim($_POST['tarjeta']);
        $dui = trim($_POST['dui']);
        $nacimiento = trim($_POST['nacimiento']);
        $contra = md5($_POST['contra']);

        $consulta = "INSERT INTO cliente(nombre,apellido,correo,genero,dirección,teléfono,tarjeta,dui,fecha_nac,contra,id_cargo)
            VALUES ('$nombre','$apellido','$correo','$genero','$dirección','$teléfono','$tarjeta','$dui','$nacimiento','$contra',2)";

        $resultado = mysqli_query($connex,$consulta);
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
                alert("Ocurrió un error");
            </script>
<?php
        }
    }
}
?>
