<?php
include ('connection.php');






function ConfirmCredentials($username, $password)
 {
    $conn = OpenCon();

    $stmt = $conn->prepare("CALL GetUsersByUsername(?)");
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    CloseCon($conn);
    if($row['password'] == $password){
      
    
      return $row['username'];
      
  }
  else{

      return false;
      
  }
  
 }

 function AddNewUser($username, $password, $email){
    $conn = OpenCon();

    $stmt = $conn->prepare("CALL AddNewUser(?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);

    $stmt->execute();
    $result = $stmt->get_result();
    CloseCon($conn);
 }

 function IsUserExist($username){
    $conn = OpenCon();

    $stmt = $conn->prepare("SELECT * FROM user WHERE user.username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if(mysqli_num_rows($result)>0){
        return true;
    }
    else{
        return false;
    }
    
 }
 


?>