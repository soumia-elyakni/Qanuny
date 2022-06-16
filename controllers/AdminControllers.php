<?php


class AdminControllers {

    public function adminAuth($name){
		
			$result = Admin::login($name);
            

			if($result->User_name ===   $_POST['adminame'] && $_POST['password'] == $result->Pass){

				$_SESSION['admin'] = true;
				$_SESSION['adminame'] = $result->User_name;
                
				Redirect::to('nouveauxJuristes');


			}else{
				// Session::set('error','كلمة السر أو اسم الأدمن غير صحيح');
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