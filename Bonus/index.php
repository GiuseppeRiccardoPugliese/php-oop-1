<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    require_once __DIR__ . '/db.php';
    ?>
</head>

<body>

    <h1>Movies: </h1>
    <ul>
        <?php
        foreach ($movies as $movie) {
        ?>
            <li>
                <?php

                echo $movie->printMovie();
                ?>
            </li>
        <?php
        }
        ?>
    </ul>


</body>

</html>