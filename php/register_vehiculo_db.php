<?php
    $connex = mysqli_connect("localhost","root","","mecanica_automotriz");

    if(isset($_POST['register_vehiculo'])) {
       if (strlen($_POST['modelo']) >= 1 && strlen($_POST['tipo']) >= 1 && strlen($_POST['placa']) >= 1 && strlen($_POST['dominio']) >= 1 && strlen($_POST['color']) >= 1 && strlen($_POST['motor']) >= 1 && strlen($_POST['clase']) >= 1 && strlen($_POST['marca']) >= 1 && strlen($_POST['fecha']) >= 1){
            $modelo = trim($_POST['modelo']);
            $tipo = trim($_POST['tipo']);
            $placa = trim($_POST['placa']);
            $dominio = trim($_POST['dominio']);
            $color = trim($_POST['color']);
            $motor = trim($_POST['motor']);
            $clase = trim($_POST['clase']);
            $marca = trim($_POST['marca']);
            $fecha = trim($_POST['fecha']);
            
            $consulta = "INSERT INTO vehiculo(modelo,tipo,placa,dominio,color,nummotor,clase,marca,fecha) 
            VALUES ('$modelo','$tipo','$placa','$dominio','$color','$motor','$clase','$marca','$fecha')";

            $resultado = mysqli_query($connex,$consulta);
            if ($resultado) {
                ?>
                    <script>
                        alert("Lo inscribiste correctamente");
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