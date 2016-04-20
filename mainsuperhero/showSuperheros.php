<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 20/04/2016
 * Time: 17:25
 */
include ("dbconnect.php");
$sql= "SELECT * FROM superheros";
$result=$db->query($sql);
echo "'<table>'.'<thead>'.'<th>'.'superheroID'.'<th>'.'firstname'.'<th>'.'lastname'.'<th>'.mainSuperpower'.'<thead>'";
while($row=$result->fetch_array()){
    $row['superheroID'];
    $row['firstname'];
    $row['lastname'];
    $row['mainSuperpower'];
    echo
}
echo "</table>";