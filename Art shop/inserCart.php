<?php
session_start();
include "products.php";

$cartProducts = array();

if (isset($_SESSION['products'])) {
    $cartProducts = $_SESSION['products'];
}

$name = $_POST['name'];
$price = $_POST['price'];
$quantities = $_POST['qty'];
$availability = $_POST['availability'];
$image = $_POST['image'];

foreach ($name as $key => $value) {
    $selectedQuantity = $quantities[$key];

    if ($selectedQuantity > 0) {
        $product = array(
            'name' => $value,
            'price' => $price[$key],
            'selectedQuantity' => $selectedQuantity,
            'image' => $image,
            'availability' => $availability
        );

        array_push($cartProducts, $product);

        // Оновлення кількості доступних товарів
        foreach ($products as $productKey => &$product) {
            if ($product['name'] === $value) {
                $product['availability'] -= $selectedQuantity;
                break;
            }
        }
    }
}

$_SESSION['products'] = $cartProducts;

header('location:index.php');
?>



