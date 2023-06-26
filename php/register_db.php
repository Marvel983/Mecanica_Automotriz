<?php
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
$correo = trim($_POST['correo']);

if (buscarRepetido($correo) == 1) {
    echo "<script> alert('El Correo ingresado ya existe, por favor ingresa otro...');
    window.location.href='../html/register.php';
    </script>";
}else{
    if (isset($_POST['register'])) {
        if (
            strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 &&
            strlen($_POST['genero']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['tarjeta']) >= 1 && strlen($_POST['dui']) >= 1 && strlen($_POST['nacimiento']) >= 1 &&
            strlen($_POST['contra']) >= 1
        ) {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            // $correo = trim($_POST['correo']);
            $genero = trim($_POST['genero']);
            $direccion = trim($_POST['direccion']);
            $telefono = trim($_POST['telefono']);
            $tarjeta = trim($_POST['tarjeta']);
            $dui = trim($_POST['dui']);
            $nacimiento = trim($_POST['nacimiento']);
            $contra = trim($_POST['contra']);
    
            //Consulta... revisar sql
            $consulta = "INSERT INTO cliente (nombre, apellido, correo, genero, dirección, teléfono, tarjeta, dui, fecha_nac, contra, cargo)
                VALUES ('$nombre','$apellido','$correo','$genero','$direccion','$telefono','$tarjeta','$dui','$nacimiento','$contra', 3)";
    
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
}

function buscarRepetido($correo)
{
    $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
    $search = $connex->prepare("SELECT * FROM cliente WHERE correo= ?");
    $search->bind_param("s", $correo);
    $search->execute();
    $result = $search->get_result();

    if ($result->num_rows > 0) {
        return 1;
    } else {
        return 0;
    }

}

?>