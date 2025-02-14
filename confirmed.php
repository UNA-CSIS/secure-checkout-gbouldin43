<?php
session_start();

include 'functions.php';

$usr = $_POST["username"];
$pwd = $_POST["pwd"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = testInput($usr);
    $password = testInput($pwd);
}
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($password === $username && ($password !== "" || $username !== "")) {
            $_SESSION['authenticated'] = true;
            echo "Welcome " . $username . "! You may proceed to the checkout now by clicking the button below.";
            ?>
            <form method="post" action="checkout.php">
                <p>
                    <input type="submit" name="continue" value="Continue to Checkout">
                </p>
            </form>
            <?php
        } else {
            echo "You must have entered the wrong credentials! Please click the button below to return to the login page.";
            ?>
            <form method="post" action="authentication.php">
                <p>
                    <input type="submit" name="back" value="Back to Login">
                </p>
            </form>
            <?php
        }
        ?>
    </body>
</html>
