<?php
// Establish a connection to the MySQL database


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingcart";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



// Construct the MySQL query to retrieve cart data
// $sql = "SELECT name, price, quantity FROM products";

// // Execute the query
// $result = mysqli_query($conn, $sql);

// // Check for query errors
// if (!$result) {
//     die("Query failed: " . mysqli_error($conn));
// }
// print_r($row);

// // Display the cart data
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "Name: " . $row["name"] . "<br>";
//     echo "Price: " . $row["price"] . "<br>";
//     echo "Quantity: " . $row["quantity"] . "<br><br>";
// }

// // Close the database connection
// mysqli_close($conn);

?>