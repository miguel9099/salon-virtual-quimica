<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende química</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require "components/header.php"; ?>
    <div class="container">
        <div class="presentation">
            <img src="img/EVAoriginal.svg" alt="EVA" id="EVA" draggable="false">
            <h1><strong>Hola, soy Eva.</strong> Bienvenido a VirtualQuim (IA)</h1>
        </div>
        <p align="center">Aprende fácil y resuelve pruebas de química</p>
        <?php
        if (!isset($_SESSION['logged']) || $_SESSION['logged'] == false) {
            echo('<div class="center">
                    <a href="ingreso.php" class="btn_accept">Comenzar</a>
                </div>');
        }
        ?>
    </div>
</body>
</html>