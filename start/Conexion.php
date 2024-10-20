<?php

$servername = "bzb6tfijofywzhjscv1u-mysql.services.clever-cloud.com";
$username = "urk2gm7r34og9qki";
$password = "wMwTRjJuXX7aEsdKkcOS";
$db = "bzb6tfijofywzhjscv1u";
/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "tripout";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $db, );


// Check connection
if ($conn->connect_error) {
  die("CONEXION FALLIDA: " . $conn->connect_error);
}
//echo "CONEXION EXITOSA";

 if (!$conn->set_charset("utf8")) {
        echo "Error loading character set utf8: %s";
    } else {
        //echo"Current character set: %s\n", $conn->character_set_name();
    }
    ?>