<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` WHERE naam_kunstenaar = 'freddy stuward'";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {              
        echo '<img src="../' . $row['kunst_url'] . '" class="art_box" />';
    }
    
    $conn = null;
    
  
?>