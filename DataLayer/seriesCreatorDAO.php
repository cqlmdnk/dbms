
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
?>