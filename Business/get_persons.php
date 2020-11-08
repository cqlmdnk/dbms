<?php
include '../DataLayer/connection.php';

$request = 1;
if(isset($_POST['request'])){
  $request = $_POST['request'];
}

// Select2 data
if($request == 1){
    
       $conn = OpenCon();
    
       if(!isset($_POST['searchTerm'])){
        $fetchData = mysqli_query($conn, "SELECT * FROM person WHERE 1");
     }else{
        $search = $_POST['searchTerm'];
        $fetchData = mysqli_query($conn,"SELECT * FROM person WHERE 1");
     }
   
      
      
      
      
      
   
    
   

  $data = array();

  while ($row = $fetchData->fetch_row()) {
     $data[] = array("id"=>$row[0], "text"=>$row[1]); 
     
  }

  echo json_encode($data);
  CloseCon($conn);
  exit;
}

// Add element
if($request == 2){

   $html = "<select class='select2_el' ><option value='0'> Search People</option></select><br/>";
   echo $html;
   exit;
 
}