<?php

class user{
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM users');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }

    static public function add($data){

        $data['pass'] = md5($data['pass']) ;
        $stmt = DB::connect()->prepare('INSERT INTO users (nom, prenom, cin, sexe, telephone, ville, role, mail, pass ) VALUES (:nom, :prenom, :cin, :sexe, :tel, :ville, :role, :mail, :pass)');

        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':cin', $data['cin']);
        $stmt->bindParam(':sexe', $data['sexe']);
        $stmt->bindParam(':tel', $data['telephone']);
        $stmt->bindParam(':ville', $data['ville']);
        $stmt->bindParam(':role', $data['role']);
        $stmt->bindParam(':mail', $data['mail']);
        $stmt->bindParam(':pass', $data['pass']);

        $stmt->execute();
        



        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;

        
            
     


    }

    // static function update($data){
    //     $stmt = DB::connect()->prepare('UPDATE users SET nom = :nom , prenom = :prenom , cin = :cin , tel = :tel , ville = :ville , role = :role  WHERE id= :id ');

    //     $stmt->bindParam(':id', $data['id']);
    //     $stmt->bindParam(':nom', $data['nom']);
    //     $stmt->bindParam(':prenom', $data['prenom']);
    //     $stmt->bindParam(':cin', $data['cin']);
    //     $stmt->bindParam(':tel', $data['tel']);
    //     $stmt->bindParam(':ville', $data['ville']);
    //     $stmt->bindParam(':role', $data['role']);

    //     if($stmt->execute()){
    //         return 'ok';
    //         header('location :Tableau');
    //     }else{
    //         return 'error';
    //     }


    // }
}
?>