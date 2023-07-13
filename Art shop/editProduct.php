<?php
session_start();

if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
    // Помилка - немає товарів у кошику
    header('Location: viewCart.php');
    exit();
}

$productKey = $_POST['productKey'];

if (!is_numeric($productKey)) {
    // Помилка - невірний ключ товару
    header('Location: viewCart.php');
    exit();
}

$productKey = intval($productKey);

if ($productKey < 0 || $productKey >= count($_SESSION['products'])) {
    // Помилка - невірний ключ товару
    header('Location: viewCart.php');
    exit();
}

$eventToPerform = $_POST['event'];
$eventName = substr($eventToPerform, 0, 6);

if ($eventName === 'Update') {
    $newQuantity = $_POST['newQuantity'];
    $_SESSION['products'][$productKey]['selectedQuantity'] = $newQuantity;
} elseif ($eventName === 'Delete') {
    unset($_SESSION['products'][$productKey]);
    $_SESSION['products'] = array_values($_SESSION['products']); // Переіндексуємо масив після видалення
}

header('Location: viewCart.php');
exit();
?>