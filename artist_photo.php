<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` GROUP BY naam_kunstenaar";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {            
        
        echo '<a href="' . $row['artist_page'] .'"><img src="../' . $row['artist_url'] . '" class="photo_box"/></a>';
    }       
    
    $conn = null;
  
?>