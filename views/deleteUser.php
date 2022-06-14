<?php
if(isset($_POST['id'])){
    $exitUser = new UserControllers();
    $exitUser -> deleteUser();
    Redirect::to('Tableau');
}


?>