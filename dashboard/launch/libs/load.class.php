<?php

class LoadDashboardTemplate{
    public static function loadTemplate($filename){
        include $_SERVER['DOCUMENT_ROOT']."/VBC/dashboard/launch/includes/$filename.php";
    }
}

?>
