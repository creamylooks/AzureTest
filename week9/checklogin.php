<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 11/04/2016
 * Time: 09:48
 */

$username=$_POST["username"];
$password=$_POST["password"];

if ($username=="damola" && $password=="damola"){
  setcookie('access_level','standarduser');
}
header('location:homepage.php');