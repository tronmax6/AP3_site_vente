<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($title)) { // isset --> 'Vérifie qu'une variable est définit (= non null)'
            echo $title; //On change le titre en mettant celui de la variable de la page
        } else {
            echo 'Portfolio Mathys Gelez';
        }
        ?>
    </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav>
        <div class="profile">
            <img src="images/logo.png" alt="logo">
            <h1>On Aime la Vie</h1>
        </div>
        <ul>
            <a href="index.php">
                <li>acceuill</li>
            </a>
            <a href="testing.php">
                <li>Catégorie</li>
            </a>

        </ul>
    </nav>