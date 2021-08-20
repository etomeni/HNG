const mainNav = document.querySelector(".main-nav");
const navOverlay = mainNav.querySelector(".nav-overlay");
const navToggler = mainNav.querySelector(".navbar-toggler");
const navTogglerClose = mainNav.querySelector(".close-side-nav");

const openSideNav = () => mainNav.classList.add("active");
const closeSideNav = () => mainNav.classList.remove("active");

navToggler.addEventListener("click", openSideNav);
navOverlay.addEventListener("click", closeSideNav);
navTogglerClose.addEventListener("click", closeSideNav);