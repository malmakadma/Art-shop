<?php session_start(); ?>

<?php include "header.php"?>
    <style>
        .userProfile {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .leftPart, .rightPart {
            width: 45%;
        }

        .userPhoto, form {
            margin-bottom: 20px;
        }

        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 70px;
            padding: 10px;
        }
    </style>

    <div class="userProfile">
        <div class="leftPart">
            <div class="userPhoto">
                <?php
                if (isset($_SESSION['Img'])) {
                    $path = $_SESSION["Img"];
                    echo "<img src='$path' height='120px' width='auto' />";
                } else {
                    echo "<img src='uploads/user.jpg' height='120px' width='auto' />";
                }
                ?>
            </div>
            <div>
                <form action="storeImage.php" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($_SESSION['Img'])) {
                        $Img = $_SESSION['Img'];
                        echo "<input type='file' name='document' placeholder='$Img' />";
                    } else {
                        echo "<input type='file' name='document' />";
                    }
                    ?>
                    <button type="submit">Upload</button>
                </form>
            </div>
        </div>
        <div class="rightPart">
            <form action="userData.php" method="post">
                <label>Name</label>
                <?php
                if (isset($_SESSION["Name"])) {
                    $Name =  $_SESSION["Name"];
                    echo "<input type='text' name='userName' placeholder='$Name' />";
                } else {
                    echo "<input type='text' name='userName' placeholder='Name' />";
                }
                ?>
                <label>Surname</label>
                <?php
                if (isset($_SESSION["Surname"])) {
                    $Surname = $_SESSION["Surname"];
                    echo "<input type='text' name='userSurname' placeholder='$Surname' />";
                } else {
                    echo "<input type='text' name='userSurname' placeholder='Surname' />";
                }
                ?>
                <label>Date of Birth</label>
                <?php
                if (isset($_SESSION["Date"])) {
                    $Date = $_SESSION["Date"];
                    echo "<input type='text' name='userBirthday' placeholder='$Date' />";
                } else {
                    echo "<input type='date' name='userBirthday' />";
                }
                ?>
                <div style="margin-top: 25px;">
                    <?php
                    if (isset($_SESSION["Description"])) {
                        $Desc = $_SESSION["Description"];
                        echo "<textarea style='width: 97%;' name='description' placeholder='$Desc'></textarea>";
                    } else {
                        echo "<textarea style='width: 97%;' name='description' placeholder='Brief description of yourself...'></textarea>";
                    }
                    ?>
                </div>
                <button style="margin-top: 50px;" type="submit">Save result</button>
            </form>
        </div>
    </div>



    <style>
        a{
            margin-left: 250px;
        }
        .active {
            color: #FFB6C1;
            text-decoration: none;
            font-weight: bold;
        }

        .no-active {
            color: black;
            text-decoration: none;
        }
    </style>
<?php include "footer.php"; ?>