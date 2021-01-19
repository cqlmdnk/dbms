
<?php



function AddSeriesDirector($seriesID, $personID)
{
   $conn = OpenCon();
   

   $stmt = $conn->prepare("CALL AddSeriesCreator(?,?)");
   $stmt->bind_param("ii", $seriesID, $personID);

  
   $result =  $stmt->execute();
   
  
   CloseCon($conn);
   return $result;
   
}


function GetSeriesCreatorDAOById($seriesID){
   $conn = OpenCon();

   $stmt = $conn->prepare("CALL  GetSeriesCreatorBySeriesId(?)");
   $stmt->bind_param("i", $seriesID);

   $stmt->execute();
   $result =  $stmt->get_result();
   CloseCon($conn);
   return $result;
}
?>