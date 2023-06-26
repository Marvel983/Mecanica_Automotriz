<?php
    $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
    $id = $_GET["id"];
    $sql = $connex->prepare("DELETE FROM reporte WHERE id_reporte = $id");
    $sql->execute();
    header("Location: ../html/reporte.php?id=".$id);
?>