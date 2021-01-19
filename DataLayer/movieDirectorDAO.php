
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

  
function GetMovieDirectorDAOById($movieID){
   $conn = OpenCon();

   $stmt = $conn->prepare("CALL  GetMovieDirectorByMovieId(?)");
   $stmt->bind_param("i", $movieID);

   $stmt->execute();
   $result =  $stmt->get_result();
   CloseCon($conn);
   return $result;
}
 ?>