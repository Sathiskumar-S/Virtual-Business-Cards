<?php

class User{
    private $conn;

    public static function signup($firstname,$lastname,$username,$email,$password){
        $pass = md5($password);

        $conn = Database::getConnection();

        $query = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname', '$lastname', '$username', '$email', '$pass')";

        $error = false;

        if($conn->query($query) === true){
            $error = false;
        }else{
            $error = $conn->error;
        }
    }

    public static function login($username,$password){
        $pass = md5($password);
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $conn = Database::getConnection();
        $result = $conn->query($query);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if($row['password'] == $pass){
                return $row;
            }
        }else{
            return false;
        }
    }
}

?>