<?php


class AdminControllers {

    
	public function adminAuth($data){


		$data = array(
			'adminame'=>$_POST['adminame'],
			'pass'=>$_POST['password'],

		);
      
		$admin = Admin::login($data);
		
		if($admin->User_name === $_POST['adminame'] && $admin->Pass === $_POST['password']){
			
			$_SESSION['logged'] = true;                        
			$_SESSION['mail'] =$admin->Mail;
			$_SESSION['id'] = $admin->Id;
			$_SESSION['nom'] = $admin-> User_name;
			$_SESSION['role'] = "admin";


			Redirect::to('nouveauxJuristes');
		}else{
			
			Redirect::to('loginAdmin');
		}
	}


	public function logout(){
		
		session_unset();
		session_destroy();
		
		Redirect::to('home');
	}
	
	}










			// $adminame = $_POST['adminame'];
			// $password = $_POST['password'];
		
			// $admin = Admin::login($adminame, $password);
            

			// if($admin->adminame ===  $_POST['adminame'] &&  $admin->password === $_POST['password']){

			// 	$_SESSION['admin'] =  $admin->id;
			// 	$_SESSION['adminame'] = $admin->User_name;
                
			// 	Redirect::to('nouveauxJuristes');


			// }else{
			// // 	// Session::set('error','كلمة السر أو اسم الأدمن غير صحيح');
            //     Redirect::to('loginAdmin');
                
			// }
		


?>