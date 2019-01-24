<?php

    include "db_connection.php";   
    
    $querie = "SELECT naam_kunstwerk, kunst_url, prijs_kunstwerk FROM `kunstwerken` ORDER BY prijs_kunstwerk DESC";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {              
        echo '<div class="name_art_price_box">' . 
        '<div class="all_art_name_box">' . $row['naam_kunstwerk'] . '</div>' . 
        '<img src="../' . $row['kunst_url'] . '" class="all_art_artwork" />' . 
        '<div class="all_art_price_box">€' . $row['prijs_kunstwerk'] . '</div>' .
        '</div>';
    }
    
    $conn = null;
    
  
?>