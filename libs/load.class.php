<?php

class LoadTemplate{
    public static function loadTemplate($name){
        include $_SERVER['DOCUMENT_ROOT']."/VBC/_templates/$name.php";
    }
}

?>