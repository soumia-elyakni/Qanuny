<?php

class PreUserControllers {
    public function getAllPUsers(){
        $preUsers = preUser::getAll();
        return $preUsers;
    }


    public function getOnePreUSer($id){
        $user = preUser::getUser($id);
        return $user;
    
}

public function deletePreUser(){
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
        $result = PreUser::delete($data);
        if($result === 'ok')
        {
            Redirect::to('Tableau');
            // header('location:Tableau');
        }
    }
}

}
?>


