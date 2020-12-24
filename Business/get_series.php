<?php

include('DataLayer/seriesDAO.php');

function GetSeries() {

    

    $result = GetAllSeries();
    $html = "";
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $html = $html."<button class=\"movie-button\" style= \"background-image: url('" . $row['imageUrl'] . "');\">" .$row['seriesName'] ."</button>";
        $counter++;
        if($counter % 5 == 0) {
            $html = $html."<br/>";
        }
    }
    return $html;
}


?>