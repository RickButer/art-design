<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` WHERE naam_kunstenaar = 'bob ross' LIMIT 1";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {              
        echo    '<div class="art_name_holder">' . 
                '<p>art by ' . $row['naam_kunstenaar'] . '</p>' . 
                '</div>';
    }
    
    $conn = null;
    
  
?>