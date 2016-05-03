include("connection.php");
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bugs</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
            <!-- Begining of Header -->
            <header>
                <img src="logo.png" alt="logo of company"/>
                <div id="headtext">
                    <h1>BugTracker</h1>
                    <p>Keeping track of all the pesky little bugs</p>
                </div>
            </header>
            <!-- End of Header -->
            <!-- Begining of Main -->
            <main>
                <div class="clearer"></div>
                <!-- Begining of Navigation -->
                <nav>
                    <ul>
                        <li><a href="showbugs.php?category=all">All Bug Items</a></li>
                        <li><a href="showbugs.php?category=android">Android Bugs</a></li>
                        <li><a href="showbugs.php?category=iOS">iOS Bugs</a></li>
                        <li><a href="showbugs.php?category=windows">Windows Bugs</a></li>
                        <li><a href="addbugs.php">Insert Bug</a></li>
                    </ul>
                </nav>
                <!-- End of Navigation -->
                <!-- Begining of Article -->
                <article>

                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

                        <label>Bug Name: &nbsp; &nbsp;&nbsp;&nbsp;
                            <input type="text" name="Bugname" required><br/>
                        </label>


                        <label>Bug Summary &nbsp;
                            <textarea name="summary" cols="14" rows="3" required></textarea><br/>
                        </label>
                        <label>Bug Category &nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="bugcat">
                                <option disabled>Select a Bug</option>
                                <option name="Android">Android Bugs</option>
                                <option name="iOS">iOS Bugs</option>
                                <option name="windows">Windows Bugs</option>
                            </select><br/>
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">


                    </form>
                </article>
                <!-- End of Article -->
            </main>
            <!-- End of Main -->
            <!-- Begining of Footer -->
            <footer>
                <div class="clearer"></div>
                <p>&copy;Designed By Ibrahim,2016</p>
            </footer>
            <!-- End of Footer -->
</body>
</html>
        <?php if($_SERVER['PHP_SELF']=='GET'){
            header ("location:addbug.php");
        }
        elseif($_SERVER['PHP_SELF']=='POST'){
            $bname=$_POST['Bugname'];
            $summy = $_POST['summary'];
            $bcat = $_POST['bugcat'];

            $sql="INSERT INTO bugs (bugName,bugCategory, bugSummary) VALUES ($bname,$bcat,$summy)";
        }//else{header("location:index.php");}
        ?>