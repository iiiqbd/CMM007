<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 25/04/2016
 * Time: 10:15
 */

define('SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('USER','b46959495d6832');
define('PASSWORD','0eb13c86');
define('DB','dev2705db');
$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);

if ($conn){
    echo "";
}else{
    echo "Error".mysqli_error($conn);
}


?>


<!---->
<!---->
<?php
//
//define ('DB_SERVER', "ap-cdbr-azure-east-c.cloudapp.net");
//define ('DB_USERNAME', "b53af31c1763b4");
//define ('DB_PASSWORD', "25b4cd41");
//define ('DB_DATABASE', "acsm_5da9df19e183e3e");
//
//$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
//
//if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
//}
//?>



