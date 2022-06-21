<?php

class JuristeControllers{

    public function getAllJuristes(){
        $juristes = juriste::getAll();
        return $juristes;
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