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
    echo "The link to the Database is up";
}else{
    echo "Error".mysqli_error($conn);
}
