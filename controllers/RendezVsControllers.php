<?php

class RendezVsControllers {

    public function getAllDemende(){
        $demendes = RendezVs::getAll() ;
        return $demendes;
    }

    public function getOneDemande(){
        if(isset($_POST['demande_id'])){
            $id = $_POST['demande_id'];
            $demande = RendezVs::getDemande($id);
            return $demande;
        }
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



public function readDemandes(){

    $id = $_SESSION['id'] ;
    if ($_SESSION['role'] == 'عميل'){
        $demande = RendezVs::getAllDemandeByJuriste($id);
        return $demande;
    } else {
        $demande = RendezVs::getAllDemandeByUser($id);
        return $demande;
    }
}


public function rendezVs(){
    $id = $_SESSION['id'];
    $rendezVs = RendezVs::getALLjuristeRendezVs($id);
    return $rendezVs;

}
public function updateDemande(){
    $dmdData=[
        'title' => $_POST['title'],
        'descript' => $_POST['descript'],
        'id' => $_POST['demande_id']
       ];
    
    $update = RendezVs::update($dmdData);
    return $update;

}

public function acceptDemande(){
    $dataRV=[
        "dateRV"=>$_POST['dateRV'],
        "lienRV"=>$_POST['lienRV'],
        "document"=>$_POST['document'],
        "demande_id"=>$_POST['demande_id']
    ];
         
    $accept = RendezVs::accept($dataRV);
    return $accept;

}

public function refuDemande(){

    $id = $_POST['demande_id'];   
    $refu = RendezVs::refu($id);
    return $refu;

}

public function deleteDemande(){
   
  if(isset($_POST['demande_id'])){
      $id = $_POST['demande_id'];
     
    $result = RendezVs::delete($id);
    if($result === 'ok')
    {
        Redirect::to('mesDemandes');
        
    }
}


}


}


?>