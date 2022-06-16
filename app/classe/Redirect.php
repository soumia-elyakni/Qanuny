<?php

class Redirect{

    static public function to($page) {
        echo "<script type='text/javascript'>document.location.replace('$page');</script>";
}
}

?>