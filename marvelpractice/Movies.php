<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 19:57
 */
$resp=$_GET['movies'];
include('dbconnect.php');
echo "Movie ID"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Year Released"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Title"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Production Studio"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Notes"."<br><br>";

echo $resp;

switch($resp){
    case 'allMovies':
        echo"yea";
        $sql=mysqli_query("SELECT * FROM marvelmovies");
        $result=mysql_query ($db,$sql);
        $row = $result->fetch_array();
        $id = $row['marvelMovieID'];
        $movietitle = $row['title'];
        $movieyear = $row['yearReleased'];
        $studio = $row['Production Studio'];
        $comments = $row['notes'];
        while($row) {

            echo "<p>" . $id . "</p>" . "&nbsp;&nbsp;&nbsp;" . "<p>" . $movieyear . "</p>" . "&nbsp;&nbsp;&nbsp;" . "<p>" . $movietitle . "</p>" . "&nbsp;&nbsp;&nbsp;" . "<p>" . $studio . "</p>" . "&nbsp;&nbsp;&nbsp;" . "<p>" . $comments . "</p>" . "<br><br>";
        }
    break;
    case $marvel:
        $sql=mysqli_query("SELECT * FROM marvelmovies WHERE productionStudio= 'Marvel Studios'");
        while($row){
            echo "<p>".$id."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movieyear."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movietitle."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$studio."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$comments."</p>"."<br><br>";
        }
    break;
    case $byYear:
        $sql=mysqli_query("SELECT * FROM marvelmovies WHERE yearReleased>='2010'");
        while($row){
            echo "<p>".$id."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movieyear."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movietitle."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$studio."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$comments."</p>"."<br><br>";
        }
    break;
    case $xMen:
        $sql=mysqli_query("SELECT * FROM marvelmovies WHERE title LIKE 'X-Men'");
        while($row){
            echo "<p>".$id."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movieyear."</p>". "&nbsp;&nbsp;&nbsp;"."<p>".$movietitle."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$studio."</p>"."&nbsp;&nbsp;&nbsp;"."<p>".$comments."</p>"."<br><br>";
        }

}