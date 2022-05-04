<?php
session_start();
include("connectToDatabase.php");


$query = "SELECT CP.cartProductID, CP.productID, CP.cartID, P.name, P.description, P.price, P.imagePath FROM CartProduct as CP JOIN Products as P ON CP.productID = P.productID WHERE CP.cartID = $_SESSION[shoppingCartID]";

$products = $db->query($query);
$productCount = mysqli_num_rows($products);
$totalPrice = 0;

echo "<ul class=collection>";
for($i=0; $i < $productCount; $i++ )
{
    $row = mysqli_fetch_array($products, MYSQLI_ASSOC);
    $totalPrice += $row[price];
    echo "<li class=collection-item>
    <div class=card horizontal>";
    if(!is_null($row['imagePath']))
    {
        echo "<div class=card-image1 style=width : 10%>";
        echo "<img src='../pictures/products/$row[imagePath]'/>";
        echo "</div>";
    }
      echo "<div class=card-stacked>
        <div class=card-content>
          <h4 class=header>$row[name]</h4>
          <p>$row[description]</p>";
        echo number_format($row[price], 2);
        echo "</div>
        <div class=card-action>
          <a href=../scripts/removeFromCart.php?productID=$row[productID]&cartProductID=$row[cartProductID] > <i class='material-icons'>clear</i></a>
        </div>
      </div>
    </div>
    </li>";
}
echo "</ul>";
echo "<div class=card horizontal>
  <div class=card-stacked>
  <div class=card-content>
    <p>Total Price:  ";
    echo number_format($totalPrice, 2);
    echo "</p>
  </div>
  <div class=card-action>
    <a href=../pages/completedOrder.php?shoppingCartID=$row[cartID]>Complete Order</a>
  </div>
  </div>
  </div> ";


?>