<?php
require_once('DataLayer/reviewDAO.php');
function GetMovieReviewsById($movieID){
    $result = GetMovieReviewsByIdDAO($movieID);
    $html = "";
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $html = $html."<div class=\"review\" >" . $row['review']." - ". $row['username']." - ". $row['date'] . "</div>";
        $html = $html."<br/>";
        
    }
    return $html;

}

function GetMovieReviewsByUsername($username){
    $result = GetMovieReviewsByUsernameDAO($username);
    $html = "";
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $html = $html."<div class=\"myreview\" ><a href=\"?url=movie&id=".$row['movieID'] ."\"><button class=\"movie-button\" id = ".$row['movieID']. " style= \"background-image: url('" . $row['imageUrl'] . "'); float: left;\">" .$row['movieName'] ."</button></a>". $row['review']." - ". $row['username']." - ". $row['date'] . "</div>";
        $html = $html."<br/><br/>";
        
    }
    return $html;

}

?>