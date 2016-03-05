<!DOCTYPE html>
<html>
<head>
  <title>
    PHP Switch Practice
  </title>
</head>

<body>
<p>
  <?php
  $myage = 15;
  $myname = "Sam";

  echo "Your name is" . $myname . "you can buy";

  switch ($myage) {

    case 16:
      echo " Specs!";
      break;

    case 18:
      echo "Mugs!";
      break;

    case 21:
      echo " Sausage rolls!";
      break;

    default:
      echo " nothing, because you are under-aged!";
  }

  ?>
</p>
</body>
</html>