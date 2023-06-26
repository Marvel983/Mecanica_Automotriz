<?php

session_start();

$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");

if (isset($_POST['submit'])) {
    if (strlen($_POST['correo']) >= 1 && strlen($_POST['contra']) >= 1) {

        $correo = $_POST['correo'];
        $contra = $_POST['contra'];

        $validar_login_admin = mysqli_query($connex, "SELECT * FROM mecanico WHERE correo ='$correo' and id_cargo = 1");
        if (mysqli_num_rows($validar_login_admin) > 0) {
            $_SESSION['admin'] = $correo;

            echo "<script>
            alert('A iniciado sesion correctamente');
            window.location = '../html/admin.php';
          </script>";
        } else {
            echo '
            <script>
                alert("UPS! algo salio mal, intentelo nuevamente")
            </script>
            ';
        }

        $validar_login_mecanico = mysqli_query($connex, "SELECT * FROM mecanico WHERE correo ='$correo' and id_cargo = 2");
        if (mysqli_num_rows($validar_login_mecanico) > 0) {
            $_SESSION['mecanico'] = $correo;

            echo "<script>
            alert('A iniciado sesion correctamente');
            window.location = '../html/index_mecanico.php';
          </script>";
        } else {
            echo '
            <script>
                alert("UPS! algo salio mal, intentelo nuevamente")
            </script>
            ';
        }

        $validar_login_cliente = mysqli_query($connex, "SELECT * FROM cliente WHERE correo='$correo' and contra='$contra' and id_cargo= 3");
        if (mysqli_num_rows($validar_login_cliente) > 0) {
            $_SESSION['usuario'] = $correo;

            echo "<script>
            alert('A iniciado sesion correctamente');
            window.location = '../html/index.php';
          </script>";
        } else {
            echo '
            <script>
                alert("UPS! algo salio mal, intentelo nuevamente")
            </script>
            ';
        }
        // IMPORTANTE.........................................................................
        //Para hacer con datos quemados
        //roles variable quemada para admin donde dice "window.location = '../html/admin.php';"
        //poner el link a donde se desea ir en la pagina al admin 

        //if($correo=='admin@gmail.com' && $contra=='1234'){
        //     echo "<script>
        //     alert('bienvenido administrador al sistema');
        //     window.location = '../html/admin.php';
        //   </script>";
        //}


        //una contraseña cualquiera que oscile y cumpla con esos requisitos
        // if($contra>=8000 && $contra<=8200 && $contra%2==0){
        //     echo "<script>
        //     alert('bienvenido al administrados del sistema');
        //     window.location = '../html/admin.php';
        //   </script>";            
        // }



        $validar_login = mysqli_query($connex, "SELECT * FROM cliente WHERE correo='$correo' and contra='$contra'");

        if (mysqli_num_rows($validar_login) > 0) {
            $_SESSION['usuario'] = $correo;

            echo "<script>
            alert('A iniciado sesion correctamente');
            window.location = '../html/index.php';
          </script>";
        } else {
            echo '
            <script>
                alert("UPS! algo salio mal, intentelo nuevamente")
            </script>
            ';
        }
    } else {
        echo '
        <script>
            alert("Aun hay campos sin llenar")
        </script>
        ';
    }
}
