<?php

$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
('conexion.php');

if (isset($_POST['register_vehiculo'])) {

  $modelo = $_POST['modelo'];
  $tipo = $_POST['tipo'];
  $placa = $_POST['placa'];
  $dominio = $_POST['dominio'];
  $color = $_POST['color'];
  $motor = $_POST['motor'];
  $clase = $_POST['color'];
  $marca = $_POST['motor'];
  $fecha = $_POST['fecha'];

  $consulta = "INSERT INTO vehículo(modelo,tipo,placa,dominio,color,num_motor,clase,marca,fecha) 
  VALUES ('$modelo','$tipo','$placa','$dominio','$color','$motor','$clase','$marca','$fecha')";

  $resultado = mysqli_query($connex, $consulta);
 
  
  if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: vehiculo_mecanico.php');

}

?>
