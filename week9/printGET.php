<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 12/04/2016
 * Time: 09:44
 */
$username=$_GET{"username"};
$password=$_GET{"password"};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sendGet</title>
</head>
<body>
<ul>
    <li> <?php echo $username;?></li>
    <li> <?php echo $password;?></li>
</ul>
</body>
</html>