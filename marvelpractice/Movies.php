<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 19:57
 */
$resp = $_GET['movies'];
include('dbconnect.php');
//echo "Movie ID" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Year Released" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Title" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Production Studio" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Notes" . "<br><br>";

switch ($resp) {
    case 'allMovies':

        $sql = "SELECT * FROM marvelmovies";
        $result = $db->query($sql);
        $row = $result->fetch_array();
        echo "<table>
            <thead>
            <tr><td>Id</td><td>Movie ID</td><td>Year Released</td><td>Title</td><td>Production Studio</td><td>Notes</td>
            </tr></thead>";
        while ( $row = $result->fetch_array()) {
            $id = $row['marvelMovieID'];
            $movietitle = $row['title'];
            $movieyear = $row['yearReleased'];
            $studio = $row['Production Studio'];
            $comments = $row['notes'];
            echo "
            <td>{$id}</td>
            <td>{$movieyear}</td>
            <td>{$movietitle}</td>
            <td>{$studio}</td>
            <td>{$comments}</td><br>
             ";

        }
        echo "</table>";
        break;
    case 'moviesbymarvel':
        $sql = "SELECT * FROM marvelmovies WHERE productionStudio= 'Marvel Studios'";
        $result = $db->query($sql);
        $row = $result->fetch_array();

        while ($row = $result->fetch_array()) {
            $id = $row['marvelMovieID'];
            $movietitle = $row['title'];
            $movieyear = $row['yearReleased'];
            $studio = $row['Production Studio'];
            $comments = $row['notes'];
            echo "{$id}{$movieyear}{$movietitle}{$studio}{$comments}";

        }
        break;
    case 'moviesAfter2010':
        $sql = "SELECT * FROM marvelmovies WHERE yearReleased>='2010'";
        $result = $db->query($sql);
        $row = $result->fetch_array();

        while ( $row = $result->fetch_array()) {
            $id = $row['marvelMovieID'];
            $movietitle = $row['title'];
            $movieyear = $row['yearReleased'];
            $studio = $row['Production Studio'];
            $comments = $row['notes'];
            echo "{$id} {$movieyear}{$movietitle}{$studio} {$comments}";

        }
        break;
    case'xmen':
        $sql = "SELECT * FROM marvelmovies WHERE title LIKE 'X-Men'";
        $result = $db->query($sql);
        $row = $result->fetch_array();

        while ( $row = $result->fetch_array()) {
            $id = $row['marvelMovieID'];
            $movietitle = $row['title'];
            $movieyear = $row['yearReleased'];
            $studio = $row['Production Studio'];
            $comments = $row['notes'];
            echo "{$id} {$movieyear}{$movietitle}{$studio} {$comments}";

        }
        break;

}