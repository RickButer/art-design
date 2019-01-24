<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` WHERE naam_kunstenaar = 'sarah michelle'";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {              
        echo '<img src="../' . $row['kunst_url'] . '" class="art_box" />';
    }
    
    $conn = null;
    
  
?>