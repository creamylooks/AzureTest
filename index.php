<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
   <?php
      $myAge=20;
      if ($myAge>16) {
          print "Buy Specs";
      }
      elseif($myAge>18) {
          print "Buy Mugs";
      }
      elseif($myAge>21){
          print "Buy Sausage Rolls";
      }
      else {
          print "You are a Minor";
      }
   ?>
</p>
</body>
</html>