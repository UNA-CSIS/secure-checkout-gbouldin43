<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Welcome to Amuzon!<br><hr></h2>

        <form method="post" action="orderSummary.php">
            <p>
                <label for="hoka">Hoka Running Shoes: $129.99 <br>Quantity: </label>
                <input type="number" name="hoka" id="hoka" value="0">
            <br><br> <hr>
            </p>
            <p>
                <label for="toaster">Ninja Toaster: $35.99 <br>Quantity: </label>
                <input type="number" name="toaster" id="toaster" value="0">
            <br><br> <hr>
            </p>
            <p>
                <label for="game">College Football 25: $69.99 <br>Quantity: </label>
                <input type="number" name="game" id="game" value="0">
            <br><br> <hr>
            </p>
            <p>
                <input type="submit" name="continue" value="Add to Cart">
            </p>
    </body>
</html>
