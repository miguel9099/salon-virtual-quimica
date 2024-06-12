<?php session_start(); ?>

<header class="navbar">
    <a href="index.php">Inicio</a>
    <a href="leaderboard.php">Clasificación</a>
    <?php if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) { ?>
        <a href="temas.php">Ver temas</a>
        <a href="perfil.php">Mi perfil</a>
        <a href="components/logout.php">Salir</a>
<?php }else{?>
        <a href="ingreso.php">Ingresar</a>
<?php } ?>
    <!--
    <a href="404.php">Sobre nosotros</a>
    -->
</header>