

function onRateClick(value){

 
 
 $.ajax({
    type : "POST",  //type of method
    url  : "Business/rate_movie.php",  //your page
    data : { rate : value},// passing the values
    
});
setTimeout(() => window.location.reload(), 500);
}