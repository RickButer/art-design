<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art for rent</title>
    <link rel="stylesheet" type="text/css" href="../css/art_for_rent.css" />
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
</head>

<body>
    <div class="whitespace"></div>
    <div class="name_holder_container">
        <div class="name_holder">
            <a href="../index.php"><img src="../images/artLogo.png"></a>
            <a href="#"><p>art for sale</p></a>
            <a href="#"><p>view all art</p></a>
        </div>
    </div>
    <div class="whitespace"></div>
    <div class="photo_container">
    <?php include "../artist_photo.php"?>
    </div>
    <div class="whitespace_2"></div>
    <div class="nametag_holder">
    <?php include "../nametag.php"?>
    </div>
    <div class="whitespace"></div>
    <div class="art_name_holder_container">
        <?php include "../artist_name_kunila.php"?>
    </div>
    <div class="whitespace"></div>
    <div class="art_container">
        <?php include "../art_enn_kunila.php"?>
    </div>
    <div class="whitespace_2"></div>
    <div class="price_holder">
        <?php include "../enn_kunila_prices.php"?>
    </div>

</body>

</html>