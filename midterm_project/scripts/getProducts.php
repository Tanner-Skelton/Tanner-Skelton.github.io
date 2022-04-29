<?php
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
    if(!is_null($row['picture']))
    {
        echo  "<div class=card-image>";
        echo '<img src=data:image/jpeg;base64,'; echo base64_encode( $row['picture'] );
        echo '/>';
        echo "</div>";
    }
       
      echo "<div class=card-stacked>
        <div class=card-content>
          <h4 class=header>$row[name]</h4>
          <p>$row[description]</p>
          <p>"; 
          echo number_format($row[price], 2);
          echo "</p>
        </div>
        <div class=card-action>
          <a href=#>This is a link</a>
        </div>
      </div>
    </div>
    </li>";
}
echo "</ul>";

?>