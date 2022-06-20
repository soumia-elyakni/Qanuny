<?php

class RendezVsControllers {

    public function getAllDemende(){
        $demendes = RendezVs::getAll() ;
        return $demendes;
    }

    public function addDemande() {
        if(isset($_POST['submit'])){
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



}


?>