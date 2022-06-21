<?php

class RendezVsControllers {

    public function getAllDemende(){
        $demendes = RendezVs::getAll() ;
        return $demendes;
    }

    public function addDemande() {
        if(isset($_POST['send'])){
            $data = [
                'user_id' => $_SESSION['id'],
                'juriste_id' => $_POST['juriste_id'],
                'title' => $_POST['title'],
                'descript' => $_POST['descript'],
                
            ];

            $result = RendezVs::add($data);
            return $result;

        
    }
}

public function getOneDemande($id){
    
    $demande = RendezVs::getOneDemande($id);
    var_dump($demande);
    die();
    return $demande;

}



}


?>