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
        $_SESSION['usersID'] = $row['usersID'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['email'] = $row['email'];
        header("Location:  ../pages/index.html");
    }
}
mysqli_close($db);
?>