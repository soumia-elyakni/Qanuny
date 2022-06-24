<?php

class JuristeControllers{

    public function getAllJuristes(){
        $juristes = juriste::getAll();
        return $juristes;
    }

    public function getAllAvocat(){
        $avocat = juriste::getAvocat();
        return $avocat;
    }

    public function getAllNotaire(){
        $notaire = juriste::getNotaire();
        return $notaire;
    }

    public function confirmJuriste($data){
        $result = Juriste::confirm($data);
        
        if($result === "ok"){
            return true;
        
        } else {
            return 'not yet';
        }
    }

    public function deleteJuriste($data){
            $data['id'] = $_POST['jurId'];
            $result = Juriste::delete($data);
            if($result === 'ok')
            {
                Redirect::to('Tableau');
                
            }
        
    }

}
?>