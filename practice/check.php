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

$adult="you are allowed to buy mugs or sausage rolls or Specs";
$middle_age="you are allowed to buy mugs or sausage rolls";
$teenager="you are allowed to buy only mugs";
$kid="you are too young";
if($myAge<=16){
    echo $kid;
}
elseif($myAge>16 && $myAge<=18){
    echo $teenager;
}
elseif($myAge>18 && $myAge<=21){
    echo $middle_age;
}
else{echo $adult;}
?>
<p> Thanks for your patronage</p>
</body>
</html>