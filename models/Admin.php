<?php

class Admin {

    static public function login($data){


		$adminame = $data['adminame'];
		$pass= $data['pass'];

		
		try {
			$query = "SELECT * FROM admins WHERE User_name = :adminame AND Pass = :pass "; 
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(  
					'adminame' => $adminame,
					'pass' => $pass
			));
			$admin = $stmt->fetch(PDO::FETCH_OBJ);
			return $admin;
		} catch(PDOException $ex){
		
			echo 'erreur' . $ex->getMessage();
		}
	}
}








	// 	try{
	// 			$query = 'SELECT * FROM admins WHERE User_name = :adminame';
	// 			$stmt = DB::connect()->prepare($query);
	// 			$stmt->execute(array(  
	// 				':adminame'     =>     $_POST["adminame"],  
	// 				':password'     =>     $_POST["password"]  
	// 			));
				
	// 			$admin = $stmt->fetch(PDO::FETCH_OBJ);
	// 			return $admin;
	// 	 } catch(PDOException $ex){
	// 			echo 'erreur' . $ex->getMessage();
	// 			return 'is not admin';
   
	// 	}
	// }
    


?>