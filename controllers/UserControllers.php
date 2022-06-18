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

        public function loginUser(){

                if(isset($_POST['login'])){
                    $data = array(
                        'mail'=>$_POST['mail'],
                        'pass'=>$_POST['pass'],

                    );
                    $user= User::login($data);
                    
                    if($user->mail === $_POST['mail'] && $user->pass === $_POST['pass']){
                        $_SESSION['logged'] = true;                        
                        $_SESSION['mail'] =$user->mail;
                        $_SESSION['id'] = $user->id;
                        $_SESSION['nom'] = $user->nom;
                        $_SESSION['prenom'] = $user->prenom;
                        $_SESSION['role'] = $user->role;


                        if ($user->role == 'عميل') {
                            $_SESSION['role'] = 'عميل';
                            Redirect::to('juristeListe');
                            die();

                        }else if($user->role == 'محام'){
                            $_SESSION['role'] = 'محام';
                            Redirect::to('demandes');
                            die();
                            
                        } else {
                            $_SESSION['role'] = 'موثق';
                            Redirect::to('demandes');
                            die();
                        }
                    }else{
                        Redirect::to('home');
                        die();
                    }
                }
            }


        public function logout(){
		
                session_unset();
                session_destroy();
                
                Redirect::to('home');
            }
            
        }
        
    
    
   



