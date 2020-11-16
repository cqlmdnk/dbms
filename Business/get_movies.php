<?php

include('DataLayer/movieDAO.php');

function GetMovies() {

    

    $result = GetAllMovies();
    $html = "";
    while ($row = $result->fetch_array()) {
        $html = $html."<button class=\"movie-button\" style= \"background-image: url('" . $row['imageUrl'] . "');background-size: 300px 500px; width: 300px; height: 500px;font-size: 2rem; \" >" .$row['movieName'] ."</button> ";

    }
    return $html;
}


?>