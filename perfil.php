<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    require "components/conexion.php";
    require "components/header.php";
    require "components/restricted.php";
    $consulta = "SELECT * FROM points WHERE u_id = '$_SESSION[user_id]'";
        $resultado = mysqli_query($enlace, $consulta);
        $users = mysqli_num_rows($resultado);
    ?>
    <div class="container">
        <h1 align="center">¡Hola <?= $_SESSION['name']?>!</h1>
        <div class="center">
            <div class="notas">
                <h2>Información sobre mis notas</h2>
                <div class="temas">
                <?php
                while ($data = mysqli_fetch_array($resultado)) { ?>
                    <div class="nota">
                        <h2 align="center"><?=$data['pts']?>pts</h2>
                        <p>en "<?=$data['prueba']?>"</p>
                    </div>
                <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>