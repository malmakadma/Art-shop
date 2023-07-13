<?php
$urlToCheck = $_SERVER['REQUEST_URI'];

if (isset($_SESSION["nameOfUser"])) {
    // Авторизований користувач
    echo "<footer id='footer' style='height: 70px; background-color: #9966CC;'>
            <table style='position: fixed; left: 0;'>
                <tbody>
                    <tr>
                        <td><a href='home.php' class='" . (($urlToCheck == '/home.php') ? "active" : "no-active") . "'>Home</a></td>
                        <td><a href='index.php' class='" . (($urlToCheck == '/index.php') ? "active" : "no-active") . "'>Products</a></td>
                        <td><a href='viewCart.php' class='" . (($urlToCheck == '/viewCart.php') ? "active" : "no-active") . "'>Cart</a></td>
                        <td><a href='aboutUs.php' class='" . (($urlToCheck == '/aboutUs.php') ? "active" : "no-active") . "'>About us</a></td>
                    </tr>
                </tbody>
            </table>
        </footer>";
} else {
    // Неавторизований користувач
    echo "<footer id='footer' style='height: 70px; background-color: #9966CC;'>
            <table style='position: fixed; left: 0;'>
                <tbody>
                    <tr>
                        <td><a href='home.php' class='" . (($urlToCheck == '/home.php') ? "active" : "no-active") . "'>Home</a></td>
                        <td><a href='index.php' class='" . (($urlToCheck == '/index.php') ? "active" : "no-active") . "'>Products</a></td>
                        <td><a href='viewCart.php' class='" . (($urlToCheck == '/viewCart.php') ? "active" : "no-active") . "'>Cart</a></td>
                        <td><a href='aboutUs.php' class='" . (($urlToCheck == '/aboutUs.php') ? "active" : "no-active") . "'>About us</a></td>
                    </tr>
                </tbody>
            </table>
        </footer>";
}

?>

<style>
    a {
        text-align: center;
    }
</style>