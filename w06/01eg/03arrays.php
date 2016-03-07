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
    $provisionedActivity = array("Specs", "Drugs", "Rock and Roll", "Sausage Rolls");

    $wantedgood = "mugs";

    echo "You have to be 18 to buy";

    switch ($wantedgood) {

        case "specs":
            echo " Specs!";
            break;

        case "mugs":
            echo " Hugs!";
            break;

        case "sausage rolls":
            echo " Sausage rolls!";
            break;

        default:
            echo " invalid product!";
    }

    foreach ($provisionedActivity as $x) {
        print "<p>$x</p>";
    }

    print "<p>unset($provisionedActivity[3])</p>";


    ?>
</p>
</body>
</html>