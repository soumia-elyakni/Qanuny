<?php
if(isset($_POST['submit'])){
  $newUSer = new UserControllers();
  $newUser-> addUser();

  header('location : Tableau');
}
?>