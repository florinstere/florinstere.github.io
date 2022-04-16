$(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() > 130) {
      $(".nav-btn").addClass("fundal");
    } else {
      $(".nav-btn").removeClass("fundal");
    }
  });
});

window.addEventListener("load", () => {
  const preload = document.querySelector(".preload");
  preload.classList.add("preload-finish");
});

$(".nav-wrapper li a").click(function () {
  $(".nav-wrapper").toggleClass(".nav-btn");
  $("#nav").prop("checked", false)
});



// function showSitesFunc() {
//   // var butonSites = document.getElementsByClassName("siteuri");
//   console.log("S a apasat butonu");

//   var element = document.getElementById("new");
//   var frameDiv = document.createElement("div");
//   frameDiv.id = 'frameDiv';

//   frameDiv.innerHTML= "test";
//   frameDiv.style.fontSize = "50px";
//   element.style.background = 'rgb(35, 188, 53)';

//   element.appendChild(frameDiv);
//   element.style.display = "block";
//   // element.style.display


//   // frameDiv.innerHTML = "&#128525";
//   // frameDiv.style.paddingTop = "0px";
//   // frameDiv.style.fontSize = "50px";
//   // element.style.background = 'rgb(35, 188, 53)';

//   // element.appendChild(frameDiv);
//   // element.style.display = "block";


// }

// function functieClose(){
//   var element = document.getElementById("new");
//   element.removeChild(frameDiv);
//   element.style.display = "none"
// }