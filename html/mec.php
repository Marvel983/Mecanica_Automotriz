<?php

    require_once('../php/conex.php');
    require_once('../php/methods.php');
    
    $obj = new métodosCrud();
    $sql = "SELECT * FROM mecanico";
    $datos = $obj->showData($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Mecánicos</title>
    <link rel="stylesheet" href="../css/mec.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="../html/admin.php">Index</a></li>
                <li><a href="../html/mec.php" class="active">Mecánicos</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="div1">
            <h4>Mecánicos</h4>
            <?php
                foreach ($datos as $key){
                
            ?>
                <div class="info">
                    <?php echo $key['nombre']; ?>
                </div>
            <?php

                }

            ?>
        </div>
        <div id="div2">
            <h4>Agregar</h4>
        </div>
    </div>
</body>

</html>