<?php

require_once(__DIR__ . '/Controllers/Securite.php');

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB API</title>
    <link rel="stylesheet" href="../../front_api/public/css/index.css">
    <script type="text/javascript" src="../../front_api/public/js/index.js"></script>

</head>

<header>
    <nav>
        <a href="http://"><span id="logo_name">EASY</span>Critique</a>
        <ul class="Navigation">

            <li>Accueil</li>
            <li>Top 10</li>
            <li>Nouveauté</li>

            <?php if (!Securite::estConnecte()) : ?>
                <li>Wishlist</li>
            <?php endif; ?>
        </ul>
        <div class="hamburger">

            <span></span>
            <span></span>
            <span></span>

        </div>
    </nav>
</header>

<body>

</body>

</html>