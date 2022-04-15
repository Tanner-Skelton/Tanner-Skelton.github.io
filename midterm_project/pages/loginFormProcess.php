<?php
session_start();
include("connectToDatabase.php");
$query = "SELECT * FROM Users WHERE email = '$_POST[loginEmail]'";
$rowsWithMatchingEmail = mysqli_query($db, $query);
$numberOfRecords = mysqli_num_rows($rowsWithMatchingEmail);
if ($numberOfRecords == 0) {
    echo "You are not in the system, go register here.";
    echo "<h3><a href='registerForm.php'>click here</a></h3>";
} 
if ($numberOfRecords > 0) {
    $row = mysqli_fetch_array($rowsWithMatchingEmail, MYSQLI_ASSOC);
    if ($_POST['loginPassword'] == $row['userPassword']) {
        echo "Yay! You're logged in now as: ";
        echo "".$row['firstName']."  ".$row['lastName'];
        echo "<h3><a href='index.html'>Click here to go home</a></h3>";
    }
}
mysqli_close($db);
?>