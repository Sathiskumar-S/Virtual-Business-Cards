<?php


include "libs/load.class.php";


$username = "prathi";
$password = "Prathi@123";

$result = User::login($username,$password);


if($result){
    echo "login success".$result['username'];
}else{
    echo "login failed";
}