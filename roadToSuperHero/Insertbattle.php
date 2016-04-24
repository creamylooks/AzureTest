<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 17:08
 */
include("connection.php");
$hero=$_POST['superheros'];
$villian=$_POST['opponent'];

$noname="INSERT INTO battles (superheroID,villanFought) VALUES ('$hero','$villian')";
if ($sercon->query($noname) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $noname . "<br>" . $sercon->error;
}