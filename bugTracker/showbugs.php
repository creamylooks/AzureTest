<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? include("connection.php");
            $show=$_GET['category'];
        switch($show){
            case 'all':
                echo "All Bugs";
            break;
            case 'android':
                echo "Android Bugs";
            break;
            case'iOS':
                echo "iOS Bugs";
            break;
            case 'windows':
                echo "Windows Bugs";
        }
        ?></title>
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
            <li><a href="showbugs.html">All Bug Items</a></li>
            <li><a href="showbugs.html">Android Bugs</a></li>
            <li><a href="showbugs.html">iOS Bugs</a></li>
            <li><a href="showbugs.html">Windows Bugs</a></li>
            <li><a href="addbugs.html">Insert Bug</a></li>
        </ul>
    </nav>
    <!-- End of Navigation -->
    <!-- Begining of Article -->
    <article>
        <?
        switch($show) {
            case 'all':
                $sql = "SELECT bugName,bugCategory, bugSummary FROM bugs";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['bugName']}</h2>
                        <p>{$answer['bugCategory']}</p>
                        <p>{$answer['bugSummary']}</p>
                  </section>";
                    $row--;
                }
            break;
            case 'android':
                $sql = "SELECT bugName,bugCategory, bugSummary FROM bugs WHERE bugCategory = 'AndroidBug'";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['bugName']}</h2>
                        <p>{$answer['bugCategory']}</p>
                        <p>{$answer['bugSummary']}</p>
                  </section>";
                    $row--;
                }
            break;
            case 'iOS':
                $sql = "SELECT bugName,bugCategory, bugSummary FROM bugs WHERE bugCategory = 'iOSBug'";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['bugName']}</h2>
                        <p>{$answer['bugCategory']}</p>
                        <p>{$answer['bugSummary']}</p>
                  </section>";
                    $row--;
                }
            break;
            case 'WindowsBug':
                $sql = "SELECT bugName,bugCategory, bugSummary FROM bugs WHERE bugCategory = 'WindowsBug'";
                $res = mysqli_query($sercon, $sql);
                $row = (mysqli_num_rows($res));
                while ($row > 0) {
                    $answer = mysqli_fetch_array($res);
                    echo "<section>
                        <h2>{$answer['bugName']}</h2>
                        <p>{$answer['bugCategory']}</p>
                        <p>{$answer['bugSummary']}</p>
                  </section>";
                    $row--;
                }
        }
        ?>
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