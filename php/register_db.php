<?php
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 &&
        strlen($_POST['genero']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['tarjeta']) >= 1 && strlen($_POST['dui']) >= 1 && strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['pass']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $genero = trim($_POST['genero']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $tarjeta = trim($_POST['tarjeta']);
        $dui = trim($_POST['dui']);
        $fecha = trim($_POST['fecha']);
        $pass = md5($_POST['pass']);

        $consulta = "INSERT INTO cliente(nombre,apellido,email,genero,direccion,telefono,tarjeta,dui,fecha_nac,pass,id_cargo)
            VALUES ('$nombre','$apellido','$email','$genero','$direccion','$telefono','$tarjeta','$dui','$fecha','$pass',2)";

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