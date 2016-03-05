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

    $wantedgood = "mugs";

    echo "You have to be 18 to buy";

    switch ($wantedgood) {

        case "specs":
            echo " Specs!";
            break;

        case "mugs":
            echo " Mugs!";
            break;

        case "sausage rolls":
            echo " Sausage rolls!";
            break;

        default:
            echo " invalid product!";
    }

    ?>
</p>
</body>
</html>