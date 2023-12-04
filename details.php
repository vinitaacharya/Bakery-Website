<?php 
    require_once('database.php');
    $db = getDB();


   $bread_id = $_GET['breadID'];
   

   $queryProducts = 'SELECT * FROM bread
   WHERE breadID = :bread_id ORDER BY breadID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':bread_id', $bread_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
    
    


?>
<html>
    <head>
        <title>Bread Page</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--add php files-->
        <?php include("header.php");?>
        <main>
        <table>
                <tr>
                    <th>Bread ID</th>
                    <th>Bread Code</th>
                    <th>Bread Category ID</th>
                    <th>Bread Name</th>
                    <th>Description</th>
                    <th class="right">Price</th>
                    <th>Date Added</th>
                    <th>photo</th>
                </tr>
    
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['breadID']; ?></td>
                    <td><?php echo $product['breadCode']; ?></td>
                    <td><?php echo $product['breadCategoryID'];?></td>
                    <td><?php echo $product['breadName']; ?></td>
                    <td><?php echo $product['description'];?></td>
                    <td class="right"><?php echo $product['price']; ?></td>
                    <td><?php echo $product['dateAdded'];?></td>
                    <td id="image_rollover"><img  src="Images\<?php echo $product['breadCode']; ?>.jpg" width="200" /></td>
                </tr>
                <?php endforeach; ?>
            </table>
       
        </main>

        <?php include("footer.php");?>
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
        </script>
        <script src="rollover.js"></script>

    </body>
</html>