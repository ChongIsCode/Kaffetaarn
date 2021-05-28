<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Om os</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/menu.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1
    ,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;
    1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include 'include/menu.php'?>

<div class="hero__image">
    <div class="hero__text">
        <h1>Hvem er vi?</h1>
    </div>
</div>

<div class="content">
    <div class="text__element--centered">
        <h2>Kaffetår'n</h2>
        <br>
        <p>Kaffetår’n er en lokal café i hjertet af Nykøbing Falster, i det gamle vandtårn fra 1908.
            Caféen bliver drevet af Dea Guttman, som åbnede dørene for første gang den 1. april 2020.
            Kaffetår'n lægger meget vægt på at bruge lokale kvalitets råvare til at lave sine mange
            hjemmelavede retter og kager. Kaffetår'n sælger selvfølgelig også kaffe, både lys og mørk.</p>
        <br>
        <h2>Ejeren Dea</h2>
    </div>
    <br>

    <div class="container">

        <div class="items">
            <img src="images/DSC_0439.jpg" height="262" width=100%/>
        </div>
        <div class="items">
            <div class="text__element--centered">
                <p>
                    Dea bor i Nysted, tæt ved Nykøbing Falster. Hun startede med at være kunde på caféen,
                    hos den tidligere ejer. Da den tidligere ejer af Caféen stoppede, fik Dea tilbuddet om at købe caféen,
                    hvilket hun egentlig ikke havde interesse for i starten.<br>
                    Dea åbnede for aller første gang sin café d. 1 April 2020,
                    og her har Dea givet sine kunder den bedste og mest autentiske oplevelse, hendes kunder kan få i caféen.
                    Hun sætter stor fokus på at kunden skal have det godt, når kunden går ud af døren igen.<br>
                    Dea ser sig selv om en servicemindet, varm og åben ung kvinde, som gerne vil have at caféen også signalere dette.
                </p><br>
            </div>
        </div>

        <div class="button">
            <button class="donate-button">Donér en genstand</button>
        </div>
    </div>

    <br>
    <div class="text__element--centered">
        <h2>Besøg os</h2>
        <p>Google maps her</p>
        <br>
    </div>
    <br>
    <div class="text__element">
        <div class="mapEmbed">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.7488664871507!2d11.866003316031408!3d54.7668020750665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad31a0aa869615%3A0x3fccca125a3597fc!2sKaffet%C3%A5r&#39;N!5e0!3m2!1sda!2sdk!4v1622113303338!5m2!1sda!2sdk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>

    </div>
    <a href="#" class="scrollUp">
        <div class="arrow">
            <img src="images/icons/arrow.png" alt="Scroll up">
        </div>

        <div class="text__header">
            <h2>Scroll up</h2>
        </div>
        <div class="underline">
        </div>
    </a>
</div>

<script src="js/app.js"></script>

</body>
</html>
