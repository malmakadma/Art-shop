<?php
session_start();

$name = $_POST["userName"];
$surname = $_POST["userSurname"];
$dateBirth = $_POST["userBirthday"];
$description = $_POST["description"];

// Перевірка на мінімальний вік (16 років)
$today = new DateTime();
$birthday = new DateTime($dateBirth);
$age = $today->diff($birthday)->y;

if ($age < 16) {
    // Якщо користувач молодше 16 років, перенаправлення на logout.php
    header("location: logout.php");
    exit(); // Зупинити виконання скрипту
}

// Перевірка на мінімальну кількість символів опису
if (strlen($description) < 50) {
    $_SESSION["Description"] = ""; // Порожнє значення, якщо не відповідає вимогам
} else {
    $_SESSION["Description"] = $description;
}

$_SESSION["Name"] = $name;
$_SESSION["Surname"] = $surname;
$_SESSION["Date"] = $dateBirth;

header("location: userProfile.php");
?>