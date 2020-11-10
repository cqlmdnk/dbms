
<?php



function AddSeriesWriter($seriesID, $personID)
{
   $conn = OpenCon();
   

   $stmt = $conn->prepare("CALL AddSeriesWriter(?,?)");
   $stmt->bind_param("ii", $seriesID, $personID);

  
   $result =  $stmt->execute();
   
  
   CloseCon($conn);
   return $result;
   
}
?>