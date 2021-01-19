
<?php

include_once ('connection.php');



 function AddMovie($movieName, $releaseYear, $duration, $rating, $ratingCount, $nation, $image, $info, $limit)
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL AddMovie(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssdissss", $movieName, $releaseYear, $duration, $rating, $ratingCount, $nation, $image, $info, $limit);

   
    $stmt->execute();
    $result =  $stmt->get_result();
    
    CloseCon($conn);
    return $result ;
    
 }


 function GetAllMovies()
 {
    $conn = OpenCon();
    

    $stmt = $conn->prepare("CALL GetAllMoviesImages()");
    

   
    $stmt->execute();
    $result =  $stmt->get_result();
    
    CloseCon($conn);
    return $result ;
    
 }

 
 function GetMovieDAOById($id){
   $conn = OpenCon();
    

   $stmt = $conn->prepare("CALL GetMovieById(?)");
   $stmt->bind_param("i", $id);
   

  
   $stmt->execute();
   $result =  $stmt->get_result();
   
   CloseCon($conn);
   return $result ;
 }

 function GetMostRatedMoviesDAO(){
   $conn = OpenCon();
    

   $stmt = $conn->prepare("SELECT * FROM mostratedmovie ORDER BY rating DESC");
   
   

  
   $stmt->execute();
   $result =  $stmt->get_result();
   
   CloseCon($conn);
   return $result ;

 }


 ?>