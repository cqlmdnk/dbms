<?php 
include 'helper.php';

if(isset($_GET['url'])) {
    $pageName = $_GET['url'];
    renderPage($pageName);
}
else{
    renderPage();
}




?>