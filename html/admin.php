<?php
session_start();

if (!isset($_SESSION['admin'])){
    header("Location: ../html/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/mec.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="../html/admin.php" class="active">Index</a></li>
                <li><a href="../html/mec.php">Mecánicos</a></li>
                <li><h3>Bienvenido <?php echo $_SESSION['admin'][1]; ?></h3></li>
            </ul>
        </nav>
    </header>
    <main class="main wrapper">
        <div class="content">
            <h1>Bienvenido Administrador</h1>
        </div>
        <img src="https://nattivos.com/wp-content/uploads/2019/08/meca1-1024x683.jpg" alt="Imagen de taller" loading="lazy">
    </main>
</body>

</html>