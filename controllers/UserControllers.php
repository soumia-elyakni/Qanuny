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
                'sexe' => $_POST['sexe'],
                'telephone' => $_POST['tel'],
                'ville' => $_POST['ville'],
                'role' => $_POST['role'],
                'mail' => $_POST['usmail'],
                'pass' => $_POST['password'],
            
            ];

            $result = user::add($data);
            
            if($result === "ok "){
                header('location: .BASE_URL');
            }else{
            echo $result;
        }
    }
}
}

?>