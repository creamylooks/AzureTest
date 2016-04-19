<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 19:57
 */
$all=$_GET['All Movies'];
$marvel=$_GET['Movies By Marvel'];
$byYear=$_GET['Movies After 2010'];
$xMen=$_GET['All X-Men Movies'];
include('dbconnect.php');
echo "        Movie ID      "."      Year Released     ".     "Title"               ."      Production Studio      "."                    Notes                 "."<br><br>";
$result=mysql_query ($db,$sql);


switch($_GET){
    case $all:
        $row = $result->fetch_array();
        $id = $row['marvelMovieID'];
        $movietitle = $row['title'];
        $movieyear = $row['yearReleased'];
        $studio = $row['Production Studio'];
        $comments = $row['notes'];
        $sql=mysqli_query("SELECT * FROM marvelmovies");
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