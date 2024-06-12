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
    require "components/header.php";
    require "components/conexion.php";
    ?>
    <div class="container">
        <?php
        $consulta = "SELECT * FROM points;";
        $resultado = mysqli_query($enlace, $consulta);
        $users = mysqli_num_rows($resultado);
        if ($users > 0) {?>
        <h1>Los mejores estudiantes</h1>
        <?php
        $consulta = "SELECT * FROM points WHERE prueba = 'Balanceo de ecuaciones' ORDER BY pts DESC;";
        $resultado = mysqli_query($enlace, $consulta);
        $users = mysqli_num_rows($resultado);
        if ($users > 0) {?>
        <div class="center-col leaderboard">
        <h2>Balanceo de ecuaciones</h2>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Puntos</th>
                </tr>
                <?php
                while($data = mysqli_fetch_array($resultado)){
                    $consulta2 = "SELECT * FROM users WHERE id = '$data[u_id]';";
                    $resultado2 = mysqli_query($enlace, $consulta2);
                    $user_data = mysqli_fetch_array($resultado2); ?>
                    <tr>
                        <td><?=$user_data['name']?></td>
                        <td><?=$user_data['lastname']?></td>
                        <td><?=$data['pts']?></td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
        <?php }
        $consulta = "SELECT * FROM points WHERE prueba = 'Reacciones químicas' ORDER BY pts DESC;";
        $resultado = mysqli_query($enlace, $consulta);
        $users = mysqli_num_rows($resultado);
        if ($users > 0) {?>
        <div class="center-col leaderboard">
        <h2>Reacciones químicas</h2>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Puntos</th>
                </tr>
                <?php
                while($data = mysqli_fetch_array($resultado)){
                    $consulta2 = "SELECT * FROM users WHERE id = '$data[u_id]';";
                    $resultado2 = mysqli_query($enlace, $consulta2);
                    $user_data = mysqli_fetch_array($resultado2); ?>
                    <tr>
                        <td><?=$user_data['name']?></td>
                        <td><?=$user_data['lastname']?></td>
                        <td><?=$data['pts']?></td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
        <?php } ?>
        <div class="center">
            <a href="temas.php" class="btn_accept">Participa</a>
        </div>
    </div>
        <?php }else{?>
            <h1 align="center">No hay nadie en la lista...</h1>
            <div class="center">
                <a href="temas.php" class="btn_accept">Sé el primero</a>
            </div>
            </div>
            <div class="error">No se han encontrado personas</div>
        <?php }
        ?>
    <script src="components/hideMsg.js"></script>
</body>
</html>