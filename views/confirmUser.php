<?php


if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $PreUser = new PreUserControllers();
    $data = $PreUser-> getOnePreUSer($id);
    $user = new UserControllers();
    $user-> confirmUser($data);
    
    $delete = $PreUser-> deletePreUser(); 

}






?>