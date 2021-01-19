<?php
require_once ('connection.php');
function AddMovieRateDAO($rate, $movieID, $username){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL AddMovieRate(?,?,?)");
    $stmt->bind_param("dis", $rate, $movieID, $username);
    
    echo $rate;
    echo $movieID ;
    echo $username ;
    $result =  $stmt->execute();
       
      
    CloseCon($conn);
    return $result;
}
function GetMovieRateDAO($movieID, $username){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL GetMovieRate(?,?)");
    $stmt->bind_param("is", $movieID, $username);
    
    
    $stmt->execute();
    $result =  $stmt->get_result();  
      
    CloseCon($conn);
    return $result;
}

function UpdateMovieRateDAO($rate, $movieID, $username){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL UpdateMovieRate(?,?,?)");
    $stmt->bind_param("dis", $rate, $movieID, $username);
    
    
    $stmt->execute();
    $result =  $stmt->get_result();  
      
    CloseCon($conn);
    return $result;
}

?>