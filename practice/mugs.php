<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 16/04/2016
 * Time: 09:37
 * */
$names=array("fffd","fdfdsfsd","DVSDV","ffdsaf","GGSGS","DFDSFSD","DGSDg","FSDBFGF","EFEWFew","WGdsgsd","FEDFD");
sort($names);
$items=array("smugs","cream","rolls");
for ($i=1; $i<4; $i++) {
    $winner = array_rand($names, 1);
    echo"The winner of the".$items[0]." is". $names[$winner]."<br>";
    $items[0]++;
    unset($names[$winner]);

}