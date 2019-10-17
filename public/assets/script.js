/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

// function myFunction(type) {
//      document.getElementsByClassName("myDropdown")[type].classList.toggle("show");
//    }
function filterFunction(type) {
    var input, filter, ul, li, a, i;
    input = document.getElementsByClassName("searchInput")[type];
    filter = input.value.toUpperCase();
    div = document.getElementsByClassName("myDropdown")[type];
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      var txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }