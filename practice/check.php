<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check</title>
</head>
<body>
<?php
$myAge=$_GET['age'];
$username=$_GET['username'];
$choice=$_GET['option'];
$adult="if you are over 21you can buy anything";
$middle_age="if you are over 18 you can buy mugs or sausage rolls";
$teenager="you have to be over 16 to buy mugs";
switch($choice){
    case "Mugs":
        echo $teenager;
        break;
    case "":
        echo $middle_age;
        break;
    case "3":
        echo $adult;
        break;
}
?>
<p> Thanks for your patronage</p>
</body>
</html>