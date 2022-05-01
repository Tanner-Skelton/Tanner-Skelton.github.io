<?php
session_start();
include("connectToDatabase.php");

$cartProductID = $_GET['cartProductID'];
$productID = $_GET['productID'];

function addToInventory($productID) 
{
    include("connectToDatabase.php");

    $increment_inv_query = "UPDATE Products SET inventory = inventory + 1 WHERE productID = $productID";

    $db->query($increment_inv_query);

    $db->commit();

}

function removeProductFromCart($cartProductID, $productID) 
{
    include("connectToDatabase.php");
    $remove_product_query = "DELETE FROM CartProduct WHERE cartProductID = $cartProductID";
    
    $db->query($remove_product_query);
    addToInventory($productID);

    $db->commit();

}

removeProductFromCart($cartProductID, $productID);

header("Location: ../pages/shoppingCart.php");




?>