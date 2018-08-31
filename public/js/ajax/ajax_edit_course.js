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
/******/ 	return __webpack_require__(__webpack_require__.s = 13);
/******/ })
/************************************************************************/
/******/ ({

/***/ 13:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(14);


/***/ }),

/***/ 14:
/***/ (function(module, exports) {

$(document).ready(function () {

    //var course_id = json_encode($id);

    // bring back selected holes
    function selectHoles() {

        var selected_holes = $('input[name=holes]:checked').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_editholes',
            dataType: "json",
            method: 'get',
            data: { selected_holes: selected_holes, course_id: course_id },
            success: function success(response) {

                // return holes
                $("#get-holes").html(response);

                // show plus/minus icons
                $('.btn-collapse').each(function () {
                    if ($(this).hasClass('collapsed')) {
                        $(this).find('i').addClass('fa-plus-circle');
                    } else {
                        $(this).find('i').addClass('fa-minus-circle');
                    }
                });

                // toggle icons on click
                $('.btn-collapse').click(function () {
                    $(this).find('i').toggleClass('fa-minus-circle').toggleClass('fa-plus-circle');
                });
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

    // Calculate Course Totals on page load
    $(document).ready(function () {

        function courseTotalsOnLoad($class, $id) {

            var $total = 0;

            $($class).each(function () {
                $total += parseInt($(this).val());
            });

            $($id).html($total);
        }

        courseTotalsOnLoad(".first-white-yards", "#firstWhiteYards");
        courseTotalsOnLoad(".first-white-par", "#firstWhitePar");
        courseTotalsOnLoad(".first-yellow-yards", "#firstYellowYards");
        courseTotalsOnLoad(".first-yellow-par", "#firstYellowPar");
        courseTotalsOnLoad(".first-red-yards", "#firstRedYards");
        courseTotalsOnLoad(".first-red-par", "#firstRedPar");

        courseTotalsOnLoad(".second-white-yards", "#secondWhiteYards");
        courseTotalsOnLoad(".second-white-par", "#secondWhitePar");
        courseTotalsOnLoad(".second-yellow-yards", "#secondYellowYards");
        courseTotalsOnLoad(".second-yellow-par", "#secondYellowPar");
        courseTotalsOnLoad(".second-red-yards", "#secondRedYards");
        courseTotalsOnLoad(".second-red-par", "#secondRedPar");

        courseTotalsOnLoad(".third-white-yards", "#thirdWhiteYards");
        courseTotalsOnLoad(".third-white-par", "#thirdWhitePar");
        courseTotalsOnLoad(".third-yellow-yards", "#thirdYellowYards");
        courseTotalsOnLoad(".third-yellow-par", "#thirdYellowPar");
        courseTotalsOnLoad(".third-red-yards", "#thirdRedYards");
        courseTotalsOnLoad(".third-red-par", "#thirdRedPar");
    });

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
});

/***/ })

/******/ });