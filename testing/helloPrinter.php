<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 21:43
 */
$reply=$_GET['planet'];
switch($reply){
    case 'Earth':
        echo "Hello Earth";
        break;
    case 'Mars':
        echo "Hello Mars";
        break;
    case 'Uranus':
        echo "Hello Uranus";
        break;
}