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
$row=(mysqli_num_rows($pointer));
echo "<table><th><th>Year Released</th><th>Title</th><th>Production Studio</th><th>Notes</th></tr><br>";
while($row>0){
    $result=mysqli_fetch_array($pointer);
    echo "
          {$result['yearReleased']};
          {$result['title']};
          {$result['productionStudio']};
          {$result['notes']} ";
 $row--;
}
echo"</table>";