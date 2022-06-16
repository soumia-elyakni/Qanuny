<?php


class AdminControllers {

    
	public function adminAuth($adminame, $password){
			$adminame = $_POST['adminame'];
			$password = $_POST['password'];
		
			$admin = Admin::login($adminame, $password);
            

			if($admin->adminame ===  $_POST['adminame'] &&  $admin->password === $_POST['password']){

				$_SESSION['admin'] =  $admin->id;
				$_SESSION['adminame'] = $admin->User_name;
                
				Redirect::to('nouveauxJuristes');


			}else{
			// 	// Session::set('error','كلمة السر أو اسم الأدمن غير صحيح');
                Redirect::to('loginAdmin');
                
			}
		
	}
    public function logout(){
		
		session_unset();
        session_destroy();
        
        Redirect::to('home');
    }

}


?>