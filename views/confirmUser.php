<?php


if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $PreUser = new PreUserControllers();
    $data = $PreUser-> getOnePreUSer($id);
    $user = new UserControllers();

    if($user -> confirmUser($data)){

        $PreUser-> deletePreUser($id); 
    }
    
   

}






?>