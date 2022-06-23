<style>
    *{direction: rtl;}
</style>
<?php
//  header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
    require_once 'autoload.php';
    $home = new HomeController();
    

    if (isset($_SESSION['logged'])){
        if($_SESSION['role'] == 'عميل'){
            require_once 'views/includes/sidebarClient.php';

        } else if ($_SESSION['role'] == 'admin'){
            require_once 'views/includes/sidebarAdmin.php';
        } else {
            require_once 'views/includes/sidebarJuriste.php';
        }
    }
    
    $pages = ['home','loginAdmin', 'Tableau', 'TableauJuriste', 'nouveauxJuristes','juristeListe','demandes','rendezVous', 'addUser','deleteAddJuriste','deleteUser','addDemande', 'updateDemande', 'confirmUser','loginUser','mesDemandes', 'logouat'];

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

    if(!(isset($_SESSION['logged']))){
        require_once 'views/includes/navbar.php';
    } else {
        require_once 'views/includes/navbarlogged.php';
    }
?>

<?php
require_once './views/includes/footer.php';
?>