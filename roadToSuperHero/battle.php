<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Battle Form</title>
</head>
<body>
 <?php include("connection.php");?>
    <form action="Insertbattle.php" method="post">
        <label>
           Select Super Hero <select name="superhrochar">
                <?php
            $sql="SELECT mainSuperpower FROM superheros";
            $res=mysqli_query($sercon,$sql);
            $rows=mysqli_num_rows($res);
            while($rows>0){
                $arr=mysqli_fetch_array($res);
                echo "
                <option> {$arr['mainSuperpower']}</option>
                ";
                $rows--;
                }
                ?>
            </select>
        </label><br><br>
              VS<br><br>

        Select Opponent <label>
            <select name="opponent">
                <?php
            $sql="SELECT mainSuperpower FROM superheros";
            $res=mysqli_query($sercon,$sql);
            $rows=mysqli_num_rows($res);
            while($rows>0){
                $arr=mysqli_fetch_array($res);
                echo "
                <option> $arr{['mainSuperpower']}</option>
                ";
                $rows--;
                }
                ?>
            </select>
        </label>

    </form>
</body>
</html>