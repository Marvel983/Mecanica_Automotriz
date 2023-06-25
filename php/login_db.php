<?php

//Obtención de datos
$correo = $_POST['correo'];
$contra = $_POST['contra'];
session_start();
$_SESSION['correo'] = $correo;

//Conección
$connex = mysqli_connect("localhost", "root", "", "mecanica_automotriz");
/*
if (isset($_POST['submit'])) {

    $consulta = "SELECT * FROM cliente WHERE correo='$correo' and contra='$contra' ";
    $resultado = mysqli_query($connex, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if ($filas['id_cargo'] ==1) { //Aqui va el id del mecanico o del admin
        header("location: admin.php");
    } else if ($filas['id_cargo'] == 2) {//Aqui va el id del cliente
        header("location: ../html/index.php");
    } else{
        echo "<script> alert('Acceso denegado');
        </script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($connex);
} else {
    echo "<script> alert('Tu vida esta mala');
    </script>";
}
*/
 
//Inicio de sesión
if (!empty($_POST["submit"])) {
    if (empty($_POST["correo"]) and empty($_POST["contra"])) {
        echo "<script> alert('Los datos estan vacios');
        window.location.href='../html/login.php';
        </script>";
    } else {
        $sql = $connex->query("SELECT * FROM cliente WHERE correo ='$correo' and contra ='$contra' ");
        if ($datos = $sql->fetch_object()) {
            header("location: ../html/index.php");
        } else {
            echo "<script> alert('Acceso denegado');
            window.location.href='../html/login.php';
            </script>";
        }
    }
}
