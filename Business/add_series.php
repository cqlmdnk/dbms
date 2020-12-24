<?php

include ('../DataLayer/seriesDAO.php');
include ('../DataLayer/seriesActorDAO.php');
include ('../DataLayer/seriesCreatorDAO.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

 $seriesName= $_POST['seriesName'];
 $startYear= $_POST['startYear'];
 $duration= $_POST['seriesDuration'];
 $rating= (float)$_POST['seriesRating'];
 $ratingCount= (int)$_POST['seriesRatingCount'];
 $nation= $_POST['seriesNation'];
 $image= $_POST['seriesLimit'];
 $info= $_POST['seriesIm'];
 $limit= $_POST['seriesInfo'];





$dirCount = 1;
$actCount = 1;
$wrtCount = 1;

$seriesID = AddSeries($seriesName, $startYear, $duration, $rating, $ratingCount, $nation, $image, $info, $limit);

if($row = $seriesID->fetch_assoc()){
    $_SESSION['message'] = $seriesName . " is added to databes with ID:" . $row['seriesID'];
    while(isset($_POST['dir'. $dirCount])){
        AddSeriesDirector($row['seriesID'], $_POST['dir'. $dirCount++]);
        
    }
    while(isset($_POST['act'. $actCount])){
        AddSeriesActor($row['seriesID'], $_POST['act'. $actCount++]);
        
    }
    while(isset($_POST['wrt'. $wrtCount])){
        AddSeriesWriter($row['seriesID'], $_POST['wrt'. $wrtCount++]);
        
    }


    header('Location: ../adminpanel.php');
    exit();
     
     
     
     
     
}
else{
    //do not mess up relation tables 
    //just abort the mission and info the user
    $_SESSION['message'] = 'Can\'t add the series.';
    header('Location: ../adminpanel.php');
    exit();
}

?>