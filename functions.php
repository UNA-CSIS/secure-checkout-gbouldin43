<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateCard($cardNumber, $amount) {
    $mastercard = substr($cardNumber, 0, 2);
    $visa = substr($cardNumber, 0, 1);
    $amex = substr($cardNumber, 0, 2);
    $lastFour = substr($cardNumber, -4);

    if (($mastercard === "51" || $mastercard === "52" || $mastercard === "53" || $mastercard === "54" || $mastercard === "55") && strlen($cardNumber) === 16) {
        return "Your MASTERCARD ending with $lastFour has been charged \$$amount. Thank you for shopping at Amuzon!";
    } elseif ($visa === "4" && (strlen($cardNumber) === 13 || strlen($cardNumber) === 16)) {
        return "Your VISA ending with $lastFour has been charged \$$amount. Thank you for shopping at Amuzon!";
    } elseif (($amex === "34" || $amex === "37") && strlen($cardNumber) === 15) {
        return "Your AMEX ending with $lastFour has been charged \$$amount. Thank you for shopping at Amuzon!";
    } else {
        return "INVALID CARD!";
    }
}
