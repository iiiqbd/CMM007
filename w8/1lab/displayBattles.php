<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Displaying all Battles</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Display all Battles</h2>
    <p><a href="index.php">Back to homepage...</a></p>
</header>
<main>
    <?
    include ("db_connect.php");

    if(isset($_GET['id'])) {
        $superheroID = $_GET['id'];
        $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
    }
else {
    $sql_query = "SELECT * FROM superherobattles";
}


    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $mainSuperpower = $row['mainSuperpower'];
        $villainFought = $row['villainFought'];
        echo "<article>
            <p> The superhero known as <strong>{$firstname} {$lastname}</strong> recently fought <strong>{$villainFought}</strong> using <strong>{$mainSuperpower}</strong> </p>
            </article>";
    }
    ?>
</main>
</body>
</html>
