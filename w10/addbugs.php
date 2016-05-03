<?php

include('db_conn.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">

</head>
<!-- start of body-->
<body>
<!-- start of header-->
<header>
    <img src="assets/images/logo.png" alt="Bug tracker logo" id="logo">
    <h1>Bug Tracker</h1>
    <h1>Keeping track of all the pesky little bugs</h1>
</header>
<!-- end of header-->

<!-- start of main-->
<main>

    <!-- start of aside-->
    <aside>
        <!-- start of navigation-->
        <nav>
            <ul>
                <li><a href="showbugs.php">All Bug Items</a></li>
                <li><a href="showbugs.php">Android Bugs</a></li>
                <li><a href="showbugs.php">iOS Bugs</a></li>
                <li><a href="showbugs.php">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
        <!-- end of navigation-->
    </aside>
    <!-- end of aside-->

<?
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // execute if requested using HTTP GET Method
        ?>
            <!-- start of form-->
            <form action="<?$_SERVER['PHP_SELF']?>" method="post">
                <label for="bugname">Bug Name</label>
                <input type="text" name="bugname" id="bugname" required>
                <br>
                <label for="bugsummary">Bug Summary</label>
                <textarea name="bugsummary" id="bugsummary" cols="50" rows="10" required></textarea>
                <br>
                <label for="bugcategory">Bug Category</label>
                <select name="bugcategory" id="bugcategory" required>
                    <option value="">Select Bug Category</option>
                    <option value="android">Android</option>
                    <option value="ios">iOS</option>
                    <option value="windows">Windows</option>
                </select>
                <br>
                <input type="submit" value="Submit">
                <br>
            </form>
            <!-- end of form-->
        <? }

    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // execute if requested using HTTP POST Method

        $bugName = $_POST["bugname"];
        $bugCategory = $_POST["bugcategory"];
        $bugSummary = $_POST["bugsummary"];

        $sql = "INSERT INTO bugs (bugName, bugCategory, bugSummary) VALUES ('$bugName', '$bugCategory', '$bugSummary')";
        $result = mysqli_query($conn,$sql);
        header('location: index.php');
    }

    else {
        header('location: index.php');
    }
    ?>




    <!-- end of main-->
</main>

<!-- start of footer-->
<footer>
    <p>
        &copy; Designed by Uchechi Adiele, [2016]
    </p>
</footer>
<!-- end of footer-->

</body>
<!-- end of body-->

</html>



<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 25/04/2016
 * Time: 10:47
 */


?>