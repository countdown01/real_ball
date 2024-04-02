"use strict";

let swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
});

let swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let swiper3 = new Swiper(".mySwiper3", {
    effect: "cards",
    grabCursor: true,
});

let swiper4 = new Swiper(".mySwiper4", {
    effect: "cards",
    grabCursor: true,
});

document.addEventListener("DOMContentLoaded", function () {
    let swiper5 = new Swiper(".mySwiper5", {
        direction: "vertical",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
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

document.addEventListener("DOMContentLoaded", function () {
    let swiper6 = new Swiper(".mySwiper6", {
        effect: "coverflow",
        spaceBetween: 50,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
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

//#end region for slide

//#region responsive for header

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

//#endregion responsive for header
