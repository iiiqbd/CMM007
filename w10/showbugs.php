<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? $bugCategory = $_GET['bugCategory'];
        echo $bugCategory; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">

</head>
<!-- start of body-->
<body>
<!-- start of header-->
<header>
    <img src="assets/images/logo.png" alt="Bug tracker logo" id="logo">
    <h1>Bug Tracker</h1>
    <h1>Here are all the bugs we have information on</h1>
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
                <li><a href="showbugs.php?bugCategory=android">Android Bugs</a></li>
                <li><a href="showbugs.php?bugCategory=ios">iOS Bugs</a></li>
                <li><a href="showbugs.php?bugCategory=microsoft">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
        <!-- end of navigation-->
    </aside>
    <!-- end of aside-->

    <?php
    /**
     * Created by PhpStorm.
     * User: 0303077
     * Date: 25/04/2016
     * Time: 10:11
     */
    include('db_conn.php');


    if(isset($_GET['bugCategory'])) {
        $bugCategory = $_GET['bugCategory'];
        $sql_query = "SELECT * FROM bugs where bugCategory = '$bugCategory'";
        $result = $conn->query($sql_query);
        echo "
        <table>
        <tr>
            <th>Bug Name</th>
            <th>Bug Category</th>
            <th>Bug Summary</th>
        </tr> ";

        if(mysqli_num_rows($result)>0){
            while($row = $result->fetch_array()){
                echo "<tr>
            <td>{$row['bugName']}</td>
            <td>{$row['bugCategory']}</td>
            <td>{$row['bugSummary']}</td>
        </tr>";
            }
        }
        echo "</table>";
    }else{

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

        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
            <td>{$row['bugName']}</td>
            <td>{$row['bugCategory']}</td>
            <td>{$row['bugSummary']}</td>
        </tr>";
        }
        }
        echo "</table>";

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



