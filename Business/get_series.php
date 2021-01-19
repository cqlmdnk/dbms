<?php

require_once('DataLayer/seriesDAO.php');
require_once('DataLayer/seriesActorDAO.php');
require_once('DataLayer/seriesCreatorDAO.php');

function GetSeries() {

    

    $result = GetAllSeriesDAO();
    $html = "";
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $html = $html."<a href=\"?url=series&id=".$row['seriesID'] ."\"><button class=\"movie-button\" id = ".$row['seriesID']. " style= \"background-image: url('" . $row['imageUrl'] . "');\">" .$row['seriesName'] ."</button></a>";
        $counter++;
        if($counter % 5 == 0) {
            $html = $html."<br/>";
        }
    }
    return $html;
}

function GetSeriesById($seriesID){
    $result = GetSeriesDAOById($seriesID);
   
    $row = $result->fetch_array();
    return $row;
}

function GetSeriesActorBySeriesId($seriesID){
    $result = GetSeriesActorDAOById($seriesID);
   
    $actor_array = array();

    while ($row = $result->fetch_array()) {
        array_push($actor_array, $row);

    }
    return $actor_array;
}
function GetSeriesCreatorBySeriesId($seriesID){
    $result = GetSeriesCreatorDAOById($seriesID);
   
    $actor_array = array();

    while ($row = $result->fetch_array()) {
        array_push($actor_array, $row);

    }
    return $actor_array;
}


?>