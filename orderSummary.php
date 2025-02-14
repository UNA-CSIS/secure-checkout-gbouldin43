<?php
session_start();

$_SESSION['hokaQuantity'] = $_POST['hoka'];
$_SESSION['toasterQuantity'] = $_POST['toaster'];
$_SESSION['gameQuantity'] = $_POST['game'];
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
        <h2>Order Summary<br><hr></h2>

        <?php
        $hokaPrice = 129.99;
        $toasterPrice = 35.99;
        $gamePrice = 69.99;
        $_SESSION["orderSubtotal"] = ($_SESSION['hokaQuantity'] * $hokaPrice) + ($_SESSION['toasterQuantity'] * $toasterPrice) + ($_SESSION['gameQuantity'] * $gamePrice);

        echo "Your current subtotal is: $" . $_SESSION["orderSubtotal"];
        ?>
        <form method="post" action="taxCalc.php">
            <p>
                <input type="submit" name="continue" value="Confirm">
            </p>
    </body>
</html>
