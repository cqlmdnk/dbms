<?php

include ('../DataLayer/movieDAO.php');
include ('../DataLayer/movieActorDAO.php');
include ('../DataLayer/movieWriterDAO.php');
include ('../DataLayer/movieDirectorDAO.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

 $movieName= $_POST['movieName'];
 $releaseYear= $_POST['releaseYyear'];
 $duration= $_POST['movieDuration'];
 $rating= (float)$_POST['movieRating'];
 $ratingCount= (int)$_POST['movieRatingCount'];
 $nation= $_POST['movieNation'];
 $image= $_POST['movieIm'];
 $info= $_POST['movieInfo'];
 $limit= $_POST['movieLimit'];






$dirCount = 1;
$actCount = 1;
$wrtCount = 1;

$movieID = AddMovie($movieName, $releaseYear, $duration, $rating, $ratingCount, $nation, $image, $info, $limit);
 
if($row = $movieID->fetch_assoc()){
    $_SESSION['message'] = $movieName . " is added to databes with ID:" . $row['movieID'];
    while(isset($_POST['dir'. $dirCount])){
        AddMovieDirector($row['movieID'], $_POST['dir'. $dirCount++]);
        
    }
    while(isset($_POST['act'. $actCount])){
        AddMovieActor($row['movieID'], $_POST['act'. $actCount++]);
        
    }
    while(isset($_POST['wrt'. $wrtCount])){
        AddMovieWriter($row['movieID'], $_POST['wrt'. $wrtCount++]);
        
    }


    header('Location: ../adminpanel.php');
    exit();
     
     
     
     
     
}
else{
    //do not mess up relation tables 
    //just abort the mission and info the user
    $_SESSION['message'] = 'Can\'t add the movie.';
    header('Location: ../adminpanel.php');
    exit();
}

?>