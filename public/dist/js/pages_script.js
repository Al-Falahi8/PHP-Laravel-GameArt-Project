// navbar

const hamburger = document.querySelector('.navbar-toggler');
const navLinks = document.querySelector('.nav-link');
const Links = document.querySelector('.nav-link li');


hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
});

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("close");
});