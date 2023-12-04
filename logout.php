<?php 
//Vinita Acharya
//11-18-2023
//IT 202 Section 003
//Unit 9 Assignment
//vka@njit.edu?>
<?php 
    session_start();

    //slide 23
    //clear all session data
    $_SESSION = [];
    session_destroy();
    $login_message = 'You have been logged out.';
    include('login.php');
?>