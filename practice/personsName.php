<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 16/04/2016
 * Time: 18:18
 */
function personProfile($name,$noOfSpecs,$noOfMugs,$noOfSausage){

    $xx=($noOfSpecs*$noOfMugs*$noOfSausage);
    $res=10*(($xx*$xx)/2);
  echo "wanted:". $name ."<br>"."Known to be in possession of the following items: <br>"."Specs($noOfSausage)<br>"."Mugs($noOfMugs)<br>"."Sausage Rolls ($noOfSausage)<br>"."Award for Capture: £".$res;

}
personProfile("jibola",10,20,30);
personProfile("dewale",15,2,40);
personProfile("Lanre",20,12,23);