<?php
/**
 * Created by PhpStorm.
 * User: 0303077
 * Date: 20/03/2016
 * Time: 15:59
 */

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b46959495d6832');
define('DB_PASSWORD', '0eb13c86');
define('DB_DATABASE', 'dev2705db');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>