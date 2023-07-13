<?php
session_start();

$payEvent = $_POST['payEvent'];

if ($payEvent == 'Pay') {
    unset($_SESSION['products']);
}

header('location:viewCart.php');
?>