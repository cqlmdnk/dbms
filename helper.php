<?php

function renderPage($page="mainpage"){
    include 'header.php';
    include $page . '.php';

    include 'footer.php';
}

?>