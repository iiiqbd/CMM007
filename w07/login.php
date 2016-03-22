<?php
include("dbconnect.php"); //establishes connection with our database
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 20/03/2016
 * Time: 16:04
 */

if(empty($_POST["username"]) || empty($_POST["password"]) )
{
    echo "Both fields are required.";
} else {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";

    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1)
    {
        header("location: home.php"); // redirect to homepage
    } else {
        echo "Incorrect Username or Password.";
    }

} // end of outer else statement

?>