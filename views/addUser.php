<?php
  $newUser = new UserControllers();
  $newUser-> addUser();
  Redirect::to('home');
?>