var swiper = new Swiper(".swiper-container", {
  effect: "cube",
  grabCursor: true,
  loop: true,
  cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".swiper-container2", {
  cssMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
  keyboard: true,
});
const textAbout = document.querySelector(".txt");
var scetionAbout = document.querySelector(".section__about");
var scetionGallery = document.querySelector(".section__gallery");
var portfolioHeadline = document.querySelector(".portfolio__headline");
var portfolioGallery = document.querySelector(".portfolio__gallery");
var technologiesHeadline = document.querySelector(".technologies__headline");
var technologiesGallery = document.querySelector(".technologies__gallery");
var recommendationsHeadline = document.querySelector(
  ".recommendations__headline"
);
var recommendationsMap = document.querySelector(".recommendations__map");
var recommendationsSlider = document.querySelector(".recommendations__slider");

let text = [...textAbout.innerText];

var letterIndex = -1;
let once = 0;
function addLetter() {
  letterIndex++;
  if (letterIndex < text.length) {
    setTimeout(function () {
      textAbout.textContent += text[letterIndex];
      addLetter();
    }, 40);
  }
}
document.addEventListener("scroll", () => {
  if (`${scetionGallery.offsetTop - 200}` < window.scrollY) {
    scetionGallery.style.animationPlayState = "running";
  }
  if (`${scetionAbout.offsetTop - 450}` < window.scrollY) {
    if (once > 1);
    else {
      textAbout.innerText = "";
      once++;
      scetionAbout.style.animationPlayState = "running";
      addLetter();
    }
  }

  if (`${portfolioHeadline.offsetTop - 600}` < window.scrollY) {
    portfolioHeadline.style.animationPlayState = "running";
  }
  if (`${portfolioGallery.offsetTop - 400}` < window.scrollY) {
    portfolioGallery.style.animationPlayState = "running";
  }
  if (`${technologiesHeadline.offsetTop - 500}` < window.scrollY) {
    technologiesHeadline.style.animationPlayState = "running";
  }

  if (`${technologiesGallery.offsetTop - 400}` < window.scrollY) {
    technologiesGallery.style.animationPlayState = "running";
  }
  if (4000 < window.scrollY) {
    recommendationsHeadline.style.animationPlayState = "running";
  }
  if (4200 < window.scrollY) {
    recommendationsMap.style.animationPlayState = "running";
  }
  if (4200 < window.scrollY) {
    recommendationsSlider.style.animationPlayState = "running";
  }
});
