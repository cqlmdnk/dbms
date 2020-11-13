
    
$(document).ready(function(){

    // Initialize select2
    initailizeSelect2();
    
    // Add <select > element
    $('#btn_add_dir').click(function(){
       $.ajax({
         url: 'Business/get_persons.php',
         type: 'post',
         data: {request: 2},
         success: function(response){
          
           
        
        // Append element
        var el = document.getElementById("dir");
        el.value = parseInt(el.value) + 1;
        el.innerHTML = el.value;
        var val =  $('#btn_add_dir').prev().val();
        resp1 = response.substring(0,8);
        resp2 = response.substring(8,);
        resp1 = resp1.concat("name = \"dir"+ val +"\"");
        $('#directors').append(resp1.concat(resp2));
 
           // Initialize select2
           initailizeSelect2("dir"+val);
         }
       });
    });
    $('#btn_add_wrt').click(function(){
      $.ajax({
        url: 'Business/get_persons.php',
        type: 'post',
        data: {request: 2},
        success: function(response){
          
        
        // Append element
        var el = document.getElementById("wrt");
        el.value = parseInt(el.value) + 1;
        el.innerHTML = el.value;
        var val =  $('#btn_add_wrt').prev().val();
        resp1 = response.substring(0,8);
        resp2 = response.substring(8,);
        resp1 = resp1.concat("name = \"wrt" + val + "\"");
        $('#writers').append(resp1.concat(resp2));
 
          // Initialize select2
          initailizeSelect2("wrt"+val);
        }
      });
   });
   $('#btn_add_act').click(function(){
    $.ajax({
      url: 'Business/get_persons.php',
      type: 'post',
      data: {request: 2},
      success: function(response){
        
        
        // Append element
        var el = document.getElementById("act");
        el.value = parseInt(el.value) + 1;
        el.innerHTML = el.value;
        var val =  $('#btn_add_act').prev().val();
        resp1 = response.substring(0,8);
        resp2 = response.substring(8,);
        resp1 = resp1.concat("name = \"act" + val+ "\"");
        $('#actors').append(resp1.concat(resp2));
 
        // Initialize select2
        initailizeSelect2("act"+val);
      }
    });
 });
    
    });
    
    // Initialize select2
    function initailizeSelect2(name){
   
   
     $(".select2_el").select2({
       ajax: {
         url: "Business/get_persons.php",
         type: "post",
         dataType: 'json',
         delay: 0,
         data: function (params) {
            return {
              searchTerm: params.term // search term
            };
         },
         processResults: function (response) {
            return {
               results: response
            };
         },
         cache: true
       },
       width: '600px',
       placeholder : name
     });
     if(typeof(name) == 'undefined'){

     }
     else{
      while(typeof(document.getElementsByName(name)[0]) == 'undefined'){

      }

     }

    }
      