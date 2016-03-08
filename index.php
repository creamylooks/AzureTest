<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
   <?php
      $myAge=20;
      if ($myAge>16 && $myAge <=18) {
          print "Buy Specs";
      }
      elseif($myAge>18 && $myAge <=21) {
          print "Buy Mugs and/or Specs";
      }
      elseif($myAge>21){
          print "Buy Mugs or specs or Sausage rolls";
      }
      else {
          print "You are a Minor";
      }
   ?>
</p>
</body>
</html>