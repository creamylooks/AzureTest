<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check</title>
</head>
<body>
<h1> am I ok</h1>
<?php

$todaygood=array("smugs","snacks","rolls");
$todaygood=rand(0,2);

while($todaygood<=17){
    echo $todaygood;
}
echo "nothing is availabe today";

?>

</body>
</html>