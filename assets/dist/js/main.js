/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
!function() {
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/main.scss */ "./src/scss/main.scss");

//import './fireline-init.js';
document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("click", async e => {
    if (!e.target.closest(".blockblog-header") && !e.target.closest(".blockblog-menu-toggler")) {
      e.target.closest('body').querySelectorAll(".blockblog-header").forEach(nav => {
        nav.classList.remove("nav-shown");
      });
    }
    if (e.target.closest(".blockblog-menu-toggler")) {
      e.preventDefault();
      e.target.closest(".blockblog-header").querySelectorAll(".blockblog-nav")[0].classList.toggle("nav-shown");
    }
  });
  document.addEventListener("keydown", e => {
    if (e.ctrlKey && e.key === 'k' || e.key === '/') {
      /**
       * only prevent default if the key is not '/'
       */

      if (e.key !== '/') {
        e.preventDefault();
      }
      const searchInput = document.querySelector(".blockblog-search input");
      if (searchInput) {
        searchInput.focus();
      }
    }
  });
});
}();
/******/ })()
;
//# sourceMappingURL=main.js.map