<?php

require_once('DataLayer/seriesDAO.php');

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


?>