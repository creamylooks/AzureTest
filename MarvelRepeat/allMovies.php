<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 13:23
 */
include ('connection.php');
$collect= "SELECT * FROM marvelmovies";
$pointer= mysqli_query($sercon,$collect);
//or      $pointer=$sercon->query($collect);
while($row = $result->fetch_array()){
    echo "
          $row[yearReleased];
          $row[title];
          $row[productionStudio];
          $row[notes];
    ";

}