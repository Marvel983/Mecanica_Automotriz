<?php

session_start();


include('conex.php');

     if(isset($_POST['submit'])){
        if(strlen($_POST['correo'])>=1 && strlen($_POST['contra'])>=1){

            $correo = $_POST['correo']; 
            $contra = $_POST['contra'];



            // IMPORTANTE.........................................................................
            //Para hacer con datos quemados
            //roles variable quemada para admin donde dice "window.location = '../html/admin.php';"
            //poner el link a donde se desea ir en la pagina al admin 

            // if($correo=='<algun correo quemado>' && $contra=='alguna contraseña quemada'){
            //     echo "<script>
            //     alert('bienvenido administrador al sistema');
            //     window.location = '../html/admin.php';
            //   </script>";
            // }
                

            //una contraseña cualquiera que oscile y cumpla con esos requisitos
            // if($contra>=8000 && $contra<=8200 && $contra%2==0){
            //     echo "<script>
            //     alert('bienvenido al administrados del sistema');
            //     window.location = '../html/admin.php';
            //   </script>";            
            // }
        

        
            $validar_login = mysqli_query($connex, "SELECT * FROM cliente WHERE correo='$correo' and contra='$contra'");

            if(mysqli_num_rows($validar_login) > 0 ){
                $_SESSION['usuario']=$correo; 

                echo "<script>
                alert('A iniciado sesion correctamente');
                window.location = '../html/index.php';
              </script>";
                     
            }else{
                echo '
                <script>
                    alert("UPS! algo salio mal, intentelo nuevamente")
                </script>
                ';
            }
        

        
        }else{
            echo '
            <script>
                alert("Aun hay campos sin llenar")
            </script>
            ';
        }
    
    }


//ANTERIOR--------------------------------------------------------------------------------


//Obtención de datos
// $correo = $_POST['correo'];
// $contra = $_POST['contra'];

// session_start();
// $_SESSION['correo'] = $correo;
// $_SESSION['contra'] = $contra;

// //Conección
// include('conex.php');


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
// if (!empty($_POST["submit"])) {
//     if (empty($_POST["correo"]) and empty($_POST["contra"])) {
//         echo "<script> alert('Los datos estan vacios');
//         window.location.href='../html/login.php';
//         </script>";
//     } else {
//         $sql = $connex->query("SELECT * FROM cliente WHERE correo ='$correo' and contra ='$contra' ");
//         if ($datos = $sql->fetch_object()) {
//             header("location: ../html/index.php");
//         } else {
//             echo "<script> alert('Acceso denegado');
//             window.location.href='../html/login.php';
//             </script>";
//         }
//     }
// }
