<?php

class preUser{
    static public function getAll(){
        $stmt=DB::connect();
        $stmt = $stmt -> prepare('SELECT * FROM juristedemande');
        $stmt -> execute();
        return $stmt -> fetchAll();
        
    }
}
?>