<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artists shops</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
</head>

<body>
    <div class="navbar_container">
        <img src="images/artLogo.png" alt="" width="120vw" height="50vh" />
        <a href="#current_artist">current artists</a>
        <a href="#">contact</a>
        <a href="php/art_for_sale.php">art for sale</a>
    </div>
    <div class="photo_container">
        <img src="images/artstamp.png" alt="" id="logo_stamp" />
        <img src="images/artwork/girl1.jpg" alt="" width="100%" height="100%" name="homeSlider" id="sliderHome" />
        <div class="circle_container">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            <div class="circle5"></div>
        </div>
    </div>
    <div class="whitespace"></div>
    <!-- start current artist ************************************** -->
    <div id="current_artist">current artists</div>
    <div class="CA_container">
        <img src="images/artist/enn_kunila.jpg" width="100%" height="100%" alt="" name="artist_images" class="CA_photo_container" />
        <div class="CA_text_container debug">
            <p id="text_container_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a erat sit amet
                ipsum venenatis ultrices non non odio. Suspendisse laoreet velit felis. Proin vel facilisis elit, non
                tempus nulla. Vestibulum laoreet orci a purus scelerisque condimentum. Mauris in leo tempor, posuere
                magna auctor, maximus quam. Proin pretium orci nec imperdiet volutpat. Cras nec laoreet est. Vestibulum
                gravida odio placerat.
            </p>
        </div>
        <div class="CA_next_container">
            <div class="next_text">
                <p>next artist</p>
            </div>
            <img onclick="nextPhoto(), nextText()" src="images/Rightarrow.png" class="next_arrow" />
        </div>
    </div>
    <!-- Start art for rent************************************** -->
    <div class="whitespace"></div>
    <script src="js/index.js"></script>
</body>

</html>