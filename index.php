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
        <a href="#current_exhibition">current artists</a>
        <a href="#art_for_rent">art for rent</a>
        <a href="#">contact</a>
        <a href="#">login</a>
    </div>
    <div class="photo_container">
        <img src="images/artstamp.png" alt="" id="logo_stamp" />
        <img src="images/girl1.jpg" alt="" name="homeSlider" id="sliderHome" />
        <div class="circle_container">
            <div class="circle1" onclick="changeImg1()"></div>
            <div class="circle2" onclick="changeImg2()"></div>
            <div class="circle3" onclick="changeImg3()"></div>
            <div class="circle4" onclick="changeImg4()"></div>
            <div class="circle5" onclick="changeImg5()"></div>
        </div>
    </div>
    <div class="whitespace"></div>
    <!-- start current artist ************************************** -->
    <div id="current_artist">current artists</div>
    <div class="CA_container">
        <div class="CA_photo_container"></div>
        <div class="CA_text_container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque, neque sit amet congue
                sodales, sapien nisl tempus massa, ut consequat est tellus consequat arcu. Aliquam purus erat, ornare
                at risus tincidunt, efficitur rhoncus elit. Maecenas non venenatis quam. Integer sit amet iaculis enim.
                Fusce consectetur at massa ut vestibulum. Duis non venenatis neque, quis pharetra nisi. Sed ut nisi
                tempus, condimentum ligula vel, lacinia magna.

                Pellentesque metus nisi, lacinia non facilisis rhoncus, ultrices in sem. Cras convallis rhoncus
                vehicula. Sed gravida mollis porta. Pellentesque aliquet, arcu at euismod vestibulum, elit tellus
                semper risus, ac eleifend nunc nibh interdum est. Maecenas non ligula in metus vestibulum fringilla.
                Aliquam tristique ornare nisi, eget eleifend justo. Nulla facilisi. In sem tellus, facilisis eget
                accumsan et, consequat sed dolor. Suspendisse lorem tellus, interdum sit amet mi a, volutpat lacinia
                massa. Aliquam erat volutpat.
            </p>
        </div>
        <div class="CA_next_container">
            <div class="next_text">
                <p>next artist</p>
            </div>
            <img src="images/Rightarrow.png" class="next_arrow" />
        </div>
    </div>
    <!-- Start art for rent************************************** -->
    <div class="whitespace"></div>
    <div id="art_for_rent">art for rent</div>
    
    <div class="art_for_rent_filter_container debug">
        <div class="filter_artist_dropdown debug">
            <button class="dropdown_artist">artist</button>
        </div>
        <div class="filter_price debug"></div>
    </div>

    <div class="art_for_rent_container debugs">
        <div class="DB_artist debug"></div>
        <div class="DB_back_button"></div>
            <div class="DB_art debug"></div>
            <div class="DB_next_button"></div>
    

    </div>





    <script src="js/index.js"></script>
</body>

</html>