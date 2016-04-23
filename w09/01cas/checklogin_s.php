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
    session_start();
    $_SESSION['access_level_session'] = 'standarduser';
}

header('location: loggedin_s.php');

?>



