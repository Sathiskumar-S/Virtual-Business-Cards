<?php ob_start();?>
<?php include "includes/Database.class.php";?>
<?php include "includes/User.class.php";?>


<?php

class LoadTemplate{
    public static function loadTemplate($name){
        include $_SERVER['DOCUMENT_ROOT']."/VBC/_templates/$name.php";
    }
}

?>