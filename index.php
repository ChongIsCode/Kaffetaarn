<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaffetår'N</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php include 'include/menu.php'?>
    <section class="front">
        <img src="images/front.png" alt="">
    </section>
    <section class="info">
        <div class="info__container">
            <div class="info__section">
                <div class="quote">
                    <h2>"Mere end bare en kunde"</h2>
                </div>
                <div class="text__element">
                    <p>Hos Kaffetår'n er du mere end bare
                        en Kunde. Vi sætter nemlig meget focus
                        på økologi, og at købe lokalt. Vi sætter
                        også stor pris på at købe kvalitets
                        råvare.</p>
                </div>
                <div class="button">
                    <a href="Læs mere" class="donate-button">Læs mere</a>
                </div>
                <div class="text__element">
                    ...eller se videoen nedenunder
                </div>
            </div>
        </div>
        <div class="info__image">
            <img src="images/front.png" alt="">
        </div>
        <div class="info__container">
            <img src="images/front.png" alt="">
            <div class="info__section">
                <h2>Menu</h2>
                <p>Kaffetår'n lægger meget vægt på at bruge 
                    lokale kvalitets råvare til at lave sine mange 
                    hjemmelavede retter og kager. Kaffetår'n 
                    sælger selvfølgelig også kaffe, både lys 
                    og mørk. </p>
                <div class="button">
                    <a href="menukort" class="donate-button">Se menukort</a>
                </div>
            </div>
        </div>
        <div class="info__image">
            <img src="images/front.png" alt="">
        </div>
        <div class="info__container">
            <div class="info__section">
                <div class="quote">
                    <h2>Hvor er vi?</h2>
                </div>
                <div class="text__element">
                    <p>Kaffetår’n holder åbent fem
                        dage om ugen. Se hvornår du
                        kan få en kop kaffe, og måske
                        også komme op i tårnet.</p>
                </div>
                <div class="button">
                    <a href="Læs mere" class="donate-button">Læs mere</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bulletpoints">
        <div class="text__header">
            <h2>Vi tilbyder</h2>

        </div>
        <div class="bp__container">
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="images/front.png" alt="">
                </div>
                <div class="quote--small">
                    <h3>Et bredt udvalg af
                        økologiske råvare</h3>
                </div>
                <div class="text__element">
                    <p>Vi går meget op i at
                        købe økologiske råvare af bedste kavalitet.</p>
                </div>
            </div>
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="images/front.png" alt="">
                </div>
                <div class="quote--small">
                    <h3>Lokale råvare</h3>
                </div>
                <div class="text__element">
                    <p>Hos Kaffetår'n forsøger vi så vidt muligt at handle lokalt.</p>
                </div>
            </div>
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="images/front.png" alt="">
                </div>
                <div class="quote--small">
                    <h3>God kvalitet</h3>
                </div>
                <div class="text__element">
                    <p>God kvalitet på råvare er noget vi går meget op i.</p>
                </div>
            </div>
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="images/front.png" alt="">
                </div>
                <div class="quote--small">
                    <h3>Glutenfri</h3>
                </div>
                <div class="text__element">
                    <p>Glutenalergi? Intet problem.
                        Vi har massere til lige præcis dig,
                        uden gluten. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="grid">
            <img src="images/front.png" alt="">
            <img src="images/front.png" alt="">
            <img src="images/front.png" alt="">
            <img src="images/front.png" alt="">
            <img src="images/front.png" alt="">
            <div class="gallery__container">
                <h1>Se flere billeder</h1>
            </div>
        </div>
    </section>

    <section class="swiper">
        <?php include 'include/swiper.php'?>
    </section>



    <script src="js/app.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 50,
            modifier: 2,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        });
    </script>
</body>
</html>