<?php
$urlToCheck = $_SERVER['REQUEST_URI'];

if (isset($_SESSION["nameOfUser"])) {
    // Авторизований користувач
    echo "<header style='height: 100px; width:100%; background-color:#9966CC; '>
            <table style='position: fixed; top: 20px; left: 0;'>
                <tbody>
                    <tr>
                        <td><a href='home.php' class='" . (($urlToCheck == '/home.php') ? "active" : "no-active") . "'>Home</a></td>
                        <td><a href='index.php' class='" . (($urlToCheck == '/index.php') ? "active" : "no-active") . "'>Products</a></td>
                        <td><a href='viewCart.php' class='" . (($urlToCheck == '/viewCart.php') ? "active" : "no-active") . "'>Cart</a></td>
                        <td><a href='userProfile.php' class='" . (($urlToCheck == '/userProfile.php') ? "active" : "no-active") . "'>User profile</a></td>
                        <td>
                            <form action='logout.php' method='post'>
                                <input type='submit' value='Log out' name='logOut' style='background-color: #FFB6C1;'>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </header>";
} else {
    // Неавторизований користувач
    echo "<header style='height: 100px; width:100%; background-color:#9966CC; '>
            <table style='position: fixed; top: 20px; left: 0;'>
                <tbody>
                    <tr>
                        <td><a href='home.php' class='" . (($urlToCheck == '/home.php') ? "active" : "no-active") . "'>Home</a></td>
                        <td><a href='index.php' class='" . (($urlToCheck == '/index.php') ? "active" : "no-active") . "'>Products</a></td>
                        <td><a href='viewCart.php' class='" . (($urlToCheck == '/viewCart.php') ? "active" : "no-active") . "'>Cart</a></td>
                        <td><a href='login.php' class='" . (($urlToCheck == '/login.php') ? "active" : "no-active") . "'>Login</a></td>
                    </tr>
                </tbody>
            </table>
        </header>";
}

?>

<style>
    a {
        text-align: center;
    }
</style>