<?php 
   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu
?>

<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        
         <!-- main home page with information about the shop-->
        <?php include("header.php");?>
        

        <main>
            <img src="Images\photo-1587241321921-91a834d6d191.avif" 
            style="width:100%; 
            height:600px; 
            object-fit:cover; 
            left:0;
            right:0;
            filter:brightness(40%);
            z-index:-1;
            "
            > 
            <div id="description" >
                <h3 style="color:#4A5759;  font-size:30px;padding: 14px 16px; margin:10px 0px; border-left:solid; border-width:10px;">Shop Description:</h3>
                <p  style="padding: 14px 16px; margin:10px 0px;  width: 644.67px; height:178.77px;">The flour power bread bakery was founded in 1979. 
                    It all began with the founders love for baking bread. They wanted to share their
                    love for baking with everyone else which resulted in the opening of the flour
                    power bread bakery. The bakery now sells bagels, focaccia, multi-grain bread,
                    and more.</p>
                    

            </div>
            <h3 style="color:#4A5759;  font-size:30px;padding: 14px 16px; margin:50px 0px; border-left:solid;border-width:10px;">Bakery Gallery</h3> 
            <div id="gallery" style="padding: 14px 16px; margin:50px 0px;">
            
            <!--creates a image gallery to display backery items -->
                <figure>
                <img src="Images\BreadPicture1.jfif" alt="Sweet Cinnamon Bread" style="width:100%; height:100%">
                <figcaption>Sweet Cinnamon Bread</figcaption>
                </figure>

                <figure>
                <img src="Images\BreadPicture2.jfif" alt="Fluffy Bread Rolls" style="width:100%; height:100%">
                <figcaption>Fluffy Bread Rolls</figcaption>
                </figure>

                <figure>
                <img src="Images\BreadPicture3.jfif" alt="Delicious Chocolate Bread" style="width:100%; height:100%">
                <figcaption>Delicious Chocolate Bread</figcaption>
                </figure>

                <figure>
                <img src="Images\BreadPicture4.jfif" alt="Yummy Bagels" style="width:100%; height:100%">
                <figcaption>Yummy Bagels</figcaption>
                </figure>

            </div>

        </main>
        <?php include("footer.php");?>
    </body>

</html>

