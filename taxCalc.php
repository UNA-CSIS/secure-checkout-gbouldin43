<?php
session_start();
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
        <h2>Tax Calculation<br><hr></h2>
        <?php
        $taxRate = .095;
        $_SESSION['finalTotal'] = $_SESSION['orderSubtotal'] * (1 + $taxRate);

        echo "Subtotal: $" . $_SESSION['orderSubtotal'] . "<br>";
        echo "Tax: " . $taxRate * 100 . "% <br><hr>";
        echo "Final Total with Tax: $" . round($_SESSION['finalTotal'], 2);
        ?>

        <form method="post" action="authentication.php">
            <p>
                <input type="submit" name="proceed" value="Proceed to Checkout">
            </p>
        </form>

        <form method="post" action="index.php">
            <p>
                <input type="submit" name="continue" value="Continue Shopping">
            </p>
        </form
    </body>
</html>
