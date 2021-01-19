<?php
include ('../DataLayer/reviewDAO.php');

session_start();



$review = $_POST['review'];
$username = $_SESSION['username'];
echo($_SESSION['username']);
if(isset($_SESSION['movieID'])){
    $movieID = $_SESSION['movieID'];
    AddMovieReview($username, $movieID, $review);
    header('Location: ../index.php?url=movie&id='.$movieID);
}
else if(isset($_SESSION['seriesID'])){
    $seriesID = $_SESSION['seriesID'];
    AddSeriesReview($username, $seriesID, $review);
    header('Location: ../index.php?url=series&id='.$seriesID);
}






?>