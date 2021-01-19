<?php 
include_once ('connection.php');
function AddMovieReview($username, $movieID, $review){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL AddMovieReview(?,?,?)");
    $stmt->bind_param("sis", $username, $movieID, $review);
    
      
    $result =  $stmt->execute();
       
      
    CloseCon($conn);
    return $result;
       
    
}



function AddSeriesReview($username, $seriesID, $review){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL AddSeriesReview(?,?,?)");
    $stmt->bind_param("sis", $username, $seriesID, $review);
    
      
    $result =  $stmt->execute();
       
      
    CloseCon($conn);
    return $result;
       
    
}

function GetMovieReviewsByIdDAO($movieID){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL GetMovieReviewsById(?)");
    $stmt->bind_param("i", $movieID);
    
      
    $stmt->execute();
    $result =  $stmt->get_result();
      
    CloseCon($conn);
    return $result;

}

function GetMovieReviewsByUsernameDAO($username){
    $conn = OpenCon();
       
    
    $stmt = $conn->prepare("CALL GetMovieReviewsByUsername(?)");
    $stmt->bind_param("s", $username);
    
      
    $stmt->execute();
    $result =  $stmt->get_result();
      
    CloseCon($conn);
    return $result;
}
?>