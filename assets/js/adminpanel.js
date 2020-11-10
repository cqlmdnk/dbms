var type;

function fromWhere() {
  if (type === "person") {
    addSeriesTab();
  }
}

function addMovieTab() {
  form = document.getElementById("add-form");

  form.action = "Business/add_movie.php";
  fullcontent = document.getElementsByClassName("omrs-input-group");
  selectors = document.getElementsByClassName("dd ddcommon borderRadius")


  for (i = 0; i < fullcontent.length; i++) {
    fullcontent[i].style.display = "none";
  }
  for (i = 0; i < selectors.length; i++) {
    selectors[i].style.display = "none";
  }

  tabcontent = document.getElementsByName("movie");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "block";
  }
  dropdownDiv = document.getElementById("dropdown-list");
  dropdownDiv .style.display = "block";
}


function addSeriesTab() {
  form = document.getElementById("add-form");

  form.action = "Business/add_series.php";
  fullcontent = document.getElementsByClassName("omrs-input-group");
  selectors = document.getElementsByClassName("dd ddcommon borderRadius")


  for (i = 0; i < selectors.length; i++) {
    selectors[i].style.display = "none";
  }
  for (i = 0; i < fullcontent.length; i++) {
    fullcontent[i].style.display = "none";
  }

  tabcontent = document.getElementsByName("series");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "block";
  }

  dropdownDiv = document.getElementById("dropdown-list");
  dropdownDiv .style.display = "block";

}


function addPersonTab() {
  form = document.getElementById("add-form");

  form.action = "Business/add_person.php";
  fullcontent = document.getElementsByClassName("omrs-input-group");
  selectors = document.getElementsByClassName("dd ddcommon borderRadius")

  dropdownDiv = document.getElementById("dropdown-list");
  dropdownDiv .style.display = "none";
  for (i = 0; i < fullcontent.length; i++) {
    fullcontent[i].style.display = "none";
  }
  for (i = 0; i < selectors.length; i++) {
    selectors[i].style.display = "none";
  }
  tabcontent = document.getElementsByName("person");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "block";
  }



}

function stepUp(id, s) {
 



}






function stepDown(id, s) {
  var el = document.getElementById(id);
  removed_elements_array = document.getElementsByName(id + el.value);

  if (typeof (removed_elements_array[0]) == 'undefined') {
    removed_elements_array = document.getElementsByName(id + parseInt(parseInt(el.value) - parseInt(1)));
  }
  if (typeof (removed_elements_array[0]) == 'undefined') {
    removed_elements_array = document.getElementsByName(id + parseInt(parseInt(el.value) + parseInt(1)));
  }
  removed_elements_array[0].nextSibling.nextSibling.remove();
  removed_elements_array[0].nextSibling.remove();

  removed_elements_array[0].remove();
  el.value = parseInt(el.value) - s;
  el.innerHTML = el.value;


}
