<?php 



function ShowContentAdders(){
    if(isset($_SESSION['logged_in'])){
        return "<form action=\"Business/add_review.php\" method=\"post\"><textarea id=\"review\"  class=\"review-text-box\" name=\"review\"> </textarea><button class=\"review-button\" type=\"submit\" name=\"button\">Send review</button></form>";
    }
    else{
        return "";
    }

}
?>