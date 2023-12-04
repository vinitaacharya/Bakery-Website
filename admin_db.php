<?php 
//Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu
//slide 38

require_once('database.php');
//add it manually on a serperate file so that it beoomes hashed

//slide 18
function is_valid_admin_login( $email, $password){
    $db = getDB();
    $query = 'SELECT password FROM breadManagers WHERE emailAddress =:email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();

    if($row === false){
        return false;
    }else{
        $hash = $row['password'];
        return password_verify($password, $hash);
    }
}

?>