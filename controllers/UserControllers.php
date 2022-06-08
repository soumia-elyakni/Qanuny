<?php

class UserControllers {
    public function getAllUsers(){
        $users = user::getAll();
        return $users;
    }
}
?>