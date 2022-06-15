<?php

class preUser{
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM juristedemande');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }

    static public function add($data){

        $data['pass'] = md5($data['pass']) ;
        $stmt = DB::connect()->prepare('INSERT INTO juristedemande (nom, prenom, cin, sexe, telephone, ville, role, cinPhoto, cipPhoto, mail, pass ) VALUES (:nom, :prenom, :cin, :sexe, :telephone, :ville, :role, :cinPhoto, :cipPhoto, :mail, :pass)');
        $cin = $_FILES['cinPhoto'];
        $cip = $_FILES['cipPhoto'];

        $cinName = $cin['name'];
        $cipName = $cip['name'];
        $cinTmp = $cin['tmp_name'];
        $cipTmp = $cip['tmp_name'];

        move_uploaded_file($cinTmp, './uploads/'. $cinName);
        move_uploaded_file($cipTmp, './uploads/'. $cipName);

        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':cin', $data['cin']);
        $stmt->bindParam(':sexe', $data['sexe']);
        $stmt->bindParam(':telephone', $data['telephone']);
        $stmt->bindParam(':ville', $data['ville']);
        $stmt->bindParam(':role', $data['role']);
        $stmt->bindParam(':cinPhoto', $cinName);
        $stmt->bindParam(':cipPhoto', $cipName);
        $stmt->bindParam(':mail', $data['mail']);
        $stmt->bindParam(':pass', $data['pass']);

        $stmt->execute();
        

        // if($stmt->execute()){
        //     return 'ok';
        // } else {
        //     return 'error';
        // }
        
}

    static public function getUser ($id) {
        try{
        $query = 'SELECT * FROM juristedemande WHERE id = :id';
        $stmt = DB::connect () ->prepare ($query);
        $stmt->execute (array (":id" => $id));
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        return $user;
        } catch (PDOException $ex){
        echo 'erreur' .$ex->getMessage();
    }
}

    static public function delete($id){
         try{
            $query = 'DELETE FROM juristedemande WHERE id = :id';
            $stmt = DB::connect () ->prepare ($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute ();
            $stmt->fetch(PDO::FETCH_OBJ);

            if($stmt->execute()){
                return "ok";
            }
        } catch (PDOException $ex){
            echo 'erreur' .$ex->getMessage();
            die();
        }
          
    }
}
?>