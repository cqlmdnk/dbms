<?php
require_once ('connection.php');






 function AddPerson($personName, $birthDate, $info, $image_url)
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL AddPerson(?,?,?,?)");
    $stmt->bind_param("ssss", $personName, $birthDate, $image_url, $info);

   
    $result =  $stmt->execute();
    
   
    CloseCon($conn);
    return $result;
    
 }


 function GetPersonsDAO()
 {
    $conn = OpenCon();
    

    $result = mysqli_query($conn, "SELECT * FROM person WHERE 1");
   
   
   
    CloseCon($conn);
    return $result;

 }
 function GetPersonDAOById($id){
   $conn = OpenCon();

   $stmt = $conn->prepare("CALL  GetPersonById(?)");
   $stmt->bind_param("i", $id);

   $stmt->execute();
   $result =  $stmt->get_result();
   CloseCon($conn);
   return $result;
 }

 
 


?>