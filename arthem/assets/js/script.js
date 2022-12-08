"use strict";

let advicesCards = document.querySelectorAll(".advices__card");

advicesCards[0].classList.add("active");
advicesCards[0].querySelector(".fas").className =
  "fas fa-chevron-up advices__icon";

for (let i = 0; i < advicesCards.length; i++) {
  advicesCards[i].addEventListener("click", function () {
    if (this.classList.contains("active")) {
      return false;
    }

    document.querySelector(".advices__card.active").classList.remove("active");
    this.classList.add("active");
    document.querySelector(".advices__icon").className = "fas fa-chevron-down";
    this.querySelector(".fas").className = "fas fa-chevron-up advices__icon";
  });
}

let scrollToTop = document.querySelector(".scroll-to-top");

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    scrollToTop.classList.add("active");
  } else {
    scrollToTop.classList.remove("active");
  }
});

scrollToTop.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

function classToggle() {
  const navs = document.querySelectorAll('.Navbar__Items')

  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}

document.querySelector('.Navbar__Link-toggle')
  .addEventListener('click', classToggle);    