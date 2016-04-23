<?php
/**
 * Created by PhpStorm.
 * User: Uche
 * Date: 023, 23 Apr 2016
 * Time: 15:18
 */
define('SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('USER','b46959495d6832');
define('PASSWORD','0eb13c86');
define('DB','dev2705db');
$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);

if ($conn){
    echo "connection is up";
}else{
    echo "Error".mysqli_error($conn);
}

/*$db = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "b46959495d6832",
    "0eb13c86",
    "dev2705db"
);*/

// test if connection was established, and print any errors
