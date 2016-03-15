<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP LOGIN Form Without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>PHP Login Form Without Session</h1>
<div class="Login Box">
    <h3>Login Form</h3>
    <br><br>
<form method ="Post" action="login.php">
  <label>Username:</label><br>
    <input type ="text" name = "Username" placeholder ="Username"/><br><br>
  <label>Password:</label><br>
    <input type = "password" name ="password" placeholder="password"/><br><br>
    <input type ="Submit" name = "Submit" value = "login"/>
    </form>
    <div class = "error"><?php ?><?php ?></div>
    </div>
</body>
</html>