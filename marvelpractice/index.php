<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
    </head>
    <body>
        <div id="loginbox">
            <form action="index.php" method="post">
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="user"><br><br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="password">
                <button>Submit</button>
            </form>
        </div>
    <?php
        if(empty ($_POST['username'])||empty($_POST['password'])){
            echo "<p>"."please enter your username and password"."<p>";
        }
        else {
            include('dbconnect.php');
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql= "SELECT * FROM people WHERE username='".$username."' AND password='".$password."'";
            $result=mysqli_query($db,$sql);
                if(mysqli_num_rows($result)==1){
                    header("location:home.php");
                }
                else{ echo "<p>"."Username or Password Incorrect"."</p>";}

        }
    ?>
    </body>
 </html>
