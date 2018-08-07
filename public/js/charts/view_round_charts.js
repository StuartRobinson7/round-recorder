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


chart_round_fir = new Chartist.Pie('#chart-round-fir', { series: [round_firs, round_firs_leftover] }, {
    donut: true,
    donutWidth: 10,
    startAngle: 270,
    total: 100,
    showLabel: false
});

chart_round_gir = new Chartist.Pie('#chart-round-gir', { series: [round_girs, round_girs_leftover] }, {
    donut: true,
    donutWidth: 10,
    startAngle: 270,
    total: 100,
    showLabel: false
});

chart_round_scrambling = new Chartist.Pie('#chart-round-scrambling', { series: [round_scrambling, round_scrambling_leftover] }, {
    donut: true,
    donutWidth: 10,
    startAngle: 270,
    total: 100,
    showLabel: false
});

function drawHandler(data) {

    if (data.type === 'slice') {

        var pathLength = data.element._node.getTotalLength();

        data.element.attr({
            'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
        });

        var animationDefinition = {
            'stroke-dashoffset': {
                id: 'anim' + data.index,
                dur: 1000,
                from: -pathLength + 'px',
                to: '0px',
                easing: Chartist.Svg.Easing.easeOut,
                fill: 'freeze'
            }
        };

        if (data.index !== 0) {
            animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
        }

        data.element.attr({
            'stroke-dashoffset': -pathLength + 'px'
        });

        data.element.animate(animationDefinition, false);
    }
}

chart_round_fir.on('draw', drawHandler);
chart_round_gir.on('draw', drawHandler);
chart_round_scrambling.on('draw', drawHandler);

/***/ })

/******/ });