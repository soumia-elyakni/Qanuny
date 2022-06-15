<?php
session_start();

require_once 'bootstrap.php';

spl_autoload_register('autoload');

require_once './views/includes/head.php';
// require_once './views/includes/sidebarAdmin.php';

require_once './controllers/HomeController.php';

function autoload($class_name)
{
    $paths = [
        'controllers/',
        'app/classe/',
        'database/',
        'models/',
        'public/'
    ];

    $parts= explode('\\',$class_name);
    $name= array_pop($parts);

    foreach ($paths as $path) {
        $file = sprintf($path . '%s.php', $class_name);
        if (is_file($file)) {
            include_once $file;
        }
    }
}

?>
