<?php

class Juriste{
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM juristes');
        $stmt -> execute();
        return $stmt -> fetchAll();
    }


static public function confirm($data){

    $stmt = DB::connect()->prepare('INSERT INTO juristes (nom, prenom, cin, sexe, telephone, ville, role, mail, pass ) VALUES (:nom, :prenom, :cin, :sexe, :telephone, :ville, :role, :mail, :pass)');
    $stmt->bindParam(':nom', $data->nom);
    $stmt->bindParam(':prenom', $data->prenom);
    $stmt->bindParam(':cin', $data->cin);
    $stmt->bindParam(':sexe', $data->sexe);
    $stmt->bindParam(':telephone', $data->telephone);
    $stmt->bindParam(':ville', $data->ville);
    $stmt->bindParam(':role', $data->role);
    $stmt->bindParam(':mail', $data->mail);
    $stmt->bindParam(':pass', $data->pass);

    

    if($stmt->execute()){
        return 'ok';
    } else {
        return 'error';
    }
    $stmt = null;

}

static public function delete($data){
    $id = $data['id'];
        try{
            $query = 'DELETE FROM juristes WHERE juriste_id = :id';
            $stmt = DB::connect () ->prepare ($query);
            $stmt->execute (array (":id" => $id));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            $stmt->execute();

            if($stmt->execute()){
                return "ok";
            }
            } catch (PDOException $ex){
            echo 'erreur' .$ex->getMessage();
            }
          
    }

    
    static function update($data){
        $stmt = DB::connect()->prepare('UPDATE users SET nom = :nom , prenom = :prenom , cin = :cin , tel = :tel , ville = :ville , role = :role  WHERE user_id= :id ');

        $stmt->bindParam(':user_id', $data['id']);
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