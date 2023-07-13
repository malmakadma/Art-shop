<?php
session_start();
include "products.php";?>

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

        th {
            padding: 5px;
        }

        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            background-color: lightseagreen;
            width: 100%;
            height: 70px;
            padding: 10px;
        }
        a{
            color: aliceblue;
        }
        .tab {
            border-collapse: collapse;
            margin: 0 auto;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
        }

        .tab thead tr {
            background-color: #800080;
            color: #ffffff;
        }

        .tab tbody tr:nth-child(even) {
            background-color: #ffffff;
        }

        .tab tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .tab td, .tab th {
            padding: 10px;
            border: 1px solid #800080;
        }
    </style>
</head>
<body style="background-color: WhiteSmoke;">
<?php include "header.php"?>

<div class="container">
    <br/>
    <br/>
    <h2 style="text-align:center">Your cart products</h2>
    <?php

    $numid = 1;
    $checkSum = 0;
    $total = 0;

    if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
        echo "<a style='margin-left: 650px; color: black' href='index.php'/>Your cart is empty! Go to products!</a>";
    } else {
        echo "<table class='tab' border='1'>";
        echo "<thead>";
        echo "<th>Number</th>";
        echo "<th>Name</th>";
        echo "<th>Price</th>";
        echo "<th>Quantity</th>";
        echo "<th>Total Price</th>";
        echo "<th>Update</th>";
        echo "<th>Delete</th>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($_SESSION['products'] as $productKey => $product) {
            $p = $product['price'];
            $q = $product['selectedQuantity'];
            /*$imgs = $product['image'];*/

            $num1 = 1;

            echo "<tr>";
            echo "<td>".($numid++)."</td>";
            echo "<form action='editProduct.php' method='post'>";
            echo "<input type='hidden' value='$productKey' name='productKey' />";

            /* echo "<input type='hidden' value='{$product['availability']}' name='availability' />";*/

            echo "<td>".$product['name']."</td>";


            echo "<td>".$p."</td>";
            echo "<td><input type='number' value='".$q."' name='newQuantity' min='0' /></td>";


            $checkSum = $q * $p;
            $total = $total + $checkSum;
            echo "<td>".$checkSum."</td>";
            echo "<td><button type='submit' name='event' class='UpdateBtn' value='Update".$productKey."'>Update</button></td>";
            echo "<td><button type='submit' name='event' class='DeleteBtn' value='Delete".$productKey."'>Delete</button></td>";
            echo "</form>";


            echo "</tr>";
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<tr>";
        echo "<td>Total:".$total."</td>";
        echo "</tr>";
        echo "</tfoot>";

        echo "</table>";

        echo "<form action='cancelCart.php' method='post'>";
        echo "<input type='submit' name='cancelEvent' value='Cancel' style='position: absolute; left: 700px;' />";
        echo "</form>";

        echo "<form action='payFile.php' method='post'>";
        echo "<input type='submit' name='payEvent' value='Pay' style='position: absolute; left: 870px;' onclick='OnBuy();' />";
        echo "</form>";
    }
    ?>
    <script>

        function OnBuy() {
            alert("You paid <?php echo $total; ?> $.");
        }
    </script>
</div>


<?php include "footer.php" ?>

<style>
    a {
        margin-left: 250px;
    }

    table {
        margin-right: auto;
        margin-left: auto;
    }
</style>