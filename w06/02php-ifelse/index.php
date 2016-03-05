/*
 Created by PhpStorm.
 User: Uche
 Date: 005, 05 Mar 2016
 Time: 17:23
 */

<!DOCTYPE html>
<html>
<head>
  <title>
PHP Practice
</title>
</head>

<body>
  <p>
    <?php
      $myage = 15;
      $myname = "Sam";

      echo "Your name is " . $myname . " you can buy";
      if ($myage > 16) {
          print " Specs!";
      }
      else if ($myage > 18) {
          print "Mugs!";
      }
      else if ($myage > 21) {
          print " Sausage rolls!";
      }
      else {
          print " neither Specs, Mugs nor Sausage rolls because you are under-aged!";
      }

    ?>
</p>
</body>
</html>