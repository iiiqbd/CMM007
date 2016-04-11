<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loggedin with session</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 11/04/2016
 * Time: 09:10
 */

session_start();
$accesslevels = $_SESSION['access_level_session'];

displayAccessLevelInformation($accesslevels);

function displayAccessLevelInformation($accesslevel)
{
    if($accesslevel == "standarduser") {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif ($accesslevel == "root") {
        echo "<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p style = \"background-color: red\">You now have access to additional admin. features.</p>";
    }
}

?>



</body>
</html>
