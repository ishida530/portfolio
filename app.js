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

document.addEventListener("scroll", () => {
  if (`${scetionAbout.offsetTop - 450}` < window.scrollY) {
    scetionAbout.style.animationPlayState = "running";
    const txt5 = textAbout.innerText;
    textAbout.innerText = "";
    let index5 = 0;
    let indexLetter5 = 0;
    const addTextAbout = () => {
      if (indexLetter5 >= 0) {
        textAbout.textContent += txt5[index5][indexLetter5];
      }
      indexLetter5++;
      if (indexLetter5 === txt5[index5].length) {
        index5++;
        if (index5 === txt5.length) return;
        textAbout;
        return setTimeout(() => {
          indexLetter5 = 0;
          textAbout.textContent += "";
          addTextAbout();
        }, 30);
      }
      setTimeout(addTextAbout, 100);
      // Użyj w środku setTimeout
    };

    setTimeout(addTextAbout, 100);
  }
  if (`${scetionGallery.offsetTop - 200}` < window.scrollY) {
    scetionGallery.style.animationPlayState = "running";
    const txt5 = textAbout.innerText;
    textAbout.innerText = "";
    let index5 = 0;
    let indexLetter5 = 0;
    const addTextAbout = () => {
      if (indexLetter5 >= 0) {
        textAbout.textContent += txt5[index5][indexLetter5];
      }
      indexLetter5++;
      if (indexLetter5 === txt5[index5].length) {
        index5++;
        if (index5 === txt5.length) return;
        textAbout;
        return setTimeout(() => {
          indexLetter5 = 0;
          textAbout.textContent += "";
          addTextAbout();
        }, 30);
      }
      setTimeout(addTextAbout, 100);
      // Użyj w środku setTimeout
    };

    setTimeout(addTextAbout, 2000);
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
