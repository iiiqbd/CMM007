<!DOCTYPE html>
<html>
<head>
    <title>
        PHP Pracitce
    </title>
</head>

<body>
<p>
    <?php

    $wantedgood = "sausage rolls";

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