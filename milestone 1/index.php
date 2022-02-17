<?php

    $albums = include "database.php";
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolify</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
          
        <header>
            <div class="spotify-logo">
                <img src="./img/logo-small.svg" alt="spotify-logo">
            </div>
        </header>

        <main>

            <div class="album-container">

                <?php foreach($albums as $album): ?>
                    
                    <div class="album">
                        <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>">
                        <div class="album-meta">
                            <h3 class="album-title"><?= $album['title'] ?></h3>
                            <p class="album-author"><?= $album['author'] ?></p>
                            <p class="album-year"><?= $album['year'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </main>


        <footer>

        </footer>
    </body>
</html>