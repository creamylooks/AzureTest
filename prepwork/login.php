<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 18/04/2016
 * Time: 15:29
 */
include('dbconnect.php');

if(empty($_POST['username'])|| empty ($_POST['password'])){
    echo "Both fields are Required";
}
else{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "SELECT p_id FROM people WHERE username=$username AND password=$password";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1){
        header("location:home.php");
    }else{echo "Username or password incorrect.";
    header("location:index.html");
    }
}