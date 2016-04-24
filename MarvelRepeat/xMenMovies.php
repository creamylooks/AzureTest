<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 13:24
 */
include ('connection.php');
$collect= "SELECT * FROM marvelmovies WHERE title LIKE '%X-MEN%'";
$pointer= mysqli_query($sercon,$collect);
//or      $pointer=$sercon->query($collect);
$row=(mysqli_num_rows($pointer));
echo "<table><tr><th>Year Released</th><th>Title</th><th>Production Studio</th><th>Notes</th></tr>";
while($row>0){
    $result=mysqli_fetch_array($pointer);
    echo "<tr>
          <td>{$result['yearReleased']}</td>;
          <td>{$result['title']}</td>;
          <td>{$result['productionStudio']}</td>;
          <td>{$result['notes']}</td></tr> ";
    $row--;
}
echo"</table>";

