<?php

include ('../DataLayer/userDAO.php');

$username = $_POST['username'];
$password = $_POST['password'];

$result = ConfirmCredentials($username, $password);
if($result != false){
    
    session_start(); 
    $_SESSION['message'] = '<br>Succefully logged in.</br>';
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $result;
    header('Location: ../index.php');
    exit();
}
else{
    
    $_SESSION['message'] = '<br>Please check your username and password.</br>';
    header('Location: ../index.php?url=login');
    exit();
}

?>