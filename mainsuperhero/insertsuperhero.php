<?php
/**
 * Created by PhpStorm.
 * User: Malick
 * Date: 19/04/2016
 * Time: 23:12
 */
include('dbconnect.php');
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$hero=$_POST['superhero'];
$sql="INSERT INTO superhero (firstname,lastname,gender,fav_superhero) VALUES ('$fname','$lname','$gender','$hero')";
