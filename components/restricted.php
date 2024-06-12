<?php if (!isset($_SESSION['logged']) && $_SESSION['logged'] != true) {
    header('location:ingreso.php');
}