<?php

class User{
    private $conn;

    public static function signup($firstname,$lastname,$username,$email,$password){
        $pass = md5($password);

        $conn = Database::getConnection();

        $query = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

        $error = false;

        if($conn->query($query) === true){
            $error = false;
        }else{
            $error = $conn->error;
        }
    }

    public static function login($username,$email){
        
    }
}

?>