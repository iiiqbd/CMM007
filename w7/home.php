<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <h1>Hello!</h1>



<?php
include("dbconnect.php"); //establishes connection with our database
$sql = "SELECT * FROM users"; // displays all the users of the site
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $username = $row['username'];
            echo "<p>" . $username . "</p>";
            //print_r($row);
        }

/*
$result = mysqli_query($db, $sql);
while($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {

}
*/
?>

</body>
</html>