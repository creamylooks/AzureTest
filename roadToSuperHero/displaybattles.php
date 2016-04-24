<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 17:09
 */
$name="SELECT * FROM superherobattles";
$x=mysqli_query($sercon,$name);
$xyz=mysqli_num_rows($x);
echo "<table><tr><th>Super Hero</th><th>Villian Fought</th></tr>";
while($xyz>0){
    $abc=mysqli_fetch_array($x);
    echo"
        <tr>
          <td>{$abc['mainSuperPower']}</td>
          <td>{$abc['villanFought']}</td></tr> ";
 $xyz--;
}
echo "</table>";