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
/******/ 	return __webpack_require__(__webpack_require__.s = 15);
/******/ })
/************************************************************************/
/******/ ({

/***/ 15:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(16);


/***/ }),

/***/ 16:
/***/ (function(module, exports) {


$(document).ready(function () {

    $('#course_id').change(function () {
        if ($(this).val() > 0) {
            $('#submit').removeAttr("disabled").button('refresh');
        }
    });

    // Set round as half(9 holes) or full(18 holes)    
    function roundSize() {

        var selected_size = $('input:radio[name=size]:checked').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_getcourselist',
            dataType: "json",
            method: 'get',
            data: { selected_size: selected_size },
            success: function success(response) {
                $("#course_id").html(response), $("#selected_course").html(""), $("#select_nines").html("");
            },
            error: function error(_error) {
                console.log(_error);
            }
        });
    }

    // Get selected tee's to display correct colour/yardage 
    function selectYards() {

        var selected_course_id = $('#course_id').val();
        var selected_yards = $('input:radio[name=yards]:checked').val();
        var selected_size = $('input:radio[name=size]:checked').val();
        var selected_nine = $('input:radio[name=nine]:checked').val();

        //var selected_stats = $('input:checkbox[name=stats_round]:checked').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_getcourse',
            dataType: "json",
            method: 'get',
            data: { selected_course_id: selected_course_id, selected_yards: selected_yards, selected_size: selected_size, selected_nine: selected_nine /*selected_stats: selected_stats*/ },
            success: function success(response) {
                $("#selected_course").html(response);
            },
            error: function error(_error2) {
                console.log(_error2);
            }
        });
    }

    // Grab stats fields if required
    function selectStats() {

        var selected_course_id = $('#course_id').val();
        var selected_yards = $('input:radio[name=yards]:checked').val();
        var selected_size = $('input:radio[name=size]:checked').val();
        var selected_nine = $('input:radio[name=nine]:checked').val();
        var selected_stats = $('input:radio[name=nine]:checked').val();

        //var selected_stats = $('input:checkbox[name=stats_round]:checked').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_getcoursestats',
            dataType: "json",
            method: 'get',
            data: { selected_course_id: selected_course_id, selected_yards: selected_yards, selected_size: selected_size, selected_nine: selected_nine /*selected_stats: selected_stats*/ },
            success: function success(response) {
                $("#selected_course").html(response);
            },
            error: function error(_error3) {
                console.log(_error3);
            }
        });
    }

    // Find out which set of nine holes have been played
    function selectNines() {

        var selected_size = $('input:radio[name=size]:checked').val();
        var selected_course_id = $('#course_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_getcoursenines',
            dataType: "json",
            method: 'get',
            data: { selected_course_id: selected_course_id, selected_size: selected_size },
            success: function success(response) {
                $("#select_nines").html(response);
                $('input:radio[name=nine]').each(selectCourse);
                $('input:radio[name=nine]').change(selectCourse);
            },
            error: function error(_error4) {
                console.log(_error4);
            }
        });
    }

    // Find selected courses data
    function selectCourse() {

        var selected_course_id = $('#course_id').val();
        var selected_yards = $('input:radio[name=yards]:checked').val();
        var selected_size = $('input:radio[name=size]:checked').val();
        var selected_nine = $('input:radio[name=nine]:checked').val();

        //var selected_stats = $('input:checkbox[name=stats_round]:checked').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/ajax_getcourse',
            dataType: "json",
            method: 'get',
            data: { selected_course_id: selected_course_id, selected_yards: selected_yards, selected_size: selected_size, selected_nine: selected_nine /*selected_stats: selected_stats*/ },
            success: function success(response) {
                $("#selected_course").html(response);
            },

            error: function error(_error5) {
                console.log(_error5);
            }
        });
    }

    // Call the functions


    $('input:radio[name=size]').each(roundSize);
    $('input:radio[name=size]').change(roundSize);

    $('input:radio[name=yards]').change(selectYards);
    $('input:radio[name=yards]').change(selectCourse);

    $('input:checkbox[name=stats_round]').change(selectStats);
    $('input:checkbox[name=stats_round]').change(selectCourse);

    $('#course_id').change(selectNines);

    $('input:radio[name=nine]').change(selectCourse);

    // Submit the Round
    $('#add_round').on('submit', function (e) {

        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: '/rounds',
            method: 'post',
            data: $(this).serialize(),
            success: function success(response) {
                window.location.href = '/rounds/' + response;
            },
            error: function error(_error6) {

                console.log(_error6);
            }

        });
    });
});

$(document).ajaxSuccess(function () {

    // Enable Tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#stats_round').change(function () {

        if ($(this).prop("checked")) {
            $('.show-stats').show();
        } else {
            $('.show-stats').hide();
        }
    });

    function roundTotals($class, $id) {

        var $total = 0;

        $($id).html($total);

        $(document).on("change", $class, function () {

            var $total = 0;

            $($class).each(function () {
                if ($(this).val() != "") $total += parseInt($(this).val());
            });

            $($id).html($total);
        });
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

    function fairwaysTotals($class, $rowId, $id) {

        var $inputs = $($class).length;
        var $inputsDisabled = $($rowId + ' ' + 'input:disabled').length;
        var $total = $inputs - $inputsDisabled;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);

        $(document).ready(function () {
            var $count = $($rowId + ' ' + 'input:checked').length;
            $($id).html($count);
        });

        $(document).on("change", $class, function () {

            var $count = $($rowId + ' ' + 'input:checked').length;

            $($id).html($count);
        });
    }

    fairwaysTotals(".FirstNineFir", "#FirstNineFirs", "#FirstNineFirCount");
    fairwaysTotals(".SecondNineFir", "#SecondNineFirs", "#SecondNineFirCount");
    fairwaysTotals(".ThirdNineFir", "#ThirdNineFirs", "#ThirdNineFirCount");

    function greensTotals($class, $inputId, $id) {

        var $total = 9;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);

        $(document).ready(function () {
            var $count = $($inputId + ' ' + 'input:checked').length;
            $($id).html($count);
        });

        $(document).on("change", $class, function () {

            var $count = $($inputId + ' ' + 'input:checked').length;

            $($id).html($count);
        });
    }

    greensTotals(".FirstNineGir", "#FirstNineGirs", "#FirstNineGirCount");
    greensTotals(".SecondNineGir", "#SecondNineGirs", "#SecondNineGirCount");
    greensTotals(".ThirdNineGir", "#ThirdNineGirs", "#ThirdNineGirCount");
});

/***/ })

/******/ });