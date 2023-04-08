<?php

class Database{
    public static $conn = null;

    public static function getConnection(){
        if(Database::$conn == null){
            $servername = "mysql.selfmade.ninja";
            $username = "sathis243214";
            $password = "pROGRAMMER@2022";
            $database = "sathis243214_vbc";

            //Create Connection
            $conn = new mysqli($servername,$username,$password,$database);
            echo "Database is connected successfully";

            //Check Connection Status
            if($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }else{
                Database::$conn = $conn;
                return Database::$conn;
            }
        }else{
            return Database::$conn;
        }
    }
}

?>