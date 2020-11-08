<?php
include ('connection.php');






function GetUsers($username)
 {
    $conn = OpenCon();
    echo "Connected Successfully";

    $stmt = $conn->prepare("CALL GetUsersByUsername(?)");
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $result = $stmt->get_result();
    if($result){
      CloseCon($conn);
      $_SESSION['message'] = '<br>Successful</br>';
      header('Location: ../adminpanel.php');
      exit();
  }
  else{
   CloseCon($conn);
      $_SESSION['message'] = '<br>Failed to insert.</br>';
      header('Location: ../adminpanel.php');
      exit();
  }
 }
 


?>