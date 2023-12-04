<?php 
   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu

 
    function getDB(){
    //declare njit credentials
    $njit_dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=vka';
    $njit_username = 'vka';
    $njit_password = 'It202class#';


    //Change these 3 variable for different server configuration
    $dsn = $njit_dsn;
    $username = $njit_username;
    $password = $njit_password;

    //test
    try{
        $db = new PDO($njit_dsn, $njit_username, $njit_password);
        //echo '<p>You are connected to the database!</p>';
    } catch (PDOException $exception) {
        $error_message = $exception->getMessage();
        include('database_error.php');
        exit();
    }
    return $db;
}
?>