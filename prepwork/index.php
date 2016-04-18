<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>index page</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div id="formbox">
    <h3>Login Form</h3><br>
    <form action="login.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <button>Submit</button>
    </form>
    <div class = "error"><?php ?><?php ?></div>
</div>
</body>
</html>