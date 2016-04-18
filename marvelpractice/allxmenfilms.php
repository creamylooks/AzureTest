<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 18:02
 */
include('dbconnect.php');
$sql=mysqli_query("SELECT * FROM marvelmovies WHERE title LIKE 'X-Men'");
$result=mysql_query ($db,$sql);
echo "<p>"."Movie ID"."</p>". "&nbsp;&nbsp;&nbsp;"."<p>"."Year Released"."</p>". "&nbsp;&nbsp;&nbsp;"."<p>"."Title"."</p>"."&nbsp;&nbsp;&nbsp;"."<p>"."Production Studio"."</p>"."&nbsp;&nbsp;&nbsp;"."<p>"."Notes"."</p>"."<br><br>";
while($row = $result->fetch_array()){
    $id=$row['marvelMovieID'];
    $movietitle=$row['title'];
    $movieyear=$row['yearReleased'];
    $studio=$row['Production Studio'];
    $comments=$row['notes'];
    echo "<p>".$id."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movieyear."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movietitle."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$studio."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$comments."</p>"."<br><br>";
}