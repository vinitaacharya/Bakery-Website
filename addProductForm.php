<?php 
   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu
//slide 38
require_once('database.php');
$db = getDB();
$query = 'SELECT *
          FROM breadCategories
          ORDER BY breadCategoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

    <head>
    <title>Bread Shop</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include("header.php");?>
        <header>
        <main>
        
            <h1 style='padding-top:86px; color:green;'>Add Product</h1>
        <!--check for errors-->
            <?php if (!empty($error_message)) { ?>
            <p style="color:red;">
            <?php echo htmlspecialchars($error_message);?>
        </p>
        <?php } ?>
        <!--form-->
            <form action="add_product.php" method="post" 
                id="add_product_form">
                <div>
                    <label>Category:</label>
                    <select name="category_id" id="breadCategory">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php
                                echo $category['breadCategoryID']; ?>">
                            <?php echo $category['breadCategoryName']; ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                    <span>*</span>
                </div>

                <label>Bread Code:</label>
                <input type="text" name="code" id="breadCode">
                <span>*</span>
                <br>
                
                <label>Bread Name:</label>
                <input type="text" name="name" id="breadName">
                <span>*</span>
                <br>

                <label>Bread Description:</label>
                <input type="text" name="description" id="breadDescription">
                <span>*</span>
                <br>
                
                <label> Price:</label>
                <input type="number" name="price" id="breadPrice">
                <span>*</span>
                <br>
                
                
                <input type="button" value="Add Product" id="addProduct"><br>
                <input type="button" value="clear_form" id="clear_form"><br>

            </form>
            
        </main>
        <?php include("footer.php");?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
        </script>
        <script src="addProductForm.js"></script>

    </body>
</html>


