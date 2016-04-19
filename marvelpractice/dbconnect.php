<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 18:19
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b28b1ba3c7f01f');
define('DB_PASSWORD','12d5f6d8');
define('DB_DATABASE','creamy');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
else{
    echo "connected";
}