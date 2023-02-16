'use strict'

function popupImage(url) {
    let imgPopup = document.getElementById("insert-img");
    let divPopup = document.getElementById("div-popup");

    imgPopup.setAttribute("src", url);
    divPopup.classList.add("opened");

    let headerPc = document.getElementById("header-pc");
    headerPc.classList.remove("sticky-lg-top");
}

function closePopup() {
    let imgPopup = document.getElementById("insert-img");
    let divPopup = document.getElementById("div-popup");

    imgPopup.removeAttribute("src");
    divPopup.classList.remove("opened");

    let headerPc = document.getElementById("header-pc");
    headerPc.classList.add("sticky-lg-top");
}