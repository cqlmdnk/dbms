<?php

include_once ('../DataLayer/userDAO.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    echo("Girdi kayıt oldu");
$username = $_POST['username'];
$password = $_POST['password1'];
$email = $_POST['email'];
$user = IsUserExist($username);
echo("Girdi kayıt oldu");
if(!$user){
    AddNewUser($username, $password, $email);
    echo("Girdi kayıt oldu");
    //header('Location: ../index.php');
    
    
}
else{
    
    $_SESSION['message'] = 'This username is already taken.';
    echo("Girdi kayıt olmadı");
    //header('Location: ../index.php');
    
    
    
}

?>