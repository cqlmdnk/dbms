<?php

require_once('DataLayer/movieDAO.php');
require_once('DataLayer/movieActorDAO.php');
require_once('DataLayer/movieDirectorDAO.php');
require_once('DataLayer/movieWriterDAO.php');

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
function GetMovieDirectorById($movieID){
    $result = GetMovieDirectorDAOById($movieID);
   
    $actor_array = array();

    while ($row = $result->fetch_array()) {
        array_push($actor_array, $row);

    }
    return $actor_array;
}

function GetMovieWriterById($movieID){
    $result = GetMovieWriterDAOById($movieID);
   
    $actor_array = array();

    while ($row = $result->fetch_array()) {
        array_push($actor_array, $row);

    }
    return $actor_array;
}

function GetMostRatedMovies(){

    $result = GetMostRatedMoviesDAO();
   
    $html = "";
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $html = $html."<div class=\"mostrated\" ><a href=\"?url=movie&id=".$row['movieID'] ."\"><button class=\"movie-button\" id = ".$row['movieID']. " style= \"background-image: url('" . $row['imageUrl'] . "'); float: left;\"></button></a> <br/><br/> <h1 class=\"title-info\">". $row['movieName'] ." </h1>". $row['movieInfo'] . "<h1 class=\"title-info\">Relase Year : " . $row['releaseYear'] ."</h1><h1 class=\"title-info\">Duration : ". $row['duration'] ."</h1><h1 class=\"title-info\">Rating :". $row['rating']."/10</h1> <h1 class=\"title-info\">Nation : ". $row['nation'] ." </h1>.</div>";
        $html = $html."<br/><br/>";
        $counter++;
        if($counter > 20){
            break;
        }

    }
    return $html;

    
}



?>