<?php
class RendezVs {
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM demandes');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }

    static public function add($data){

        
        $stmt = DB::connect()->prepare('INSERT INTO demandes (cinClient, idJuriste, title, descript, statut ) VALUES (:cinClient, :idJuriste, :title, :descript, :statut)');

        $stmt->bindParam(':cinClient', $data['cinClient']);
        $stmt->bindParam(':idJuriste', $data['idJuriste']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':descript', $data['descript']);
        $stmt->bindParam(':statut', $data['statut']);   

        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;

    }



}

?>