
<?php 
//Vinita Acharya
//11-18-2023
//IT 202 Section 003
//Unit 9 Assignment
//vka@njit.edu?>
<?php

$db=getDB();
$query = 'SELECT firstName FROM breadManagers';
$statement = $db->prepare($query);
$statement->execute();
$first=$statement->fetch();
$fName = $first['firstName'];
$statement->closeCursor();

$query = 'SELECT lastName FROM breadManagers';
$statement = $db->prepare($query);
$statement->execute();
$last =  $statement->fetch();
$lName = $last["lastName"];
$statement ->closeCursor();


echo '<p>Welcome Back '.$fName.' '. $lName.'</p>';

?>