<?php 
//Vinita Acharya
//11-18-2023
//IT 202 Section 003
//Unit 9 Assignment
//vka@njit.edu?>
<?php 
if (!isset($login_message)) {
 $login_message = 'You must login to view this page.';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bread Shop</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php include("header.php");?>
    <h1>Bread Shop</h1>
  <main>
    <h1>Login</h1>
    <?php include("addUsers.php");?>
    <form action="authenticate.php" method="post">
      <label>Email:</label>
      <input type="text" name="email" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" value="Login">
    </form>
    <p><?php echo $login_message; ?></p>
  </main>
  </body>
</html>
<?php




?>
 