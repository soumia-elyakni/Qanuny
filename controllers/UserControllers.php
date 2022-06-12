<?php

class UserControllers {
    public function getAllUsers(){
        $users = user::getAll();
        return $users;
    }

    public function addUser(){
        if(isset($_POST['submit'])){
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'cin' => $_POST['cin'],
                'tel' => $_POST['tel'],
                'ville' => $_POST['ville'],
                'role' => $_POST['role']
            
            ];

            $result = user::add($data);
            if($result === "ok "){
            }else{
            echo $result;
        }
    }
}
}

?>