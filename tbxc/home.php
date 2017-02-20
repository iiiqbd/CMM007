
<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location: login.php");
}
$username=$_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
        <div class="container">
            <form method="get" action="logout.php">
                <h3>Congratulations!</h3>
                <h5>You have successfully logged in to the Texbook Exchange Website!</h5>
                <h6>We hope you like our site and that you do some business with us.</h6>
                <button type="submit">Logout</button>
            </form>
        </div>
    </body>
</html>