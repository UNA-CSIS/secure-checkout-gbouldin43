<?php
session_start();

include ('functions.php');

if (!isset($_SESSION['authenticated'])) {
    header("Location: index.php");
    exit();
}

$_SESSION['number'] = $_POST['cardNumber'];
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
        echo validateCard($_SESSION['number'], round($_SESSION['finalTotal'], 2));
        ?>
    </body>
</html>
