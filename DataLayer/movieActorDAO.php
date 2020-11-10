
<?php



 function AddMovieActor($movieID, $personID)
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL AddMovieActor(?,?)");
    $stmt->bind_param("ii", $movieID, $personID);

   
    $result =  $stmt->execute();
    
   
    CloseCon($conn);
    return $result;
    
 }
 ?>