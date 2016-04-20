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
$hero=$_POST['superhero'];
$sql="INSERT INTO 'superheros' ('firstName','lastName','mainSuperpower') VALUES ('$fname','$lname','$hero')";
