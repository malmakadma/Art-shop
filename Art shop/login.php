<?php
session_start();
?>

<style>
    .main {
        width: 100%;
        height: 300px;
        margin-top: 100px;
        display: flex;
        justify-content: center; /* Центрує елементи горизонтально */
        align-items: center; /* Центрує елементи вертикально */
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 30px;
        border: 2px solid #800080; /* Фіолетовий колір рамки */
        padding: 20px;
    }

    .second-section {
        margin-top: 20px;
    }

    button {
        margin-top: 20px;
    }

</style>

<div class="main">
    <form action="session_login.php" method="post">
        <h1 style="text-align: center;">Login page</h1>
        <div class="container">
            <div class="first-section">
                <label for="nameOfUser"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="nameOfUser" pattern='[a-zA-Z]{5,}' required>
            </div>

            <div class="second-section">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}' title="Password must contain at least one digit, one lowercase letter, one uppercase letter, and be at least 6 characters long." required>
            </div>

            <button type="submit">Login</button>
        </div>
    </form>
</div>