<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
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
    ?>
    <div class="container">
            <h1>Resultados sobre tu prueba:</h1>
<?php
    $a = 1;
    $b = 1;
    $c = 1;
    $i = 0;
    $opt = $i + 1;
    $respuestas = [];
    $correctas = [];
    $preguntas = [];
    $opciones = [];
    $punt_total = 0;
    $cant_preguntas = $_POST['cant_preguntas'];

    while (count($respuestas) < $cant_preguntas) {
        $preguntas[] = $_POST["enunciado_".$a];
        $correctas[] = $_POST["r_".$a];
        if (isset($_POST["p_".$a])) {
            $respuestas[] = $_POST["p_".$a];
        }
        else {
            $respuestas[] = 0;
        }
        $a++;
    }
    while ($b < $cant_preguntas + 1) {
        if (isset($_POST["op".$b."-".$c]) ) {
            $opciones["op".$b."-".$c] = $_POST["op".$b."-".$c];
            if ($c >= 3) {
                $b++;
                $c = 0;
            }
            $c++;
        }elseif (!isset($_POST["op".$b."-".$c])) {
            $b++;
            $c = 1;
            if (!isset($_POST["op".$b."-".$c]) ) {
                break;
            }
        }
    }
    $c = 1;

    while ($i < $cant_preguntas) {
?>
            <div class="white_bg gap">
            <h3>Pregunta #<?= $i+1?>: <?= $preguntas[$i] ?></h3>
            <?php if (comprobar_respuestas($respuestas[$i], $correctas[$i])) {
                $punt_total += 20/$cant_preguntas;
                ?>
                <p>
                    Tu respuesta: <strong><?= $opciones["op".$opt."-".$respuestas[$i]] ?></strong>
                </p>
                <?php
            }elseif ($respuestas[$i] == 0){
                ?>
                <p>
                    Tu respuesta: <strong class="wrong">Ninguna</strong>
                </p>
                <p>
                    La respuesta correcta es: <strong><?= $opciones["op".$opt."-".$correctas[$i]] ?></strong>
                </p>
                <?php
            }else{
                ?>
                <p>
                    Tu respuesta: <strong class="wrong"><?= $opciones["op".$opt."-".$respuestas[$i]] ?></strong>
                </p>
                <p>
                    La respuesta correcta es: <strong><?= $opciones["op".$opt."-".$correctas[$i]] ?></strong>
                </p>
                <?php
            }
            $opt++;
            ?>
            </div>
<?php
        $i++;
    }
    ?>
    <div class="center_col">
        <h2>Tu puntuación total es de:</h2>
        <p align="center">
        <span <?php if ($punt_total < 10) {
            echo('class="wrong"');
        }?>><?= $punt_total ?>pts </span><span>/ 20pts</span>
        </p>
    </div>
    <div class="center">
        <a href="perfil.php" class="btn_accept" align="center">Aceptar</a>
    </div>
</div>
<?php
    $consulta = "SELECT * FROM points WHERE u_id = '$_SESSION[user_id]' && prueba = '$_POST[prueba]';";
    $resultado = mysqli_query($enlace, $consulta);
    if ($resultado) {
        $items = mysqli_num_rows($resultado);
        if ($items > 0) {
            echo('<div class="error">Ya completaste esta prueba antes</div>');
        }else{
            $consulta = "INSERT INTO points(u_id, prueba, pts) VALUES('$_SESSION[user_id]', '$_POST[prueba]', '$punt_total');";
            $resultado = mysqli_query($enlace, $consulta);
            echo('<div class="ok">¡Bien! Tu puntuación fue guardada</div>');
        }
    }

    function comprobar_respuestas($user_option, $correct_option){
        if ($user_option == $correct_option) {
            return true;
        }else{
            return false;
        };
    };
?>
    <script src="components/hideMsg.js"></script>
</body>
</html>