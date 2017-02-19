
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
    </head>
    <body>
        <form method="get" action="logout.php">
            <p>Congratulations you have successfully logged in to the Texbook Exchange Website!</p>
            <p>We hope you like our site and that you do some business with us.</p>
            <button type="submit">Logout</button>
        </form>
    </body>
</html>