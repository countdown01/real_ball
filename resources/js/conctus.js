const BTN_DARK = document.getElementById('btn-dark');
const BTN_LIGHT = document.getElementById('btn-light');
const HTML = document.querySelector('html');

BTN_DARK.addEventListener('click', enableDarkMode);
BTN_LIGHT.addEventListener('click', enableLightMode);

function enableDarkMode() {
    HTML.classList.add('dark');
}

function enableLightMode() {
    HTML.classList.remove('dark');
}


document.addEventListener("DOMContentLoaded", function () {
    let swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        speed: 1000,
        loop: true,
        slidePerView: 1,
        autoplay: {
            dealy: 2000,
            disableOnInteraction: false,
        },
    });
});

let swiper4 = new Swiper(".mySwiper4", {
    effect: "cards",
    grabCursor: true,
});

const SIDEBAR_OPEN = document.getElementById("sidebarOpen");
const SIDEBAR = document.getElementById("sidebar");
const CLOSESIDEBA = document.getElementById("closeSidebar");
const SEARCHBOX = document.getElementById("searchBox");
const SEARCH = document.getElementById("search");
const HIDESEARCHBOX = document.getElementById("hideSearchBox");

SIDEBAR_OPEN.addEventListener("click", function () {
    SIDEBAR.classList.toggle("hidden");
});

CLOSESIDEBA.addEventListener("click", function () {
    SIDEBAR.classList.toggle("hidden");
});

SEARCH.addEventListener("click", function () {
    SEARCHBOX.classList.remove("hidden");
});

HIDESEARCHBOX.addEventListener("click", function () {
    SEARCHBOX.classList.add("hidden");
});
