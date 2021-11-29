<?php
 
$product_id = $_POST["product_id"];
$ratings = $_POST["ratings"];
 
$conn = mysqli_connect("localhost", "root", "", "rating");
 
mysqli_query($conn, "INSERT INTO ratings (product_id, ratings) VALUES ('$product_id', '$ratings')");

echo "Thanks For Rating";