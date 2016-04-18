<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 15:21
 */
define('db_server','ap-cdbr-azure-east-c.cloudapp.net');
define ('db_username', 'b28b1ba3c7f01f');
define ('db_password', '12d5f6d8');
define('db_database', 'creamy');
$db = mysqli_connect(db_server,db_username,db_password,db_database);
