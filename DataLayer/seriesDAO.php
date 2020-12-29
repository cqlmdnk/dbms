
<?php

include_once ('connection.php');



 function AddSeries($seriesName, $startYear, $duration, $rating, $ratingCount, $nation, $image, $info, $limit)
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL AddSeries(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssdissss", $seriesName, $startYear, $duration, $rating, $ratingCount, $nation, $image, $info, $limit);

   
    $stmt->execute();
    $result =  $stmt->get_result();
    
    CloseCon($conn);
    return $result ;
    
 }


 
 function GetAllSeriesDAO()
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL GetAllSeriesImages()");
    

   
    $stmt->execute();
    $result =  $stmt->get_result();
    
    CloseCon($conn);
    return $result ;
    
 }

 function GetSeriesDAOById($id){
   $conn = OpenCon();
    

   $stmt = $conn->prepare("CALL GetSeriesById(?)");
   $stmt->bind_param("i", $id);
   

  
   $stmt->execute();
   $result =  $stmt->get_result();
   
   CloseCon($conn);
   return $result ;
 }

 ?>