<?php
session_start();
include("connectToDatabase.php");
$usersID = $_SESSION['usersID'];
$productID = $_GET['productID'];

function addProductToCart($cartID, $productID) 
{
    include("connectToDatabase.php");
    $create_cart_product = "INSERT INTO CartProduct (productID, cartID) VALUES ($productID, $cartID)";
    $add_to_db = $db->query($create_cart_product);
}

function createShoppingCart($usersID) 
{
    include("connectToDatabase.php");
    $create_cart_query = "INSERT INTO ShoppingCart (usersID) VALUES ($usersID)";
    $get_user_cart_query = "SELECT * FROM ShoppingCart WHERE usersID = $usersID";

    $db->query($create_cart_query);
    $cart = $db->query($get_user_cart_query);

    if(!$db->commit())
    {
        echo "<script>alert('Could not create your shopping cart cuz we're bad at developing')</script>";
    }
}


// query to get product info
$get_product_info_query = "SELECT * FROM Products WHERE productID = $productID";
$product = $db->query($get_product_info_query);
$product_row = mysqli_fetch_array($product, MYSQLI_ASSOC);
$product_inventory = $product_row['inventory'];
echo $product_inventory;
if ($product_inventory > 0) {
    echo "inside the if";
    $get_user_cart_query = "SELECT * FROM ShoppingCart WHERE usersID = $usersID";
    echo $get_user_cart_query;
    $cart = $db->query($get_user_cart_query);
    $cartExists = mysqli_num_rows($cart);
    if(is_null($cart)){
        echo "cart from db is null";
    }
    if($cartExists > 0) 
    {
        // if the user already has a cart
        $cart_row = mysqli_fetch_array($cart, MYSQLI_ASSOC);
        $cartID = $cart_row['shoppingCartID'];
        addProductToCart($cartID, $productID);
    }
    else 
    {
        // if the user needs a cart created
        $cartID = createShoppingCart($usersID);
        addProductToCart($cartID, $productID);
        
    }
} else {
    echo "<script>alert('Product out of stock, come back later.')</script>";
}





/*
$products = $db->query($query);
$productCount = mysqli_num_rows($products);
*/



?>