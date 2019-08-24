<?php
    require_once('main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Worldwide Best Sellers Mangas</title>
</head>
<body>
    <h1>Worldwide Best Sellers Mangas</h1>
    <div class="mangas-container">
        <?php
            foreach ($mangas as $manga) {
                displayMangas($manga);
            }
        ?>
    </div>
</body>
</html>