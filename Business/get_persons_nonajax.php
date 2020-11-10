<?php

include ('../DataLayer/personDAO.php');

session_start();




$result = GetPersons();
$_SESSION['type'] = 'person';

if($persons ){
    
    $_SESSION['message'] = '<br>Successful.</br>';
    $_SESSION['persons'] = $persons["personName"];
    header('Location: adminpanel.php');
     exit();
}
else{
    $_SESSION['message'] = '<br>Failed to insert.</br>';
    header('Location: adminpanel.php');
    exit();
}



?>