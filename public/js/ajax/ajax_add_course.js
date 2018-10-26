/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ({

/***/ 11:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(12);


/***/ }),

/***/ 12:
/***/ (function(module, exports) {

$(document).ready(function () {

    // bring back selected holes
    function selectHoles() {

        var selected_holes = $('input[name=holes]:checked').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_getholes',
            dataType: "json",
            method: 'get',
            data: { selected_holes: selected_holes },
            success: function success(response) {
                // return holes
                $("#get-holes").html(response);
            },
            error: function error(_error) {
                console.log(_error);
            }
        });
    }

    // run on page load
    $('input:radio[name=holes]').each(selectHoles);

    // run on radio change
    $('input:radio[name=holes]').change(selectHoles);
});

$(document).ajaxSuccess(function () {

    // Calculate Course totals on change
    function courseTotals($class, $id) {

        var $total = 0;

        $(document).on("change", $class, function () {

            var $total = 0;

            $($class).each(function () {
                if ($(this).val() != "") $total += parseInt($(this).val());
            });

            $($id).html($total);
        });

        $($id).html($total);
    }

    // Call the functions
    courseTotals(".first-white-yards", "#firstWhiteYards");
    courseTotals(".first-white-par", "#firstWhitePar");
    courseTotals(".first-yellow-yards", "#firstYellowYards");
    courseTotals(".first-yellow-par", "#firstYellowPar");
    courseTotals(".first-red-yards", "#firstRedYards");
    courseTotals(".first-red-par", "#firstRedPar");

    courseTotals(".second-white-yards", "#secondWhiteYards");
    courseTotals(".second-white-par", "#secondWhitePar");
    courseTotals(".second-yellow-yards", "#secondYellowYards");
    courseTotals(".second-yellow-par", "#secondYellowPar");
    courseTotals(".second-red-yards", "#secondRedYards");
    courseTotals(".second-red-par", "#secondRedPar");

    courseTotals(".third-white-yards", "#thirdWhiteYards");
    courseTotals(".third-white-par", "#thirdWhitePar");
    courseTotals(".third-yellow-yards", "#thirdYellowYards");
    courseTotals(".third-yellow-par", "#thirdYellowPar");
    courseTotals(".third-red-yards", "#thirdRedYards");
    courseTotals(".third-red-par", "#thirdRedPar");

    // Enable Tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
});

/***/ })

/******/ });