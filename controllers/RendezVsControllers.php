<?php

class RendezVsControllers {

    public function getAllDemende(){
        $demendes = RendezVs::getAll() ;
        return $demendes;
    }

    public function addDemande() {
        if(isset($_POST['send'])){
            $data = [
                'cinClient' => $_SESSION['cin'],
                'idJuriste' => $_POST['id'],
                'title' => $_POST['title'],
                'descript' => $_POST['descript'],
                'statut' => "En attente",

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