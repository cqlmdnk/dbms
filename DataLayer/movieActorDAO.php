
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

 
function GetMovieActorDAOById($movieID){
   $conn = OpenCon();

   $stmt = $conn->prepare("CALL  GetMovieActorsByMovieId(?)");
   $stmt->bind_param("i", $movieID);

   $stmt->execute();
   $result =  $stmt->get_result();
   CloseCon($conn);
   return $result;
}
 ?>