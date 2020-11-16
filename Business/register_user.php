<?php

include ('../DataLayer/userDAO.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$username = $_POST['username'];
$user = GetUsers($username);
if($user == NULL){

}
else{
    
    $_SESSION['message'] = 'This username is already taken.';
    header('Location: ../index.php');
    exit();
}

?>