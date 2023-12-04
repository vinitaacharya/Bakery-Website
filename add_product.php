<?php 
        
   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu
    //slide 41
    require_once('database.php');
    $db = getDB();

    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code=filter_input(INPUT_POST, 'code');
    $name=filter_input(INPUT_POST, 'name');
    $description =filter_input(INPUT_POST, 'description');    
    $price=filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

    //minimal input validation
   
    if ($category_id == NULL || $category_id == FALSE|| $code == NULL
                         || $name == NULL || $price == NULL
                         || $price == FALSE ||$description == NULL) {
    $error_message = "Invalid product data. Check all fields and try again.";
    include('database_error.php');
    }else if(repeat($code) == true){
        $error_message = "Bread code is a duplicate.Enter differnt code.";
        
    }else if ($price < 0){
        $error_message = "Enter a valid price.";
    }else if($price>15){
        $error_message = "Price should not exceed $15.";
    }else{
             $error_message = '';
            require_once('database.php');
        
            //slide 42    
            // Add the product to the database  
            $query = 'INSERT INTO bread
            (breadCategoryID, breadCode, breadName, description, price, dateAdded)
            VALUES
            (:category_id, :code, :name, :description, :price, NOW())';
            $statement = $db->prepare($query);
            $statement->bindValue(':category_id', $category_id);
            $statement->bindValue(':code', $code);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description',$description);
            $statement->bindValue(':price', $price);
            $statement->execute();
            $statement->closeCursor();
            include("addProductForm.php");
            echo("product has been added to database");

        }
        if ($error_message !== ''){
            include("addProductForm.php");
            exit();
         }
        //function to check if userinput is already in the database
         function repeat($code){
            
            //declare njit credentials
            $njit_dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=vka';
            $njit_username = 'vka';
            $njit_password = 'It202class#';


            //Change these 3 variable for different server configuration
            $dsn = $njit_dsn;
            $username = $njit_username;
            $password = $njit_password;

            $db = new PDO($dsn, $username, $password);

            $query1 = 'SELECT breadCode FROM bread WHERE breadCode = :code';
            
            $statement = $db->prepare($query1);
           
            $statement->bindValue(':code', $code);
            $statement->execute();
            $result = $statement->fetch();
            if($result > 0){
                return true;
            }else
                return false;

         }
       
?>