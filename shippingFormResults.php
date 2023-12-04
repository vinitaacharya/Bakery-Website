<?php 

   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu

    //get data from form
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$streetAddress = filter_input(INPUT_POST, 'streetAddress');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zipCode = filter_input(INPUT_POST, 'zipCode', FILTER_VALIDATE_INT);
$date = filter_input(INPUT_POST, 'date', FILTER_VALIDATE_INT);
$orderNumber = filter_input(INPUT_POST, 'orderNumber', FILTER_VALIDATE_INT);
$length = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_INT);
$height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_INT);
$width = filter_input(INPUT_POST, 'width', FILTER_VALIDATE_INT);
$weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_INT);

//validating feilds

if($weight>150){
    $error_message = "Error, exceeds weight limit";
}else if ($width>36){
    $error_message = "Error, width exceeds limit";
}else if ($length>36){
    $error_message = "Error, length  exceeds limit";
}else if ($height>36){
    $error_message = "Error, height  exceeds limit";
}else if ($zipCode === FALSE){
    $error_message = "Error, invalid zip code syntax";
}else if ($state === FALSE){
    $error_message = "Error, invalid state syntax.";
}else
    $error_message = '';

if ($error_message != ''){
    include("shippingForm.php");
    exit();
}
?>

<html>
    <head>
        <title>Shipping Results</title>
        <link rel="stylesheet" href="style.css"/>

    </head>
    <body>
        <!-- Display Results and package Label-->
    <?php include("header.php");?>
        <h1>Package Information:</h1>
        <h3>UPS Priority Mail</h3>
        <h3>From:</h3>
        <label>Vinita Acharya</label><br>
        <label>210 Flour Street<br>Newark <br>New Jersey <br> 03567 <br>USA</label>
        <h3>To:</h3>

            <span><?php echo $firstName;?></span>

            <span><?php echo $lastName;?></span><br>

            <span><?php echo $streetAddress;?></span><br>

           
            <span><?php echo $city;?></span><br>

            
            <span><?php echo $state;?></span><br>

           
            <span><?php echo $zipCode;?></span><br>
            
            <label>Shipping Date:</label>
            <span><?php echo $date;?></span><br>

            <label>Dimensions:</label>
            <span><?php echo $length;?>x<?php echo $height;?>x<?php echo $width;?></span></span><br>

            <label>Weight:</label>
            <span><?php echo $weight;?>lbs</span><br>

            <label>Order Number:</label>
            <span><?php echo $orderNumber;?></span><br>
            <label>Tracking Number:</label>
            <span>9241 9901 0585 6901 5208 28</span><br>
            <img src="Images\barcode.png">
        <?php include("footer.php");?>
    </body>
</html>