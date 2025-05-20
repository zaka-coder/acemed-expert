"use strict";
function initPreloader() {
  $(window).on("load", function () {
    $(".preloader").delay(800).fadeOut("slow");
    $(".vs-hero").addClass("animate-elements");
  });
}
const brandSliderOptions = {
  loop: true,
  speed: 2000,
  autoplay: {
    delay: 1,
  },
  effect: "slide",
  navigation: false,
  slidesPerView: 1,
  breakpoints: {
    // When the viewport width is 320px or more
    320: {
      slidesPerView: 1.5,
      spaceBetween: 10,
    },
    // When the viewport width is 480px or more
    480: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    // When the viewport width is 768px or more
    768: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    // When the viewport width is 1024px or more
    1024: {
      slidesPerView: 5,
      spaceBetween: 100,
    },
    1300: {
      slidesPerView: 6,
      spaceBetween: 140,
    },
  },
};
const testimonialSliderOptions = {
  slidesPerView: 1,
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  speed: 1500,
  effect: "slide",
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".testimonial__next",
    prevEl: ".testimonial__prev",
  },
  breakpoints: {
    // When the viewport width is 768px or more
    768: {
      slidesPerView: 1.4,
      spaceBetween: 15,
    },
    992: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    // When the viewport width is 1024px or more
    1300: {
      slidesPerView: 2.5,
      spaceBetween: 30,
    },
  },
};
const testimonial2SliderOptions = {
  slidesPerView: 1,
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  speed: 1500,
  effect: "slide",
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".testimonial2-next",
    prevEl: ".testimonial2-prev",
  },
  breakpoints: {
    // When the viewport width is 768px or more
    768: {
      slidesPerView: 1.5,
      spaceBetween: 15,
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    // When the viewport width is 1024px or more
    1300: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
};
const testimonial3SliderOptions = {
  slidesPerView: 1,
  spaceBetween: 30,
  centeredSlides: false,
  loop: true,
  speed: 1500,
  effect: "slide",
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".testimonial3__navigation .button-prev",
    prevEl: ".testimonial3__navigation .button-next",
  },
};
const marqueeSliderCommonOptions = {
  slidesPerView: "auto",
  allowTouchMove: false,
  spaceBetween: 20,
  centeredSlides: false,
  loop: true,
  speed: 3000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },

  breakpoints: {
    768: {
      spaceBetween: 30,
    },
    1024: {
      spaceBetween: 40,
    },
  },
};
const marqueeSliderCommon2Options = {
  slidesPerView: "auto",
  allowTouchMove: false,
  spaceBetween: 30,
  centeredSlides: false,
  loop: true,
  speed: 3000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },

  breakpoints: {
    768: {
      spaceBetween: 40,
    },
    1024: {
      spaceBetween: 50,
    },
    1200: {
      spaceBetween: 60,
    },
    1300: {
      spaceBetween: 90,
    },
  },
};
const marqueeSliderUpOptions = {
  slidesPerView: "auto",
  allowTouchMove: false,
  spaceBetween: 30,
  centeredSlides: false,
  loop: true,
  speed: 3000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },

  breakpoints: {
    576: {
      spaceBetween: 20,
    },
    768: {
      spaceBetween: 40,
    },
    1024: {
      spaceBetween: 50,
    },
  },
};
const marqueeSliderDownOptions = {
  slidesPerView: "auto",
  allowTouchMove: false,
  spaceBetween: 30,
  centeredSlides: false,
  loop: true,
  speed: 3000,
  autoplay: {
    delay: 1,
    disableOnInteraction: false,
    reverseDirection: true,
  },

  breakpoints: {
    576: {
      spaceBetween: 20,
    },
    768: {
      spaceBetween: 40,
    },
    1024: {
      spaceBetween: 50,
    },
  },
};

function setCurrentYear() {
  // Find the element with class 'agx-current-year'
  const yearElement = document.querySelector(".agx-current-year");

  // Get the current year
  const currentYear = new Date().getFullYear();

  // Check if the element exists before setting the year
  if (yearElement) {
    yearElement.textContent = currentYear;
  }
}

function setBackgroundImages() {
  var elements = document.querySelectorAll("[data-bg-src]");
  if (elements?.length > 0) {
    elements.forEach(function (element) {
      var src = element.getAttribute("data-bg-src");
      element.style.backgroundImage = "url(" + src + ")";
      element.classList.add("background-image");
      element.removeAttribute("data-bg-src");
    });
  }
}

function initializeMeanMenu() {
  if (jQuery("header nav").hasClass("large-nav")) {
    // If nav has the .large-nav class
    jQuery("header nav").meanmenu({
      meanScreenWidth: "9999",
      meanMenuContainer: ".offcanvas-menu",
      meanExpand: "",
      meanContract: "",
    });
  } else {
    // If nav does not have the .large-nav class
    jQuery("header nav").meanmenu({
      meanScreenWidth: "991",
      meanMenuContainer: ".offcanvas-menu",
      meanExpand: "",
      meanContract: "",
    });
  }
}

function disableInspectTools() {
  document.addEventListener("contextmenu", (event) => {
    event.preventDefault();
    alert("Right-click has been disabled!");
  });

  document.addEventListener("keydown", (event) => {
    // Disable F12 (DevTools)
    if (event.key === "F12") {
      event.preventDefault();
    }

    // Disable Ctrl+Shift+I (DevTools)
    if (
      (event.ctrlKey && event.shiftKey && event.key === "I") ||
      (event.ctrlKey && event.shiftKey && event.key === "i")
    ) {
      event.preventDefault();
    }

    // Disable Ctrl+U (View Source)
    if (event.ctrlKey && event.key === "U") {
      event.preventDefault();
    }

    // Disable Ctrl+Shift+U (View Source in some browsers)
    if (event.ctrlKey && event.shiftKey && event.key === "U") {
      event.preventDefault();
    }
  });
}


function initializeSwiper(containerSelector, options) {
  // Check if the container exists
  const container = document.querySelector(containerSelector);
  if (!container) {
    return;
  }

  // Pagination: If 'pagination' is true or a custom class, enable pagination
  if (options.pagination) {
    options.pagination = {
      el:
        options.pagination === true
          ? `${containerSelector} .swiper-pagination`
          : options.pagination,
      clickable: true,
    };
  } else {
    delete options.pagination; // If false, remove pagination
  }

  // Navigation: If 'navigation' is true or a custom class, enable navigation
  if (options.navigation) {
    options.navigation = {
      nextEl:
        options.navigation === true
          ? `${containerSelector} .swiper-button-next`
          : options.navigation.nextEl,
      prevEl:
        options.navigation === true
          ? `${containerSelector} .swiper-button-prev`
          : options.navigation.prevEl,
    };
  } else {
    delete options.navigation; // If false, remove navigation
  }
  // Initialize Swiper with the final options
  return new Swiper(containerSelector, options);
}
function initializePortfolioSliders() {
  // Cache DOM selectors
  const currentPortfolioElem = document.querySelector(".current-portfolio");
  const totalPortfolioElem = document.querySelector(".total-portfolio");
  const thumbSliderElem = document.querySelector(".portfolio2__thumb-slider");
  const contentSliderElem = document.querySelector(
    ".portfolio2__content-slider"
  );

  // Validate necessary elements
  if (
    // !currentPortfolioElem ||
    !totalPortfolioElem ||
    !thumbSliderElem ||
    !contentSliderElem
  ) {
    return;
  }

  // Initialize the thumbnail slider (thumbSlider)
  const thumbSlider = new Swiper(thumbSliderElem, {
    slidesPerView: 1,
    spaceBetween: 10,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    loop: true,
    loopedSlides: 4,
    navigation: {
      nextEl: thumbSliderElem.querySelector(".button-next"),
      prevEl: thumbSliderElem.querySelector(".button-prev"),
    },
  });

  const contentSlider = new Swiper(contentSliderElem, {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    loopedSlides: 4,
    allowTouchMove: false,
  });

  // Sync the two sliders
  thumbSlider.controller.control = contentSlider;
  contentSlider.controller.control = thumbSlider;

  // Function to update the slide counter
  function updateSlideCounter() {
    const realIndex = thumbSlider.realIndex + 1;
    const totalSlides = document.querySelectorAll(
      ".portfolio2__thumb-slider .swiper-slide:not(.swiper-slide-duplicate)"
    ).length;

    const formattedCurrent = realIndex < 10 ? "0" + realIndex : realIndex;
    const formattedTotal = totalSlides < 10 ? "0" + totalSlides : totalSlides;

    // Update the counter text content
    // currentPortfolioElem.textContent = formattedCurrent + "/";
    if (currentPortfolioElem) {
      currentPortfolioElem.textContent = formattedCurrent + "/";
    }
    totalPortfolioElem.textContent = formattedTotal;
  }

  // Initialize the counter initially
  updateSlideCounter();

  // Update the counter when the slide changes
  thumbSlider.on("slideChange", updateSlideCounter);
}

function initializeVideoPlayers(videoSelector, playBtnSelector) {
  const videos = document.querySelectorAll(videoSelector);
  const playBtns = document.querySelectorAll(playBtnSelector);

  videos.forEach((video, index) => {
    const playBtn = playBtns[index];
    if (video && playBtn) {
      video.pause();

      playBtn.addEventListener("click", () => {
        if (video.paused) {
          video.play();
          playBtn.classList.add("disabled");
          video.classList.add("pointer");
        } else {
          video.pause();
          playBtn.classList.remove("disabled");
          video.classList.remove("pointer");
        }
      });

      video.addEventListener("click", () => {
        if (playBtn.classList.contains("disabled")) {
          video.pause();
          playBtn.classList.remove("disabled");
          video.classList.remove("pointer");
        }
      });
    }
  });
}
function initializeVideoPlayers2(playerSelector, buttonSelector) {
  // Check if the player and button exist in the DOM
  const videoPlayer = document.querySelector(playerSelector);
  const playButton = document.querySelector(buttonSelector);

  if (!videoPlayer || !playButton) {
    return; // Exit if elements don't exist
  }

  videoPlayer.pause();

  playButton.addEventListener("click", function () {
    // Toggle the play class on the button
    playButton.classList.toggle("play");

    // Check if the video is paused or playing
    if (videoPlayer.paused) {
      // If the video is paused, play it
      videoPlayer.play();
    } else {
      // If the video is playing, pause it
      videoPlayer.pause();
    }
  });
}

function odometerCounter() {
  $(".counter-item").each(function () {
    var $counterItem = $(this);
    $counterItem.isInViewport(function (status) {
      if (status === "entered") {
        $counterItem.find(".odometer").each(function () {
          var el = this;
          el.innerHTML = el.getAttribute("data-odometer-final");
        });
      }
    });
  });
}

function initializeBlogHoverEffect(blogBoxesSelector, thumbsSelector) {
  const blogBoxes = document.querySelectorAll(blogBoxesSelector);
  const thumbs = document.querySelectorAll(thumbsSelector);

  if (blogBoxes.length === 0 || thumbs.length === 0) {
    return;
  }

  if (blogBoxes.length !== thumbs.length) {
    return;
  }

  let lastHoveredIndex = null;

  blogBoxes.forEach((box, index) => {
    box.addEventListener("mouseenter", () => {
      // Deactivate all blog boxes and thumbnails
      blogBoxes.forEach((b) => b.classList.remove("active"));
      thumbs.forEach((t) => t.classList.remove("active"));

      // Activate the hovered blog box and corresponding thumbnail
      box.classList.add("active");
      thumbs[index].classList.add("active");

      // Store the index of the last hovered box
      lastHoveredIndex = index;
    });

    box.addEventListener("mouseleave", () => {
      // If the hover ends and there's no current hover, activate the last hovered item
      if (lastHoveredIndex !== null) {
        blogBoxes[lastHoveredIndex].classList.add("active");
        thumbs[lastHoveredIndex].classList.add("active");
      }
    });
  });
}

function movementEffect() {
  var layers = document.querySelectorAll(".movement-layer");

  if (layers.length === 0) {
    return;
  }

  layers.forEach((layer) => {
    var movementItems = layer.querySelectorAll(".movement-item");
    if (movementItems.length === 0) {
      return;
    }
    layer.addEventListener("mousemove", function (e) {
      if (isNaN(e.pageX) || isNaN(e.pageY)) {
        return;
      }

      // Calculate the movement values
      var ivalueX = (e.pageX * -1) / 60;
      var ivalueY = (e.pageY * -1) / 60;
      var cvalueX = (e.pageX * -1) / 80;
      var cvalueY = (e.pageY * -1) / 90;

      movementItems.forEach(function (movementItem) {
        if (movementItem instanceof HTMLElement) {
          movementItem.style.transform =
            "translate3d(" + cvalueX + "px," + cvalueY + "px, 0)";
        }
      });
    });
  });
}

function setHoverActiveClass(
  listenerSelector,
  targetSelector,
  activeClass = "active"
) {
  if (
    typeof listenerSelector !== "string" ||
    typeof targetSelector !== "string"
  ) {
    return;
  }

  const listeners = document.querySelectorAll(listenerSelector);

  if (listeners.length === 0) {
    return;
  }

  let currentActiveItem = listeners[0].querySelector(targetSelector); // Initially set the first target as active
  if (!currentActiveItem) {
    currentActiveItem = listeners[0]; // If targetSelector doesn't exist, apply active class on the listener itself
  }
  currentActiveItem.classList.add(activeClass); // Add active class to the first target initially

  listeners.forEach((listener) => {
    const targetElement = listener.querySelector(targetSelector) || listener; // If target doesn't exist, use listener itself

    listener.addEventListener("mouseenter", function () {
      // If there's a previously active item and it's not the current one, remove its 'active' class
      if (currentActiveItem && currentActiveItem !== targetElement) {
        currentActiveItem.classList.remove(activeClass);
      }

      // Add the 'active' class to the current hovered target element
      targetElement.classList.add(activeClass);

      // Update the currentActiveItem to the newly hovered target element
      currentActiveItem = targetElement;
    });

    // Optionally: Do nothing on mouseleave (or you can choose to remove the active class)
    listener.addEventListener("mouseleave", function () {
      // Keep the active class on the last hovered item
      // (no need to remove it on mouseleave if you want it to stay active until another hover happens)
    });
  });
}

function updateAccordionActiveState(
  accordionSelector,
  targetElement = ".accordion-item",
  activeClass = "active"
) {
  const accordions = document.querySelectorAll(accordionSelector);

  accordions.forEach((accordion) => {
    const accordionItems = accordion.querySelectorAll(".accordion-item");

    if (accordionItems.length > 0) {
      const firstItem = accordionItems[0];
      const firstCollapseElement = firstItem.querySelector(
        ".accordion-collapse"
      );
      const firstTarget = firstItem.querySelector(targetElement) || firstItem;

      if (!firstCollapseElement.classList.contains("show")) {
        firstCollapseElement.classList.add("show");
      }
      firstTarget.classList.add(activeClass);
    }

    accordionItems.forEach((item) => {
      const collapseElement = item.querySelector(".accordion-collapse");
      const target = item.querySelector(targetElement) || item;

      if (collapseElement.classList.contains("show")) {
        target.classList.add(activeClass);
      } else {
        target.classList.remove(activeClass);
      }
    });

    accordion.addEventListener("shown.bs.collapse", function (e) {
      const expandedItem = e.target.closest(".accordion-item");
      const allItems = accordion.querySelectorAll(".accordion-item");

      allItems.forEach((item) => {
        const target = item.querySelector(targetElement) || item;
        target.classList.remove(activeClass);
      });

      const expandedTarget =
        expandedItem.querySelector(targetElement) || expandedItem;
      expandedTarget.classList.add(activeClass);
    });

    accordion.addEventListener("hidden.bs.collapse", function (e) {
      const collapsedItem = e.target.closest(".accordion-item");
      const target =
        collapsedItem.querySelector(targetElement) || collapsedItem;
      target.classList.remove(activeClass);
    });
  });
}
function initPricingToggle() {
  const priceMonthly = document.getElementById("price-monthly");
  const priceYearly = document.getElementById("price-yearly");
  const monthlyLabel = document.querySelector('label[for="price-monthly"]');
  const yearlyLabel = document.querySelector('label[for="price-yearly"]');
  const pricingBoxes = document.querySelectorAll(".pricing__box");

  if (
    priceMonthly &&
    priceYearly &&
    monthlyLabel &&
    yearlyLabel &&
    pricingBoxes.length > 0
  ) {
    function toggleActiveClass() {
      if (priceMonthly.checked) {
        monthlyLabel.classList.add("active");
        yearlyLabel.classList.remove("active");
        pricingBoxes.forEach((box) => {
          box.classList.add("price-monthly");
          box.classList.remove("price-yearly");
        });
      }
      if (priceYearly.checked) {
        yearlyLabel.classList.add("active");
        monthlyLabel.classList.remove("active");
        pricingBoxes.forEach((box) => {
          box.classList.add("price-yearly");
          box.classList.remove("price-monthly");
        });
      }
    }

    priceMonthly.addEventListener("change", toggleActiveClass);
    priceYearly.addEventListener("change", toggleActiveClass);
    toggleActiveClass();
  }
}

function handleHome3VideoPlayback() {
  const videoCheck = document.querySelector(".hero-three-video-check");
  const heroVideo = document.querySelector(".hero-three__video video");
  if (!videoCheck || !heroVideo) {
    return;
  }

  videoCheck.addEventListener("change", function () {
    if (videoCheck.checked) {
      heroVideo.pause();
    } else {
      heroVideo.play();
    }
  });
}

function initializeSelect2(selector, options = {}) {
  if ($(selector).length) {
    $(selector).select2({
      placeholder: options.placeholder || "Select an option",
      allowClear: options.allowClear || true,
      minimumResultsForSearch: Infinity,
      ...options,
    });
  }
}

function initializeWidthSliders() {
  // Check if all required elements are available in the DOM
  if (
    document.querySelector(".testimonial4__thumb-slider") &&
    document.querySelector(".testimonial4__content-slider") &&
    document.querySelector(".testimonial4-next") &&
    document.querySelector(".testimonial4-prev")
  ) {
    // Initialize Thumb Slider
    var thumbSlider = new Swiper(".testimonial4__thumb-slider", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: "auto",
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      speed: 1000,
      breakpoints: {
        768: {
          slidesPerView: 20,
          slidesPerView: "auto",
        },
      },
    });

    // Initialize Main Slider and link to Thumb Slider
    new Swiper(".testimonial4__content-slider", {
      loop: true,
      spaceBetween: 10,
      speed: 1000,
      navigation: {
        nextEl: ".testimonial4-next",
        prevEl: ".testimonial4-prev",
      },
      thumbs: {
        swiper: thumbSlider,
      },
      // breakpoints: {
      //   992: {
      //     slidesPerView: 20,
      //   },
      // },
    });
  }
}

function initServiceToggle() {
  let listItems = document.querySelectorAll(".service4__list .list-item");
  let thumbItems = document.querySelectorAll(
    ".service4__thumb-container .service4__thumb"
  );

  if (!listItems.length || !thumbItems.length) {
    return;
  }

  let setActive = function (index) {
    if (index >= 0 && index < listItems.length) {
      listItems.forEach((item) => item.classList.remove("active"));
      thumbItems.forEach((thumb) => thumb.classList.remove("active"));

      listItems[index].classList.add("active");
      thumbItems[index].classList.add("active");
    }
  };

  listItems.forEach((item, index) => {
    item.addEventListener("click", (event) => {
      if (!event.target.closest(".agx-btn2")) {
        setActive(index);
      }
    });
  });

  setActive(0);
}

function initTestimonial5Sliders() {
  // Check if required elements exist
  const thumbSlider = document.querySelector(".testimonial5__thumb-slider");
  const contentSlider = document.querySelector(".testimonial5__content-slider");
  const nextButton = document.querySelector(
    ".testimonial5__navigation .testimonial-next"
  );
  const prevButton = document.querySelector(
    ".testimonial5__navigation .testimonial-prev"
  );

  if (!thumbSlider || !contentSlider || !nextButton || !prevButton) {
    return;
  }

  // Initialize thumb slider
  const thumbSwiperSlider = new Swiper(thumbSlider, {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    slideToClickedSlide: true,
    fadeEffect: { crossFade: true },
    effect: "fade",
    speed: 600,
    navigation: {
      prevEl: nextButton,
      nextEl: prevButton,
    },
  });

  // Initialize content slider
  const contentSwiperSlider = new Swiper(contentSlider, {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    fadeEffect: { crossFade: true },
    effect: "fade",
    speed: 600,
  });

  // Link both sliders
  thumbSwiperSlider.controller.control = contentSwiperSlider;
  contentSwiperSlider.controller.control = thumbSwiperSlider;
}

function portfolioFourSlider() {
  // Check if elements exist before initializing the sliders
  const mainSlider = document.querySelector(".portfolio4__slider:not(.active)");
  const activeSlider = document.querySelector(".portfolio4__slider.active");
  const nextButton = ".portfolio4__navigation .btn-next";
  const prevButton = ".portfolio4__navigation .btn-prev";
  const portfolioPagination = ".portfolio4__pagination";

  if (
    !nextButton ||
    !prevButton ||
    !mainSlider ||
    !activeSlider ||
    !portfolioPagination
  ) {
    return;
  }

  const portfolioMainSlider = new Swiper(mainSlider, {
    loop: true,
    slidesPerView: 1.5,
    spaceBetween: 20,
    centeredSlides: false,
    freeMode: false,
    pagination: {
      el: portfolioPagination,
      clickable: true,
    },
    navigation: {
      nextEl: nextButton,
      prevEl: prevButton,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 1,
      },
      1199: {
        slidesPerView: 1.5,
      },
    },
  });

  const portfolioActiveSlider = new Swiper(activeSlider, {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: nextButton,
      prevEl: prevButton,
    },
  });

  // Sync both sliders
  portfolioMainSlider.controller.control = portfolioActiveSlider;
  portfolioActiveSlider.controller.control = portfolioMainSlider;
}

/* ======================== GSAP Start ======================== */

/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++ GSAP Configuration Start +++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
gsap.config({ nullTargetWarn: false });
const lenis = new Lenis({
  duration: 2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
});

/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++ GSAP Configuration End +++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

function raf(time) {
  lenis.raf(time);
  ScrollTrigger.update();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// -------------------------
// -------------------------
const elasticBounceAnimation = () => {
  const targetElement = document.querySelector(".breadcrumb__title > span");

  if (!targetElement) {
    return;
  }

  const animation = gsap.fromTo(
    targetElement,
    {
      scaleX: 1.5,
      transformOrigin: "center",
    },
    {
      scaleX: 1,
      duration: 1.6,
      ease: "elastic.out(3.5, 0.3)",
      delay: 1.5,
    }
  );
};
// -------------------------
// -------------------------
function animateHeader() {
  const header = document.querySelector("header.header");

  // Validate if the header element exists
  if (!header) {
    return;
  }

  // GSAP animation for header from top to its actual position
  gsap.fromTo(
    header,
    { y: -400 },
    { y: 0, duration: 1, ease: "power2.out", delay: 1 }
  );
}
// -------------------------
// -------------------------
function animateHeroElements() {
  // Ensure the DOM is fully loaded before executing the animation
  const heroSection = document.querySelector(".hero-one"); // The container for the elements
  const scrollElement = heroSection
    ? heroSection.querySelector(".hero-one__scroll")
    : null;
  const socialElement = heroSection
    ? heroSection.querySelector(".hero-one__social")
    : null;
  const socialElement2 = heroSection
    ? heroSection.querySelector(".hero-two__social")
    : null;

  // Validate the required elements
  if (!heroSection) {
    return; // If heroSection doesn't exist, exit
  }

  // Animate hero-one__scroll if available
  if (scrollElement) {
    gsap.fromTo(
      scrollElement,
      { x: -400 },
      { x: 0, duration: 1, ease: "power2.out", delay: 1 }
    );
  }

  // Animate hero-one__social if available
  if (socialElement) {
    gsap.fromTo(
      socialElement,
      { x: 400 },
      { x: 0, duration: 1, ease: "power2.out", delay: 1 }
    );
  }

  // Animate hero-two__social if available
  if (socialElement2) {
    gsap.fromTo(
      socialElement2,
      { x: 400 },
      { x: 0, duration: 1, ease: "power2.out", delay: 1 }
    );
  }
}

function animateHeroElements2() {
  const heroSection = document.querySelector(".hero-two");
  const socialElement = heroSection
    ? heroSection.querySelector(".hero-two__social")
    : null;
  const thumbElement = heroSection
    ? heroSection.querySelector(".hero-two__thumb")
    : null;

  // Validate the required elements
  if (!heroSection || !socialElement || !thumbElement) {
    return;
  }

  gsap.fromTo(
    socialElement,
    { x: 400 },
    { x: 0, duration: 1.5, ease: "power2.out", delay: 1.3 }
  );
  gsap.fromTo(
    thumbElement,
    { scale: 0.3 },
    { scale: 1, duration: 1.5, ease: "power2.out", delay: 1.3 }
  );
}

// -------------------------
// -------------------------
function animateShapes() {
  const breadcrumbSection = document.querySelector(".breadcrumb__section");
  const shape1 = document.querySelector(".breadcrumb__section .shape-1");
  const shape2 = document.querySelector(".breadcrumb__section .shape-2");

  // Validate the dependencies (elements)
  if (!breadcrumbSection || !shape1 || !shape2) {
    return; // Exit if the section does not exist
  }

  // GSAP animation for shape-1 (coming from the top to its actual position)
  gsap.fromTo(
    shape1,
    { y: -400 }, // Start position (above the section)
    { y: 0, duration: 1, ease: "power2.out", delay: 1.6 }
  );

  // GSAP animation for shape-2 (coming from the bottom to its actual position)
  gsap.fromTo(
    shape2,
    { y: 400 }, // Start position (below the section)
    { y: 0, duration: 1, ease: "power2.out", delay: 1.6 }
  );
}
// -------------------------
// -------------------------
function itemPopup() {
  const items = document.querySelectorAll(".item-popup");

  if (items.length > 0) {
    items.forEach((item, index) => {
      gsap.fromTo(
        item,
        { opacity: 0, y: 50 },
        {
          opacity: 1,
          y: 0,
          duration: 1,
          ease: "power3.out",
          delay: index * 0.5,
          scrollTrigger: {
            trigger: item,
            start: "top bottom",
            toggleActions: "play none none none",
            markers: false,
          },
        }
      );
    });
  }
}

// -------------------------
// -------------------------
if (window.innerWidth >= 992) {
  gsap.utils.toArray(".service__item").forEach((card) => {
    const link = card.querySelector(".service-link");
    link.style.transformStyle = "preserve-3d";

    card.addEventListener("mouseenter", () => {
      // On hover, rotate the link
      gsap.to(link, {
        duration: 1,
        rotateX: -180,
        transformStyle: "preserve-3d",
        ease: "power2.out",
      });
    });

    card.addEventListener("mouseleave", () => {
      gsap.to(link, {
        duration: 1,
        rotateX: 0,
        transformStyle: "preserve-3d",
        ease: "power2.out",
      });
    });
  });
}
// -------------------------
// -------------------------
$(".agx-circle-btn").on("mouseenter", function (e) {
  var x = e.pageX - $(this).offset().left;
  var y = e.pageY - $(this).offset().top;

  $(this).find(".tp-btn-circle-dot").css({
    top: y,
    left: x,
  });
});
// -------------------------
// -------------------------
$(".agx-circle-btn").on("mouseout", function (e) {
  var x = e.pageX - $(this).offset().left;
  var y = e.pageY - $(this).offset().top;

  $(this).find(".circle-dot").css({
    top: y,
    left: x,
  });
});
// -------------------------
// -------------------------
// GSAP Fade Animation
function initGsapPopAnimations() {
  // Select all elements with the gsap-pop class
  const popElements = document.querySelectorAll(".gsap-pop");
  if (popElements.length > 0) {
    // Process each element
    const popItems = gsap.utils.toArray(".gsap-pop");
    popItems.forEach((item, i) => {
      // Default values
      let fade_direction = "bottom";
      let onscroll_value = 1;
      let duration_value = 1.15;
      let fade_offset = 150;
      let delay_value = 0.15;
      let ease_value = "power2.out";

      // Override with data attributes if provided
      if (item.getAttribute("data-offset")) {
        fade_offset = parseFloat(item.getAttribute("data-offset"));
      }
      if (item.getAttribute("data-duration")) {
        duration_value = parseFloat(item.getAttribute("data-duration"));
      }
      if (item.getAttribute("data-direction")) {
        fade_direction = item.getAttribute("data-direction");
      }
      if (item.getAttribute("data-on-scroll")) {
        onscroll_value = parseFloat(item.getAttribute("data-on-scroll"));
      }
      if (item.getAttribute("data-delay")) {
        delay_value = parseFloat(item.getAttribute("data-delay"));
      }
      if (item.getAttribute("data-ease")) {
        ease_value = item.getAttribute("data-ease");
      }

      // Set initial state based on direction
      let initialX = 0;
      let initialY = 0;

      // Handle all directions including diagonals
      switch (fade_direction) {
        case "top":
          initialY = -fade_offset;
          break;
        case "bottom":
          initialY = fade_offset;
          break;
        case "left":
          initialX = -fade_offset;
          break;
        case "right":
          initialX = fade_offset;
          break;
        case "top-left":
          initialY = -fade_offset;
          initialX = -fade_offset;
          break;
        case "top-right":
          initialY = -fade_offset;
          initialX = fade_offset;
          break;
        case "bottom-left":
          initialY = fade_offset;
          initialX = -fade_offset;
          break;
        case "bottom-right":
          initialY = fade_offset;
          initialX = fade_offset;
          break;
      }
      let animation_settings = {
        opacity: 0,
        ease: ease_value,
        duration: duration_value,
        delay: delay_value,
      };

      // // Set initial state
      gsap.set(item, {
        y: initialY,
        x: initialX,
        opacity: 0,
      });

      // Create the animation that only triggers once on enter
      ScrollTrigger.create({
        trigger: item,
        start: "top bottom",
        // start: "top 85%",
        once: true, // Only trigger once
        markers: false,
        onEnter: () => {
          if (onscroll_value === 1) {
            gsap.to(item, {
              y: 0,
              x: 0,
              opacity: 1,
              duration: duration_value,
              delay: delay_value,
              ease: ease_value,
            });
          }
        },
      });

      // // For elements with onscroll_value !== 1, animate immediately
      if (onscroll_value !== 1) {
        gsap.to(item, {
          y: 0,
          x: 0,
          opacity: 1,
          duration: duration_value,
          delay: delay_value,
          ease: ease_value,
        });
      }
    });
  }
}

// -------------------------
// -------------------------
let text_animation = gsap.utils.toArray(".move-anim");

if (text_animation) {
  text_animation.forEach((splitTextLine) => {
    var delay_value = 0.1;
    if (splitTextLine.getAttribute("data-delay")) {
      delay_value = splitTextLine.getAttribute("data-delay");
    }
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: splitTextLine,
        start: "top 85%",
        duration: 1,
        scrub: false,
        markers: false,
        toggleActions: "play none none none",
      },
    });

    gsap.set(splitTextLine, {
      perspective: 400,
    });
    const itemSplitted = new SplitText(splitTextLine, {
      type: "lines",
    });
    itemSplitted.split({
      type: "lines",
    });
    tl.from(itemSplitted.lines, {
      duration: 1,
      delay: delay_value,
      opacity: 0,
      rotationX: -80,
      force3D: true,
      transformOrigin: "top center -50",
      stagger: 0.1,
    });
  });
}
// -------------------------
// -------------------------
const hoverBtnItem = gsap.utils.toArray(".agx-circle-btn");
hoverBtnItem.forEach((btn) => {
  $(btn).mousemove(function (e) {
    callParallax(e, btn); // Pass the button element into the function
  });

  // Parallax function
  function callParallax(e, btn) {
    parallaxIt(e, btn, 60); // Apply parallax effect to the button
  }

  // Parallax effect
  function parallaxIt(e, target, movement) {
    var $this = $(target);
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    gsap.to(target, 1, {
      x: ((relX - $this.width() / 2) / $this.width()) * movement,
      y: ((relY - $this.height() / 2) / $this.height()) * movement,
      ease: Power2.easeOut,
    });
  }

  // Reset position on mouse leave
  $(btn).mouseleave(function (e) {
    gsap.to(btn, 1, {
      x: 0,
      y: 0,
      ease: Power2.easeOut,
    });
  });
});

// -------------------------
// -------------------------
if (window.innerWidth >= 992) {
  gsap.to(".hero-slider", {
    scrollTrigger: {
      trigger: ".hero-one",
      start: "10% top",
      end: "bottom top",
      pin: true,
      scrub: 3,
      markers: false,
      invalidateOnRefresh: false,
    },
    x: "-50%",
    ease: "power4.out",
  });
}
// -------------------------
// -------------------------
gsap.utils.toArray(".process__box").forEach((box) => {
  const shape = box.querySelector(".shape");

  gsap.set(shape, {
    xPercent: 65,
    yPercent: -67,
    scale: 0,
    transformStyle: "preserve-3d",
  });

  box.addEventListener("mouseenter", () => {
    gsap.to(shape, {
      duration: 0.6,
      xPercent: -24,
      yPercent: 17,
      scale: 1,
      ease: "power2.out",
    });
  });

  box.addEventListener("mouseleave", () => {
    gsap.to(shape, {
      duration: 0.6,
      xPercent: 65,
      yPercent: -67,
      scale: 0,
      ease: "power2.out",
    });
  });
});
// -------------------------
// -------------------------
function setupMouseMoveAnimation() {
  const movementWrappers = document.querySelectorAll(".movement-wrapper");

  if (!movementWrappers || movementWrappers.length === 0) {
    return;
  }

  // Maximum movement in pixels
  const maxMovement = 20;

  movementWrappers.forEach((wrapper) => {
    const moveItems = wrapper.querySelectorAll(".move-item");

    if (moveItems.length === 0) {
      return;
    }

    // Set initial position for move-items
    gsap.set(moveItems, { x: 0, y: 0 });

    wrapper.addEventListener("mousemove", (e) => {
      if (!e) return;

      // Get movement wrapper size and position
      const rect = wrapper.getBoundingClientRect();
      const mouseX = e.clientX - rect.left;
      const mouseY = e.clientY - rect.top;

      // Calculate movement as a percentage of wrapper size
      const moveX = (mouseX / rect.width - 0.5) * 2 * maxMovement;
      const moveY = (mouseY / rect.height - 0.5) * 2 * maxMovement;

      // Animate each move-item inside the current movement-wrapper
      moveItems.forEach((item) => {
        gsap.to(item, {
          x: moveX,
          y: moveY,
          duration: 0.3,
          ease: "power2.out",
        });
      });
    });

    // Reset position when mouse leaves the movement-wrapper
    wrapper.addEventListener("mouseleave", () => {
      moveItems.forEach((item) => {
        gsap.to(item, {
          x: 0,
          y: 0,
          duration: 0.5,
          ease: "power2.out",
        });
      });
    });
  });
}
// -------------------------
// -------------------------
function animateElementRotation(selector) {
  const tl = gsap.timeline({ repeat: -1, yoyo: false, ease: "power1.inOut" });

  // Animation sequence for the image inside .hero-two__thumb img
  tl.to(selector, { rotation: 5, duration: 2 })
    .to(selector, { rotation: 0, duration: 2 })
    .to(selector, { rotation: -5, duration: 2 })
    .to(selector, { rotation: 0, duration: 2 })
    .to(selector, { rotation: 5, duration: 2 })
    .to(selector, { rotation: 0, duration: 2 })
    .to(selector, { rotation: -5, duration: 2 });
}
// -------------------------
// -------------------------
function horizontalScroll() {
  const horizontalScrollWrapper = document.querySelector(
    ".testimonial6__box-wrapper"
  );
  const testimonialBoxes = document.querySelectorAll(".testimonial-box6");

  if (
    horizontalScrollWrapper &&
    testimonialBoxes.length &&
    window.innerWidth >= 1200
  ) {
    let lastScrollPosition = sessionStorage.getItem("scrollPos");
    if (lastScrollPosition) {
      horizontalScrollWrapper.scrollLeft = lastScrollPosition;
    }
    gsap.to(horizontalScrollWrapper, {
      x: () =>
        -(
          horizontalScrollWrapper.scrollWidth -
          horizontalScrollWrapper.clientWidth
        ),
      ease: "none",
      scrollTrigger: {
        trigger: horizontalScrollWrapper,
        start: "top top",
        end: () => "+=" + horizontalScrollWrapper.scrollWidth,
        scrub: true,
        pin: horizontalScrollWrapper,
        markers: false,
        onUpdate: (self) => {
          sessionStorage.setItem("scrollPos", self.scroll());
        },
      },
    });
  }
}
// -------------------------
// -------------------------
function initTextReveal() {
  const e = document.querySelectorAll(".reveal-text");
  e.forEach((e) => {
    var t = new SplitType(e, {
      types: "words",
    });
    gsap.from(t.words, {
      scrollTrigger: {
        trigger: e,
        start: "top 80%",
        end: "top -10%",
        scrub: !0,
        pin: ".about",
        pinSpacing: !0,
      },
      opacity: 0.2,
      stagger: 0.1,
      duration: 1,
      ease: "power2.out",
    });
  });
}
// -------------------------
// -------------------------
/* ======================== GSAP End ======================== */

document.addEventListener("DOMContentLoaded", function () {
  initPreloader();
  onLoadGSAPEffect();
  setCurrentYear();
  setBackgroundImages();
  initializeMeanMenu();
  initializeSwiper(".brandSlider", brandSliderOptions);
  initializeSwiper(".testimonial__slider", testimonialSliderOptions);
  initializeSwiper(".testimonial2__slider", testimonial2SliderOptions);
  initializeSwiper(".testimonial3__slider", testimonial3SliderOptions);
  initTestimonial5Sliders();
  initializeSwiper(".marquee__slider-common", marqueeSliderCommonOptions);
  initializeSwiper(".marquee__slider-common2", marqueeSliderCommon2Options);
  initializeSwiper(".marquee__slider-up", marqueeSliderUpOptions);
  initializeSwiper(".marquee__slider-down", marqueeSliderDownOptions);
  portfolioFourSlider();
  initializeWidthSliders();
  initializePortfolioSliders();
  initializeVideoPlayers(".video-player", ".play-btn");
  initializeVideoPlayers(".team2__accordion video", ".video-btn");
  initializeVideoPlayers2(".video2-player", ".video2-play-btn");
  handleHome3VideoPlayback();
  odometerCounter();
  initializeBlogHoverEffect(".blog-box", ".blog-box-thumbs img");
  movementEffect();
  setHoverActiveClass(".team__box", ".team__box", "active");
  setHoverActiveClass(".partner__box", ".partner__box", "active");
  setHoverActiveClass(".fun-facts-box", ".fun-facts-box", "active");
  setHoverActiveClass(".blog-box2", ".blog-box2", "active");
  setHoverActiveClass(".service3__box", ".service3__box", "active");
  setHoverActiveClass(".goal-box", ".goal-box", "active");
  setHoverActiveClass(".pricing__box", ".pricing__box", "active");
  setHoverActiveClass(".service5__box", ".service5__box", "active");
  setHoverActiveClass(".service5__box", ".service5__box", "active");
  setHoverActiveClass(".about-us5__item", ".about-us5__item", "active");
  setHoverActiveClass(".choose-us__box", ".choose-us__box", "active");
  setHoverActiveClass(".service6__box", ".service6__box", "active");
  setHoverActiveClass(
    ".widget_category .category-box",
    ".widget_category .category-box",
    "active"
  );
  updateAccordionActiveState(".faq2__accordion");
  initPricingToggle();

  initializeSelect2("#sort-select", {
    allowClear: false,
    minimumResultsForSearch: Infinity,
    dropdownAutoWidth: true,
  });

  initializeSelect2("#filter-select", {
    allowClear: false,
    minimumResultsForSearch: Infinity,
    dropdownAutoWidth: true,
  });
  initServiceToggle();

  // GSAP
  setupMouseMoveAnimation();
  animateElementRotation(".hero-two__thumb img");
  horizontalScroll();
  initTextReveal();
  itemPopup();
  initGsapPopAnimations();

  setTimeout(function () {
    ScrollTrigger.refresh();
  }, 2000);
});
function onLoadGSAPEffect() {
  elasticBounceAnimation();
  animateShapes();
  animateHeader();
  animateHeroElements();
  animateHeroElements2();
}
window.addEventListener("resize", () => {
  ScrollTrigger.refresh();
});
