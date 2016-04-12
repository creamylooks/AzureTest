<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>printPOST</title>
</head>
<body>
<article>
    <?php
    $title = $_POST{"title"};
    $content = $_POST {"content"};
    $category = $_POST{"category"};
        ?>
    <h1> <?php echo $title;?></h1>
    <p> <?php echo $content;?></p>
    <strong> <?php echo $category;?></strong>
</article>
</body>
</html>