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
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>

            <div class="container">
                <h4>Thanks for visiting Textbook Exchange! Goodbye!!</h4>
                <span>Click here to <a href="login.php">login</a> again.</span>
            </div>
    </body>

    <footer>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>