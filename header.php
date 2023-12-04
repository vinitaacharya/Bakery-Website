<?php 
   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu
require_once('admin_db.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    

}

if (isset($_SESSION['is_valid_admin']) && $_SESSION['is_valid_admin']) {
    include('welcomeBanner.php');
}



?>

<html>
     <!-- creates header for top of each page with nav bar-->
    <head>
        <title>Shipping Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
       
        <div id="nav">
        <header style="color:white" >
        <div id="box">
            <h1 class="item">Flour Power Bread Bakery</h1>
            <ul class="item">
            <?php 
                
                if (isset($_SESSION['is_valid_admin'])) { 
                ?>
                    <li><a class="links" href="logout.php">Logout</a></li>
                    <li><a class="links" href="shipping.php">Shipping</a></li>
                    <li><a class="links" href="addProductForm.php">Create</a></li>

                <?php } else { ?>
 
                    <li><a class="links" href="login.php">Login</a></li>
                <?php } ?>
                <li><a class="links" href="home.php">Home</a></li>
                
                <li><a class="links" href="bread.php">Bread</a></li>
                

            </ul>
        </div>
        </div>
        </header>
        

    </body>
</html>

