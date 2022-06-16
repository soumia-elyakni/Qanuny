<?php

if(isset($_POST['submit'])){

    $mail = $_POST['mail'];
    $password = $_POST['password'];
  $login = new UserControllers();
  $login -> loginUser($mail, $password);

}


?>