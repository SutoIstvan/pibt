import './bootstrap';

import * as bootstrap from 'bootstrap';

import AOS from 'aos';
import 'aos/dist/aos.css';

// AOS init
AOS.init();

// =======================
// Button to top
// =======================

let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        if (mybutton) mybutton.style.display = "block";
    } else {
        if (mybutton) mybutton.style.display = "none";
    }
}

if (mybutton) {
    mybutton.addEventListener("click", backToTop);
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// =======================
// THEME (FIXED LIGHT)
// =======================

function setTheme(theme) {
    document.body.setAttribute('data-bs-theme', theme);
}

// Всегда светлая тема
setTheme('light');