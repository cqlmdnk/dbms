<?php
session_start();
include_once("../DataLayer/movierateDAO.php");

$result = GetMovieRateDAO( $_SESSION['movieID'], $_SESSION['username']);
echo mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    UpdateMovieRateDAO($_POST['rate'], $_SESSION['movieID'], $_SESSION['username'] );
    echo "Updated";
}
else{
    AddMovieRateDAO($_POST['rate'], $_SESSION['movieID'], $_SESSION['username'] );

}


exit();



?>