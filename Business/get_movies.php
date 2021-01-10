<?php

require_once('DataLayer/movieDAO.php');
require_once('DataLayer/movieActorDAO.php');

function GetMovies() {

    

    $result = GetAllMovies();
    $html = "";
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $html = $html."<a href=\"?url=movie&id=".$row['movieID'] ."\"><button class=\"movie-button\" id = ".$row['movieID']. " style= \"background-image: url('" . $row['imageUrl'] . "');\">" .$row['movieName'] ."</button></a>";
        $counter++;
        if($counter % 5 == 0) {
            $html = $html."<br/>";
        }
    }
    return $html;
}


function GetMovieById($movieID){
    $result = GetMovieDAOById($movieID);
   
    $row = $result->fetch_array();
    return $row;
}

function GetMovieActorById($movieID){
    $result = GetMovieActorDAOById($movieID);
   
    $actor_array = array();

    while ($row = $result->fetch_array()) {
        array_push($actor_array, $row);

    }
    return $actor_array;
}



?>