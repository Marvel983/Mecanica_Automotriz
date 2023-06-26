<?php
    $connex = new mysqli("localhost", "root", "", "mecánica_automotriz");
    $id = $_GET["id"];
    $sql = $connex->prepare("DELETE FROM mecánico WHERE id_mecánico = $id");
    $sql->execute();
    header("Location: ../html/mec.php");
?>