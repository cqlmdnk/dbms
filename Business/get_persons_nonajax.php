<?php

include ('DataLayer/personDAO.php');

function GetAllPerson(){
    session_start();




    $result = GetPersonsDAO();
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
}
function GetPersonById($id){
    $result = GetPersonDAOById($id);
   
    $row = $result->fetch_array();
    return $row;
}





?>