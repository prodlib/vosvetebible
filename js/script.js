var button = document.querySelector(".menu-burger");
var modal = document.querySelector(".site-navigation");
var modals = document.querySelector(".menu-burger");
var bodylock = document.querySelector("body");

button.addEventListener("click", function (evt) {
  evt.preventDefault();
  modal.classList.toggle("active");
  modals.classList.toggle("active");
  bodylock.classList.toggle("lock");
});
