<?php
session_start();
include("connectToDatabase.php");

$query = "SELECT * FROM Products";

//the line two lines below do the exact same things! 
//$products = mysqli_query($db, $query);
$products = $db->query($query);
$productCount = mysqli_num_rows($products);

echo "<ul class=collection>";
for($i=0; $i < $productCount; $i++ )
{
    $row = mysqli_fetch_array($products, MYSQLI_ASSOC);
    echo "<li class=collection-item>
    <div class=card horizontal>";
    if(!is_null($row['imagePath']))
    {
        echo "<div class=card-image>";
        echo "<img src='../pictures/products/$row[imagePath]'/>";
        echo "</div>";
    }
      echo "<div class=card-stacked>
        <div class=card-content>
          <h4 class=header>$row[name]</h4>
          <p>$row[description]</p>";
      if ($row['inventory'] == 0) {
        echo "<p>Item out of stock</p>";
      } else {
        echo "<p>Inventory: $row[inventory]</p>";
      }
        echo number_format($row[price], 2);
        echo "</div>
        <div class=card-action>
          <a href=../scripts/addToCart.php?productID=$row[productID] > <i class='material-icons'>add_shopping_cart</i></a>
        </div>
      </div>
    </div>
    </li>";
}
echo "</ul>";


?>