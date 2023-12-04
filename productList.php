<?php 

   //Vinita Acharya
//11-3-2023
//IT 202 Section 003
//Unit 7 Assignment
//vka@njit.edu

//slide26
require_once('database.php');
$db=getDB();
$category_id = filter_input(INPUT_GET, 'category_id',
FILTER_VALIDATE_INT);

if ($category_id == NULL || $category_id == FALSE) {
    $category_id = 1;
}

// Get name for selected category
$queryCategory = 'SELECT * FROM breadCategories 
                  WHERE breadCategoryID = :category_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['breadCategoryName'];
$statement1->closeCursor();



//Get all categories
$queryAllCategories = 'SELECT * FROM breadCategories
                       ORDER BY breadCategoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();
 
//get products for selected category
$queryProducts = 'SELECT * FROM bread
    WHERE breadCategoryID = :category_id ORDER BY breadID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>

<hmtl>
<head>
    <title>Product List</title>
</head> 
<body>
    <main>
        <h1 style="color:#9b666e;">Bakery items</h1>
        <aside>
            <h2 style="color:#4A5759;">Choose a Category to see items:</h2>
            <nav>
                <!--Display possible category options-->
            <ul>
                <?php foreach ($categories as $category) : ?>
                <li>
                    <a id="cat" href="?category_id=<?php
                            echo $category['breadCategoryID']; ?>">
                        <?php echo $category['breadCategoryName']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            </nav>           
        </aside>
<!--Slide 29-->
<!--create table to display items-->
        <section>
            <h2 style="color:#9b666e; border-left:solid; border-width:10px;" ><?php echo $category_name; ?></h2>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="right">Price</th>
                </tr>
    
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td><a href="details.php?breadID=<?php
                                echo $product['breadID']; ?>">
                            <?php echo $product['breadCode']; ?></a></td>
                    <td><?php echo $product['breadName']; ?></td>
                    <td><?php echo $product['description'];?></td>
                    <td class="right"><?php echo $product['price']; ?>
                    </td>
                    <td>
                    <?php 
                     if(isset($_SESSION['is_valid_admin'])){
                        ?>
                        <form action="deleteItem.php" method="post">
                           
                           <input type="hidden" name="bread_id"
                           value="<?php echo $product['breadID']; ?>">
                           <input type="submit" class="deleteButton" value="Delete" >
                       </form>
                        <?php } ?>
                     
                    
                </td>
                </tr>
                <?php endforeach; ?>
            </table>
         </section>



    </main>
    <script>
        
                

        const confirmed = evt => {
            const confirmDelete = confirm("Are you sure?");
            console.log("works");
            if (confirmDelete) {
            // code that deletes the item
                fetch('deleteItem.php');  
            }else{
                evt.preventDefault();
            }

        };

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector(".deleteButton").addEventListener("click", confirmed);

        });
    </script>
</body>   

</html>

