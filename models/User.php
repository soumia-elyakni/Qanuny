<?php

class user{
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM users');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }

    static function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO users (nom, prenom, cin, tel, ville, role) VALUES (:nom, :prenom, :cin, :tel, :ville, :role)');

        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':cin', $data['cin']);
        $stmt->bindParam(':tel', $data['tel']);
        $stmt->bindParam(':ville', $data['ville']);
        $stmt->bindParam(':role', $data['role']);

        if($stmt->execute()){
            return 'ok';
            header('location :Tableau');
        }else{
            return 'error';
        }


    }

    static function update($data){
        $stmt = DB::connect()->prepare('UPDATE users SET nom = :nom , prenom = :prenom , cin = :cin , tel = :tel , ville = :ville , role = :role  WHERE id= :id ');

        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':cin', $data['cin']);
        $stmt->bindParam(':tel', $data['tel']);
        $stmt->bindParam(':ville', $data['ville']);
        $stmt->bindParam(':role', $data['role']);

        if($stmt->execute()){
            return 'ok';
            header('location :Tableau');
        }else{
            return 'error';
        }


    }
}
?>