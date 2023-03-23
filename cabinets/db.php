<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "shoppingcart";


//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// $conn->close();

$conn = " INSERT INTO products (name, price, image_url, quantity, total) VALUES ('Maple Natural Wall Cabinet ', 100, 'http://localhost/product/cabinets/img/1-5.png', '1', 100);"
?>