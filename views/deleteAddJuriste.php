<?php

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $PreUser = new PreUserControllers();
    $data = $PreUser-> getOnePreUSer($id);
    $PreUser-> deletePreUser($id); 

}
?>