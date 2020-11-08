<?php

include ('../DataLayer/userDAO.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$username = $_POST['username'];
$password = $_POST['password'];

$result = GetUsers($username);
$user = $result->fetch_assoc();
if($user['username'] == $username && $user['password'] == $password ){
    
    $_SESSION['message'] = '<br>Succefully logged in.</br>';
    header('Location: ../index.php');
    exit();
}
else{
    $_SESSION['message'] = '<br>Please check your username and password.</br>';
    header('Location: ../index.php');
    exit();
}

?>