<?php
include("connectToDatabase.php");


$query = "SELECT * FROM CartProduct WHERE cartID = $_SESSION[shoppingCartID]";

$products = $db->query($query);
$productCount = mysqli_num_rows($products);



?>