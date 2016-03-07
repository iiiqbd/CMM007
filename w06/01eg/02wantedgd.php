<!DOCTYPE html>
<html>
<head>
    <title>
        Wanted Good
    </title>
</head>

<body>
<p>
    <?php

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