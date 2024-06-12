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
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
        header("location:index.php");
    }
    ?>
    <div class="container">
        <div class="form_container">
            <div class="login">
                <form method="post" class="form">
                    <h1>Accede a VirtualQuim</h1>
                    <input type="text" name="user" placeholder="Usuario" class="input_text_form" required>
                    <input type="password" name="pass" placeholder="Contraseña" class="input_text_form" required>
                    <input type="submit" class="btn_accept" value="Ingresar" align="center">
                    <input type="hidden" name="ingresar">
                </form>
                <div class="center">
                    <button class="btn_accept" align="center" id="sign_up">No tengo cuenta</button>
                </div>
            </div>
            <div class="register hide">
                <form method="post" class="form">
                    <h1>Regístrate a VirtualQuim</h1>
                    <input type="text" name="name" placeholder="Nombre" class="input_text_form" required>
                    <input type="text" name="lastname" placeholder="Apellido" class="input_text_form" required>
                    <input type="text" name="user" placeholder="Usuario" class="input_text_form" required>
                    <input type="email" name="email" placeholder="Correo" class="input_text_form" required>
                    <input type="password" name="pass" placeholder="Contraseña" class="input_text_form" required>
                    <input type="password" name="pass2" placeholder="Repite la contraseña" class="input_text_form" required>
                    <input type="submit" class="btn_accept" value="Registrarse">
                    <input type="hidden" name="registrar">
                </form>
                <div class="center">
                    <button class="btn_accept" id="sign_in">Ya tengo cuenta</button>
                </div>
            </div>
        </div>
    </div>
    <script src="components/changeForm.js"></script>
    <?php require "components/controlLogin.php"; ?>
    <script src="components/hideMsg.js"></script>
</body>
</html>