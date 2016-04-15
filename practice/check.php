<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>check</title>
</head>
<body>
<h1> am I ok</h1>
<?php
for ($a=1; $a<=30; $a++)
{
   // if ($a = 1) {
     //   echo "on the " . $a . "st  of the month specs are available";
   // }
   /* if ($a % 2 == 0) {
        if ($a = 2 || $a = 22) {
            echo "on the " . $a . "nd  of the month specs are available";
        } else {
            echo "on the " . $a . "th of the month specs are available";
        }
    }
    if ($a % 3 == 0) {
        if ($a = 3) {
            echo "on the " . $a . "rd  of the month specs are available";
        } elseif ($a = 21) {
            echo "on the " . $a . "st  of the month specs are available";
        } else {
            echo "on the " . $a . "th of the month specs are available";
        }

    }
    if ($a % 4 == 0) {
        echo "on the " . $a . "th of the month specs are available";
    }
    /*if($a %2 !=0 && $a%3 !=0 && $a%4 !=0){
        echo "nothing is available on the ".$a."th of the month";
   }
 */

    echo $a;
}

?>

</body>
</html>