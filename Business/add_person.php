<?php

include ('../DataLayer/personDAO.php');

session_start();



$personName = $_POST['personName'];
$birthDate = $_POST['personBirth'];
$info = $_POST['personInfo'];
$image_url = $_POST['personImage'];

$result = AddPerson($personName, $birthDate, $info, $image_url);
$_SESSION['type'] = 'person';
if($result){
    
    $_SESSION['message'] = '<br>Successful.</br>';
    header('Location: ../adminpanel.php');
     exit();
}
else{
    $_SESSION['message'] = '<br>Failed to insert.</br>';
    header('Location: ../adminpanel.php');
    exit();
}


die();
?>