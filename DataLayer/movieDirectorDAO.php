
<?php




 function AddMovieDirector($movieID, $personID)
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL AddMovieDirector(?,?)");
    $stmt->bind_param("ii", $movieID, $personID);

   
    $result =  $stmt->execute();
    
   
    CloseCon($conn);
    return $result;
    
 }
 ?>