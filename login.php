<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 14/03/2016
 * Time: 10:31
 */
include ('DBconnect.php');
if (empty($_POST ["USERNAME"])|| empty ($_POST ["USERNAME"]));
{
   echo "Both fields are Required.";

}else
{}

{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT uid FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);
    if (mysqli_row_num($result) == 1) ;
    {
        header("location: home.php");
    }else
    {
        echo "Incorrect username or password.";
    }
}

?>
