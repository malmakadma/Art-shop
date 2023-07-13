<?php
session_start();

unset($_SESSION["nameOfUser"]);
unset($_SESSION["psw"]);

if (isset($_SESSION["Name"]) && isset($_SESSION["Surname"]) && isset($_SESSION["Date"])
    && isset($_SESSION["Description"]) && isset($_SESSION["Img"])) {
    unset($_SESSION["Name"]);
    unset($_SESSION["Surname"]);
    unset($_SESSION["Date"]);
    unset($_SESSION["Description"]);
    unset($_SESSION["Img"]);
}

header('location:index.php');
?>