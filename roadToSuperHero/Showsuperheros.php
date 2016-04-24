<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 17:05
 */
include("connection.php");
$sql="SELECT * FROM superheros";
$execute=mysqli_query($sercon,$sql);
$row=mysqli_num_rows($execute);
echo "<table><tr><th>First Name</th><th>Last Name</th><th>Super Power</th></tr>";
while($row>0){
    $ans=mysqli_fetch_array($execute);
    echo"
    <tr>
          <td>{$ans['firstName']}</td>
          <td>{$ans['lastName']}</td>
          <td>{$ans['mainSuperpower']}</td></tr> ";
 $row--;
}
echo "</table>";
