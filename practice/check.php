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
$provision= array("Mugs","Specs","Sausage Rolls");
foreach($provision as $x){
    echo "<p>$x</p>";
}
?>

</body>
</html>