<?php 
$connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
	if(isset($_GET['id_vehículo'])){
		$id_vehículo=(int) $_GET['id_vehículo'];

		$consulta = "DELETE FROM vehículo WHERE id_vehículo = $id_vehículo";
		$resultado = mysqli_query($connex, $consulta);
		if(!$resultado) {
			die("Fallido");
		  }
		  $_SESSION['message'] = 'Eliminado';
          $_SESSION['message_type'] = 'danger';
          header('Location: vehiculo_mecanico.php');
	}


 ?>

