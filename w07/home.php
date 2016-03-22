<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <h1>Hello!</h1>
</body>

<?php  // displays the currently logged in user ?>

<?php  $sql = "SELECT * FROM users"; // displays all the users of the site
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $username = $row['username'];
            echo "<p>" . $username . "</p>";
        }

/*
$result = mysqli_query($db, $sql);
while($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {

}
*/
?>

</html>