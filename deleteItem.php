<?php 
//Vinita Acharya
//11-18-2023
//IT 202 Section 003
//Unit 9 Assignment
//vka@njit.edu?>
<?php

    //slide 37
    require_once('database.php');
    $db = getDB();
    //get the values

    
    $bread_id = filter_input(INPUT_POST, 'bread_id',
                                FILTER_VALIDATE_INT);
    
    // Delete the product from the database
    if ($bread_id != FALSE) {
        
        //delete product from database
        $query = 'DELETE FROM bread
                WHERE breadID = :bread_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':bread_id', $bread_id);
        $statement->execute();
        $statement->closeCursor();
        include("home.php");   
    }
    
    


?>