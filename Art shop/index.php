<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping list</title>
    <style>
        .active {
            color: #FFB6C1;
            text-decoration: none;
            font-weight: bold;
        }

        .no-active {
            color: black;
            text-decoration: none;
        }

        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 70px;
            padding: 10px;
        }

        .tab {
            border-collapse: collapse;
            margin: 0 auto;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
        }

        .tab thead tr {
            background-color: #800080; /* Фіолетовий колір для заголовків */
            color: #ffffff; /* Колір тексту у заголовках */
        }

        .tab tbody tr:nth-child(even) {
            background-color: #ffffff; /* Білий колір для парних рядків */
        }

        .tab tbody tr:nth-child(odd) {
            background-color: #f2f2f2; /* Світло-сірий колір для непарних рядків */
        }

        .tab td, .tab th {
            padding: 10px;
            border: 1px solid #800080; /* Фіолетовий колір рамки */
        }

        .add-cart-button {
            margin: 20px auto;
            display: block;
            width: 350px;
            position: relative;
        }

    </style>
</head>
<body style="background-color: ghostwhite;">
<?php include "header.php"?>

<?php
include "products.php";

if (isset($_SESSION['nameOfUser'])) {

    if (isset($_SESSION['products'])) {
        $cartProducts = $_SESSION['products'];
        foreach ($cartProducts as $cartProduct) {
            $productName = $cartProduct['name'];
            $productQuantity = $cartProduct['selectedQuantity'];
            foreach ($products as $key => $product) {
                if ($product['name'] === $productName) {
                    $products[$key]['availability'] -= $productQuantity;
                    break;
                }
            }
        }
    }

    echo "<div class='container'>
    <h1 style='text-align:center'>Art Shop</h1>
    <table class='tab' border='1'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Available Quantity</th>
            </tr>
        </thead>
        <form action='insertCart.php' method='post'>
            <tbody>";

    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>{$product['name']}</td>";
        echo "<td><img src='{$product['image']}' height='75px' width='auto' /></td>";
        echo "<td>{$product['price']}</td>";
        echo "<td><input type='number' name='qty[]' value='0' min='0' max='{$product['availability']}' /></td>";

        echo "<input type='hidden' name='name[]' value='{$product['name']}'/>";
        echo "<input type='hidden' name='price[]' value='{$product['price']}'/>";
        echo "<td>{$product['availability']}</td>";
        echo "</tr>";
    }

    echo "</tbody>
        <input type='submit' value='Add to Cart' name='addCart' class='add-cart-button'>
    </form>
    </table>
</div>";
} else {
    echo "<div style='text-align:center;'>
    <h1>Art Shop</h1>
    <p>Please Login first.</p>
</div>";
}
?>

<script>
    function checkQuantity(input, availability) {
        var quantity = parseInt(input.value);
        if (quantity > availability) {
            OnAdd();
        }
    }

    function OnAdd() {
        alert("More quantity than available");
    }
</script>

<?php include "footer.php"; ?>

<style>
    a {
        margin-left: 250px;
    }
</style>