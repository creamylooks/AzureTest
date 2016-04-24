<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 17:04
 */
include("connection.php");
$name1=$_POST['fname'];
$name2=$_POST['lname'];
$gender=$_POST['sex'];
$superHero=$_POST['superHero'];

  $ins="INSERT INTO superheros(firstName,lastName,mainSuperpower) VALUES('$name1','$name2','$superHero')";
if ($sercon->query($ins) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $ins . "<br>" . $sercon->error;
}