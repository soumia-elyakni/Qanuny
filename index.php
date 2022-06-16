<?php
   
   header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
   
   require_once 'autoload.php';
   require_once 'views/includes/navbar.php';

    $home = new HomeController();

    $pages = ['home','loginAdmin', 'Tableau','nouveauxJuristes','juristeListe','demandes','rendezVous', 'addUser','deleteAddJuriste','deleteUser', 'confirmUser', 'logouat'];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages)){
            $page= $_GET['page'];
            $home->index($page);
        }else{
            include('views/404.php');
        }
    }else{
        $home->index('home');
    }
?>

<?php
require_once './views/includes/footer.php';
?>