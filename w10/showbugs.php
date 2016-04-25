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

    <!-- start of section-->
    <h2>Bug Name</h2>
    <h3>Bug Category</h3>
    <p>
        Bug Summary Bug Summary Bug Summary Bug Summary
        Bug Summary Bug Summary Bug Summary Bug Summary
        Bug Summary Bug Summary Bug Summary Bug Summary
    </p>
    hr
    <h2>Bug Name</h2>
    <h3>Bug Category</h3>
    <p>
        Bug Summary Bug Summary Bug Summary Bug Summary
        Bug Summary Bug Summary Bug Summary Bug Summary
        Bug Summary Bug Summary Bug Summary Bug Summary
    </p>

    <!-- end of section-->

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
 * Time: 10:11
 */

include('db_conn.php');
$sql = "SELECT bugName, bugCategory, bugSummary
        FROM bugs";
$result = mysqli_query($conn,$sql);
echo "
<table>
<tr>
<th>Bug Name</th>
<th>Bug Category</th>
<th>Bug Summary</th>
</tr> ";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['bugName']}</td>
        <td>{$row['bugCategory']}</td>
        <td>{$row['bugSummary']}</td>
            </tr>";
    }
}
echo "</table>";