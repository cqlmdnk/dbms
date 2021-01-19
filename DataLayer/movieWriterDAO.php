
<?php



 function AddMovieWriter($movieID, $personID)
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL AddMovieWriter(?,?)");
    $stmt->bind_param("ii", $movieID, $personID);

   
    $result =  $stmt->execute();
    
   
    CloseCon($conn);
    return $result;
    
 }

 
function GetMovieWriterDAOById($movieID){
   $conn = OpenCon();

   $stmt = $conn->prepare("CALL  GetMovieWriterByMovieId(?)");
   $stmt->bind_param("i", $movieID);

   $stmt->execute();
   $result =  $stmt->get_result();
   CloseCon($conn);
   return $result;
}
 ?>