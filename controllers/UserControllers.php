<?php

class UserControllers {
    public function getAllUsers(){
        $users = user::getAll();
        return $users;
    }

    public function addUser() {
        if(isset($_POST['submit'])){
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'cin' => $_POST['cin'],
                'sexe' => $_POST['sexe'],
                'telephone' => $_POST['telephone'],
                'ville' => $_POST['ville'],
                'role' => $_POST['role'],
                'mail' => $_POST['usmail'],
                'pass' => $_POST['password'],
            ];

            if($data['role'] == 'عميل') {
                $result = user::add($data);
            } else {
                $result = PreUser::add($data);
            }

            
            if($result === "ok"){
                // Session::set('success', 'User Ajouté');
                Redirect::to('home');
                // header('location:home');
            }else{
            echo $result;
        }

    }

   
}

        public function getOneUSer(){
            if(isset($_POST['id'])){
                $data= [
                    'id'=> $_POST['id'],
                ];
                $user = User::getUser($data);
            }
            
        }

        public function confirmUser($data){
            $result = User::confirm($data);
            
            if($result === "ok"){
                return true;
            } else {
                return 'not yet';
            }
        }


        public function deleteUser(){
            if(isset($_POST['id'])){
                $data['id'] = $_POST['id'];
                $result = User::delete($data);
                if($result === 'ok')
                {
                    Redirect::to('Tableau');
                    
                }
            }
        }

        public function loginUser($mail, $password){

            $user = User::login($mail,$password);

            if($user){

                $_SESSION['login'] = true;  
                $_SESSION['id'] = $user['id'];  
                $_SESSION['cin'] = $user['cin'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['role'] = $user['role'];

                if($_SESSION['role'] == "عميل"){
                    Redirect::to('jurirteListe');
                } else {
                    Redirect::to('demande');
                }
            }

           

        }

}

?>