<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

        .tab{
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
<?php include "header.php"?>
<div style="text-align: center;">
    <h1>Welcome to art shop</h1>
    <p>This is the home page of the Art shop created by student of the PZPI-21-1 Almakadma Mariam</p>
</div>

</body>
<?php include "footer.php"; ?>

<style>
    a{
        margin-left: 250px;
    }</style>

