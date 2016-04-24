<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 11/04/2016
 * Time: 09:11
 */

$username = $_POST['name'];
$password = $_POST['password'];

if ($username == "user" && $password == "pass");
{
    setcookie('access_level_cookie', 'standarduser');
}

header('location: loggedin.php');

?>


