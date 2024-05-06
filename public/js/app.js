/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/***/ (() => {

function intiateOwl() {
  var checkWidth = $(window).width();
  var successOwl = $("#success");
  successOwl.owlCarousel({
    items: 1,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    dots: false,
    loop: true
  });
  $(".successNext").click(function () {
    successOwl.trigger("next.owl.carousel");
  });
  $(".successPrev").click(function () {
    successOwl.trigger("prev.owl.carousel");
  });
  $(".owl-client").owlCarousel({
    margin: 50,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    dots: false,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      1000: {
        items: 6
      }
    }
  });
  $(".customerNext").click(function () {
    $(".owl-client").trigger("next.owl.carousel");
  });
  $(".customerPrev").click(function () {
    $(".owl-client").trigger("prev.owl.carousel");
  });
  $(".owl-dynamic").owlCarousel({
    margin: 50,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      1000: {
        items: 4,
        nav: false
      }
    }
  });
  $(".dynamicNext").click(function () {
    $(".owl-dynamic").trigger("next.owl.carousel");
  });
  $(".dynamicPrev").click(function () {
    $(".owl-dynamic").trigger("prev.owl.carousel");
  });
  $(".owl-service").owlCarousel({
    margin: 50,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      1000: {
        items: 4,
        nav: false
      }
    }
  });
  $(".serviceNext").click(function () {
    $(".owl-service, .owl-dynamic").trigger("next.owl.carousel");
  });
  $(".servicePrev").click(function () {
    $(".owl-service, .owl-dynamic").trigger("prev.owl.carousel");
  });
  $(".owl-vertical").owlCarousel({
    margin: 50,
    responsive: {
      0: {
        items: 1
      }
    }
  });
}
function downloadTrigger(fileUrl) {
  var downloadLink = document.createElement("a");
  downloadLink.href = fileUrl.value;
  downloadLink.setAttribute("download", fileUrl.value);
  downloadLink.setAttribute("target", "_blank");
  if (fileUrl.value !== "") {
    downloadLink.click();
  }
}
$(document).ready(function () {
  var lastSegment = window.location.href.split("/").pop();
  if (lastSegment == "thankyou") {
    var fileUrl = document.getElementById("downloadInputUrl");
    downloadTrigger(fileUrl);
  }
  if (lastSegment == "brochure-thankyou") {
    var _fileUrl = document.getElementById("brodownloadInputUrl");
    downloadTrigger(_fileUrl);
  }
  intiateOwl();
  $("#brochureForm").validate({
    rules: {
      broName: "required",
      broEmail: "required"
    },
    messages: {
      broName: "Please specify your name",
      broEmail: "Please enter your email id"
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  $("#demoFrom").validate({
    rules: {
      demoName: "required",
      demoEmail: "required",
      demoSolution: "required"
    },
    messages: {
      demoName: "Please specify your name",
      demoEmail: "Please enter your email id",
      demoSolution: "Please enter solution"
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  $("#contactForm").validate({
    rules: {
      contactName: "required",
      contactEmail: "required"
    },
    messages: {
      contactName: "Please specify your name",
      contactEmail: "Please enter your email id"
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  $("#footerDemo").validate({
    rules: {
      footerName: "required",
      footerEmail: "required",
      footerSolution: "required"
    },
    messages: {
      footerName: "Please specify your name",
      footerEmail: "Please enter your email id",
      footerSolution: "Please enter solution"
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  $("#commonDownloadForm").validate({
    rules: {
      commonFormName: "required",
      commonFormEmail: {
        required: true,
        email: true
      },
      // commonFormPhone4: {
      //   required: true,
      //   number: true,
      // },
      solution: "required"
    },
    messages: {
      commonFormName: "Please specify your name",
      commonFormEmail: "Please enter your email id",
      // phone4: "Please enter valid phone",
      solution: "Select one"
    },
    // errorElement: "div",
    // errorLabelContainer: ".errorTxt",

    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });

  //   if ($(window).width() > 765) {
  //     intiateOwl();
  //   } else {
  //     $('.owl-carousel').addClass('off');
  //   }
  // });

  // $(window).resize(function() {
  //   if ($(window).width() > 765) {
  //     intiateOwl();
  //   } else {
  //     stopCarousel();
  //   }
});

function stopCarousel() {
  var owl = $(".owl-carousel");
  owl.trigger("destroy.owl.carousel");
  owl.addClass("off");
}

// const phoneInputField = document.querySelector("#footerPhone");

// //change it later
// intlTelInput(phoneInputField);

var downloadDiv = document.getElementById("downloadDiv");
var countryData = window.intlTelInputGlobals.getCountryData();

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
}
document.addEventListener("alpine:init", function () {
  Alpine.data("app", function () {
    return {
      downloadDivOpen: false,
      demoDivOpen: false,
      commonDownloadDivOpen: false,
      commonFormData: {
        name: {
          value: "",
          error: false,
          errorMsg: ""
        },
        company: {
          value: "",
          error: false,
          errorMsg: ""
        },
        designation: "",
        email: "",
        phone: "",
        solution: ""
      },
      status: false,
      loading: false,
      isError: false,
      //commonform submit
      commonFormsubmitData: function commonFormsubmitData() {
        var commonForm = document.querySelector("#commonDownloadForm");
        // if (!this.commonFormData.name.value.length ||
        //   !this.commonFormData.company.length) {
        //   this.isError = true;
        //   alert("Please fill out all required field and try again!")
        //   return;
        // }
        if (!this.commonFormData.name.value.length) {
          this.commonFormData.name.error = true;
          return;
        }
        if (!this.commonFormData.company.value.length) {
          this.commonFormData.company.error = true;
          return;
        }
        commonForm.submit();
      },
      openCommonDownloadForm: function openCommonDownloadForm() {
        var commonInput = document.querySelector("#commonDownloadFlag");
        var phoneDown4 = document.querySelector("#phone4");
        var flagInput = document.querySelector("#commonDownloadForm");

        // const iti = intlTelInput(phoneDown4);

        // $(phoneDown4).on("countrychange", function (e) {
        //   commonInput.value = iti.getSelectedCountryData().name;
        // });

        // intlTelInput(phoneDown4);
        this.commonDownloadDivOpen = true;
      },
      openFormDownload: function openFormDownload(solution) {
        var phoneDown2 = document.querySelector("#phone2");
        var countyInput = document.querySelector("#broDownloadFlag");
        var docInput = document.querySelector("#broDoc");
        docInput.setAttribute("value", solution);

        // intlTelInput(phoneDown2);

        // $(phoneDown2).on("countrychange", function (e) {
        //   countyInput.value = iti.getSelectedCountryData().name;
        // });

        this.downloadDivOpen = true;
      },
      openFormDemoDiv: function openFormDemoDiv(solution) {
        // const phoneDown = document.querySelector("#demoPhone");
        // intlTelInput(phoneDown);
        this.demoDivOpen = true;
        console.log(solution);
      }
    };
  });
});

/***/ }),

/***/ "./src/app.css":
/*!*********************!*\
  !*** ./src/app.css ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/public/js/app": 0,
/******/ 			"public/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["public/css/app"], () => (__webpack_require__("./src/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["public/css/app"], () => (__webpack_require__("./src/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;