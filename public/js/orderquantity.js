/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/orderquantity.js ***!
  \***************************************/
var count = 1;
var countEl = document.getElementById("count");

function plus() {
  count++;
  countEl.value = count;
}

function minus() {
  if (count > 1) {
    count--;
    countEl.value = count;
  }
}
/******/ })()
;