<!DOCTYPE html>
<html lang="de">
<head>
<?php
    $cssPath = __DIR__ . '/../css/Projekt.css';
    $webPath = dirname($_SERVER['SCRIPT_NAME']) . '/assets/css/Projekt.css';
    echo "<!-- PHP Resolved Path: " . realpath($cssPath) . " -->";
    echo "<!-- Web Resolved Path: $webPath -->";
    ?>
    <link rel="stylesheet" href="/assets/css/Projekt.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Über mich</title>
</head>
<body>
    <header>
        <h1>SpaceZeugs</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Über Mich</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="UnserKurs.php">Unser Kurs</a></li>
            <li><a href="UnserDozent.php">Unser Dozent</a></li>
            <li><a href="Kontakt.php">Kontakt</a></li>
        </ul>
    </nav>