<?php
if(isset($_POST['id'])){
    $exitUser = new UserControllers();
    $exitUser -> deleteUser();
    Redirect::to('Tableau');
}

if(isset($_POST['jurId'])){
  $data['id']= $_POST['jurId'];
  $exitUser = new JuristeControllers();
  $exitUser -> deleteJuriste();
  Redirect::to('TableauJuriste');
}
?>
