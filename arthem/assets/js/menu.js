"use strict";

let toggle = document.querySelector(".nav__toggle");
let body = document.querySelector("body");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
  body.classList.toggle("overflow");
});
