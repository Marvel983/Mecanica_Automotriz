<?php
    $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
    $id = $_GET["id"];
    $sql = $connex->prepare("DELETE FROM `vehículo-mec` WHERE id_vehículo = $id");
    $sql->execute();
    header("Location: ../html/mecvehiculo.php?id=".$id);
?>