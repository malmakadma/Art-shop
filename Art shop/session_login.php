<?php
session_start();

$login = $_POST['nameOfUser'];
$password = $_POST['psw'];

$_SESSION["nameOfUser"] = $login;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged in</title>

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
            margin-right: auto;
            margin-left: auto;
        }

        .centered-container {
            text-align: center;
            margin: 0 auto;
            width: 600px;
            margin-top: 50px;
        }

        a {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php include "header.php"?>
<div style="text-align: center;">
    <h1>Welcome to the Art shop</h1>
</div>

<div class="centered-container">
    <?php
    if(isset($_SESSION["nameOfUser"])){
        $loggedInUser = $_SESSION["nameOfUser"];
        echo "<div>$loggedInUser, you have successfully logged in</div>";
        echo "<a href='index.php'>Go to the Art shop!</a>";
    }
    ?>
</div>

</body>
<?php include "footer.php"; ?>

<style>
    a{
        margin-left: 250px;
    }</style>
