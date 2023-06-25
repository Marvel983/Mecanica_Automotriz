<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../src/icon_auto.png" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar">
                <ul class="menu">
                    <li><a href="../html/index.php" class="active">Index</a></li>
                    <li><a href="../html/reserva.php">Reserva</a></li>
                    <li><a href="../html/register_vehiculo.php">Vehiculo</a></li>
                    <li><a href="../html/register.php">Registrarse</a></li>
                    <li><a href="../html/login.php">Iniciar Sesion</a></li>

                </ul>
            </nav>
        </header>
        <br>
        <main class="main">
            <div class="content">
                <h1>Bienvenido a Mecanica <br><span>Automotriz!</span></h1>
            </div>
            <img src="https://img.autosblogmexico.com/2019/11/27/hVoAV2LR/mecanico-1-7492.jpg" alt="Imagen de taller">
        </main>
        <footer>
            <p>
                ¡Bienvenido a nuestra página web de Mecánica Automotriz! Explora nuestros recursos y consejos para
                mantener tu vehículo en óptimas condiciones. ¡Disfruta tu visita y no dudes en contactarnos si tienes
                alguna pregunta!
            </p>
        </footer>
    </div>
    <footer>
        <h6>&copy; <span id="year"></span> Todos los derechos reservados 2023</h6>
        <script>
            let year = document.getElementById('year');
            let y = new Date().getFullYear();
            year.innerHTML = y;
        </script>
    </footer>
</body>

</html>