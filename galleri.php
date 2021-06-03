<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaffetår'n</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1
    ,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;
    1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'include/menu.php'?>
    <section class="gallery_section">
        <div class="gallery_section__container">
            <h1>Galleri</h1>
            <div class="gallery_section__picture">
                <img src="images/borgir.jpg" alt="">
                <img src="images/yummy.png" alt="">
                <img src="images/inside.jpg" alt="">
                <img class="lastpc" src="images/taarn.jpg" alt="">
                <img class="last" src="images/pots.jpg" alt="">
                <img class="last" src="images/wall.jpg" alt="">
            </div>
        </div>
    </section>
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
    <?php include 'include/footer.php'?>

    <script src="js/app.js"></script>
</body>
</html>