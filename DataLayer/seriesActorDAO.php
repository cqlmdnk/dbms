
<?php



function AddSeriesActor($seriesID, $personID)
{
   $conn = OpenCon();
   

   $stmt = $conn->prepare("CALL AddSeriesActor(?,?)");
   $stmt->bind_param("ii", $seriesID, $personID);

  
   $result =  $stmt->execute();
   
  
   CloseCon($conn);
   return $result;
   
}

function GetSeriesActorDAOById($seriesID){
   $conn = OpenCon();

   $stmt = $conn->prepare("CALL  GetSeriesActorsBySeriesId(?)");
   $stmt->bind_param("i", $seriesID);

   $stmt->execute();
   $result =  $stmt->get_result();
   CloseCon($conn);
   return $result;
}
?>