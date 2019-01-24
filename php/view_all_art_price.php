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
            <a href="art_for_sale.php">
                <p>art for sale</p>
            </a>
            <a href="#">
                <p>view all art</p>
            </a>
        </div>
    </div>
    <div class="whitespace_2"></div>
    <div class="filter_container debug">
        <div class="filter_box">Filter by:</div><br /><br />
        <a href="view_all_art.php">- art name -</a>
        <br /><br /><br />
        <a href="#">- price > -</a>
        <br /><br /><br />
        <a href="price_DESC.php">- price < -</a>
    </div>
    <div class="all_art_container">
        <?php include "../price_ASC.php"?>
    </div>
</body>



</html>