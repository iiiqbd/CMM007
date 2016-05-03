<?php
/**
 * Created by PhpStorm.
 */

$db = new mysqli(
    "ap-cdbr-azure-east-c.cloudapp.net",
    "b46959495d6832",
    "0eb13c86",
    "dev2705db"
);

// test if connection was established, and print any errors

if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

