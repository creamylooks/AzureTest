<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
<form action="display.php" method="post">
    Firstname: <input type="text" name="firstname" placeholder="fname"><br><br>
    Lastname:  <input type="text" name="lastname" placeholder="lname"><br><br>
    SuperHero: <input type="text" name="superhero" placeholder="hero"><br><br>
    <label>
        <input type="radio" name="gender" value="Male" checked>
    </label>
    <label>
        <input type="radio" name="gender" value="Female" checked>
    </label>

</form>
</body>
</html>