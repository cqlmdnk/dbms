<?php 

include_once("DataLayer/movierateDAO.php");

function ShowRateStars(){
    
    $result = GetMovieRateDAO($_SESSION['movieID'], $_SESSION['username']);
    $row = $result->fetch_array();
    if(isset($row['rate'])){
        $rate = intval($row['rate']);
    }
    else{
        $rate = 0;
        
    }
    echo "<fieldset class=\"rating\">";
    for ($x = 9; $x >= 0; $x--) {
        if($x+1 <= $rate){
            echo  "<input type=\"radio\" id=\"star".($x+1)."\" name=\"rating\" value=". ($x+1) ." onclick=\"onRateClick(this.value)\"  /><label class = \"selected\" for=\"star".($x+1)."\"></label>";
            
        }
        else{
            echo  "<input type=\"radio\" id=\"star".($x+1)."\" name=\"rating\" value=". ($x+1) ." onclick=\"onRateClick(this.value)\"  /><label class = \"not-selected\" for=\"star".($x+1)."\" ></label>";
        }
        
      } 
      echo " </fieldset>";
}

?>