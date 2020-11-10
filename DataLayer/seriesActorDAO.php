
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
?>