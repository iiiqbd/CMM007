<?php
session_start();
session_unset();
session_destroy();
//header("location: login.php"); // display message below when logout button is clicked instead
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Goodbye!</title>
    </head>
    <body>
            <h4>Thanks for visiting Textbook Exchange! Goodbye!!</h4>

            <div class="container">
                <span>Click here if you to want to <a href="login.php">login</a> again.</span>
            </div>
    </body>
</html>