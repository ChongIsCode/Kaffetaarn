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
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    
<?php include 'include/menu.php'?>

<section class="front">
    <a href="#" class="video--link" data-video="video1">video 1</a>
    <a href="#" class="video--link" data-video="video2">video 2</a>
    <a href="#" class="video--link" data-video="video3">video 3</a>

    <div class="video--wrapper">
        <div class="video video1 active">Video 1</div>
        <div class="video video2">Video 2</div>
        <div class="video video3">Video 3</div>
    </div>
</section>

<div class="content--front">
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
                <div class="quote--caps">
                    <h2>MENU</h2>
                </div>
                <h4>Vores er mad er lokal og økologisk</h4>
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
        <div class="container">
            <div class="row">
                <div content="col-sm-4">
                    <img src="images/front.png" alt="">
                </div>
                <div content="col-sm-4">
                    <img src="images/front.png" alt="">
                </div>
                <div content="col-sm-4">
                    <img src="images/front.png" alt="">
                </div>
            </div>
            <div class="row">
                <div content="col-sm-4">
                    <img src="images/front.png" alt="">
                </div>
                <div content="col-sm-4">
                    <img src="images/front.png" alt="">
                </div>
                <div class="col-sm-4">
                    <div class="gallery__container">
                        <h1>Se flere billeder</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="text__header">
            <h2>Hvad siger mine kunder</h2>
        </div>
        <?php include 'include/swiper.php'?>
    </section>
</div>


<!-- Script links til swiper -->
<script src="js/app.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Script stads til swiper og forside dims -->
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

    //Select alle video links og tilføjer eventListener
    document.querySelectorAll('.video--link').forEach(link => link.addEventListener('mouseover', () => videoToggleActive(link)));


    function videoToggleActive(link){

        videoRemoveAllActive();

        //Finder data-video=""
        const videoName = link.dataset.video;

        //Bruger data-video="" som en klasse (se punktum) til at finde div'en med samme navn
        const videoElm = document.querySelector('.'+videoName);

        //Giver active klasse til den fundne video
        videoElm.classList.add('active');
    }

    function videoRemoveAllActive(){
        //Fjerner alle eksisterende "active" klasser
        document.querySelectorAll('.video').forEach(videoElm => videoElm.classList.remove('active'));
    }
    </script>

<?php include 'include/footer.php'?>

</body>
</html>