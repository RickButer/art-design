<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` WHERE naam_kunstenaar = 'enn kunila'";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {              
        echo '<div class="price_box">€' . $row['prijs_kunstwerk'] . '</div>';
    }
    
    $conn = null;
    
  
?>