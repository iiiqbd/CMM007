<?php
session_start();
session_unset();
session_destroy();
//header("location: login.php"); **********************
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Goodbye!</title>
    </head>
    <body>
            <h3>Thanks for visiting! Goodbye!!</h3>
    </body>
</html>