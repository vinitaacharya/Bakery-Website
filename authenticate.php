<?php 
//Vinita Acharya
//11-18-2023
//IT 202 Section 003
//Unit 9 Assignment
//vka@njit.edu?>
<?php
    require_once('admin_db.php');
    session_start();

    //slide 22
    
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    //TOFO feild vlaidaton and htmlspecia; chars

    if (is_valid_admin_login($email, $password)) {
        //create session
        $_SESSION['is_valid_admin'] = true;
        // redirect logged in user to default page 
        //change nav bar here!!!!!!!!
        //write first and last name  here
        
        
        include("home.php");
        }
        
         else {
        if($email ==NULL && $password==NULL){
            $login_message = "You must login to view this page";
        }else{
            $login_message ="Invalid credentials";
        }
        include('login.php');
    }

    

?>
<html>
    <head>
        <>
    </head>
    <body>
    
    
    </body>
</html>