<?php
session_start();
$shoppingCartID = $_GET["shoppingCartID"];
include("../common/document_head.php");

include("../scripts/completeOrder.php")
?>