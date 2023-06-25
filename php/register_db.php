<?php
    $connex = mysqli_connect("localhost","root","","mecanica_automotriz");

    if(isset($_POST['register'])) {
       if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['genero']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['tarjeta']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['dui']) >= 1 && strlen($_POST['correo']) >= 1){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $genero = trim($_POST['genero']);
            $direccion = trim($_POST['direccion']);
            $telefono = trim($_POST['telefono']);
            $tarjeta = trim($_POST['tarjeta']);
            $correo = trim($_POST['correo']);
            $dui = trim($_POST['dui']);
            $nacimiento = trim($_POST['correo']);
            $consulta = "INSERT INTO cliente (nombre,apellido,genero,direccion, telefono, tarjeta,correo,dui,fecha_nac)
            VALUES ('$nombre','$apellido','$genero','$direccion','$telefono','$tarjeta','$correo','$dui','$nacimiento')";

            $resultado = mysqli_query($connex,$consulta);
            if ($resultado) {
                ?>
                    <script>
                        alert("Te registraste correctamente");
                        window.location.href='../html/index.php';
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