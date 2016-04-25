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
                <li><a href="bugs.html">All Bug Items</a></li>
                <li><a href="bugs.html">Android Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a></li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="bugs.html">Insert Bug</a></li>
            </ul>
        </nav>
        <!-- end of navigation-->
    </aside>
    <!-- end of aside-->

    <!-- start of form-->
    <form action="" method="post">
        <label for="bugname">Bug Name</label>
        <input type="text" name="bugname" required>
        <br>
        <label for="bugsummary">Bug Summary</label>
        <textarea name="comments" cols="50" rows="10" required></textarea>
        <br>
        <label for="bugcategory">Bug Category</label>
        <select name="category">
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