<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 16/04/2016
 * Time: 09:37
 * */
$names=array("fffd","fdfdsfsd","DVSDV","ffdsaf","GGSGS","DFDSFSD","DGSDg","FSDBFGF","EFEWFew","WGdsgsd","FEDFD");
sort($names);
for ($i=1; $i<4; $i++) {
    $winner = array_rand($names, 1);
    switch($i){
        case 1:
            echo"The winner of the smugs is". $names[$winner]."<br>";
            break;
        case 2:
            echo"The winner of the cream is". $names[$winner]."<br>";
            break;
        case 3:
            echo"The winner of the sausage rolls is". $names[$winner]."<br>";
            break;
    }

    unset($names[$winner]);



}