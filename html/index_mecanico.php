<?php
session_start();

if (!isset($_SESSION['meca'])){
    header("Location: ../html/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecánico</title>
    <link rel="stylesheet" href="../css/mec.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7bcd40cb83.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="../html/admin.php" class="active">Index</a></li>
                <li><a href="../html/reserva.php">Reserva</a></li>
                <li><a href="#">Reporte</a></li>
                <li><a href="../html/vehiculo_mecanico.php">Vehículo</a></li>
                <li><a href="#">Reserva</a></li>
            </ul>
        </nav>
    </header>
    <main class="main wrapper">
        <div class="content">
            <h1>Bienvenido Mecánico</h1>
        </div>
        <img src="https://img.freepik.com/foto-gratis/mecanico-automoviles-cambiando-ruedas-coche_1303-27465.jpg?w=2000" alt="Imagen de taller" loading="lazy">
    </main>
</body>

</html>