<?php
include("connectToDatabase.php");
//session_start();
if (emailAlreadyExists($db, $_POST['registrationEmail']))
{
    echo "<h3>Sorry, but your e-mail
          address is already registered.</h3>";
    echo "<h3>
    <a href='../pages/registerForm.php'>click here to go back</a>.</h3>";
} else {
    $query = "INSERT INTO Users(
        firstName,
        lastName,
        email,
        userPassword
    )
    VALUES (
        '$_POST[firstName]',
        '$_POST[lastName]',
        '$_POST[registrationEmail]',
        '$_POST[registrationPassword]'
    );";
    $success = mysqli_query($db, $query);
    header("Location:  ../pages/loginForm.php");
}
mysqli_close($db);

function emailAlreadyExists($db, $email)
{
    $query =
      "SELECT *
      FROM Users 
      WHERE email = '$email'";
    $emails = mysqli_query($db, $query);
    $numRecords = mysqli_num_rows($emails);
    return ($numRecords > 0) ? true : false;
}
?>