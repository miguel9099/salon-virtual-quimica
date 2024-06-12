<?php
include "components/conexion.php";

if (isset($_POST["registrar"])) {
    $user = trim($_POST['user']);
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $pass = trim($_POST['pass']);
    $pass2 = trim($_POST['pass2']);
    if ($pass == $pass2) {
        $consulta = "SELECT * FROM users WHERE email = '$email' || user = '$user';";
        $resultado = mysqli_query($enlace, $consulta);
        if ($resultado) {
            $users = mysqli_num_rows($resultado);
            if ($users > 0) {
                echo('<div class="error">Usuario o correo ya están registrados</div>');
            }else{
                $consulta = "INSERT INTO users(user, name, lastname, email, password) VALUES ('$user', '$name', '$lastname', '$email','$pass');";
                $resultado = mysqli_query($enlace, $consulta);
                if ($resultado) {
                    echo('<div class="ok">Registrado correctamente, puede iniciar sesión</div>');
                }
            }
        }   
    }else{
        echo('<div class="error">Las contraseñas no coinciden</div>');
    }
}elseif(isset($_POST["ingresar"])){
    $consulta = "SELECT * FROM users WHERE user = '$_REQUEST[user]';";
    $resultado = mysqli_query($enlace, $consulta);
    if ($resultado) {
        $users = mysqli_num_rows($resultado);
        if ($users > 0) {
            $data = mysqli_fetch_array($resultado);
            if ($_REQUEST['pass'] == $data['password']) {
                $_SESSION['user_id'] = $data['id'];
				$_SESSION['user'] = $data['user'];
				$_SESSION['name'] = $data['name'];
				$_SESSION['lastname'] = $data['lastname'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['pass'] = $data['pass'];
				$_SESSION['logged'] = true;
				header("location: index.php");
            }else{
                echo('<div class="error">Contraseña incorrecta</div>');
            }
        }else{
            echo('<div class="error">No existe ese usuario</div>');
        }
    }
}

?>