<?php
    $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
    $id = $_GET["id"];
    $sql = $connex->prepare("DELETE FROM reserva WHERE id_reserva = $id");
    $sql->execute();
    header("Location: ../html/reserva.php");
?>