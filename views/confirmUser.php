<?php


if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $PreUser = new PreUserControllers();
    $data = $PreUser-> getOnePreUSer($id);
    $juriste = new JuristeControllers();

    if($juriste -> confirmJuriste($data)){
        $PreUser-> deletePreUser($id); 
        Redirect::to('nouveauxJuristes');
    }
    
   

}






?>