<?php
class RendezVs {
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM demandes');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }

    static public function getDemande($id){

        try{
            $query = 'SELECT * FROM demandes WHERE id = :id';
            $stmt = DB::connect () ->prepare ($query);
            $stmt->execute (array (" : id" => $id));
            $demande = $stmt->fetch(PDO::FETCH_OBJ);
            return $demande;
            } catch (PDOException $ex){
            echo 'erreur' .$ex->getMessage();
            }
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

    static public function getAllDemandeByJuriste($id){
        
        $stmt=DB::connect();
        $query = "SELECT juristes.nom,juristes.prenom,juristes.mail,juristes.telephone,demandes.id,demandes.title,demandes.descript,demandes.demande_date,demandes.statut,demandes.dateRV,demandes.lienRV,demandes.document FROM demandes  JOIN juristes  ON juristes.juriste_id=demandes.juriste_id WHERE user_id=:id ";
        $stmt = $stmt -> prepare($query);
        $stmt->bindParam(':id', $id );
        $stmt -> execute();
        $demande =$stmt->fetchAll();
        
        return $demande;
        


    }

    static public function getAllDemandeByUser($id){
        
        $attente = "الانتظار";
        $stmt=DB::connect();
        $query = "SELECT users.nom,users.prenom,users.mail,users.telephone,demandes.id,demandes.title,demandes.descript,demandes.demande_date,demandes.statut,demandes.dateRV,demandes.lienRV,demandes.document FROM demandes  JOIN users  ON users.user_id=demandes.user_id WHERE juriste_id=:id AND statut = :statut ";
        $stmt = $stmt -> prepare($query);
        $stmt->bindParam(':id', $id );
        $stmt ->bindparam(':statut', $attente );
        $stmt -> execute();
        $demande =$stmt->fetchAll();
        
        return $demande;

    }

    static public function update($dmdData){
        $title = $dmdData['title'];
        $descript = $dmdData['descript'];
        $id = $dmdData['id'];
        $query = "UPDATE demandes SET title = :title, descript = :descript WHERE id = :id";
        $stmt = DB::connect() -> prepare($query);
        $stmt-> bindParam(':id', $id);
        $stmt -> bindParam(':title' , $title);
        $stmt -> bindParam(':descript' , $descript);

            if($stmt ->execute()){
                Redirect::to('mesDemandes');
            } else {
                return 'error';
            }


    }

    static public function accept($dataRV){

        $statut = "مقبول";
        $query = "UPDATE demandes SET dateRV = :dateRV, lienRV = :lienRV,  document = :document, statut=:statut WHERE id = :id";
        $stmt = DB::connect()-> prepare($query);
        $stmt -> bindParam(':id', $dataRV['demande_id']);
        $stmt -> bindParam(':dateRV', $dataRV['dateRV']);
        $stmt -> bindParam(':lienRV', $dataRV['lienRV']);
        $stmt -> bindParam(':document', $dataRV['document']);
        $stmt -> bindParam(':statut', $statut);
       
        if($stmt ->execute()){
            Redirect::to('rendezVous');
        } else {
            return 'error';
        }

    }

    static public function refu($id){
        $statut = "مرفوض";
        $query = "UPDATE demandes SET statut = :statut WHERE id = :id";
        $stmt = DB::connect()-> prepare($query);
        $stmt -> bindParam(':statut', $statut);
        $stmt -> bindParam(':id', $id);

        if($stmt ->execute()){
            Redirect::to('demandes');
        } else {
            return 'error';
        }
    }

    static public function getALLjuristeRendezVs($id){
        $accept = "مقبول";
        $stmt=DB::connect();
        $query = "SELECT users.nom,users.prenom,users.mail,users.telephone,demandes.id,demandes.title,demandes.descript,demandes.demande_date,demandes.statut,demandes.dateRV,demandes.lienRV,demandes.document FROM demandes  JOIN users  ON users.user_id=demandes.user_id WHERE juriste_id=:id AND statut = :statut ";
        $stmt = $stmt -> prepare($query);
        $stmt->bindParam(':id', $id );
        $stmt ->bindparam(':statut', $accept );
        $stmt -> execute();
        $RendezVs =$stmt->fetchAll();
        
        return $RendezVs;
    }


    static public function delete($id){

      
        try{
            $query = 'DELETE FROM demandes WHERE id = :id';
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


}

?>