<?php
class RendezVs {
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM demandes');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }

    static public function add($data){

        
        $stmt = DB::connect()->prepare('INSERT INTO demandes (user_id, juriste_id, title, descript ) VALUES (:user_id, :juriste_id, :title, :descript)');

        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':juriste_id', $data['juriste_id']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':descript', $data['descript']);
         

        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;

    }

    static public function getOneDemande($id){
       
        $stmt=DB::connect();
        $query = "SELECT * FROM users INNER JOIN demandes On users.cin = demandes.cin WHERE users.id = .$id ";
        $stmt = $stmt -> prepare($query);
        $stmt -> execute();
        $demande =$stmt->fetch(PDO::FETCH_ASSOC);
        return $demande;

    }


}

?>