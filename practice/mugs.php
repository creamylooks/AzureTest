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
    echo $names[$winner];
    unset($names[$winner]);
    echo "<br>";
}