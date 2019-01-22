<?php

    include "db_connection.php";   
    
    $querie = "SELECT * FROM `kunstwerken` LIMIT 1 ;";

    $db_result = $conn->query($querie);

    foreach ($db_result as $row)
    {            
        
        echo '<div class="filter_artist"><p>' . ' art by ' . $row["naam_kunstenaar"] . '</p></div>' . 
             '<div class="art_for_rent_container">' . 
             '<img src="' . $row["artist_url"] . '" class="DB_artist"/>' .
             '<div class="DB_back_button"></div>' .
             '<img src="' . $row["kunst_url"] . '" class="DB_art"/>' .
             '<div class="DB_next_button"></div>' .
             '</div>' ;

    }       
    
    $conn = null;
    
    
  


    //CARD.PHP

    // include "db_connection.php";        

    // $sql_querie = "SELECT ID, firstname, lastname, img_url, title FROM Gorillas";
    
    // $db_result = $conn->query($sql_querie);  

    // foreach ($db_result as $row)
    // {            
        
    //     echo '<div class="card">' .
    //          '<a href="personpage.php?user_ID=' . $row['ID'] . '">' .
    //          '<img src="' . $row['img_url'] . '" alt="' . $row['firstname'] . '" style="width:100%">' .
    //          '</a>' .
    //          '<h1>' . $row['firstname']  . ' ' . $row['lastname'] . '</h1>' .
    //          '<p class="title">' . $row['title'] . '</p>' .           
    //          '<p>CodeGorilla Bootcamp</p>' .
    //          '</div>';
       
    // }       

    // $conn = null;
  
?>