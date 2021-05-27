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
        <div class="info__container info__container1">
            <div class="info__section">
                <h2>"mere end bare en kunde"</h2>
                <p>Hos Kaffetår'n er du mere end bare 
                en Kunde. Vi sætter nemlig meget focus 
                på økologi, og at købe lokalt. Vi sætter 
                også stor pris på at købe kvalitets 
                råvare.</p>
                <a href="Læs mere"></a>
            </div>
            <img src="images/front.png" alt="">
        </div>
        <div class="info__container info__container2">
            <img src="images/front.png" alt="">
            <div class="info__section">
                <h2>Menu</h2>
                <p>Kaffetår'n lægger meget vægt på at bruge 
                    lokale kvalitets råvare til at lave sine mange 
                    hjemmelavede retter og kager. Kaffetår'n 
                    sælger selvfølgelig også kaffe, både lys 
                    og mørk. </p>
                <a href="Se menukort"></a>
            </div>
        </div>
        <div class="info__container info__container3">
            <img src="images/front.png" alt="">
            <div class="info__section">
                <h2>Hvor er vi?</h2>
                <p>Kaffetår’n holder åbent fem 
                    dage om ugen. Se hvornår du 
                    kan få en kop kaffe, og måske 
                    også komme op i tårnet.</p>
                <a href="Se åbningstider"></a>
            </div>
        </div>
    </section>

    <section class="bulletpoints">
        <h3>Vi tilbyder</h3>
        <div class="bp__container">
            
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="#" alt="">
                </div>
                <h3>Et bredt udvalg af  
                    økologiske råvare</h3>
                <p>Vi går meget op i at 
                    købe økologiske råvare af bedste kavalitet.</p>
            </div>
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="#" alt="">
                </div>
                <h3>Lokale råvare</h3>
                <p>Hos Kaffetår'n forsøger vi så vidt muligt at handle lokalt.</p>
            </div>
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="#" alt="">
                </div>
                <h3>God kvalitet</h3>
                <p>God kvalitet på råvare er noget vi går meget op i.</p>
            </div>
            <div class="bp__wrap">
                <div class="bp__img">
                    <img src="#" alt="">
                </div>
                <h3>Glutenfri</h3>
                <p>Glutenalergi? Intet problem. 
                    Vi har massere til lige præcis dig, 
                    uden gluten. </p>
            </div>
        </div>
    </section>

    <section class="gallery">
        <img src="#" alt="">
        <img src="#" alt="">
        <img src="#" alt="">
        <div class="gallery__container">
            <h1>Se flere billeder</h1>
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