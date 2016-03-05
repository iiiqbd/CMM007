<!DOCTYPE html>
<html>
<head>
    <title>
        PHP Array Example
    </title>
</head>

<body>
<p>
    <?php
    $provisionedActivity = array("Specs", "Drugs", "Rock and Roll");

    foreach ($provisionedActivity as $x) {
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>