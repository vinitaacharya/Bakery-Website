<?php
    //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu

    //set default values for the inital page load
    if(!isset($firstName) ){ $firstName = '';}
    if(!isset($lastName) ){ $lastName = '';}
    if(!isset($streetAddress) ){ $streetAddress = '';}
    if(!isset($city) ){ $city = '';}
    if(!isset($state) ){ $state = '';}
    if(!isset($zipCode) ){ $zipCode = '';}
    if(!isset($date) ){ $date = '';}
    if(!isset($orderNumber) ){ $orderNumber = '';}
    if(!isset($length) ){ $length = '';}
    if(!isset($height) ){ $height = '';}
    if(!isset($width) ){ $width = '';}
    if(!isset($weight) ){ $weight = '';}
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php include("header.php");?>
        <h2 style="color:#9b666e;">Shipping Information -</h2>
        <?php if (!empty($error_message)) { ?>
            <p style="color:red;">
            <?php echo htmlspecialchars($error_message);?>
        </p>
        <?php } ?>
         <!--create form for user to input information -->
        <form action="shippingFormResults.php" method="post">
        <h3>To:</h3>
            <label>First Name:</label>
            <input type="text" name="firstName" value="<?php echo htmlspecialchars($firstName);?>"/>

            <label>Last Name:</label>
            <input type="text" name="lastName" value="<?php echo htmlspecialchars($lastName);?>"/><br>

            <label>Street Address:</label>
            <input type="text" name="streetAddress" value="<?php echo htmlspecialchars($streetAddress);?>"/>

            <label>City:</label>
            <input type="text" name="city" value="<?php echo htmlspecialchars($city);?>"/><br>

            <label>State:</label>
            <input type="text" name="state" value="<?php echo htmlspecialchars($state);?>"/>

            <label>Zip Code:</label>
            <input type="number" name="zipCode" value="<?php echo htmlspecialchars($zipCode);?>"/><br>

            
            <label>Shipping Date:</label>
            <input type="date" name="date" value="<?php echo htmlspecialchars($date);?>"/>

            <label>Order Number:</label>
            <input type="number" name="orderNumber" value="<?php echo htmlspecialchars($orderNumber);?>"/>

            <h4>Dimensions:</h4>
            <label>Length:</label>
            <input type="number" name="length" value="<?php echo htmlspecialchars($length);?>"/>

            <label>Height:</label>
            <input type="number" name="height" value="<?php echo htmlspecialchars($height);?>"/>

            <label>Width:</label>
            <input type="number" name="width" value="<?php echo htmlspecialchars($width);?>"/><br>

            <label>Weight:</label>
            <input type="number" name="weight" value="<?php echo htmlspecialchars($weight);?>"/><br>

            <input id="button" type="submit" value="Submit">

        </form>
        
    </body>
</html>