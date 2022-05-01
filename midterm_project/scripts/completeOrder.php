<?php
session_start();


function deleteCartProducts($shoppingCartID)
{
    include("connectToDatabase.php");
    $query = "DELETE FROM CartProduct WHERE cartID = $shoppingCartID";

    $db->query($query);
    $db->commit();
}

function deleteCart($shoppingCartID)
{
    include("connectToDatabase.php");

    $query = "DELETE FROM ShoppingCart WHERE shoppingCartID = $shoppingCartID";
    $db->query($query);
    $db->commit();
}

deleteCartProducts($shoppingCartID);
deleteCart($shoppingCartID);


echo 
    "<div> 
        <h2 class=header> Congratulations! </h2>
        <p> You have successfully completed your order. We hope you love all your new stuff. It will get there eventually :) </p>
    </div>"


?>