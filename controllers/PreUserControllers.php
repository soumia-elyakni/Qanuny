<?php

class PreUserControllers {
    public function getAllPUsers(){
        $preUsers = preUser::getAll();
        return $preUsers;
    }
}
?>


