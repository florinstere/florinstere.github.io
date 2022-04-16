$(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() > 130) {
      $(".navigatie").addClass("fundal");
    } else {
      $(".navigatie").removeClass("fundal");
    }
  });
});

window.addEventListener("load", () => {
  const preload = document.querySelector(".preload");
  preload.classList.add("preload-finish");
});
