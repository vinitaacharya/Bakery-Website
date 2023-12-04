
<?php 
//Vinita Acharya
//11-18-2023
//IT 202 Section 003
//Unit 9 Assignment
//vka@njit.edu?>
<?php

require_once('database.php');
function add_bread_manager($firstName, $lastName, $email, $password) {
    try {
        $db = getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $query = 'INSERT INTO breadManagers (emailAddress, password, firstName, lastName)
                  VALUES (:email, :password, :firstName, :lastName)';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hash);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        
        $statement->execute();
        $statement->closeCursor();
        

        echo "User added successfully!";
    } catch (PDOException $e) {
        
    }

    
    
}

try {
    // Add users
    add_bread_manager('Vi', 'Ach', "vi@gmail.com", "vi123");
    add_bread_manager('May', 'Ach', "may@gmail.com", "may123");
    add_bread_manager('Harsh', 'Ach', "harsh@gmail.com", "harsh123");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>


