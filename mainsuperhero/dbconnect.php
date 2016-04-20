<?php
/**
 * Created by PhpStorm.
 * User: Malick
 * Date: 19/04/2016
 * Time: 23:15
 */
define ('serverhost','ap-cdbr-azure-east-c.cloudapp.net');
define('username', 'b28b1ba3c7f01f');
define ('password', '12d5f6d8');
define('database', 'creamy');
$db=mysqli_connect('serverhost','username','password','database');