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

public function deletePreUser($id){
        $result = PreUser::delete($id);
        if($result === 'ok')
        {
            Redirect::to('Tableau');
            // header('location:Tableau');
        }
}

}
?>


