<?php
include 'engine/engine.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <?php 
        $directory = getDirectory('img');
        foreach($directory as $img){
            echo "<img src = {$img}>";
        }
    ?>
    </div>
    <script src="src/main.js"></script>
</body>
</html>