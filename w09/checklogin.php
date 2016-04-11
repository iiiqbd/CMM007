<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 11/04/2016
 * Time: 09:11
 */

session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInfrmation($accesslevel);

function displayAccessLevelInfrmation($accesslevel)
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