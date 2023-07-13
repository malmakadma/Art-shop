<?php
session_start();

if (isset($_SESSION['products'])) {
    unset($_SESSION['products']);
}

header('Location: viewCart.php');
exit();
?>
