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

            for ($day = 1; $day <= 30; $day++) {

                if ($day = 1) {
                    print "no products are available";
                }
                if (($day % 2 == 0) && ($day != 4)) {
                    print "specs are available";;
                } else if ($day % 3 == 0) {
                    print "mugs are available";
                } else if (($day % 2 == 0) && ($day == 4)) {
                    print "specs and sausage rolls are available";
                } else if ($day % 5 == 0) {
                    $day = 5;
                }
            }
        ?>
    </p>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
</body>

</html>