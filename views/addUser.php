<?php
if(isset($_POST['submit'])){
$newUser = new UserControllers();
$newUser-> addUser();

header('location: Tableau' );
}
?>