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
        <a href="#login">login</a>
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
        <img src="images/artist/enn_kunila.jpg" alt="" name="artist_images" class="CA_photo_container" />
        <div class="CA_text_container debug">
            <p id="text_container_p">Enn Kunila<br /><br />"Art is making sense and giving shape to that sense. It is
                like the religious search for God.” Enn Kunila.
            </p>
        </div>
        <div class="CA_next_container">
            <div class="next_text">
                <p>next artist</p>
            </div>
            <img onclick="nextPhoto()" src="images/Rightarrow.png" class="next_arrow" />
        </div>
    </div>
    <!-- start login************************************** -->
    <div id="login">login</div>
    <div class="login_container">
        <div class="login_box">

            <div class="welcome_login">
                <p>Please login to buy art</p>
            </div><br /><br /><br />
            <div class="input_box">
                <input type="email" placeholder="please fill in your email" />
            </div><br />
            <div class="input_box">
                <input type="text" placeholder="please fill in your password" />
            </div><br /><br /><br /><br />
            <div class="input_box">
                <input type="submit" />
            </div><br />
            <div class="sign_up"><p>no account? sign up</p><a href="#">here</a></div>


        </div>
    </div>
    </div>
    </div>


    <script src="js/index.js"></script>
</body>

</html>