const loadingOp = document.querySelector(".loading");

window.addEventListener("load", () => {
  setTimeout(function () {
    $(loadingOp).addClass("hide");
  }, 7000); //5.5秒後に処理
});

// jquery
$(function () {
  $(".humb").click(function () {
    $(this).toggleClass("active");
    $(".spNav").toggleClass("active");
  });

  $(".humbClose").click(function () {
    $(".humb").removeClass("active");
    $(".spNav").removeClass("active");
  });
});

// 書き換え後↓
function fvAnime() {
  const fvAnime = document.querySelectorAll(".fvAnime");
  let windowHeight = window.innerHeight;
  for (let i = 0; i < fvAnime.length; i++) {
    target = fvAnime[i].getBoundingClientRect().top;
    if (target < windowHeight) {
      fvAnime[i].classList.add("active");
    }
  }
}
document.addEventListener("DOMContentLoaded", fvAnime);

function scrollFadeLeft() {
  const scrollFadeLeft = document.querySelectorAll(".fadeLeft");
  let windowHeight = window.innerHeight;
  if (window.matchMedia("(max-width: 900px)").matches) {
    for (let i = 0; i < scrollFadeLeft.length; i++) {
      target = scrollFadeLeft[i].getBoundingClientRect().top;
      if (target < windowHeight - 100) {
        scrollFadeLeft[i].classList.add("active");
      }
    }
  } else {
    for (let i = 0; i < scrollFadeLeft.length; i++) {
      target = scrollFadeLeft[i].getBoundingClientRect().top;
      if (target < windowHeight - 200) {
        scrollFadeLeft[i].classList.add("active");
      }
    }
  }
}
document.addEventListener("DOMContentLoaded", scrollFadeLeft);
document.addEventListener("scroll", scrollFadeLeft);

function scrollFadeIn() {
  const scrollFadeIn = document.querySelectorAll(".fadeIn");
  let windowHeight = window.innerHeight;
  if (window.matchMedia("(max-width: 900px)").matches) {
    for (let i = 0; i < scrollFadeIn.length; i++) {
      target = scrollFadeIn[i].getBoundingClientRect().top;
      if (target < windowHeight - 100) {
        scrollFadeIn[i].classList.add("active");
      }
    }
  } else {
    for (let i = 0; i < scrollFadeIn.length; i++) {
      target = scrollFadeIn[i].getBoundingClientRect().top;
      if (target < windowHeight - 200) {
        scrollFadeIn[i].classList.add("active");
      }
    }
  }
}
document.addEventListener("DOMContentLoaded", scrollFadeIn);
document.addEventListener("scroll", scrollFadeIn);

// 書き換え後↑

jQuery(function ($) {
  $(".voiceA").hide();

  $(".voiceQ").click(function () {
    $(this).toggleClass("active");
    $(this).next(".voiceA").slideToggle();
  });
});

jQuery(function ($) {
  $(".aboutMoreContainerC").hide();

  $(".detail").click(function () {
    $(this).toggleClass("active");
    $(".toggle").toggleClass("active");
    $(this).next(".aboutMoreContainerC").slideToggle();
  });
});

jQuery(function ($) {
  $(".spNav2").hide();

  $(".spNavService").click(function () {
    $(this).toggleClass("active");
    $(".spNav1").toggleClass("none");
    $(".spNav2").toggleClass("active");
  });
});

jQuery(function ($) {
  $(".aboutA").hide();

  $(".aboutQ").click(function () {
    $(this).toggleClass("active");
    $(this).next(".aboutA").slideToggle();
  });
});

jQuery(function ($) {
  $(".acdiText").hide();

  $(".opener").click(function () {
    $(this).toggleClass("active");
    $(this).next(".acdiText").slideToggle();
  });
});

jQuery(function ($) {
  $(".greetingQaContainer").hide();

  $(".opener").click(function () {
    $(this).toggleClass("active");
    $(this).next(".greetingQaContainer").slideToggle();
  });
});

jQuery(function ($) {
  $(".popUp").click(function () {
    $(".popBack").addClass("active");
    $(".popImg").addClass("reactive");
  });
  $(".popBack, .poptoggle").click(function () {
    $(".popBack").removeClass("active");
    $(".popImg").removeClass("reactive");
  });
});

// entry slide
const ent = document.querySelectorAll(".entryList");

const switchEnt = (index) => {
  document.querySelector(".entryListContainer .entryList-active").classList.remove("entryList-active");
  ent[index].classList.add("entryList-active");
};

const entSwiper = new Swiper(".entrySwiper", {
  speed: 500,

  on: {
    afterInit: (swiper) => {
      ent[swiper.realIndex].classList.add("entryList-active");
      for (let i = 0; i <= ent.length; i++) {
        ent[i].onclick = () => {
          swiper.slideTo(i);
        };
      }
    },
    slideChange: (swiper) => {
      switchEnt(swiper.realIndex);
    },
  },
});

const entrySwiper = new Swiper(".entrySwiper", {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },
  slidePerView: 1,
  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

// fv
const thumb = document.querySelectorAll(".fvSlideBtnList");
const thumbTxt = document.querySelectorAll(".slideText");
var bar = document.querySelector(".bar");
var barDuration = 5000;

const switchThumb = (index) => {
  document.querySelector(".slideActive").classList.remove("slideActive");
  thumb[index].classList.add("slideActive");
};

const updateFraction = (index) => {
  let current = ("00" + (index + 1)).slice(-2);
  fractionNum.classList.add("anm-started");
  setTimeout(() => {
    fractionNum.textContent = current;
  }, 400);
};

const startAnimation = (index) => {
  let activeSlide = document.querySelectorAll("swiper-slide .slideText")[index];
  activeSlide.classList.remove("anm-finished");
  activeSlide.classList.add("anm-started");
};

const finishAnimation = () => {
  let activeSlide = document.querySelector(".slideText.anm-finished");
  if (activeSlide) {
    activeSlide.classList.remove("anm-started");
    activeSlide.classList.add("anm-finished");
  }
};

$(document).ready(function () {
  setTimeout(function () {
    let swipeOption = {
      clickable: false,
      allowTouchMove: true,
      loop: true,
      autoplay: {
        delay: 7000,
      },
      effect: "fade",
      fadeEffect: {
        crossFade: true, // クロスフェードさせる
      },
      on: {
        slideChange: (swiper) => {
          switchThumb(swiper.realIndex);
        },
        slideChangeTransitionStart: () => {
          $(".swiper-slide-visible .slideText").addClass("anime");
          $(".swiper-slide-visible .slidemak").addClass("anime");
        },
        slideChangeTransitionEnd: () => {
          $(".swiper-slide-prev .slideText").removeClass("anime");
          $(".swiper-slide-prev .slidemak").removeClass("anime");
        },
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        990: {
          pagination: false,
        },
      },
    };
    new Swiper(".fvTopSwiper", swipeOption);
  }, 5502);
});

// window.addEventListener("load", function () {
//   initSwiper();
// });

function active(obj) {
  if (!obj.nextElementSibling.classList.contains("active")) {
    obj.nextElementSibling.classList.add("active");
  } else {
    //  フワッと消す時の処理
    obj.nextElementSibling.style = "opacity:0";
    setTimeout((e) => {
      //  0.5秒後にクラスactiveを削除
      obj.nextElementSibling.classList.remove("active");
      obj.nextElementSibling.style = "opacity:1";
    }, 500);
  }
}
