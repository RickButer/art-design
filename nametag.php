<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` GROUP BY naam_kunstenaar";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {              
        echo '<div class="name_artist">' . $row['naam_kunstenaar'] . '</div>';
    }       
    
    $conn = null;
    
?>