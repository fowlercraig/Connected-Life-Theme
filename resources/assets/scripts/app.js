/**
 * External Dependencies
 */
import 'jquery';
const feather = require('feather-icons')
import 'alpinejs'
import { tns } from "tiny-slider/src/tiny-slider"

$(document).ready(() => {
  feather.replace();
});

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

const tnsCarousel = document.querySelectorAll('.tns-slider');
tnsCarousel.forEach(slider => {
  const tnsSlider = tns({
    container: slider,
    mode: "gallery",
    controlsContainer: ".tns-slider__controls",
    navContainer: ".tns-slider__nav",
  });
});