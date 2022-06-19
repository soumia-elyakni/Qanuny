<?php
  if (!isset($_SESSION['logged']) && !($_SESSION['role'] == 'عميل')) {
    Redirect::to('home');
    die();
  }
?>