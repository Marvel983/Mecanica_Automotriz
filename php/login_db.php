<?php
$connex = new mysqli("localhost", "root", "", "mecanica_automotriz");

if (empty($_POST["btn_iniciar"])) {
    if (empty($_POST["correo"]) and empty($_POST["contra"])) {
        ?>
        <script>
            alert("Acceso denegado");
        </script>
        <?php
    } else {
        $correo = $$_POST['correo'];
        $contra = $$_POST['contra'];
        $sql = $connex->query("select * from cliente where correo='$correo' and contra='$contra' ");
        if ($datos = $sql->$fetch_object()) {
            header("location:  ../html/index.php");
        } else {
        ?>
            <script>
                alert("Acceso denegado");
            </script>
        <?php
        }
    }
}
