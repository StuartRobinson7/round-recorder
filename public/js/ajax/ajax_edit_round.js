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
/******/ 	return __webpack_require__(__webpack_require__.s = 17);
/******/ })
/************************************************************************/
/******/ ({

/***/ 17:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(18);


/***/ }),

/***/ 18:
/***/ (function(module, exports) {


$(document).ready(function () {

    function roundTotals($class, $id) {

        var $total = 0;

        $($class).each(function () {
            $total += parseInt($(this).val());
        });

        $($id).html($total);
    }

    roundTotals(".first-nine-score", "#firstNineScore");
    roundTotals(".first-nine-putts", "#firstNinePutts");
    roundTotals(".first-nine-drops", "#firstNineDrops");

    roundTotals(".second-nine-score", "#secondNineScore");
    roundTotals(".second-nine-putts", "#secondNinePutts");
    roundTotals(".second-nine-drops", "#secondNineDrops");

    roundTotals(".third-nine-score", "#thirdNineScore");
    roundTotals(".third-nine-putts", "#thirdNinePutts");
    roundTotals(".third-nine-drops", "#thirdNineDrops");

    function fairwaysTotals($class, $id) {

        var $inputs = $($class).length;
        var $inputsDisabled = $($class + 'input:disabled').length;
        var $total = $inputs - $inputsDisabled;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);

        $(document).on("change", $class, function () {

            var $count = $($class + 'input:checked').length;

            $('#' + $id).html($count);
        });
    }

    fairwaysTotals(".FirstNineFir", "#FirstNineFirCount");
    fairwaysTotals(".SecondtNineFir", "#SecondNineFirCount");
    fairwaysTotals(".ThirdNineFir", "#ThirdNineFirCount");

    function greensTotals($class, $inputId, $id) {

        var $total = 9;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);

        $(document).on("change", $class, function () {

            var $count = $('#' + $inputId + 'input:checked').length;

            $($id).html($count);
        });
    }

    greensTotals(".FirstNineGir", "firstNineGirs", "#FirstNineGirCount");
    greensTotals(".SecondtNineGir", "second9Girs", "#SecondNineGirCount");
    greensTotals(".ThirdNineGir", "third9Girs", "#ThirdNineGirCount");
});

/***/ })

/******/ });