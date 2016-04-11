<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 11/04/2016
 * Time: 09:55
 */
function displayAccessLevelInformation($accessLevel){
    if (access_level == "standarduser"){
        echo "<p> You are currently logged in as a standard user </p>";
    }
    elseif(access_level=="root"){
        echo "<p> You are currently logged in as a root user </p>";
        echo "<p> You now have access to additional administrative features</p>";
    }
}